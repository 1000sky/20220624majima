<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            'password' => 'Aaaaaaaa'
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '2',
            'name' => 'B',
            'email' => 'B@gmail.com',
            'password' => 'Bbbbbbbb'
        ];
        DB::table('users')->insert($param);


        $param = [
            'id' => '3',
            'name' => 'C',
            'email' => 'C@gmail.com',
            'password' => 'Cccccccc'
        ];
        DB::table('users')->insert($param);

    }
}
