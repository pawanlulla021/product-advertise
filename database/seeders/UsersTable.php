<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([




            'name' => 'client user',
            'email' => 'clientuser123@gmail.com',
            'password'=> Hash::make('client123'),
        ]);
    }
}
