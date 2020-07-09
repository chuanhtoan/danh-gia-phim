<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HinhGioiThieu extends Model
{
    protected $table = "HinhGioiThieu";

    public function Phim()
    {
        return $this->belongsTo('App\Model\Phim', 'id', 'idPhim');
    }
}
