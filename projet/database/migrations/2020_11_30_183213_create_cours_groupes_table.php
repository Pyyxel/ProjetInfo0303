<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours_groupes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cours_id')->unsigned();
            $table->bigInteger('groupe_id')->unsigned();
            $table->timestamps();
            $table->foreign('cours_id')
            ->references('id')->on('cours')
            ;
            $table->foreign('groupe_id')
            ->references('id')->on('groupes')
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
        Schema::dropIfExists('cours_groupes');
    }
}
