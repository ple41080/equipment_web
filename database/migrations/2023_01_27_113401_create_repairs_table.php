<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->string('number_id')->unique();          // รหัสครุภัณฑ์
            $table->string('data')->nullable();             // วันที่ซ่อม
            $table->string('repair_id')->unique();        // เลขที่ใบซ่อม
            $table->string('amount')->nullable();           // จำนวนเงิน
            $table->string('description')->nullable();      // คำอธิบาย
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
        Schema::dropIfExists('repairs');
    }
}
