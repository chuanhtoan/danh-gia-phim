<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Phim;
use App\Model\HangSanXuat;
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
        return view('admin.phim.index')->with(['products'=>$products, 'hangsanxuat'=>$hangsanxuat]);
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
