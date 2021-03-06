<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\HangSanXuat;
use Illuminate\Support\Facades\DB;

class HangSanXuatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = HangSanXuat::all();
        $products = HangSanXuat::orderBy('id', 'DESC')->get();
        return view('admin.hangsanxuat.index')->with('products', $products);
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
            'ten' => 'unique:HangSanXuat',
        ],
        [
            'ten.unique' => 'Hãng sản xuất đã tồn tại',
        ]);

        $product = HangSanXuat::create($request->input());
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
        $product = HangSanXuat::find($product_id);
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
            'ten' => [\Illuminate\Validation\Rule::unique('HangSanXuat')->ignore($id)],
        ],
        [
            'ten.unique' => 'Hãng sản xuất đã tồn tại',
        ]);

        $product = HangSanXuat::find($id);
        $product->ten = $request->ten;
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
        $product = HangSanXuat::destroy($product_id);
        return response()->json($product);
    }
}
