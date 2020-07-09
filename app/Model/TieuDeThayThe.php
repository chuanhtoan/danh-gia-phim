<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TieuDeThayThe extends Model
{
    protected $table = "TieuDeThayThe";

    public function Phim()
    {
        return $this->belongsTo('App\Model\Phim', 'id', 'idPhim');
    }
}
