<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kd_transaksi');
            $table->bigInteger('menu_id')->unsigned();            
            $table->integer('qty');                      
            $table->integer('level')->nullable()->default(null);  
            $table->timestamps();

            $table->foreign('kd_transaksi')
            ->references('kd_transaksi')
            ->on('transaksi')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('menu_id')
            ->references('id')
            ->on('menu')
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
        Schema::dropIfExists('detail_transaksi');
    }
}
