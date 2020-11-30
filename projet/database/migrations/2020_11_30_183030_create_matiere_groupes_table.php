<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_groupes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('groupe_id')->unsigned();
            $table->bigInteger('matiere_id')->unsigned();
            $table->foreign('groupe_id')
            ->references('id')->on('groupes')
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
        Schema::dropIfExists('matiere_groupes');
    }
}
