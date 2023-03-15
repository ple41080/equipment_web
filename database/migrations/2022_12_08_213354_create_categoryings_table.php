<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoryings', function (Blueprint $table) {
            $table->id();
            $table->string('categoryings_type')->nullable();  //ประเภทครุภัณฑ์
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('categoryings')->insert([ 
            ['categoryings_type' => 'ครุภัณฑ์สำนักงาน','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์ยานพาหนะและขนส่ง','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์การเกษตร','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์ก่อสร้าง','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์ไฟฟ้าและวิทยุ','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์โฆษณาและเผยแพร่','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์วิทยาศาสตร์การแพทย์','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์งานบ้านงานครัว','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์โรงงาน','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์กีฬา','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์สำรวจ','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์ดนตรีและนาฏศิลป์','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์การศึกษา','status' => 'Active'],
            ['categoryings_type' => 'ครุภัณฑ์คอมพิวเตอร์','status' => 'Active']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoryings');
    }
}
