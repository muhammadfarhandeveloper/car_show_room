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
        Schema::create('vmodels', function (Blueprint $table) {
            $table->id('vmodels_id');
            $table->string('vmodels_name',50);
            $table->unsignedBigInteger('brands_id');
            $table->foreign('brands_id')->references('brands_id')->on('brands');
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
        Schema::dropIfExists('vmodels');
    }
};
