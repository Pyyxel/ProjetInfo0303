<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('groupe_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('groupe_id')
            ->references('id')->on('groupes')
            ;
            $table->foreign('user_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('groupe_users');
    }
}
