<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BangXepHang;
use App\User;
use Auth;
use Illuminate\Validation\Rule;

class BangXepHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = BangXepHang::orderBy('id', 'DESC')->get();
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
        $ten = $request->ten;
        $idUser = $request->idUser;
        if($idUser == null)
            $idUser = Auth::user()->id;
        $this->validate($request,
        [
            'ten' => [Rule::unique('BangXepHang')->where(function($query) use($ten,$idUser)
            {
                return $query->where('ten',$ten)->where('idUser',$idUser);
            })],
        ],
        [
            'ten.unique' => 'Đã có bảng xếp hạng này rồi',
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
        $ten = $request->ten;
        $idUser = $request->idUser;
        if($idUser == null)
            $idUser = Auth::user()->id;
        $this->validate($request,
        [
            'ten' => [Rule::unique('BangXepHang')->ignore($id)->where(function($query) use($ten,$idUser)
            {
                return $query->where('ten',$ten)->where('idUser',$idUser);
            })],
        ],
        [
            'ten.unique' => 'Đã có bảng xếp hạng này rồi',
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
