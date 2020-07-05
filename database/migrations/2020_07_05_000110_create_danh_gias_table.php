<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhGia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPhim')->constrained('Phim')->onDelete('cascade');
            $table->foreignId('idUser')->constrained('User')->onDelete('cascade');
            $table->double('diem');
            $table->date('ngay');
            $table->string('noiDung');
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
        Schema::dropIfExists('DanhGia');
    }
}
