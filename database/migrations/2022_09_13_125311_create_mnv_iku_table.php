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
        Schema::create('mnv_iku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_indikator_iku')->nullable();
            $table->string('desc_indikator_iku')->nullable();
            $table->string('level_iku')->nullable();
            $table->string('metode_pengukuran_iku')->nullable();
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
        Schema::dropIfExists('mnv_iku');
    }
};
