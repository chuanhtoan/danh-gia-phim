<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TheLoai;
use App\Model\Phim;
use App\Model\Phim_TheLoai;
use App\User;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phims = Phim::orderBy('id', 'DESC')->paginate(12);
        $theloais = TheLoai::all();
        return view('pages.trangchu',['phims'=>$phims,'theloais'=>$theloais]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phim = Phim::find($id);
        $theloais = TheLoai::all();
        $phim_theloais = Phim_TheLoai::all();
        // $danhgias = DB::table('DanhGia')->where('idPhim',$id)->get();
        $danhgias = DB::table('DanhGia')->where('idPhim',$id)->paginate(3);
        $users = User::all();
        return view('pages.chitietphim',['phim'=>$phim,'theloais'=>$theloais,'phim_theloais'=>$phim_theloais,'danhgias'=>$danhgias,'users'=>$users]);
    }
}
