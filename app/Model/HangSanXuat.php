<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HangSanXuat extends Model
{
    protected $table = "HangSanXuat";

    protected $fillable = ['ten'];

    public function Phim()
    {
        return $this->hasMany('App\Model\Phim', 'idHangSanXuat', 'id');
    }
}
