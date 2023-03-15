<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDurablearticlesStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('durablearticles_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('durablearticles_statuses_type')->nullable();  //สถานะครุภัณฑ์
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('durablearticles_statuses')->insert([ 
            ['durablearticles_statuses_type' => 'ใช้งานได้ปกติ','status' => 'Active'],
            ['durablearticles_statuses_type' => 'ชำรุด','status' => 'Active'],
            ['durablearticles_statuses_type' => 'เสื่อมสภาพ','status' => 'Active'],
            ['durablearticles_statuses_type' => 'จำหน่าย','status' => 'Active'],
            ['durablearticles_statuses_type' => 'สูญหาย','status' => 'Active'],
            ['durablearticles_statuses_type' => 'ไม่จำเป็นต้องใช้ในราชการ','status' => 'Active']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('durablearticles_statuses');
    }
}
