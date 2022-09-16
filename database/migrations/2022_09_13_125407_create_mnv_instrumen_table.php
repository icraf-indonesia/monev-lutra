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
            $table->id();
            $table->string('indikator_intervensi')->nullable();
            $table->string('pemangku_kepentingan1')->nullable();
            $table->string('pemangku_kepentingan2')->nullable();
            $table->id('iku');
            $table->id('ikk');
            $table->id('terpercaya');
            $table->id('landscale');
            $table->id('sourceup');
            $table->id('kdsd');
            $table->string('target')->nullable();
            $table->string('satuan')->nullable();
            $table->string('tahun1')->nullable();
            $table->string('tahun2')->nullable();
            $table->string('tahun3')->nullable();
            $table->string('tahun4')->nullable();
            $table->string('tahun5')->nullable();
            $table->string('tahun6')->nullable();
            $table->id('intevensi');
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
