<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/* This migration creates the evidence table with the fields url and description */

class CreateEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->string('url');
            $table->string('description');
            $table->timestamps();

            //the foreign key is 'student_id' which references the unique id from the student table
            //which is a bit confusing, this references the 'id' field, not 'student_id' 
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                //if a student is deleted, will automatically delete the evidence related to that student
                //should we keep this or have the evidence stored? 
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidence');
    }
}
