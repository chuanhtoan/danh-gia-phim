<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanVatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVat', function (Blueprint $table) {
            $table->id();
            $table->string('ten',50);
            $table->string('loai',50);
            $table->string('hinh')->default('blank.png');
            $table->foreignId('idPhim')->constrained('Phim')->onDelete('cascade');
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
        Schema::dropIfExists('NhanVat');
    }
}
