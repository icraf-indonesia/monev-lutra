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
        Schema::create('monev_capaians', function (Blueprint $table) {
            $table->id();
            $table->string('tahun')->nullable();
            $table->foreignId('id_indikator');
            $table->string('parameter_pengukuran')->nullable();
            $table->string('capaian')->nullable();
            $table->string('dokumen')->nullable();
            $table->integer('status')->default(0);
            $table->string('verified_by')->nullable();
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
        Schema::dropIfExists('monev_capaians');
    }
};
