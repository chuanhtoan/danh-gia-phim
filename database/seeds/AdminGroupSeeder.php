<?php

use Illuminate\Database\Seeder;

class AdminGroupSeeder extends Seeder
{
    public function run()
    {
        $this->call(DanhGiaSeeder::class);
    }
}

class DanhGiaSeeder extends Seeder{

    public function run()
    {
        DB::table('DanhGia')->insert([
            ['idPhim'=>'','idUser'=>'','diem'=>'','noiDung'=>''],
        ]);
    }
}
