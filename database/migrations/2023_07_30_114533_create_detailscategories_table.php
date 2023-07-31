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
        Schema::create('detailscategories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->string('category_name')->nullable();
            $table->string('category_details')->nullable();
            $table->string('category_logo')->nullable();
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
        Schema::dropIfExists('detailscategories');
    }
};
