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
            $table->unsignedBigInteger('user_id');
            $table->string('student_type');
            $table->unsignedInteger('year_level');
            $table->unsignedBigInteger('control_number')->unique();
            $table->unsignedBigInteger('course_code');
            $table->string('type');
            $table->unsignedBigInteger('registration_status');
            $table->timestamps();

            $table->foreign('course_code')->references('id')->on('courses');
            $table->foreign('registration_status')->references('id')->on('student_registration_status');
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
