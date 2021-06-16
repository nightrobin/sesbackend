<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enrollment_header_id');
            $table->string('subject_code');
            $table->timestamps();

            $table->foreign('enrollment_header_id')->references('id')->on('enrollments');
            $table->foreign('subject_code')->references('subject_code')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollment_subjects');
    }
}
