<?php

use Illuminate\Database\Seeder;
use App\User;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        User::create([
        	'name'=>'Nguyễn Thu Hương',
        	'email'=>'nguyenthuhuong@gmail.com',
        	'password'=>bcrypt('123456')
        ]);
        User::create([
        	'name'=>'Nguyễn Thu Hương 2',
        	'email'=>'nguyenthuhuong3@gmail.com',
        	'password'=>bcrypt('123456')
        ]);
        User::create([
        	'name'=>'Nguyễn Thu Hương 3',
        	'email'=>'nguyenthuhuong2@gmail.com',
        	'password'=>bcrypt('123456')
        ]);
    }
}
