<?php

use App\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::create([
              "name"  => "Mike Bywater",
              "email" => "mike.j.byywater@gmail.com",
              "password" => Hash::make('secret')
        ]);

        User::create([
            "name"  => "Jack Bywater",
            "email" => "jackbywater@hotmail.com",
            "password" => Hash::make('secret')
        ]);
    }
}
