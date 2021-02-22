<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeerTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beer_tag', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('beer_id');
            $table->UnsignedBigInteger('tag_id');
            $table->foreign('beer_id')
                  ->references('id')
                  ->on('beers')
                  ->onDelete('cascade');
             $table->foreign('tag_id')
                  ->references('id')
                  ->on('tags')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('beer_tag');
    }
}
