<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phim_BangXepHang extends Model
{
    protected $table = "Phim_BangXepHang";

    protected $fillable = ['idBangXepHang','idPhim','hang'];
}
