<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BangXepHang extends Model
{
    protected $table = "BangXepHang";

    protected $fillable = ['ten','idUser'];

    public function User()
    {
        return $this->belongsTo('App\User', 'id', 'idUser');
    }

    public function Phim()
    {
        return $this->belongsToMany('App\Model\Phim', 'Phim_BangXepHang', 'idBangXepHang', 'idPhim');
    }
}
