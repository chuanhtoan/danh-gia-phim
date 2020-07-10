<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\NhanVat;
use App\Model\Phim;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NhanVatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = NhanVat::all();
        $products = NhanVat::orderBy('id', 'DESC')->get();
        $phim = Phim::all();
        return view('admin.nhanvat.index')->with(['products'=>$products,'phim'=>$phim]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Kiem tra hinh
        $this->validate($request,
        [
            'hinh' => 'required',
        ],
        [
            'hinh.required' => 'Bạn chưa chọn hình',
        ]);

        $product = NhanVat::create($request->input());
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
        $product = NhanVat::find($product_id);
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
        $product = NhanVat::find($id);
        $product->ten = $request->ten;
        $product->loai = $request->loai;
        $product->hinh = $request->hinh;
        $product->idPhim = $request->idPhim;
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
        $product = NhanVat::destroy($product_id);
        return response()->json($product);
    }
}
