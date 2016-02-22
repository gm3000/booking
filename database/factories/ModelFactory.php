<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Country::class, function (Faker\Generator $faker) {
    $country = $faker->country;
    $desc = $faker->paragraph;
    return [
        'name_en' => $country,
        'desc_en' => $desc,
        'name_cn' => '国家:' . $country,
        'desc_cn' => '国家简介:' . $desc
    ];
});

$factory->define(App\City::class, function (Faker\Generator $faker) {
    $city = $faker->city;
    $desc = $faker->paragraph;
    return [
        'name_en' => $city,
        'desc_en' => $desc,
        'name_cn' => '城市:' . $city,
        'desc_cn' => '城市简介:' . $desc
    ];
});

$factory->define(App\Hotel::class, function (Faker\Generator $faker) {
    $name = $faker->word;
    $desc = $faker->paragraph;
    return [
        'name_en' => $name,
        'desc_en' => $desc,
        'logo' => $faker->imageUrl(60,60),
        'name_cn' => '酒店:' . $name,
        'desc_cn' => '酒店简介:' . $desc
    ];
});

$factory->define(\App\Shopping::class, function(Faker\Generator $faker){
    $name = $faker->word;
    $desc = $faker->paragraph;
    return [
        'name_en' => $name,
        'desc_en' => $desc,
        'logo' => $faker->imageUrl(60,60),
        'name_cn' => '购物中心:' . $name,
        'desc_cn' => '购物中心简介:' . $desc
    ];
});

$factory->define(\App\Activity::class, function(Faker\Generator $faker){
    $name = $faker->word;
    $desc = $faker->paragraph;
    return [
        'name_en' => $name,
        'desc_en' => $desc,
        'poster' => $faker->imageUrl(320,240),
        'name_cn' => '景点:' . $name,
        'desc_cn' => '景点简介:' . $desc
    ];
});
