<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_types', function (Blueprint $table) {
            $table->id();
            $table->string('position')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('position_types')->insert([
            ['position' => 'เจ้าหน้าที่บริหารงานทั่วไป','status' => 'Active'],
            ['position' => 'วิศวกรไฟฟ้า','status' => 'Active'],
            ['position' => 'วิศวกรเครื่องกล','status' => 'Active'],
            ['position' => 'วิศวกรโยธา','status' => 'Active'],
            ['position' => 'นักวิชาการพัสดุ','status' => 'Active'],
            ['position' => 'เจ้าหน้าที่พัสดุ','status' => 'Active'],
            ['position' => 'พนักงานทั่วไป','status' => 'Active'],
            ['position' => 'ผู้บริหาร','status' => 'Active'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('position_types');
    }
}
