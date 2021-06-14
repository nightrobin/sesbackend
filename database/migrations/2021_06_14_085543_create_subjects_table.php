<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_code')->unique();
            $table->unsignedInteger('section');
            $table->string('title');
            $table->unsignedInteger('units');
            $table->string('days');
            $table->string('time');
            $table->string('room');
            $table->timestamps();
        });

        $datetime = now();
        DB::table('subjects')->insert([
            'subject_code' => 'PED 0012',     
            'section' => 1,
            'title' => 'Group Exercise',     
            'units' => 2,          
            'days' => 'W',          
            'time' => '4:00-6:40 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'CIV 0121.1',     
            'section' => 2,
            'title' => 'Engineering Drawing and Plans',     
            'units' => 1,          
            'days' => 'F',          
            'time' => '7:00-9:00 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'EIT 0121.1',     
            'section' => 3,
            'title' => 'Computer Fundamentals and Programming 1',     
            'units' => 1,          
            'days' => 'M',          
            'time' => '3:00-5:00 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'TCW 0005',     
            'section' => 4,
            'title' => 'The Contemporary World',     
            'units' => 3,          
            'days' => 'W',          
            'time' => '11:00-1:00 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'PCM 0006',     
            'section' => 5,
            'title' => 'Purposive Communication',     
            'units' => 3,          
            'days' => 'Th',          
            'time' => '1:00-3:00 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'IPP 0010',     
            'section' => 6,
            'title' => 'Interdisiplinaryong Pagbasa at Pagsulat tungo sa Mabisang Pagpapahayag',     
            'units' => 3,          
            'days' => 'F',          
            'time' => '1:00-3:00 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'CET 0122A',     
            'section' => 7,
            'title' => 'Physics for Engineers (lec)',     
            'units' => 4,          
            'days' => 'T',          
            'time' => '7:00-9:40 am',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'CET 0121',     
            'section' => 8,
            'title' => 'Calculus 2',     
            'units' => 3,          
            'days' => 'S',          
            'time' => '1:00-3:00 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'UTS 0003',     
            'section' => 9,
            'title' => 'Understanding the Self',     
            'units' => 3,          
            'days' => 'F',          
            'time' => '3:00-5:00 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'NSTP 02',     
            'section' => 10,
            'title' => 'National Service Training Program 2 (CWTS/ROTC)',     
            'units' => 3,          
            'days' => 'Su',          
            'time' => '7:00-9:00 am',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'EIT 0122',     
            'section' => 1,
            'title' => 'Discrete Mathematics',     
            'units' => 3,          
            'days' => 'M',          
            'time' => '1:00-3:30 pm',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'ICC 0103.1',     
            'section' => 2,
            'title' => 'Intermediate Programming (Lab)',     
            'units' => 1,          
            'days' => 'T',          
            'time' => '9:00-11:00 am',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        DB::table('subjects')->insert([
            'subject_code' => 'ICC 0103',     
            'section' => 2,
            'title' => 'Intermediate Programming (Lec)',     
            'units' => 2,          
            'days' => 'M',          
            'time' => '9:00-11:00 am',          
            'room' => 'FIELD',          
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 4,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 5,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
        // DB::table('subjects')->insert([
        //     'subject_code' => 'PED',     
        //     'section' => 12312312312,
        //     'title' => 'Group',     
        //     'units' => dsdfsdf,          
        //     'days' => 'sdfsdfW',          
        //     'time' => 'sdfsdfsd',          
        //     'room' => 'FIELD',          
        //     'created_at' => $datetime,
        //     'updated_at' => $datetime,
        // ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
