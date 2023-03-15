<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  
    {
        User::create([
            'rec_id'=>'001',
            'join_date'=>'day',
            'name'=>'Suksan Nonthing',
            'email'=>'atom25366352@gmail.com',
            'role_name'=> 'Admin',
            'avatar'=> 'avatar5.png',
            'position'=> 'Wed Developer ',
            'department'=> 'งานพัสดุ กองกลาง สำนักงานอธิการบดี',
            'phone_number'=> '0877745466',
            'status'=> 'Active',
            'password'=> Hash::make('0877745466')       
        ]);
    }
}


//php artisan migrate:fresh  คำสั่ง  รีเช็ดฐานข้อมูลทั้งหมด
//php artisan db:seed --class=Adminseeder     