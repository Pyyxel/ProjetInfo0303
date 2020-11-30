<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_eleves', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('groupe_id')->unsigned();
            $table->bigInteger('eleve_id')->unsigned();
            $table->foreign('groupe_id')
            ->references('id')->on('groupes')
            ;
            $table->foreign('eleve_id')
            ->references('id')->on('eleves')
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
        Schema::dropIfExists('groupe_eleves');
    }
}
