<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('student_number');
            $table->string('student_type');
            $table->unsignedInteger('year_level');
            $table->string('control_number')->unique();
            $table->string('course_code');
            $table->string('type');
            $table->unsignedBigInteger('enrollment_status')->default(0);
            $table->timestamps();

            $table->foreign('course_code')->references('course_code')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
