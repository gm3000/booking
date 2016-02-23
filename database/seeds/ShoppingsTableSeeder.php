<?php

use Illuminate\Database\Seeder;

class ShoppingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = \App\City::where('name_en','=','LasVegas')->get()->each(function($city){
            $city->shoppings()->saveMany([
                factory(\App\Shopping::class)->make([
                    'name_en' => 'Fashion Show',
                    'name_cn' => '时装秀',
                    'desc_en' => 'At the edge of fashion, in the heart of Las Vegas you’ll find Fashion Show – one of the largest and most exciting retail shopping destinations in the United States.',
                    'desc_cn' => '位于拉斯维加斯的中心地带，“时装秀”百货是美国最大和最令人兴奋的零售百货之一，总是处于时尚的前沿.',
                    'body_en' => '',
                    'body_cn' => '',
                    'logo'     => '/images/shopping/fashion-show.png'
                ]),
                factory(\App\Shopping::class)->make([
                    'name_en' => 'Grand Canal Shoppes',
                    'name_cn' => '大运河购物中心',
                    'desc_en' => 'Grand Canal Shoppes at The Venetian | The Palazzo combines Old World charm with an exceptional collection of luxury shopping and world-class dining. Stroll the enchanting cobblestone walkways, delight in exquisite painted ceilings and enjoy a gondola ride along the meandering, quarter-mile Grand Canal.',
                    'desc_cn' => '位于威尼斯人酒店和Palazzo酒店的“大运河购物中心”结合了旧世界的魅力与现代的奢华为一体，拥有众多的品牌店和和世界一流的餐饮。漫步在迷人的鹅卵石人行道，欣赏着精美彩绘天花板，并可以乘坐意大利“贡多拉”小船沿着四分之一英里场的人造大运河蜿蜒前行.',
                    'body_en' => '',
                    'body_cn' => '',
                    'logo'     => '/images/shopping/grand-canal-shoppes.png'
                ]),
                factory(\App\Shopping::class)->make([
                    'name_en' => 'Kay Jewelers',
                    'name_cn' => '凯',
                    'desc_en' => 'Founded nearly 100 years ago as a single storefront, Kay Jewelers has grown to nearly 1,000 stores nationwide, including eight stores in Las Vegas.',
                    'desc_cn' => '100年前从一个单独的店面起家，“凯”珠宝公司已发展到全国近1000家门店，其中八个在拉斯维加斯.',
                    'body_en' => '',
                    'body_cn' => '',
                    'logo'     => '/images/shopping/kay-jewelers.png'
                ]),
            ]);
        });


    }
}
