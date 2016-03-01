<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = \App\Hotel::where('name_en', '=', 'LasVegas')->get()->each(function ($city) {
            $city->hotels()->saveMany([
                factory(\App\Hotel::class)->make([
                    'name_en' => 'The Venetian Resort-Hotel-Casino',
                    'name_cn' => '威尼斯人度假赌场酒店',
                    'desc_en' => 'At the edge of fashion, in the heart of Las Vegas you’ll find Fashion Show – one of the largest and most exciting retail shopping destinations in the United States.',
                    'desc_cn' => '位于拉斯维加斯的中心地带，“时装秀”百货是美国最大和最令人兴奋的零售百货之一，总是处于时尚的前沿.',
                    'body_en' => '<img class="ui fluid image" src="/images/shopping/fashioshow-banner.jpg">
                                    <p></p>
                                    <p>This 5-star Italian-themed Las Vegas Strip resort features spacious guest rooms, 19 international restaurants, a state-of-the-art casino and 5-acre pool deck. The on-site Grand Canal Shoppes offer over 80 boutique stores.</p>
                                    <p><strong><span style="color: #000000;">SHOPPING</span></strong> A sunken sitting area with a dining table and flat-screen HD cable TV is provided in each spacious suite at the eco-friendly Venetian Resort Hotel and Casino. A luxurious private bathroom with over-sized soaking tub, separate glass-enclosed shower, marble counters and deluxe toiletries is also included. </p>
                                    <p><strong><span style="color: #000000;">DINING</span></strong> A wide selection of dining choices include Thomas Keller’s Bouchon in addition to American, Italian, Asian and fusion cuisine. In-room dining is also available. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests\' favorite part of Las Vegas, according to independent reviews. </p>
                                    <p><strong><span style="color: #000000;">ENTERTAINMENT</span></strong> The Resort Venetian Hotel features 3 outdoor pools, including the adults-only TAO Beach pool and nightclub. Poolside dining and private cabana rental are available.The on-site Canyon Ranch SpaClub spa center offers fitness classes, massage services, facial and skin treatments, water therapy circuit, acupuncture and a full menu of salon services. Guests can meet with a nutritionist or personal trainer.Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife.</p>
                                    <p></p>
                                    <img class="ui fluid image" src="/images/shopping/fashion-show-runway.jpg">
                                    <p></p>
                                    <img class="ui fluid image" src="/images/shopping/fashion-show-plaza.jpg">',
                    'body_cn' => '<img class="ui fluid image" src="/images/shopping/fashioshow-banner.jpg">
                                    <p></p>
                                    <p>这家位于拉斯维加斯大道（Las Vegas Strip）的五星级度假酒店采用意大利主题，设有宽敞的客房、19家国际餐厅、最先进的赌场、5英亩（2公顷）的游泳池平台以及拥有逾80家精品店的内部Grand Canal Shoppes购物中心。</p>
                                    <p>Venetian Resort Hotel and Casino生态度假酒店的宽敞套房均设有带餐桌和平面高清有线电视的休息区以及带超大浴缸、独立玻璃淋浴间、大理石台和豪华洗浴用品的奢华连接浴室。Resort Venetian Hotel酒店设有3个室外游泳池，包括仅限成人使用的TAO海滩游泳池和夜总会，亦提供池畔餐厅和私人小屋出租服务。</p>
                                    <p>酒店内的Canyon Ranch SpaClub康体中心提供健身课程、按摩服务、面部和皮肤护理、水疗设备、针灸及全套美容服务。客人可与营养师和私人教练面谈。除了美国、意大利、亚洲和风味美食外，酒店还提供Thomas Keller’s Bouchon等各式餐饮选择，亦提供房内用餐服务。</p>
                                    <p>Venetian酒店的客人可在意大利格调的街头漫步，或乘坐威尼斯的贡多拉沿着带地道的大运河顺流而下。酒店内还设有杜莎夫人蜡像馆（Madame Tussauds Las Vegas)。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                    <p></p>
                                    <img class="ui fluid image" src="/images/shopping/fashion-show-runway.jpg">
                                    <p></p>
                                    <img class="ui fluid image" src="/images/shopping/fashion-show-plaza.jpg">',
                    'logo' => '/images/shopping/fashion-show.png',
                ]),
                factory(\App\Hotel::class)->make([
                    'name_en' => 'Grand Canal Shoppes',
                    'name_cn' => '大运河购物中心',
                    'desc_en' => 'Grand Canal Shoppes at The Venetian | The Palazzo combines Old World charm with an exceptional collection of luxury shopping and world-class dining. Stroll the enchanting cobblestone walkways, delight in exquisite painted ceilings and enjoy a gondola ride along the meandering, quarter-mile Grand Canal.',
                    'desc_cn' => '位于威尼斯人酒店和Palazzo酒店的“大运河购物中心”结合了旧世界的魅力与现代的奢华为一体，拥有众多的品牌店和和世界一流的餐饮。漫步在迷人的鹅卵石人行道，欣赏着精美彩绘天花板，并可以乘坐意大利“贡多拉”小船沿着四分之一英里场的人造大运河蜿蜒前行.',
                    'body_en' => '<img class="ui fluid image" src="/images/shopping/grand-canal-shoppes-logo.jpg">
                                  <p></p>
                                  <p>Grand Canal Shoppes at The Venetian | The Palazzo combines Old World charm with an exceptional collection of luxury shopping and world-class dining. Stroll the enchanting cobblestone walkways, delight in exquisite painted ceilings and enjoy a gondola ride along the meandering, quarter-mile Grand Canal.</p>
                                  <p><strong>SHOPPING </strong>– Emporium of style, Barneys New York, and more than 160 luxury stores and boutiques are featured at Grand Canal Shoppes at The Venetian | The Palazzo. World-premier brands Tory Burch, Jimmy Choo, Burberry, Christian Louboutin, Salvatore Ferragamo, Diane von Furstenberg, Peter Lik Gallery and Michael Kors offer visitors an unparalleled luxury shopping experience.</p>
                                  <p><strong>DINING</strong>– World-renowned chefs, restaurateurs and James Beard award winners abound at Grand Canal Shoppes at The Venetian | The Palazzo. Superstar culinary offerings include Wolfgang Puck’s CUT and Postrio Bar &amp; Grill, Emeril Lagasse’s Table 10 and Delmonico Steakhouse, Joachim Splichal’s Pinot Brasserie, OTTO Pizzeria by Mario Batali and SUSHISAMBA by Shimon Bokova. These fine dining restaurants, coupled with a diverse selection of quick and casual eateries, provide visitors with more than 30 delectable dining options.</p>
                                  <p><strong>ENTERTAINMENT</strong>– In addition to charming gondola rides, shoppers are treated to delightful daily performances in St. Mark’s Square by Streetmosphere®, an international cast of classically trained singers, actors and musicians. Be sure to take advantage of the enclosed VIP line passes and admission discounts to TAO and LAVO nightclubs.</p>
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/Fendi-The-Palazzo.jpg">
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/GCS-Palazzo.jpg">
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/Grand-Canal-Shoppes---gondola.jpg">',
                    'body_cn' => '<img class="ui fluid image" src="/images/shopping/grand-canal-shoppes-logo.jpg">
                                  <p></p>
                                  <p>位于威尼斯人酒店和Palazzo酒店的“大运河购物中心”结合了旧世界的魅力与现代的奢华为一体，拥有众多的品牌店和和世界一流的餐饮。漫步在迷人的鹅卵石人行道，欣赏着精美彩绘天花板，并可以乘坐意大利“贡多拉”小船沿着四分之一英里场的人造大运河蜿蜒前行。</p>
                                  <p>购物方面：这里有包括Emporium of style、 Barneys New York在内的160多家豪华商店和精品店。世界顶级品牌， 如：托里•伯奇、Jimmy Choo、巴宝莉、Christian Louboutin、菲拉格慕、黛安•冯芙丝汀宝、彼得沥画廊和Michael Kors等，给游客提供了无与伦比的奢华购物体验。</p>
                                  <p>美食方面：在大运河购物中心里，比比皆是世界餐室著名的厨师、餐馆和James Beard奖获得者，比如：由巨星Wolfgang Puck主勺的CUT和Postrio Bar＆Grill餐厅、由Emeril Lagasse主勺的Table10餐厅和德尔莫尼科牛排馆、Joachim Splichal的Pinot Brasserie餐厅、MarioBatali的比萨饼店、以及由ShimonBokova主理的SUSHISAMBA。这些精致的餐厅，加上多元化的选择，为旅客提供了30多种美味选择。</p>
                                  <p>娱乐方面： - 除了迷人的乘坐贡多拉，游客还可以以在圣马可广场观看国际知名演员或歌手的日常演出。请注意：一定要充分利用我们赠予的VIP通行证以及入场券折扣以进入TAO和LAVO夜总会。</p>
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/Fendi-The-Palazzo.jpg">
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/GCS-Palazzo.jpg">
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/Grand-Canal-Shoppes---gondola.jpg">',
                    'logo' => '/images/shopping/grand-canal-shoppes.png',
                ]),
                factory(\App\Hotel::class)->make([
                    'name_en' => 'Kay Jewelers',
                    'name_cn' => '凯',
                    'desc_en' => 'Founded nearly 100 years ago as a single storefront, Kay Jewelers has grown to nearly 1,000 stores nationwide, including eight stores in Las Vegas.',
                    'desc_cn' => '100年前从一个单独的店面起家，“凯”珠宝公司已发展到全国近1000家门店，其中八个在拉斯维加斯.',
                    'body_en' => '<img class="ui fluid image" src="/images/shopping/kay-banner.jpg">
                                  <p></p>
                                  <p>Grand Canal Shoppes at The Venetian | The Palazzo combines Old World charm with an exceptional collection of luxury shopping and world-class dining. Stroll the enchanting cobblestone walkways, delight in exquisite painted ceilings and enjoy a gondola ride along the meandering, quarter-mile Grand Canal.</p>
                                  <p><strong>SHOPPING </strong>– Emporium of style, Barneys New York, and more than 160 luxury stores and boutiques are featured at Grand Canal Shoppes at The Venetian | The Palazzo. World-premier brands Tory Burch, Jimmy Choo, Burberry, Christian Louboutin, Salvatore Ferragamo, Diane von Furstenberg, Peter Lik Gallery and Michael Kors offer visitors an unparalleled luxury shopping experience.</p>
                                  <p><strong>DINING</strong>– World-renowned chefs, restaurateurs and James Beard award winners abound at Grand Canal Shoppes at The Venetian | The Palazzo. Superstar culinary offerings include Wolfgang Puck’s CUT and Postrio Bar &amp; Grill, Emeril Lagasse’s Table 10 and Delmonico Steakhouse, Joachim Splichal’s Pinot Brasserie, OTTO Pizzeria by Mario Batali and SUSHISAMBA by Shimon Bokova. These fine dining restaurants, coupled with a diverse selection of quick and casual eateries, provide visitors with more than 30 delectable dining options.</p>
                                  <p><strong>ENTERTAINMENT</strong>– In addition to charming gondola rides, shoppers are treated to delightful daily performances in St. Mark’s Square by Streetmosphere®, an international cast of classically trained singers, actors and musicians. Be sure to take advantage of the enclosed VIP line passes and admission discounts to TAO and LAVO nightclubs.</p>
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/jewelry-7a.jpg">',
                    'body_cn' => '<img class="ui fluid image" src="/images/shopping/kay-banner.jpg">
                                  <p></p>
                                  <p>100年前从一个单独的店面起家，“凯”珠宝公司已发展到全国近1000家门店，其中八个在拉斯维加斯。</p>
                                  <p>如今，“凯”珠宝公司是美国最大珠宝商。其承诺，在提供各类精美的珠宝的同时，也提供给客人无与伦比的服务和购物体验。当然，顾客到此也能看见定期到货的那些减价幅度高达50％的清仓商品、以及过时的设计产品。</p>
                                  <p></p>
                                  <img class="ui fluid image" src="/images/shopping/jewelry-7a.jpg">',
                    'logo' => '/images/shopping/kay-jewelers.png'
                ]),
            ]);
        });


    }
}
