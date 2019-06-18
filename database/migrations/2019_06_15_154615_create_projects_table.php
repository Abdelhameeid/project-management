<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();


            $table->string('ProjectName');
            $table->date('ProjectStartDate');
            $table->date('ProjectEndDate');
            $table->date('ActualEndDate');
            $table->enum('ProjectStatus', array('Passive','Running', 'Finished'))->nullable();  
            $table->integer('isfinished')->default(0);
 
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
        Schema::dropIfExists('projects');
    }
}
