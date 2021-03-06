<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    protected $table = "BaiViet";

    protected $fillable = ['idPhim','idUser','tieuDe','noiDung','ngay'];

    public function user()
    {
        return $this->belongsTo('App\User','id','idUser');
    }

    public function Phim()
    {
        return $this->belongsToMany('App\Model\Phim', 'Phim_BaiViet', 'idBaiViet', 'idPhim');
    }

}
