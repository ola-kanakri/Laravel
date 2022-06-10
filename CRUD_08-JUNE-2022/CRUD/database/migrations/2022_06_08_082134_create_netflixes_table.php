<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetflixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netflixes', function (Blueprint $table) {
          
            $table->id();
            $table->string('movie_name');
            $table->string('movie_description');
            $table->string('movie_gener');
            // $table->binary('movie_imag');
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
        Schema::dropIfExists('netflixes');
    }
}
