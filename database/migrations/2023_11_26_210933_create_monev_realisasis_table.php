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
        Schema::create('monev_realisasis', function (Blueprint $table) {
            $table->id();
            $table->string('periode')->nullable();
            $table->foreignId('id_kegiatan');
            $table->string('realisasi_volume')->nullable();
            $table->string('realisasi_anggaran')->nullable();
            $table->integer('status')->default(0);
            $table->string('entered_by')->nullable();
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
        Schema::dropIfExists('monev_realisasis');
    }
};
