<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = array(

            array('district' =>'Ampara' ,'active'=>'yes'),
            array('district' =>'Anuradhapura' ,'active'=>'yes'),
            array('district' =>'Badulla' ,'active'=>'yes'),
            array('district' =>'Batticaloa' ,'active'=>'yes'),
            array('district' =>'Colombo' ,'active'=>'yes'),
            array('district' =>'Galle' ,'active'=>'yes'),
            array('district' =>'Gampaha' ,'active'=>'yes'),
            array('district' =>'Hambantota' ,'active'=>'yes'),
            array('district' =>'Jaffna' ,'active'=>'yes'),
            array('district' =>'Kalutara' ,'active'=>'yes'),
            array('district' =>'Kandy' ,'active'=>'yes'),
            array('district' =>'Kegalle' ,'active'=>'yes'),
            array('district' =>'Kilinochchi' ,'active'=>'yes'),
            array('district' =>'Kurunegala' ,'active'=>'yes'),
            array('district' =>'Mannar' ,'active'=>'yes'),
            array('district' =>'Matale' ,'active'=>'yes'),
            array('district' =>'Matara' ,'active'=>'yes'),
            array('district' =>'Moneragala' ,'active'=>'yes'),
            array('district' =>'Mullaitivu' ,'active'=>'yes'),
            array('district' =>'Nuwara Eliya' ,'active'=>'yes'),
            array('district' =>'Polonnaruwa' ,'active'=>'yes'),
            array('district' =>'Puttalam' ,'active'=>'yes'),
            array('district' =>'Rathnapura' ,'active'=>'yes'),
            array('district' =>'Vavuniya' ,'active'=>'yes'),


        );
        DB::table('districts')->insert($districts);
    }
}
