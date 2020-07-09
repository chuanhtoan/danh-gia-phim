<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    protected $table = "TheLoai";

    protected $fillable = ['ten','moTa'];

    public function Phim()
    {
        return $this->belongsToMany('App\Model\Phim', 'Phim_TheLoai', 'idTheLoai', 'idPhim');
    }
}
