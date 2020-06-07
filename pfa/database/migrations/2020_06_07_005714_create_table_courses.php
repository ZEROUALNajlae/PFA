<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id_course');
            $table->string('title_course')->unique();
            $table->string('description_course');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id_type')->on('course_type')
                 ->onDelete('restrict')
                 ->onUpdate('restrict');
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
        Schema::table('courses', function(Blueprint $table) {
            $table->dropForeign('courses_type_id_foreign');
        });
        Schema::dropIfExists('courses');
    }

}
