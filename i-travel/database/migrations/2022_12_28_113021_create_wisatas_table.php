<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transportasi')->constrained('trasportasi', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_wisata');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->int('rating');
            $table->date('date');            
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
        Schema::dropIfExists('wisatas');
    }
}
