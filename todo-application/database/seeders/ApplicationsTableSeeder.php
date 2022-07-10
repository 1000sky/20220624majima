<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $contents = ['asdfg', 'sdfghj'];

        foreach($contents as $content){

        DB::table('applications')->insert([
            'user_id' => 1,2,3,
            'content' => $content,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }

    }
}
