<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        /*
        foreach(range(1,100) as $index)
        {
            DB::table('flights')->insert(
                [
                    'name'=>$faker->name,
                    'destination'=>$faker->name
                ]
                );
        }
        */
        /*
        DB::table('phones')->insert(
            [
                'user_id'=>5,
                'phone'=>'098564123'
            ]
            );
            */
            /*
            DB::table('posts')->insert(
                [
                    'user_id'=>1,
                    'title'=>$faker->title,
                    'body'=>$faker->paragraph,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]
                );
                */
    
                DB::table('products')->insert([
                    [
                        'name'=>'Laptop1',
                        'price'=>'45522',
                        'category'=>'Laptop',
                        'discription'=>'The new blanded laptop of Dell company',
                        'gallery'=>'images/Laptop1.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'Laptop2',
                        'price'=>'45522',
                        'category'=>'Laptop',
                        'discription'=>'The new blanded laptop of Dell company',
                        'gallery'=>'images/Laptop2.jpeg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'Laptop3',
                        'price'=>'895412',
                        'category'=>'Laptop',
                        'discription'=>'The new blanded laptop of MacBook company',
                        'gallery'=>'images/Laptop3.jpeg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'mP1',
                        'price'=>'56231',
                        'category'=>'Mobile',
                        'discription'=>'The new blanded mobile phone of Samsung company',
                        'gallery'=>'images/mP1.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'mp2',
                        'price'=>'65412',
                        'category'=>'Mobile',
                        'discription'=>'The new blanded mobile of Hiwawie company',
                        'gallery'=>'images/mp2.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'mp3',
                        'price'=>'7458',
                        'category'=>'Mobile',
                        'discription'=>'The new blanded mobile of Apple company',
                        'gallery'=>'images/mp3.jpeg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'mp4',
                        'price'=>'94561',
                        'category'=>'Mobile',
                        'discription'=>'The new blanded mobile of Samsung company',
                        'gallery'=>'images/mp4.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'SamrtTv3',
                        'price'=>'7851245',
                        'category'=>'TV',
                        'discription'=>'The new blanded TV of HP company',
                        'gallery'=>'images/SamrtTv3.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'SMartTV',
                        'price'=>'9874561',
                        'category'=>'TV',
                        'discription'=>'The new blanded TV of HP company',
                        'gallery'=>'images/SMartTV.jpeg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'SmartTV2',
                        'price'=>'111235',
                        'category'=>'TV',
                        'discription'=>'The new blanded TV of HP company',
                        'gallery'=>'images/SmartTV2.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'SmartTv4',
                        'price'=>'122345',
                        'category'=>'TV',
                        'discription'=>'The new blanded TV of HP company',
                        'gallery'=>'images/SmartTv4.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'Tab1',
                        'price'=>'455222',
                        'category'=>'Tablet',
                        'discription'=>'The new blanded Tab of HP company',
                        'gallery'=>'images/Tab1.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'tab2',
                        'price'=>'54123',
                        'category'=>'Tablet',
                        'discription'=>'The new blanded Tab of HP company',
                        'gallery'=>'images/tab2.jpg',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ]
        
                ]);
            }
}
