<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('task_name');
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
            $table->text('description')->nullable();
            $table->text('file_path')->nullable();
            $table->integer('is_active');
            $table->datetime('created_at')->nullable();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
