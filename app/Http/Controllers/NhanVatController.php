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
        $products = NhanVat::all();
        $phim = Phim::all();
        return view('admin.nhanvat.index')->with(['products'=>$products, 'phim'=>$phim]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new NhanVat();
        $product->ten = $request->ten;
        $product->loai = $request->loai;
        $product->idPhim = $request->idPhim;

        $anh = $request->file('hinh');

        if($anh){  
            $tenanh = $anh->getClientOriginalName();

           $tenanh_ = explode('.',$tenanh)[0];
           $_tenanh = explode('.',$tenanh)[1];
           $tenanh = $tenanh_ .rand(0,100).".".$_tenanh;
           
           $anh->move('backend/images/nhanvat',$tenanh);
           $product->hinh = $tenanh;
           $product->save();
        } else {
            $product->save();
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
        // $product->loai = $request->loai;
        // $product->idPhim = $request->idPhim;
        // $anh = $request->file('hinh');
        
        // if($anh && $request->hinh != $product->hinh){
        //     if(File::exists('backend/images/nhanvat/'.$product->hinh))
        //         File::delete('backend/images/nhanvat/'.$product->hinh);
           
        //     $tenanh = $anh->getClientOriginalName();
           
        //     $tenanh_ = explode('.',$tenanh)[0];
        //     $_tenanh = explode('.',$tenanh)[1];
        //     $tenanh = $tenanh_ .rand(0,100).".".$_tenanh;
            
        //     $anh->move('backend/images/nhanvat',$tenanh);
        //     $product->anhBia = $tenanh;
        //     $product->save();
        // } else {
        //     $product->save();
        // }
        $product->save();
        return response()->json($product);
        // return  \back()->with($product->id);
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
