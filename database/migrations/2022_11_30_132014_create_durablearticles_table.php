<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDurablearticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('durablearticles', function (Blueprint $table) {
            $table->id();
            $table->string('number_id')->unique();              // รหัสครุภัณฑ์
            $table->string('category')->nullable();             // หมวดหมู่ครุภัณฑ์
            $table->string('equipment')->nullable();            // ประเภทครุภัณฑ์
            $table->string('counting_unit')->nullable();        // หน่วยนับ
            $table->string('departments')->nullable();          // หน่วยงานหลัก
            $table->string('departments_small')->nullable();    // หน่วยงานย่อย
            $table->string('building')->nullable();             // อาคาร
            $table->string('building_numder')->nullable();      // หมายเลขอาคาร
            $table->string('building_floor')->nullable();       // ชั้น
            $table->string('room')->nullable();                 // ห้อง
            $table->string('fiscalyear')->nullable();           // ปีงบประมาณ
            $table->string('howtoget')->nullable();             // วิธีได้มา
            $table->string('budget')->nullable();               // ประเภทงบประมาณ
            $table->string('budget_code')->nullable();          // รหัสงบประมาณ
            $table->string('project')->nullable();              // โครงการ 
            $table->string('checkdata')->nullable();            // วันที่ตรวจรับ
            $table->string('seller')->nullable();               // ผู้ขาย/หจก/บริษัท
            $table->string('name')->nullable();                 // ชื่อครุภัณฑ์
            $table->string('serial_number')->nullable();        // s/n
            $table->string('model_name')->nullable();           // รุ่น
            $table->string('brand')->nullable();                // ยี่ห้อ
            $table->integer('price')->nullable();               // มูลค่า
            $table->string('lifetime')->nullable();             // อายุใช้งาน
            $table->string('vehicle_re')->nullable();           // ทะเบียนรถ
            $table->string('description')->nullable();          // คำอธิบาย  
            $table->string('status')->nullable();               // สถานะ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('durablearticles');
    }
}
