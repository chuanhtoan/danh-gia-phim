<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateBaoCaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BaoCao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPhim')->constrained('Phim')->onDelete('cascade');
            $table->foreignId('idUser')->constrained('User')->onDelete('cascade');
            $table->string('noiDung');
            $table->date('ngay')->default(Carbon::now());
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
        Schema::dropIfExists('BaoCao');
    }
}
