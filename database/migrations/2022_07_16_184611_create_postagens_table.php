<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagens', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('etapa');
            $table->double('valor');
            $table->string('email');
            $table->string('telefone');
            $table->string('categoria');
            $table->string('flag');
            $table->string('arquivo');
            $table->bigInteger('id_user_create')->unsigned();
            $table->foreign('id_user_create')->references('id')->on('users');
            $table->bigInteger('id_user_up')->unsigned();
            $table->foreign('id_user_up')->references('id')->on('users');
            $table->bigInteger('id_user_disable')->unsigned();
            $table->foreign('id_user_disable')->references('id')->on('users');
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
        Schema::dropIfExists('postagens');
    }
}
