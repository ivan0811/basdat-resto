<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('kd_transaksi', 20)->primary();
            $table->bigInteger('pegawai_id')->unsigned();
            $table->double('total_harga');            
            $table->double('pajak');            
            $table->double('bayar');            
            $table->timestamps();
            
            $table->foreign('pegawai_id')
            ->references('id')
            ->on('pegawai')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
