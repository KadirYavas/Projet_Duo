<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('nom');
            $table->integer('age');
            $table->char('email');
            $table->bigInteger('avatars_id');
            $table->foreign('avatars_id')
                ->references('id')->on('avatars');
            $table->bigInteger('roles_id');
            $table->foreign('roles_id')
                ->references('id')->on('roles');
            $table->bigInteger('entreprises_id');
            $table->foreign('entreprises_id')
                ->references('id')->on('entreprises');
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
        Schema::dropIfExists('users');
    }
}
