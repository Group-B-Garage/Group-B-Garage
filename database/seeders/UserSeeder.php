<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

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
            'name' => 'Elder',
            'email' => 'elder@email.com',
            'password' => Hash::make('groupb'),
            'is_admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Andressa',
            'email' => 'andressa@email.com',
            'password' => Hash::make('groupb'),
            'is_admin' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'Hally',
            'email' => 'hally@email.com',
            'password' => Hash::make('groupb'),
            'is_admin' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@email.com',
            'password' => Hash::make('groupb'),
            'is_admin' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'Luma',
            'email' => 'luma@email.com',
            'password' => Hash::make('groupb'),
            'is_admin' => '0',
        ]);
    }
}
