<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_tag',function (Blueprint $table){
            $table->id();
            $table->foreignId('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->foreignId('ad_id')->references('id')->on('ads')->onDelete('cascade');
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
        Schema::dropIfExists('ad_tag');
    }
}
