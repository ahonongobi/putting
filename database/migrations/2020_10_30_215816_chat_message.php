<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChatMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->integer('id_expediteur');
            $table->integer('id_destinateur');
            $table->string('pseudo_expediteur');
            $table->text('message');
            $table->string('profil');
            $table->string('states')->default('new');
            $table->string('reading')->default('unread');
            $table->rememberToken();
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
}
