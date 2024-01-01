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
        Schema::create('periode_kegiatan', function (Blueprint $table) {
            $table->foreignId('id_periode');
            $table->foreignId('id_kegiatan');
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
        Schema::dropIfExists('periode_kegiatan');
    }
};
