<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transportasi')->constrained('transportasi', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_destinasi');
            $table->date('tanggal_tiket');
            $table->time('waktu_perjalanan');
            $table->integer('transit');
            $table->integer('makan');
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
        Schema::dropIfExists('tikets');
    }
}
