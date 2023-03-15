<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsSmallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments_smalls', function (Blueprint $table) {
            $table->id();
            $table->string('departments_smalls_type')->nullable();   // หน่วยงานย่อย
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('departments_smalls')->insert([ 
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานธุรการและสารบรรณ','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานการเงิน','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานพัสดุ','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานบริหารงานบุคคล','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานนิติการ','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานการประชุมและกิจการสภาฯ','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานประชาสัมพันธ์','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานยานพาหนะ','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานอาคารสถานที่','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานอธิการบดี กองกลาาง งานรักษาความปลอดภัย','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานคณบดีคณะครุศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานคณบดีคณะมนุษยศาสตร์และสังคมศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานคณบดีคณะวิทยาศาสตร์และเทคโนโลยี','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานคณบดีคณะวิทยาการจัดการ','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานคณบดีคณะเทคโนโลยีอุตสาหกรรม','status' => 'Active'],
            ['departments_smalls_type' => 'สำนักงานวิทยบริการฯ','status' => 'Active'],
            ['departments_smalls_type' => 'ศูนย์คอมพิวเตอร์','status' => 'Active'],
            ['departments_smalls_type' => 'ศูนย์ภาษา','status' => 'Active'],
            ['departments_smalls_type' => 'ศูนย์เทคโนโลยีการศึกษา','status' => 'Active'],
            ['departments_smalls_type' => 'ศูนย์วิทยบริการ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาอุตสาหกรรมศิลป์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาชีววิทยา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาภาษาอังกฤษ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาคณิตศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาพลศึกษา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาสังคมศึกษา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการประถมศึกษา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิทยาศาสตร์ทั่วไป','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาคอมพิวเตอร์ศึกษา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาภาษาไทย','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาฟิสิกส์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาเคมี','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการศึกษาปฐมวัย','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาศิลปศึกษา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชานาฏศิลป์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาดิจิตอลอาร์ต','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาภาษาอังกฤษธุรกิจ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาบรรณารักษ์ศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาทัศนศิลป์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาดนตรี','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาภาษาจีนและอังกฤษเพื่อการสื่อสาร','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชานิติศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชารัฐประศาสนศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการพัฒนาชุมชน','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาชีววิทยา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาคณิตศาสตร์และสถิติ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิทยาการคอมพิวเตอร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาเกษตรศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาสัตวศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาอาหารและโภชนาการ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาเทคโนโลยีสารสนเทศ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาสาธารณสุขศาสตร์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยีการอาหาร','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิทยาศาสตร์การกีฬาและการออกกำลังกาย','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการบัญชี','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการจัดการ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการตลาด','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาคอมพิวเตอร์ธุรกิจ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการจัดการโลจิสติกส์','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาการท่องเที่ยวและการโรงแรม','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาเศรษฐศาสตร์ธุรกิจ','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาเทคโนโลยีสื่อสารมวลชน','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาเทคโนโลยีโยธา','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิศวกรรมการจัดการอุตสาหกรรม','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิศวกรรมการผลิต','status' => 'Active'],
            ['departments_smalls_type' => 'สาขาวิชาวิศวกรรมไฟฟ้าและอิเล็กทรอนิกส์','status' => 'Active']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments_smalls');
    }
}
