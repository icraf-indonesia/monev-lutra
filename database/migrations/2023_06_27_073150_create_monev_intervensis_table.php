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
        Schema::create('monev_intervensis', function (Blueprint $table) {
            $table->id();
            $table->string('intervensi')->nullable();
            $table->foreignId('id_strategi');
            // $table->unsignedBigInteger('id_strategi');
            // $table->foreign('id_strategi')->references('id')->on('monev_strategies');
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
        Schema::dropIfExists('monev_intervensis');
    }
};
