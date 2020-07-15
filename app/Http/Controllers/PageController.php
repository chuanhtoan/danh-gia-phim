<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TheLoai;
use App\Model\Phim;
use App\Model\Phim_TheLoai;
use App\Model\BangXepHang;
use App\Model\Phim_BangXepHang;
use App\User;
use Auth;
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
        // kiem tra dang nhap
        $nguoidung = null;
        if(Auth::check())
        {
            $nguoidung = Auth::user();
        }

        $phims = Phim::orderBy('id', 'DESC')->paginate(12);
        $theloais = TheLoai::all();
        $phim_slides = Phim::orderBy('diemTrungBinh', 'ASC')->paginate(5);
        $phim_ovas = Phim::all()->random(2);
        $phim_tapmois = Phim::orderBy('updated_at', 'ASC')->paginate(5);
        return view('pages.trangchu',['phims'=>$phims,'theloais'=>$theloais,'nguoidung'=>$nguoidung,'phim_slides'=>$phim_slides,'phim_ovas'=>$phim_ovas,'phim_tapmois'=>$phim_tapmois]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // kiem tra dang nhap
        $nguoidung = null;
        if(Auth::check())
        {
            $nguoidung = Auth::user();
        }

        $phim = Phim::find($id);
        $theloais = TheLoai::all();
        $phim_theloais = Phim_TheLoai::all();
        $danhgias = DB::table('DanhGia')->where('idPhim',$id)->paginate(3);
        $users = User::all();
        $nhanvats = DB::table('NhanVat')->where('idPhim',$id)->paginate(6);
        return view('pages.chitietphim',['phim'=>$phim,'theloais'=>$theloais,'phim_theloais'=>$phim_theloais,'danhgias'=>$danhgias,'users'=>$users,'nguoidung'=>$nguoidung,'nhanvats'=>$nhanvats]);
    }

    public function getBangXepHang()
    {
        // kiem tra dang nhap
        $nguoidung = null;
        if(Auth::check())
        {
            $nguoidung = Auth::user();
            $products = BangXepHang::orderBy('id', 'DESC')->where('idUser',$nguoidung->id)->get();
            $user = User::all();
            return view('pages.bangxephang.index', compact('products','user','nguoidung'));
        }
        return redirect('/login');
    }

    public function getPhim_BangXepHang($id)
    {
        // kiem tra dang nhap
        $nguoidung = null;
        if(Auth::check())
        {
            $nguoidung = Auth::user();
            $products = DB::table('Phim_BangXepHang')->where('idBangXepHang',$id)->orderBy('hang','ASC')->get();
            $bangxephang = BangXepHang::find($id);
            $phim = Phim::all();
            return view('pages.phim_bangxephang.index', compact('products','bangxephang','phim','nguoidung'));
        }
        return redirect('/login');
    }

    public function getTheLoai($id)
    {
        // kiem tra dang nhap
        $nguoidung = null;
        if(Auth::check())
        {
            $nguoidung = Auth::user();
        }


        $idTheLoai = TheLoai::find($id)->id;

        $Phim_TheLoais = DB::table('Phim_TheLoai')->where('idTheLoai',$idTheLoai)->get();        

        $phims = [];
        foreach ($Phim_TheLoais as $Phim_TheLoai) {
            array_push($phims, $Phim_TheLoai->idPhim);
        }

        $phims = Phim::orderBy('id', 'DESC')->whereIn('id',$phims)->paginate(12);

        $theloais = TheLoai::all();
        $theloai = TheLoai::find($idTheLoai);

        return view('pages.theloai',['phims'=>$phims,'theloais'=>$theloais,'nguoidung'=>$nguoidung,'theloai'=>$theloai]);
    }

    public function search(Request $request)
    {
        // kiem tra dang nhap
        $nguoidung = null;
        if(Auth::check())
        {
            $nguoidung = Auth::user();
        }

        $search = $request->get('search');
        $phims = DB::table('Phim')->orderBy('id', 'DESC')->where('ten','like','%'.$search.'%')->paginate(12);
        $theloais = TheLoai::all();
        return view('pages.timkiem',['phims'=>$phims,'theloais'=>$theloais,'nguoidung'=>$nguoidung]);
    }

    public function baiviet()
    {
        // kiem tra dang nhap
        $nguoidung = null;
        if(Auth::check())
        {
            $nguoidung = Auth::user();
        }

        $phims = Phim::orderBy('id', 'DESC')->paginate(12);
        $theloais = TheLoai::all();
        return view('pages.trangchu',['phims'=>$phims,'theloais'=>$theloais,'nguoidung'=>$nguoidung]);
    }

}
