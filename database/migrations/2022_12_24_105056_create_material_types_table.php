<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_types', function (Blueprint $table) {
            $table->id();
            $table->string('material_name')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('material_types')->insert([ 
            ['material_name' => 'วัสดุสำนักงาน','status' => 'Active'],
            ['material_name' => 'วัสดุไฟฟ้าและวิทยุ','status' => 'Active'],
            ['material_name' => 'วัสดุงานบ้านงานครัว','status' => 'Active'],
            ['material_name' => 'วัสดุคอมพิวเตอร์','status' => 'Active'],
            ['material_name' => 'วัสดุยานพาหนะและขนส่ง','status' => 'Active'],
            ['material_name' => 'วัสดุวิทยาศาสตร์และการแพทย์','status' => 'Active'],
            ['material_name' => 'วัสดุโฆษณาและเผยแพร่','status' => 'Active'],
            ['material_name' => 'วัสดุการศึกษา','status' => 'Active'],
            ['material_name' => 'วัสดุสนาม','status' => 'Active'],
            ['material_name' => 'วัสดุการเกษตร','status' => 'Active'],
            ['material_name' => 'วัสดุสำรวจ','status' => 'Active'],
            ['material_name' => 'วัสดุก่อสร้าง','status' => 'Active'],
            ['material_name' => 'วัสดุโรงงาน','status' => 'Active'],
            ['material_name' => 'วัสดุดนตรีและนาฏศิลป์','status' => 'Active'],
            ['material_name' => 'วัสดุกีฬา','status' => 'Active'],
            ['material_name' => 'วัสดุอาวุธ ','status' => 'Active'],
            ['material_name' => 'วัสดุอื่น ','status' => 'Active'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_types');
    }
}
