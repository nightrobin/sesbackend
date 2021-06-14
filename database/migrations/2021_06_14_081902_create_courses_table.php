<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->id();
            $table->string('college_code');
            $table->string('course_code')->unique();
            $table->string('description');
            $table->timestamps();

            $table->foreign('college_code')->references('college_code')->on('colleges');
        });

        $datetime = now();
        DB::table('courses')->insert(['college_code' => 'CAUP',     'course_code' => 'BS Arch',     'description' => 'Bachelor of Science in Architecture',          'created_at' => $datetime,'updated_at' => $datetime,]);

        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BEEd',     'description' => 'Bachelor of Elementary Education (Generalist)',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BECEd',     'description' => 'Bachelor of Early Childhood Education',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BSNEd',     'description' => 'Bachelor of Special Needs Education (Generalist)',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BSEd-Eng',     'description' => 'Bachelor of Secondary Education major in English',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BSEd-Fil',     'description' => 'Bachelor of Secondary Education major in Filipino',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BSEd-Math',     'description' => 'Bachelor of Secondary Education major Mathematics',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BSEd-Sciences',     'description' => 'Bachelor of Secondary Education major in Sciences',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BSEd-SS',     'description' => 'Bachelor of Secondary Education major in Social Studies',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CE',     'course_code' => 'BPE',     'description' => 'Bachelor of Physical Education',          'created_at' => $datetime,'updated_at' => $datetime,]);

        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BSCHE',     'description' => 'Bachelor of Science in Chemical Engineering',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BSCE',     'description' => 'Bachelor of Science in Civil Engineering',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BS CpE',     'description' => 'Bachelor of Science in Computer Engineering',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BSCS',     'description' => 'Bachelor of Science in Computer Science',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BSEE',     'description' => 'Bachelor of Science in Electrical Engineering',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BS ECE',     'description' => 'Bachelor of Science in Electronics Engineering',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BSIT',     'description' => 'Bachelor of Science in Information Technology',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BSMFGE',     'description' => 'Bachelor of Science in Manufacturing Engineering',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CET',     'course_code' => 'BSME',     'description' => 'Bachelor of Science in Mechanical Engineerin',          'created_at' => $datetime,'updated_at' => $datetime,]);

        DB::table('courses')->insert(['college_code' => 'CHASS',     'course_code' => 'BAC',     'description' => 'Bachelor of Arts in Communication',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CHASS',     'course_code' => 'BAC-PR',     'description' => 'Bachelor of Arts in Communication Major in Public Relation',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CHASS',     'course_code' => 'BAPR',     'description' => 'Bachelor of Arts in Public Relations',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CHASS',     'course_code' => 'BS SW',     'description' => 'Bachelor of Science in Social Work',          'created_at' => $datetime,'updated_at' => $datetime,]);
        
        DB::table('courses')->insert(['college_code' => 'CN',     'course_code' => 'BSN',     'description' => 'Bachelor of Science in Nursing',          'created_at' => $datetime,'updated_at' => $datetime,]);
        
        DB::table('courses')->insert(['college_code' => 'CPT',     'course_code' => 'BSPT',     'description' => 'Bachelor of Science in Physical Therapy',          'created_at' => $datetime,'updated_at' => $datetime,]);
        
        DB::table('courses')->insert(['college_code' => 'CS',     'course_code' => 'BS Bio',     'description' => 'Bachelor of Science in Biology',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CS',     'course_code' => 'BS Chem',     'description' => 'Bachelor of Science in Chemistry',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CS',     'course_code' => 'BS Math',     'description' => 'Bachelor of Science in Mathematics',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CS',     'course_code' => 'BS PSY',     'description' => 'Bachelor of Science in Psychology',          'created_at' => $datetime,'updated_at' => $datetime,]);

        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BS ACCTG',     'description' => 'Bachelor of Science in Accountancy',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BSBA BE',     'description' => 'Bachelor of Science in Business Administration Major in Business Economics',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BSBA FM',     'description' => 'Bachelor of Science in Business Administration Major in Financial Management',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BSBA HRM',     'description' => 'Bachelor of Science in Business Administration Major in Human Resource Management',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BSBA MM',     'description' => 'Bachelor of Science in Business Administration Major in Marketing Management',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BSBA OM',     'description' => 'Bachelor of Science in Business Administration Major in Operations Management',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BS ENTRE',     'description' => 'Bachelor of Science in Entrepreneurship',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BSHM',     'description' => 'Bachelor of Science In Hospitality Management',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BS REM',     'description' => 'Bachelor of Science in Real Estate Management',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('courses')->insert(['college_code' => 'CBM',     'course_code' => 'BSTM',     'description' => 'Bachelor of Science in Tourism Management',          'created_at' => $datetime,'updated_at' => $datetime,]);

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
