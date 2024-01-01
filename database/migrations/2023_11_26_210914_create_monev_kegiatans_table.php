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
        Schema::create('monev_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->text('kegiatan')->nullable();
            $table->foreignId('id_strategi');
            $table->foreignId('id_intervensi');
            $table->foreignId('id_lembaga');
            $table->string('periode');
            $table->text('indikator_kegiatan')->nullable();
            $table->text('nomenklatur')->nullable();
            $table->string('target_volume')->nullable();
            $table->string('target_anggaran')->nullable();
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
        Schema::dropIfExists('monev_kegiatans');
    }
};
