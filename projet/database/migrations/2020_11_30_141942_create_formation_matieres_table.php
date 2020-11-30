<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_matieres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('formation_id')->unsigned();
            $table->bigInteger('matiere_id')->unsigned();
            $table->timestamps();
            $table->foreign('formation_id')
            ->references('id')->on('formations')
            ;
            $table->foreign('matiere_id')
            ->references('id')->on('matieres')
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
        Schema::dropIfExists('formation_matieres');
    }
}
