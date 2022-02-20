<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
             'role_id'=>'1',
            'name'=> 'MD Admin',
            'username'=>'admin@gmail.com',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
             'role_id'=>'2',
            'name'=> 'MD author',
            'username'=>'author@gmail.com',
            'email'=>'author@gmail.com',
            'password'=>bcrypt('rootauthor'),
        ]);
    }
}
