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
            $table->string('ten',50)->unique();
            $table->enum('kieu', ['TV Series','Movie','OVA'])->default('TV Series');
            $table->string('tomTat',1200)->nullable();
            $table->integer('soTap');
            $table->string('thoiLuong',50);
            $table->enum('nguon', ['Manga','Light Novel','None'])->default('Manga');
            $table->enum('ngonNgu', ['Japanese','English','Chinese'])->default('Japanese');
            $table->enum('phanLoaiDoTuoi', ['G','PG','PG-13','R','NC-17'])->default('G');
            $table->enum('trangThai', ['Đã kết thúc','Đang phát sóng'])->default('Đã kết thúc');
            $table->string('ngayCongChieu',50);
            $table->double('diemTrungBinh')->nullable()->default(0);
            $table->string('trailer')->nullable();
            $table->foreignId('idHangSanXuat')->constrained('HangSanXuat')->onDelete('cascade');
            $table->string('hinh')->default('blank.png');
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
