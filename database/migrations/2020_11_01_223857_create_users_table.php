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
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('followers')->nullable();
            $table->string('followers_name')->nullable();
            $table->string('password');
            $table->string('subscription');
            $table->string('member');
            $table->integer('access_code')->nullable();
            $table->text('profile_photo_path')->default('default_profile.jpg');
            $table->string('categorie')->nullable();
            $table->string('pseudo')->unique();
            $table->integer('click');
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
        Schema::dropIfExists('users');
    }
}
