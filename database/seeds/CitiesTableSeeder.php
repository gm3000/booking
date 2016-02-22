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
        App\Country::
        $country->cities()->saveMany([
            factory(\App\City::class)->make([
                'name_cn' => '拉斯维加斯',
                'name_en' => 'LasVegas',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/lasvegas.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '纽约',
                'name_en' => 'NewYork',
                'heat'    => 3,
                'thumbnail'=> '/images/thumbnails/newyork.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '伦敦',
                'name_en' => 'London',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/london.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '芝加哥',
                'name_en' => 'Chicago',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/chicago.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '东京',
                'name_en' => 'Tokyo',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/tokyo.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '奥兰多',
                'name_en' => 'Orlando',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/orlando.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '悉尼',
                'name_en' => 'Sydney',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/sydney.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '巴黎',
                'name_en' => 'Paris',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/paris.jpg'
            ]),
            factory(\App\City::class)->make([
                'name_cn' => '洛杉矶',
                'name_en' => 'Los Angeles (LA)',
                'heat'    => 2,
                'thumbnail'=> '/images/thumbnails/losangeles.jpg'
            ]),

        ]);

    }
}
