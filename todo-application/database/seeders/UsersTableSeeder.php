<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [   
            'id' => '1',
            'name' => 'A',
            'email' => 'A@gmail.com',
            'password' => Hash::make('Aaaaaaaa'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '2',
            'name' => 'B',
            'email' => 'B@gmail.com',
            'password' => 'Bbbbbbbb',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($param);


        $param = [
            'id' => '3',
            'name' => 'C',
            'email' => 'C@gmail.com',
            'password' => 'Cccccccc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($param);

    }
}
