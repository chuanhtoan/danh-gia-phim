<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table = "Phim";

    protected $fillable = ['ten','kieu','tomTat','soTap','thoiLuong','nguon','ngonNgu','phanLoaiDoTuoi','trangThai','ngayCongChieu','diemTrungBinh','trailer','idHangSanXuat','hinh'];

    public function TheLoai()
    {
        return $this->belongsToMany('App\Model\TheLoai', 'Phim_TheLoai', 'idPhim', 'idTheLoai');
    }

    public function NhanVat()
    {
        return $this->hasMany('App\Model\NhanVat', 'idPhim', 'id');
    }

    public function HangSanXuat()
    {
        return $this->belongsTo('App\Model\NhanVat', 'id', 'idHangSanXuat');
    }

    public function TieuDeThayThe()
    {
        return $this->hasMany('App\Model\TieuDeThayThe', 'idPhim', 'id');
    }

    public function BaiViet()
    {
        return $this->belongsToMany('App\Model\BaiViet', 'Phim_BaiViet', 'idPhim', 'idBaiViet');
    }

    public function BangXepHang()
    {
        return $this->belongsToMany('App\Model\BangXepHang', 'Phim_BangXepHang','idPhim', 'idBangXepHang');
    }
}
