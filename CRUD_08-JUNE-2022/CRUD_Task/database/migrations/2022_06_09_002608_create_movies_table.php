<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // movies represent the name of the created table 
        Schema::create('movies', function (Blueprint $table) {
           
            $table->id();
            $table->string('movie_name');
            $table->string('movie_description')->nullable();
            $table->string('movie_gener');
          
            $table->string('movie_imag_name');
            $table->string('movie_imag_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
