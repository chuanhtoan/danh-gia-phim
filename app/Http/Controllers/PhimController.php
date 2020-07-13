<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Phim;
use App\Model\HangSanXuat;
use App\Model\TheLoai;
use App\Model\Phim_TheLoai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Phim::all();
        $products = Phim::orderBy('id', 'DESC')->get();
        $hangsanxuat = HangSanXuat::all();
        $theloai = TheLoai::all();
        $phim_theloais = Phim_TheLoai::all();
        return view('admin.phim.index')->with(['products'=>$products, 'hangsanxuat'=>$hangsanxuat,'theloai'=>$theloai,'phim_theloais'=>$phim_theloais]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Kiem tra unique
        $this->validate($request,
        [
            'ten' => 'unique:Phim',
        ],
        [
            'ten.unique' => 'Phim đã tồn tại',
        ]);

        $product = Phim::create($request->input());

        foreach ($request->theLoaiIDs as $idTheLoai) {  
            $phim_theloai = new Phim_TheLoai();
            $phim_theloai->idPhim = $product->id;
            $phim_theloai->idTheLoai = $idTheLoai;
            $phim_theloai->save();
        }

        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = Phim::find($product_id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Kiem tra unique
        $this->validate($request,
        [
            'ten' => [\Illuminate\Validation\Rule::unique('Phim')->ignore($id)],
        ],
        [
            'ten.unique' => 'Phim đã tồn tại',
        ]);

        $product = Phim::find($id);
        $product->ten = $request->ten;
        $product->kieu = $request->kieu;
        $product->tomTat = $request->tomTat;
        $product->soTap = $request->soTap;
        $product->thoiLuong = $request->thoiLuong;
        $product->nguon = $request->nguon;
        $product->ngonNgu = $request->ngonNgu;
        $product->phanLoaiDoTuoi = $request->phanLoaiDoTuoi;
        $product->trangThai = $request->trangThai;
        $product->ngayCongChieu = $request->ngayCongChieu;
        $product->diemTrungBinh = $request->diemTrungBinh;
        $product->trailer = $request->trailer;
        $product->idHangSanXuat = $request->idHangSanXuat;
        $product->save();



        // Gui them array the loai vao file json
        // $theloai = TheLoai::all();
        $tlarray = array();
        foreach ($request->theLoaiIDs as $tl) {
            $tenTL = TheLoai::find($tl);
            array_push($tlarray, $tenTL->ten);
        }
        $product['tlarray'] = $tlarray;
        $product['tlarray_id'] = $request->theLoaiIDs;


        $phim_theloai = DB::table('Phim_TheLoai')->where('idPhim',$id)->delete();
        foreach ($request->theLoaiIDs as $idTheLoai) {  
            $phim_theloai = new Phim_TheLoai();
            $phim_theloai->idPhim = $product->id;
            $phim_theloai->idTheLoai = $idTheLoai;
            $phim_theloai->save();
        }



        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = Phim::destroy($product_id);
        return response()->json($product);
    }
}
