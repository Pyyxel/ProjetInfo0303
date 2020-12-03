<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Elevecours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleve_cours', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('eleve_id')->unsigned();
            $table->bigInteger('cours_id')->unsigned();
            $table->timestamps();
            $table->foreign('eleve_id')
            ->references('id')->on('eleves')
            ;
            $table->foreign('cours_id')
            ->references('id')->on('cours')
            ;
                    ;
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
}
