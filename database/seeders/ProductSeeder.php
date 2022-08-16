<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name'=>'Oppo Mobile',
            'price'=>'300',
            'description'=>'A smartphone with 8gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://www.whatmobile.com.pk/admin/images/Oppo/OppoA31-b.jpg',
            ],
            [
                'name'=>'Panasonic Tv',
            'price'=>'400',
            'description'=>'A smart tv with much more features',
            'category'=>'tv',
            'gallery'=>'https://www.multynet.com.pk/wp-content/uploads/2021/06/Best-LED-TV-in-Pakistan.jpg',
            ],
            [
                'name'=>'Sony Tv',
            'price'=>'500',
            'description'=>'A smart tv with much more features',
            'category'=>'tv',
            'gallery'=>'https://static-01.daraz.pk/p/fd7af772d98aed805186f1bacb70d4a8.jpg',
            ],
            [
                'name'=>'LG Fridge',
            'price'=>'200',
            'description'=>'A fridge with much more features',
            'category'=>'fridge',
            'gallery'=>'https://www.radiotvcentre.pk/wp-content/uploads/2021/11/ezgif.com-gif-maker-1-min.jpg',
            ]
        ]);
    }
}
