<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    protected $table = "DanhGia";

    protected $fillable = ['idPhim','idUser','diem','noiDung','ngay'];
}
