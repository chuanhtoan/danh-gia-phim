<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BaoCao;
use App\Model\Phim;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BaoCaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = BaoCao::all();
        $products = BaoCao::orderBy('id', 'DESC')->get();
        $phim = Phim::all();
        $user = User::all();
        return view('admin.baocao.index')->with(['products'=>$products,'phim'=>$phim,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = BaoCao::create($request->input());
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
        $product = BaoCao::find($product_id);
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
        $product = BaoCao::find($id);
        $product->idPhim = $request->idPhim;
        $product->idUser = $request->idUser;
        $product->noiDung = $request->noiDung;
        $product->ngay = $request->ngay;
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
        $product = BaoCao::destroy($product_id);
        return response()->json($product);
    }

    public function postBaoCao($id,Request $request)
    {
        // kiem tra dang nhap
        if(Auth::check())
        {
            // Kiem tra noi dung bao cao
            $this->validate($request,
            [
                'noiDung' => 'required',
            ],
            [
                'noiDung.required' => 'Bạn chưa nhập nội dung báo cáo',
            ]);

            $baocao = new BaoCao;
            $baocao->idPhim = $id;
            $baocao->idUser = Auth::user()->id;
            $baocao->noiDung = $request->noiDung;
            $baocao->ngay = date('Y/m/d');
            $baocao->save();

            return redirect("phim/$id/")->with('thongbao','Gửi báo cáo thành công');
        }

        return redirect("phim/$id/")->with('loi','Bạn phải đăng nhập để báo cáo');
    }
}
