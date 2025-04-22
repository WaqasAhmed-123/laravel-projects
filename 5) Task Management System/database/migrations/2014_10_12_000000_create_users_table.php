<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name', 255);
            $table->string('contact', 255)->nullable();;
            $table->string('email', 255)->unique();
            $table->string('password', 355);
            $table->integer('role');
            $table->integer('is_active');
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
