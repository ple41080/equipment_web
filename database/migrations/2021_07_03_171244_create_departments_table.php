<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_type')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
        DB::table('departments')->insert([
            ['department_type' => 'คณะครุศาสตร์','status' => 'Active'],
            ['department_type' => 'คณะมนุษยศาสตร์และสังคมศาสตร์','status' => 'Active'],
            ['department_type' => 'คณะวิทยาศาสตร์และเทคโนโลยี','status' => 'Active'],
            ['department_type' => 'คณะวิทยาการจัดการ','status' => 'Active'],
            ['department_type' => 'คณะเทคโนโลยีอุตสาหกรรม','status' => 'Active'],
            ['department_type' => 'สำนักงานอธิการบดี','status' => 'Active'],
            ['department_type' => 'กองนโยบายและแผน','status' => 'Active'],
            ['department_type' => 'กองพัฒนานักศึกษา','status' => 'Active'],
            ['department_type' => 'สำนักส่งเสริมวิชาการและงานทะเบียน','status' => 'Active'],
            ['department_type' => 'สำนักวิทยบริการและเทคโนโลยีสารสนเทศ','status' => 'Active'],
            ['department_type' => 'สำนักศิลปะและวัฒนธรรม','status' => 'Active'],
            ['department_type' => 'ศูนย์การศึกษามหาวิทยาลัยราชภัฏเลย จังหวัดขอนแก่น','status' => 'Active'],
            ['department_type' => 'ศูนย์บ่มเพาะวิสาหกิจ','status' => 'Active'],
            ['department_type' => 'ศูนย์การศึกษาโลจิสติกส์และการค้าชายแดน','status' => 'Active'],
            ['department_type' => 'สถาบันวิจัยและพัฒนา','status' => 'Active'],
            ['department_type' => 'โรงเรียนสาธิตมหาวิทยาลัยราชภัฏเลย ','status' => 'Active'],
            ['department_type' => 'งานตรวจสอบภายใน','status' => 'Active'],
            ['department_type' => 'งานกิจการพิเศษและสิทธิประโยชน์','status' => 'Active'],
            ['department_type' => 'งานประกันคุณภาพและมาตรฐานการศึกษา','status' => 'Active'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
