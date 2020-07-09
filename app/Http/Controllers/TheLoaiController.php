<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TheLoai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TheLoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = TheLoai::all();
        return view('admin.theloai.index')->with('products', $products);
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
            'ten' => 'unique:TheLoai',
        ],
        [
            'ten.unique' => 'Thể loại đã tồn tại',
        ]);

        $product = TheLoai::create($request->input());
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
        $product = TheLoai::find($product_id);
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
            'ten' => [\Illuminate\Validation\Rule::unique('TheLoai')->ignore($id)],
        ],
        [
            'ten.unique' => 'Thể loại đã tồn tại',
        ]);

        $product = TheLoai::find($id);
        $product->ten = $request->ten;
        $product->moTa = $request->moTa;
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
        $product = TheLoai::destroy($product_id);
        return response()->json($product);
    }
}
