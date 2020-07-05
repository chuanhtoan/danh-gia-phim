<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimBangXepHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Phim_BangXepHang', function (Blueprint $table) {
            $table->foreignId('idBangXepHang')->constrained('BangXepHang')->onDelete('cascade');
            $table->foreignId('idPhim')->constrained('BangXepHang')->onDelete('cascade');
            $table->integer('Hang')->unique();
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
        Schema::dropIfExists('Phim_BangXepHang');
    }
}
