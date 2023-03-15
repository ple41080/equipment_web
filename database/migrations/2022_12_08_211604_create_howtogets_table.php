<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowtogetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('howtogets', function (Blueprint $table) {
            $table->id();
            $table->string('howtogets_type')->nullable();  //วิธีได้มา
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('howtogets')->insert([ 
            ['howtogets_type' => 'วิธีประกาศเชิญชวน','status' => 'Active'],
            ['howtogets_type' => 'วิธีคัดเลือก','status' => 'Active'],
            ['howtogets_type' => 'วิธีเฉพาะเจาะจง','status' => 'Active'],
            ['howtogets_type' => 'จัดซื้อก่อน พรบ.2560','status' => 'Active']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('howtogets');
    }
}
