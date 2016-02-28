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
                'slider_caption_en' => 'Welcome to Las Vegas;Book your Activities and Sightseeing Tours before you go.',
                'body_cn' => '',
                'body_en' => '',
                'package_cn' => '',
                'package_en' => '',
                'desc_cn' => '拉斯维加斯位于内华达州的莫哈韦沙漠里，是一个以拥有不懈活力而闻名的度假胜地，有24小时营业的娱乐场和无尽的娱乐项目。其焦点是在拉斯维加斯大道，仅有4个多英里长，但是遍布精致的主题酒店，如金字塔形的卢克索酒店和有完整大运河的威尼斯酒店;以及豪华度假村包括有标志性音乐喷泉的贝拉吉欧酒店等;当然还有拉斯维加斯最出名的无数娱乐场。',
                'desc_en' => 'Las Vegas, in Nevada’s Mojave Desert, is a resort town famed for its buzzing energy, 24-hour casinos and endless entertainment options. Its focal point is the Strip, just over 4 miles long and lined with elaborate theme hotels such as the pyramid-shaped Luxor and the Venetian, complete with Grand Canal; luxury resorts including the Bellagio, set behind iconic dancing fountains; and innumerable casinos.',

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
