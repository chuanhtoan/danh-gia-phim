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
        $mang = DB::table('HangSanXuat')->paginate();
        return \view('admin.hangsanxuat.index')->with(['arr'=>$mang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hangsanxuat = \App\Model\HangSanXuat::find($id);
        return view('admin.hangsanxuat.edit',['item'=>$hangsanxuat]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
        $hangsanxuat = \App\Model\HangSanXuat::find($id);
        $hangsanxuat->delete();
        
        return redirect('admin/hangsanxuat/index')->with('thongbao','Xóa thành công!');
    }
}
