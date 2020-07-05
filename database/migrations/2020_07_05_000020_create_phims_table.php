<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Phim', function (Blueprint $table) {
            $table->id();
            $table->string('ten',50);
            $table->string('kieu',50);
            $table->string('tomTat');
            $table->integer('soTap');
            $table->string('thoiLuong',50);
            $table->string('ngayCongChieu',50);
            $table->string('nguon',50);
            $table->string('ngonNgu',50);
            $table->string('phanLoaiDoTuoi',50);
            $table->string('trangThai',50);
            $table->string('trailer');
            $table->foreignId('idHangSanXuat')->constrained('HangSanXuat')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Phim');
    }
}
