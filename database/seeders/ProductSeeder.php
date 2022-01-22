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
        //
        DB::table('products')->insert([
            [
                "name"=>"M12",
            "price"=>"200",
            "description"=>"New M12 Promax new official flagship genuine 5G full Netcom smartphone ultra-thin large-screen gaming phone ultra-long standby for vivo Huawei oppo headset 5G new product",
            "category"=>"mobile",
            "gallery"=>"https://img.alicdn.com/imgextra/i1/656576287/O1CN01T8dDUu1wJUnM9BgFo_!!656576287.jpg_430x430q90.jpg"
            ],
            [
                "name"=>"M40",
            "price"=>"300",
            "description"=>"Fresh taste fresh M40 Pro new official flagship genuine 5G full Netcom smartphone ultra-thin large-screen gaming phone ultra-long standby for vivo Huawei oppo headset 5G new product",
            "category"=>"mobile",
            "gallery"=>"//img.alicdn.com/imgextra/i3/656576287/O1CN015Qi6ml1wJUm7qnT04_!!656576287.jpg_60x60q90.jpg"
            ],
            [
                "name"=>"LG mobile1",
            "price"=>"400",
            "description"=>"A smartphone with 4gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"http://themes.webdevia.com/phonerepair/wp-content/uploads/2016/02/iphone-broken.png"
            ],
            [
                "name"=>"LG mobile2",
            "price"=>"500",
            "description"=>"A smartphone with 4gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"http://themes.webdevia.com/phonerepair/wp-content/uploads/2016/02/iphone-broken.png"
            ]
        ]);
    }
}
