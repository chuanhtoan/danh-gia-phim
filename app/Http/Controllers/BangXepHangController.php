<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BangXepHang;
use App\User;

class BangXepHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = BangXepHang::all();
        $user = User::all();
        return view('admin.bangxephang.index')->with(['products'=>$products,'user'=>$user]);
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
            'ten' => 'unique:BangXepHang',
        ],
        [
            'ten.unique' => 'Bảng xếp hạng đã tồn tại',
        ]);

        $product = BangXepHang::create($request->input());
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
        $product = BangXepHang::find($product_id);
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
            'ten' => [\Illuminate\Validation\Rule::unique('BangXepHang')->ignore($id)],
        ],
        [
            'ten.unique' => 'Bảng xếp hạng đã tồn tại',
        ]);

        $product = BangXepHang::find($id);
        $product->ten = $request->ten;
        $product->idUser = $request->idUser;
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
        $product = BangXepHang::destroy($product_id);
        return response()->json($product);
    }
}
