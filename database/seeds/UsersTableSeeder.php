<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Alice','email'=>'Alice@example.com','password'=>Hash::make('Alice'),'self_introduction'=>'I am Alice','discode'=>'#0001']);
        User::create(['name'=>'Bob','email'=>'Bob@example.com','password'=>Hash::make('Bob'),'self_introduction'=>'I am Bob','discode'=>'#0002']);
    }
}
