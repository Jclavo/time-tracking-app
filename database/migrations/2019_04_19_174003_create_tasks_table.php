<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 45);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('hour')->unsigned();
            //foreign key
            $table->bigInteger('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects');
            //foreign key
            $table->bigInteger('task_status_id')->unsigned()->index();
            $table->foreign('task_status_id')->references('id')->on('task_status');
            //foreign key
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('tasks');
    }
}
