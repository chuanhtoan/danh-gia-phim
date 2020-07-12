<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DanhGia;
use App\Model\Phim;
use App\User;

class DanhGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = HangSanXuat::all();
        $products = DanhGia::orderBy('id', 'DESC')->get();
        $phim = Phim::all();
        $user = User::all();
        return view('admin.danhgia.index')->with(['products'=>$products,'phim'=>$phim,'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = DanhGia::all();
        $phim = Phim::all();
        $user = User::all();
        return view ('admin.danhgia.create')->with(['products'=>$products,'phim'=>$phim,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = DanhGia::create($request->input());
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
        $product = DanhGia::find($product_id);
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $products = DanhGia::find($id);
        $phim = Phim::all();
        $user = User::all();
        return view ('admin.danhgia.edit')->with(['products'=>$products,'phim'=>$phim,'user'=>$user]);
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
        $product = DanhGia::find($id);
        $product->idPhim = $request->idPhim;
        $product->idUser = $request->idUser;
        $product->diem = $request->diem;
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
        $product = DanhGia::destroy($product_id);
        return response()->json($product);
    }
}
