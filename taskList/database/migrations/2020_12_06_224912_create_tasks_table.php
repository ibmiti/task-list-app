<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->dateTimeTz('created_at', 0);
            $table->dateTimeTz('updated_at', 0);
            $table->string('description', 200);
            $table->string('name', 100);
            $table->string('priority'); // low, medium, high, critical -- can use to display text of the priority level - can even create styles for each individual priorty within css and  dynamically add the class 
            $table->date('due_date');
            $table->string('status'); // pending, inprogress, Complete -- can use to display boolean when searching for individual value
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
