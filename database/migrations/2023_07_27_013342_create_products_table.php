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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail');
            $table->string('image_client');
            $table->string('image_concept');
            $table->string('image_service');
            $table->string('image_result');
            $table->string('client_title');
            $table->string('client_details');
            $table->string('concept_title');
            $table->string('concept_details');
            $table->string('service_title');
            $table->string('service_details');
            $table->string('result_title');
            $table->string('result_details');
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
        Schema::dropIfExists('products');
    }
};
