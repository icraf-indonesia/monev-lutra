<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mnv_instrumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indikator_intervensi')->nullable();
            $table->string('pemangku_kepentingan1')->nullable();
            $table->string('pemangku_kepentingan2')->nullable();
            $table->unsignedBigInteger('id_iku');
            $table->unsignedBigInteger('id_ikk');
            $table->unsignedBigInteger('id_terpercaya');
            $table->unsignedBigInteger('id_landscale');
            $table->unsignedBigInteger('id_sourceup');
            $table->unsignedBigInteger('id_kdsd');
            $table->foreign('id_iku')->references('id')->on('mnv_iku');
            $table->foreign('id_ikk')->references('id')->on('mnv_ikk');
            $table->foreign('id_terpercaya')->references('id')->on('mnv_terpercaya');
            $table->foreign('id_landscale')->references('id')->on('mnv_landscale');
            $table->foreign('id_sourceup')->references('id')->on('mnv_sourceup');
            $table->foreign('id_kdsd')->references('id')->on('mnv_kdsd');
            $table->string('target')->nullable();
            $table->string('satuan')->nullable();
            $table->string('tahun1')->nullable();
            $table->string('tahun2')->nullable();
            $table->string('tahun3')->nullable();
            $table->string('tahun4')->nullable();
            $table->string('tahun5')->nullable();
            $table->string('tahun6')->nullable();
            $table->unsignedBigInteger('id_intervensi');
            $table->foreign('id_intervensi')->references('id')->on('mnv_intervensi');
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
        Schema::dropIfExists('mnv_instrumen');
    }
};
