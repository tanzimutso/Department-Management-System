<?php

use Illuminate\Database\Seeder;

class StudentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
           'first_name' => 'Tanzim',
           'last_name' => 'Utso',
           'student_id' => 'CE-14049',
           'dept' => 'CSE',
           'session' => '2013-14',
           'address' => 'East khabashpur,Faridpur',
           'email' => 'utsombstu@gmail.com',
           'contact' => '01719314675',
           'created_by'=>'1',
           'updated_by'=>'1'
        ]);
    }
}
