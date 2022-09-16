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
            $table->string('nama_indikator')->nullable();
            $table->string('desc_indikator')->nullable();
            $table->string('level')->nullable();
            $table->string('metode_pengukuran')->nullable();
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
