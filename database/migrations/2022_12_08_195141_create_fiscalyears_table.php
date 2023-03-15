<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiscalyearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiscalyears', function (Blueprint $table) {
            $table->id();
            $table->string('fiscalyears_type')->nullable();  //ปีงบประมาณ
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('fiscalyears')->insert([ 
            ['fiscalyears_type' => '2550'],
            ['fiscalyears_type' => '2551'],
            ['fiscalyears_type' => '2552'],
            ['fiscalyears_type' => '2553'],
            ['fiscalyears_type' => '2554'],
            ['fiscalyears_type' => '2555'],
            ['fiscalyears_type' => '2556'],
            ['fiscalyears_type' => '2557'],
            ['fiscalyears_type' => '2558'],
            ['fiscalyears_type' => '2559'],
            ['fiscalyears_type' => '2560'],
            ['fiscalyears_type' => '2561'],
            ['fiscalyears_type' => '2562'],
            ['fiscalyears_type' => '2563'],
            ['fiscalyears_type' => '2564'],
            ['fiscalyears_type' => '2565'],
            ['fiscalyears_type' => '2566'],
            ['fiscalyears_type' => '2567'],
            ['fiscalyears_type' => '2568']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiscalyears');
    }
}
