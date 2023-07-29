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
            $table->string('name')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('image_client_main')->nullable();
            $table->json('image_client')->nullable();
            $table->json('image_concept')->nullable();
            $table->string('image_service')->nullable();
            $table->json('image_result')->nullable();
            $table->string('client_title')->nullable();
            $table->string('client_details')->nullable();
            $table->string('concept_title')->nullable();
            $table->string('concept_details')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_details')->nullable();
            $table->string('result_title')->nullable();
            $table->string('result_details')->nullable();
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
