<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('category', 60);
            $table->float('price', 5,2); 
            $table->string('abv', 10);
            $table->string('description', 700);
            $table->string('filepath', 255);
            $table->timestamps('');

            
            // nome, tipo, alcol
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
