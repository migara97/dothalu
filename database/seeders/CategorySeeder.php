<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Category = array(

            array('title' =>'Vehicle Part' ,'status'=>'0'),
            array('title' =>'Vehicle' ,'status'=>'0'),

        );
        DB::table('categories')->insert($Category);
    }
}
