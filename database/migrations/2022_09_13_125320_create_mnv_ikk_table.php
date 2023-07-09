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
        Schema::create('mnv_ikk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_indikator_ikk')->nullable();
            $table->string('aspek_ikk')->nullable();
            $table->string('fokus_ikk')->nullable();
            $table->string('bidang_ikk')->nullable();
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
        Schema::dropIfExists('mnv_ikk');
    }
};
