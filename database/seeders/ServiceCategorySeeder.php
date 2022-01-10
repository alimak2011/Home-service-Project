<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name"=>"AC",
                "slug"=>'ac',
                "image"=>"1521969345.png"
            ],
            [
                "name"=>"Beauty",
                "slug"=>'beauty',
                "image"=>"1521969358.png"
            ],
            [
                "name"=>"Plumbing",
                "slug"=>'plumbing',
                "image"=>"1521969409.png"
            ],
            [
                "name"=>"Electrical",
                "slug"=>'electrical',
                "image"=>"1521969419.png"
            ],
            [
                "name"=>"Home Cleaning",
                "slug"=>'home-cleaning',
                "image"=>"1521969446.png"
            ],
            [
                "name"=>"Home Cleaning",
                "slug"=>'home-cleaning',
                "image"=>"1521969446.png"
            ],
            [
                "name"=>"Laundry",
                "slug"=>'laundry',
                "image"=>"1521972593.png"
            ],
            [
                "name"=>"AC",
                "slug"=>'ac',
                "image"=>"1521969345.png"
            ],



        ]);
    }
}
