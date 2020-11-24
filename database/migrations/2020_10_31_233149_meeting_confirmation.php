<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MeetingConfirmation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_confirmation', function (Blueprint $table) {
            $table->id();
            $table->integer('id_member');
            $table->string('meeting_ok')->nullable();
            $table->string('confirmation')->nullable();
            $table->string('back')->nullable();
            $table->string('pseudo');
            $table->string('pseudo_user');
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
