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
        Schema::create('monev_indikators', function (Blueprint $table) {
            $table->id();
            $table->string('indikator')->nullable();
            $table->string('stakeholder1')->nullable();
            $table->string('stakeholder2')->nullable();
            $table->foreignId('id_intervensi');
            $table->foreignId('id_iku');
            $table->foreignId('id_ikk');
            $table->foreignId('id_terpercaya');
            $table->foreignId('id_landscale');
            $table->foreignId('id_sourceup');
            $table->foreignId('id_kdsd');
            $table->string('target')->nullable();
            $table->string('satuan')->nullable();
            // $table->string('id_capaian')->nullable();
            $table->string('dokumen')->nullable();
            // $table->integer('status')->default(0);
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
        Schema::dropIfExists('monev_indikators');
    }
};
