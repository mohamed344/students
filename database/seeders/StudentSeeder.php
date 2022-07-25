<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            'id'    => '1',
           'name'  => 'Mohamed Boufenara',
           'matricule'  => '123456',
           'result'  => '12.34',
           'password'  => Hash::make('1234')
       ]);

       \DB::table('students')->insert([
            'id'    => '2',
           'name'  => 'Abderaouf Amekraz',
           'matricule'  => '12345',
           'result'  => '10.13',
           'password'  => Hash::make('1452')
       ]);
    }
}
