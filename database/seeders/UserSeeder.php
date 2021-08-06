<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;//this hash will encrypt the password
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this hash with encrypt the password
        DB::table('users')->insert([
            'name'=>'Raj nolvel',
            'email'=>'raj@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
