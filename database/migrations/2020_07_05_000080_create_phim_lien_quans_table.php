<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimLienQuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhimLienQuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPhim1')->constrained('Phim')->onDelete('cascade');
            $table->foreignId('idPhim2')->constrained('Phim')->onDelete('cascade');
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
        Schema::dropIfExists('PhimLienQuan');
    }
}
