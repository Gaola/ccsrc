<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('studentid')->unique();
            $table->string('truename');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('shortcode')->nullable();
            $table->string('school')->nullable();
            $table->string('class')->nullable();
            $table->boolean('admin')->default(false);
            $table->boolean('editor')->default(false);
            $table->boolean('teacher')->default(false);
            $table->string('password', 60);
            $table->softDeletes();
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
        Schema::drop('users');
    }
}
