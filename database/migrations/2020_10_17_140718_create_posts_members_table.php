<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_members', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('pseudo');
            $table->integer('id_post');
            $table->text('post_photo_path_1');
            $table->text('post_photo_path_2');
            $table->text('post_photo_path_3');
            $table->text('post_photo_path_4');
            $table->text('description');
            $table->string('action_trash')->default('non');
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
        Schema::dropIfExists('posts_members');
    }
}
