<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    protected $table = "TheLoai";

    public function Phim()
    {
        return $this->hasMany('App\Model\Phim', 'idPhim', 'id');
    }
}
