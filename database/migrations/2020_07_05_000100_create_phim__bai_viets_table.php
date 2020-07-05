<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Phim_BaiViet', function (Blueprint $table) {
            $table->foreignId('idPhim')->constrained('Phim')->onDelete('cascade');
            $table->foreignId('idBaiViet')->constrained('BaiViet')->onDelete('cascade');
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
        Schema::dropIfExists('Phim_BaiViet');
    }
}
