<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BaiViet;
use App\Model\Phim;
use App\User;

class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = HangSanXuat::all();
        $products = BaiViet::orderBy('id', 'DESC')->get();
        $phim = Phim::all();
        $user = User::all();
        return view('admin.baiviet.index')->with(['products'=>$products,'phim'=>$phim,'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = BaiViet::all();
        $phim = Phim::all();
        $user = User::all();
        return view ('admin.baiviet.create')->with(['products'=>$products,'phim'=>$phim,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = BaiViet::create($request->input());
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
        $product = BaiViet::find($product_id);
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
        $products = BaiViet::find($id);
        $phim = Phim::all();
        $user = User::all();
        return view ('admin.baiviet.edit')->with(['products'=>$products,'phim'=>$phim,'user'=>$user]);
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
        $product = BaiViet::find($id);
        $product->idPhim = $request->idPhim;
        $product->idUser = $request->idUser;
        $product->tieuDe = $request->tieuDe;
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
        $product = BaiViet::destroy($product_id);
        return response()->json($product);
    }
}
