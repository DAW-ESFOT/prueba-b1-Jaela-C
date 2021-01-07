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
        Schema::create('movies', function (Blueprint $table) {
            $table->bigInteger('id', 20)->unsigned();
            $table->string('name');
            $table->string('code', 80);
            $table->double('year');
            $table->boolean('available');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('restrict');
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
        Schema::dropIfExists('movies');
    }
}
