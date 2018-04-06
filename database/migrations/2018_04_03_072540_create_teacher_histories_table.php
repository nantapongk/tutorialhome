<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id');
            $table->integer('year');
            $table->integer('month');
            $table->text('detail');
            $table->timestamps();
            $table->foreign('teacher_id')
                ->references('id')->on('teachers')
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
        Schema::dropIfExists('teacher_histories');
    }
}
