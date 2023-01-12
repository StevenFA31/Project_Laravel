<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Disqueus', function (Blueprint $table) {
            $table->increments('id');
            $table->char('artiste')->references('id')->on('Artisteuus')->onDelete('cascade');
            $table->char('genre')->references('id')->on('Genreuus')->onDelete('cascade');
            $table->integer('annee');
        });

        // Schema::list('Disqueus', function (Blueprint $table)
        // Schema::show('Disqueus', function (Blueprint $table)
        // Schema::create('Disqueus', function (Blueprint $table)
        // Schema::update('Disqueus', function (Blueprint $table)
        // Schema::delete('Disqueus', function (Blueprint $table)
        // Schema::destroy('Disqueus', function (Blueprint $table)

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};