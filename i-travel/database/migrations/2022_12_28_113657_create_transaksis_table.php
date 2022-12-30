<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tiket')->constrained('tiket', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_harga')->constrained('harga', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_user')->constrained('users', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_penumpang');
            $table->string('jumlah_penumpang');
            $table->string('no_hp');
            $table->integer('no_bayar');
            $table->integer('total_harga');
            $table->string('qr');
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
        Schema::dropIfExists('transaksis');
    }
}
