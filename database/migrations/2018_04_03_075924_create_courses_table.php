<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->string('name');
            $table->text('overview');
            $table->timestamps();
            $table->foreign('teacher_id')
                ->references('id')->on('teachers')
                ->onDelete('restrict');
            $table->foreign('class_id')
                ->references('id')->on('classes')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
