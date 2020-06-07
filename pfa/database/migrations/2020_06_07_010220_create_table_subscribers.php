<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSubscribers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->unsigned() ;
            $table->integer('course_id')->unsigned();
            $table->boolean('saved')->default(false);
            $table->boolean('liked')->default(false);
            $table->string('comment');
            $table->foreign('course_id')
                  ->references('id_course')
                  ->on('courses')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->foreign('student_id')
                  ->references('id_student')
                  ->on('student')
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
        Schema::table('subscribers', function(Blueprint $table) {
            $table->dropForeign('subscribers_course_id_foreign');
            $table->dropForeign('subscribers_student_id_foreign');
        });

        Schema::dropIfExists('subscribers');
    }
}
