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
            $table->bigInteger('avatars_id')->unsigned();
            $table->foreign('avatars_id')
                ->references('id')->on('avatars')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('roles_id')->unsigned()->nullable();
            $table->foreign('roles_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('entreprises_id')->unsigned()->nullable();
            $table->foreign('entreprises_id')
                ->references('id')->on('entreprises')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('users');
    }
}
