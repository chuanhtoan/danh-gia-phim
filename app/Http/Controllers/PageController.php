<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TheLoai;
use App\Model\Phim;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theloais = TheLoai::all();
        $phims = Phim::orderBy('id', 'DESC')->get();
        return view('pages.trangchu',['theloais'=>$theloais,'phims'=>$phims]);
    }
}
