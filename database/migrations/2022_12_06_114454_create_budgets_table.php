<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('budgets_type')->nullable();   // ประเภทงบประมาณ
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('budgets')->insert([ 
            ['budgets_type' => 'เงินงบประมาณแแผ่นดิน','status' => 'Active' ], 
            ['budgets_type' => 'เงินงบประมาณรายได้','status' => 'Active'],
            ['budgets_type' => 'เงินเหลื่อมปี','status' => 'Active'],
            ['budgets_type' => 'เงินคงคลัง','status' => 'Active'],
            ['budgets_type' => 'เงินบริจาค','status' => 'Active'],
            ['budgets_type' => 'เงินรับฝาก','status' => 'Active']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
