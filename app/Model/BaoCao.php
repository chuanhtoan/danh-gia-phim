<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BaoCao extends Model
{
    protected $table = "BaoCao";

    protected $fillable = ['idPhim','idUser','noiDung','ngay'];
}
