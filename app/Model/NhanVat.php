<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NhanVat extends Model
{
    protected $table = "NhanVat";

    protected $fillable = ['ten','loai','hinh','idPhim'];

    public function Phim()
    {
        return $this->belongsTo('App\Model\Phim', 'idPhim', 'id');
    }
}
