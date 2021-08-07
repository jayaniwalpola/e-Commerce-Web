<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //enter manual data to the database
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more features",
                "category"=>"mobile",
                "gallery"=>"https://www.ideabeam.com/images/product/big/oppo-f17-pro.jpg",
            ],
            [
                'name'=>'panasonic Tv',
                "price"=>"400",
                "description"=>"A smart TV with  much more features",
                "category"=>"TV",
                "gallery"=>"https://streamtelly.com/wp-content/uploads/2021/01/Change-DNS-Settings-On-Panasonic-Viera-Smart-TV.jpg",
            ],
            [
                'name'=>'Sony TV',
                "price"=>"500",
                "description"=>"A TV with  much more features",
                "category"=>"TV",
                "gallery"=>"https://www.sokoxl.co.ke/wp-content/uploads/2021/03/85-inches-sony-4k.jpg",
            ],
            [
                'name'=>'LG Frige',
                "price"=>"200",
                "description"=>"A Frige with  much more features",
                "category"=>"Frige",
                "gallery"=>"https://www.lg.com/lk/images/refrigerators/md07528488/GF-Q4919MT_Side_by_Side_350.jpg",
            ]
        ]);

    }
}
