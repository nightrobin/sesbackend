<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('college_code')->unique();
            $table->string('name');
            $table->timestamps();
        });

        $datetime = now();
        DB::table('colleges')->insert(['college_code' => 'CET',     'name' => 'College of Engineering and Technology',          'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('colleges')->insert(['college_code' => 'CAUP',    'name' => 'College of Architecture and Urban Planning',     'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('colleges')->insert(['college_code' => 'CBM',     'name' => 'College of Business and Management',             'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('colleges')->insert(['college_code' => 'CE',      'name' => 'College of Education',                           'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('colleges')->insert(['college_code' => 'CHASS',   'name' => 'College of Humanities, Arts and Social Sciences','created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('colleges')->insert(['college_code' => 'CN',      'name' => 'College of Nursing',                             'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('colleges')->insert(['college_code' => 'CPT',     'name' => 'College of Physical Therapy',                    'created_at' => $datetime,'updated_at' => $datetime,]);
        DB::table('colleges')->insert(['college_code' => 'CS',      'name' => 'College of Science',                             'created_at' => $datetime,'updated_at' => $datetime,]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colleges');
    }
}
