<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = App\Country::firstOrCreate([]);
        $country->cities()->saveMany([
            factory(\App\City::class)->make([
                'name_cn' => '拉斯维加斯',
                'name_en' => 'LasVegas',
                'heat'    => 4,
                'thumbnail'=> '/images/thumbnails/lasvegas.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',

            ]),
            factory(\App\City::class)->make([
                'name_cn' => '纽约',
                'name_en' => 'NewYork',
                'heat'    => 3,
                'thumbnail'=> '/images/thumbnails/newyork.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',


            ]),
            factory(\App\City::class)->make([
                'name_cn' => '伦敦',
                'name_en' => 'London',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/london.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',


            ]),
            factory(\App\City::class)->make([
                'name_cn' => '芝加哥',
                'name_en' => 'Chicago',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/chicago.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',


            ]),
            factory(\App\City::class)->make([
                'name_cn' => '东京',
                'name_en' => 'Tokyo',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/tokyo.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',

            ]),
            factory(\App\City::class)->make([
                'name_cn' => '奥兰多',
                'name_en' => 'Orlando',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/orlando.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '悉尼',
                'name_en' => 'Sydney',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/sydney.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '巴黎',
                'name_en' => 'Paris',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/paris.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '洛杉矶',
                'name_en' => 'Los Angeles (LA)',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/losangeles.jpg',
                'logo' => '/images/thumbnails/lasvegas.jpg',
                'slider' => '/images/cities/city.jpg;/images/cities/city.jpg',
                'slider_caption_cn' => '法克;由',
                'slider_caption_en' => 'see;ha',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '',
                'desc_en' => '',
            ]),

        ]);

    }
}
