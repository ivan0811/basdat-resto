<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuahDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuah_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kuah_id')->unsigned();
            $table->bigInteger('detail_id')->unsigned();
            $table->timestamps();

            $table->foreign('kuah_id')
            ->references('id')
            ->on('kuah')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('detail_id')
            ->references('id')
            ->on('detail_transaksi')
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
        Schema::dropIfExists('kuah_detail');
    }
}
