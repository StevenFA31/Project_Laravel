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
        Schema::create('disque', function (Blueprint $table) {
            $table->id();
            $table->string('annee');
            $table->string('title');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genre')
                ->onDelete('cascade');
            $table->unsignedBigInteger('artiste_id');
            $table->foreign('artiste_id')
                ->references('id')
                ->on('artiste')
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
        //
    }
};