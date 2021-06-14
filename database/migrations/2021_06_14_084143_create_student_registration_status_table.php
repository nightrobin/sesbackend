<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStudentRegistrationStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registration_status', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });

        $datetime = now();
        DB::table('student_registration_status')->insert(['description' => 'Regular', 'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('student_registration_status')->insert(['description' => 'Irregular', 'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('student_registration_status')->insert(['description' => 'Paying-Regular', 'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('student_registration_status')->insert(['description' => 'Paying-Irregular', 'created_at' => $datetime,'updated_at' => $datetime,]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_registration_status');
    }
}
