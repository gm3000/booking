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

        $city = \App\City::where('name_en', '=', 'LasVegas')->get()->each(function ($city) {
                    $city->hotels()->saveMany([
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'The Venetian Resort-Hotel-Casino',
                            'name_cn' => '威尼斯人度假赌场酒店',
                            'desc_en' => 'At the edge of fashion, in the heart of Las Vegas you’ll find Fashion Show – one of the largest and most exciting retail shopping destinations in the United States.',
                            'desc_cn' => '位于拉斯维加斯的中心地带，“时装秀”百货是美国最大和最令人兴奋的零售百货之一，总是处于时尚的前沿.',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_veneian_lasvagas_banner.jpg">
                                            <p></p>
                                            <p>This 5-star Italian-themed Las Vegas Strip resort features spacious guest rooms, 19 international restaurants, a state-of-the-art casino and 5-acre pool deck. The on-site Grand Canal Shoppes offer over 80 boutique stores.</p>
                                            <p><strong><span style="color: #000000;">SHOPPING</span></strong> A sunken sitting area with a dining table and flat-screen HD cable TV is provided in each spacious suite at the eco-friendly Venetian Resort Hotel and Casino. A luxurious private bathroom with over-sized soaking tub, separate glass-enclosed shower, marble counters and deluxe toiletries is also included. </p>
                                            <p><strong><span style="color: #000000;">DINING</span></strong> A wide selection of dining choices include Thomas Keller’s Bouchon in addition to American, Italian, Asian and fusion cuisine. In-room dining is also available. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews. </p>
                                            <p><strong><span style="color: #000000;">ENTERTAINMENT</span></strong> The Resort Venetian Hotel features 3 outdoor pools, including the adults-only TAO Beach pool and nightclub. Poolside dining and private cabana rental are available.The on-site Canyon Ranch SpaClub spa center offers fitness classes, massage services, facial and skin treatments, water therapy circuit, acupuncture and a full menu of salon services. Guests can meet with a nutritionist or personal trainer.Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife.</p>
                                            <p></p>
                                            <img class="ui fluid image" src="/images/hotels/hotel_veneian_lasvagas_bottom1.jpg">
                                            <p></p>
                                            <img class="ui fluid image" src="/images/hotels/hotel_veneian_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_veneian_lasvagas_banner.jpg">
                                            <p></p>
                                            <p>这家位于拉斯维加斯大道（Las Vegas Strip）的五星级度假酒店采用意大利主题，设有宽敞的客房、19家国际餐厅、最先进的赌场、5英亩（2公顷）的游泳池平台以及拥有逾80家精品店的内部Grand Canal Shoppes购物中心。</p>
                                            <p>Venetian Resort Hotel and Casino生态度假酒店的宽敞套房均设有带餐桌和平面高清有线电视的休息区以及带超大浴缸、独立玻璃淋浴间、大理石台和豪华洗浴用品的奢华连接浴室。Resort Venetian Hotel酒店设有3个室外游泳池，包括仅限成人使用的TAO海滩游泳池和夜总会，亦提供池畔餐厅和私人小屋出租服务。</p>
                                            <p>酒店内的Canyon Ranch SpaClub康体中心提供健身课程、按摩服务、面部和皮肤护理、水疗设备、针灸及全套美容服务。客人可与营养师和私人教练面谈。除了美国、意大利、亚洲和风味美食外，酒店还提供Thomas Keller’s Bouchon等各式餐饮选择，亦提供房内用餐服务。</p>
                                            <p>Venetian酒店的客人可在意大利格调的街头漫步，或乘坐威尼斯的贡多拉沿着带地道的大运河顺流而下。酒店内还设有杜莎夫人蜡像馆（Madame Tussauds Las Vegas)。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                            <p></p>
                                            <img class="ui fluid image" src="/images/hotels/hotel_veneian_lasvagas_bottom1.jpg">
                                            <p></p>
                                            <img class="ui fluid image" src="/images/hotels/hotel_veneian_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_veneian_lasvagas_logo.jpg',
                        ]),
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'Bellagio',
                            'name_cn' => '贝拉吉奥度假村',
                            'desc_en' => 'Across the street from Paris Las Vegas, this luxe, mammoth Strip casino resort is housed in an Italian-inspired, 36-story tower fronted by a man-made 8-acre lake featuring dancing fountains. The standard modern rooms feature custom artwork and marble bathrooms with soaking tubs; lavish suites and villas come with private elevator access, living rooms and butler service. ',
                            'desc_cn' => '百乐宫酒店（Bellagio）是位于美国内华达州拉斯维加斯大道上的一间赌场酒店，由美高梅集团持有及营运, 百乐宫酒店其中一项最著名的特色项目为酒店门前的人工湖，人工湖面积达32,000平方米，并提供音乐喷泉表演，是旅客必到的景点之一。',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>Right behind the famous Fountains of Bellagio, this luxury Las Vegas Strip hotel and casino offers an upscale day spa, multiple dining options and elegant rooms with marble private bathrooms. The Cirque du Soleil show "O" is on site.</p>
                                          <p><strong>SHOPPING </strong>– The richly-decorated rooms of the Bellagio come with a flat-screen satellite TV and electric drapes. Soft bathrobes, a minibar and an iPod docking station are provided. Bellagio guests can experience a variety of treatments at the spa or enjoy a massage beside one of 5 beautiful courtyard pools. Lush botanical gardens and a fine art gallery are open for viewing.</p>
                                          <p><strong>DINING</strong>– A wide range of dining options are available, including Michael Mina fine dining restaurant, open-air dining with fountain views at Picasso and contemporary Japanese dishes at Yellowtail. Sophisticated boutique shops and The Bank Nightclub are also in the hotel.</p>
                                          <p><strong>ENTERTAINMENT</strong>– The Las Vegas Bellagio is 3 miles from McCarran International Airport. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews.</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>这家豪华的赌场酒店位于拉斯维加斯大道（Las Vegas Strip），坐落在著名的Fountains of Bellagio喷泉的后面，拥有高档的日间SPA中心、多间餐饮场所以及带大理石浴室的典雅客房，内设太阳马戏团（Cirque du Soleil）的“O”水上主题演出。</p>
                                          <p>Bellagio酒店装饰华丽的客房配备了平面卫星电视、电动窗帘、柔软的浴袍、迷你吧和iPod基座。Bellagio酒店的客人可以在SPA中心体验各种理疗服务，在5座迷人的庭院泳池畔享受舒缓的按摩服务，或漫步葱翠的植物园和艺术画廊。</p>
                                          <p>酒店拥有各种餐饮场所，包括供应精致美食的Michael Mina餐厅、设有喷泉景户外用餐区的Picasso餐厅以及提供当代日本料理的Yellowtail餐厅。酒店内还设有高档精品店和The Bank Nightclub夜总会。</p>
                                          <p>Las Vegas Bellagio酒店距离麦卡伦国际机场（McCarran International Airport）有3英里（4.8公里）。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_Bellagio_lasvagas_logo.jpg',
                        ]),
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'Bellagio',
                            'name_cn' => '贝拉吉奥度假村',
                            'desc_en' => 'Across the street from Paris Las Vegas, this luxe, mammoth Strip casino resort is housed in an Italian-inspired, 36-story tower fronted by a man-made 8-acre lake featuring dancing fountains. The standard modern rooms feature custom artwork and marble bathrooms with soaking tubs; lavish suites and villas come with private elevator access, living rooms and butler service. ',
                            'desc_cn' => '百乐宫酒店（Bellagio）是位于美国内华达州拉斯维加斯大道上的一间赌场酒店，由美高梅集团持有及营运, 百乐宫酒店其中一项最著名的特色项目为酒店门前的人工湖，人工湖面积达32,000平方米，并提供音乐喷泉表演，是旅客必到的景点之一。',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>Right behind the famous Fountains of Bellagio, this luxury Las Vegas Strip hotel and casino offers an upscale day spa, multiple dining options and elegant rooms with marble private bathrooms. The Cirque du Soleil show "O" is on site.</p>
                                          <p><strong>SHOPPING </strong>– The richly-decorated rooms of the Bellagio come with a flat-screen satellite TV and electric drapes. Soft bathrobes, a minibar and an iPod docking station are provided. Bellagio guests can experience a variety of treatments at the spa or enjoy a massage beside one of 5 beautiful courtyard pools. Lush botanical gardens and a fine art gallery are open for viewing.</p>
                                          <p><strong>DINING</strong>– A wide range of dining options are available, including Michael Mina fine dining restaurant, open-air dining with fountain views at Picasso and contemporary Japanese dishes at Yellowtail. Sophisticated boutique shops and The Bank Nightclub are also in the hotel.</p>
                                          <p><strong>ENTERTAINMENT</strong>– The Las Vegas Bellagio is 3 miles from McCarran International Airport. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews.</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>这家豪华的赌场酒店位于拉斯维加斯大道（Las Vegas Strip），坐落在著名的Fountains of Bellagio喷泉的后面，拥有高档的日间SPA中心、多间餐饮场所以及带大理石浴室的典雅客房，内设太阳马戏团（Cirque du Soleil）的“O”水上主题演出。</p>
                                          <p>Bellagio酒店装饰华丽的客房配备了平面卫星电视、电动窗帘、柔软的浴袍、迷你吧和iPod基座。Bellagio酒店的客人可以在SPA中心体验各种理疗服务，在5座迷人的庭院泳池畔享受舒缓的按摩服务，或漫步葱翠的植物园和艺术画廊。</p>
                                          <p>酒店拥有各种餐饮场所，包括供应精致美食的Michael Mina餐厅、设有喷泉景户外用餐区的Picasso餐厅以及提供当代日本料理的Yellowtail餐厅。酒店内还设有高档精品店和The Bank Nightclub夜总会。</p>
                                          <p>Las Vegas Bellagio酒店距离麦卡伦国际机场（McCarran International Airport）有3英里（4.8公里）。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_Bellagio_lasvagas_logo.jpg',
                        ]),
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'Bellagio',
                            'name_cn' => '贝拉吉奥度假村',
                            'desc_en' => 'Across the street from Paris Las Vegas, this luxe, mammoth Strip casino resort is housed in an Italian-inspired, 36-story tower fronted by a man-made 8-acre lake featuring dancing fountains. The standard modern rooms feature custom artwork and marble bathrooms with soaking tubs; lavish suites and villas come with private elevator access, living rooms and butler service. ',
                            'desc_cn' => '百乐宫酒店（Bellagio）是位于美国内华达州拉斯维加斯大道上的一间赌场酒店，由美高梅集团持有及营运, 百乐宫酒店其中一项最著名的特色项目为酒店门前的人工湖，人工湖面积达32,000平方米，并提供音乐喷泉表演，是旅客必到的景点之一。',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>Right behind the famous Fountains of Bellagio, this luxury Las Vegas Strip hotel and casino offers an upscale day spa, multiple dining options and elegant rooms with marble private bathrooms. The Cirque du Soleil show "O" is on site.</p>
                                          <p><strong>SHOPPING </strong>– The richly-decorated rooms of the Bellagio come with a flat-screen satellite TV and electric drapes. Soft bathrobes, a minibar and an iPod docking station are provided. Bellagio guests can experience a variety of treatments at the spa or enjoy a massage beside one of 5 beautiful courtyard pools. Lush botanical gardens and a fine art gallery are open for viewing.</p>
                                          <p><strong>DINING</strong>– A wide range of dining options are available, including Michael Mina fine dining restaurant, open-air dining with fountain views at Picasso and contemporary Japanese dishes at Yellowtail. Sophisticated boutique shops and The Bank Nightclub are also in the hotel.</p>
                                          <p><strong>ENTERTAINMENT</strong>– The Las Vegas Bellagio is 3 miles from McCarran International Airport. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews.</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>这家豪华的赌场酒店位于拉斯维加斯大道（Las Vegas Strip），坐落在著名的Fountains of Bellagio喷泉的后面，拥有高档的日间SPA中心、多间餐饮场所以及带大理石浴室的典雅客房，内设太阳马戏团（Cirque du Soleil）的“O”水上主题演出。</p>
                                          <p>Bellagio酒店装饰华丽的客房配备了平面卫星电视、电动窗帘、柔软的浴袍、迷你吧和iPod基座。Bellagio酒店的客人可以在SPA中心体验各种理疗服务，在5座迷人的庭院泳池畔享受舒缓的按摩服务，或漫步葱翠的植物园和艺术画廊。</p>
                                          <p>酒店拥有各种餐饮场所，包括供应精致美食的Michael Mina餐厅、设有喷泉景户外用餐区的Picasso餐厅以及提供当代日本料理的Yellowtail餐厅。酒店内还设有高档精品店和The Bank Nightclub夜总会。</p>
                                          <p>Las Vegas Bellagio酒店距离麦卡伦国际机场（McCarran International Airport）有3英里（4.8公里）。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_Bellagio_lasvagas_logo.jpg',
                        ]),
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'Bellagio',
                            'name_cn' => '贝拉吉奥度假村',
                            'desc_en' => 'Across the street from Paris Las Vegas, this luxe, mammoth Strip casino resort is housed in an Italian-inspired, 36-story tower fronted by a man-made 8-acre lake featuring dancing fountains. The standard modern rooms feature custom artwork and marble bathrooms with soaking tubs; lavish suites and villas come with private elevator access, living rooms and butler service. ',
                            'desc_cn' => '百乐宫酒店（Bellagio）是位于美国内华达州拉斯维加斯大道上的一间赌场酒店，由美高梅集团持有及营运, 百乐宫酒店其中一项最著名的特色项目为酒店门前的人工湖，人工湖面积达32,000平方米，并提供音乐喷泉表演，是旅客必到的景点之一。',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>Right behind the famous Fountains of Bellagio, this luxury Las Vegas Strip hotel and casino offers an upscale day spa, multiple dining options and elegant rooms with marble private bathrooms. The Cirque du Soleil show "O" is on site.</p>
                                          <p><strong>SHOPPING </strong>– The richly-decorated rooms of the Bellagio come with a flat-screen satellite TV and electric drapes. Soft bathrobes, a minibar and an iPod docking station are provided. Bellagio guests can experience a variety of treatments at the spa or enjoy a massage beside one of 5 beautiful courtyard pools. Lush botanical gardens and a fine art gallery are open for viewing.</p>
                                          <p><strong>DINING</strong>– A wide range of dining options are available, including Michael Mina fine dining restaurant, open-air dining with fountain views at Picasso and contemporary Japanese dishes at Yellowtail. Sophisticated boutique shops and The Bank Nightclub are also in the hotel.</p>
                                          <p><strong>ENTERTAINMENT</strong>– The Las Vegas Bellagio is 3 miles from McCarran International Airport. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews.</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>这家豪华的赌场酒店位于拉斯维加斯大道（Las Vegas Strip），坐落在著名的Fountains of Bellagio喷泉的后面，拥有高档的日间SPA中心、多间餐饮场所以及带大理石浴室的典雅客房，内设太阳马戏团（Cirque du Soleil）的“O”水上主题演出。</p>
                                          <p>Bellagio酒店装饰华丽的客房配备了平面卫星电视、电动窗帘、柔软的浴袍、迷你吧和iPod基座。Bellagio酒店的客人可以在SPA中心体验各种理疗服务，在5座迷人的庭院泳池畔享受舒缓的按摩服务，或漫步葱翠的植物园和艺术画廊。</p>
                                          <p>酒店拥有各种餐饮场所，包括供应精致美食的Michael Mina餐厅、设有喷泉景户外用餐区的Picasso餐厅以及提供当代日本料理的Yellowtail餐厅。酒店内还设有高档精品店和The Bank Nightclub夜总会。</p>
                                          <p>Las Vegas Bellagio酒店距离麦卡伦国际机场（McCarran International Airport）有3英里（4.8公里）。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_Bellagio_lasvagas_logo.jpg',
                        ]),
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'Bellagio',
                            'name_cn' => '贝拉吉奥度假村',
                            'desc_en' => 'Across the street from Paris Las Vegas, this luxe, mammoth Strip casino resort is housed in an Italian-inspired, 36-story tower fronted by a man-made 8-acre lake featuring dancing fountains. The standard modern rooms feature custom artwork and marble bathrooms with soaking tubs; lavish suites and villas come with private elevator access, living rooms and butler service. ',
                            'desc_cn' => '百乐宫酒店（Bellagio）是位于美国内华达州拉斯维加斯大道上的一间赌场酒店，由美高梅集团持有及营运, 百乐宫酒店其中一项最著名的特色项目为酒店门前的人工湖，人工湖面积达32,000平方米，并提供音乐喷泉表演，是旅客必到的景点之一。',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>Right behind the famous Fountains of Bellagio, this luxury Las Vegas Strip hotel and casino offers an upscale day spa, multiple dining options and elegant rooms with marble private bathrooms. The Cirque du Soleil show "O" is on site.</p>
                                          <p><strong>SHOPPING </strong>– The richly-decorated rooms of the Bellagio come with a flat-screen satellite TV and electric drapes. Soft bathrobes, a minibar and an iPod docking station are provided. Bellagio guests can experience a variety of treatments at the spa or enjoy a massage beside one of 5 beautiful courtyard pools. Lush botanical gardens and a fine art gallery are open for viewing.</p>
                                          <p><strong>DINING</strong>– A wide range of dining options are available, including Michael Mina fine dining restaurant, open-air dining with fountain views at Picasso and contemporary Japanese dishes at Yellowtail. Sophisticated boutique shops and The Bank Nightclub are also in the hotel.</p>
                                          <p><strong>ENTERTAINMENT</strong>– The Las Vegas Bellagio is 3 miles from McCarran International Airport. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews.</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>这家豪华的赌场酒店位于拉斯维加斯大道（Las Vegas Strip），坐落在著名的Fountains of Bellagio喷泉的后面，拥有高档的日间SPA中心、多间餐饮场所以及带大理石浴室的典雅客房，内设太阳马戏团（Cirque du Soleil）的“O”水上主题演出。</p>
                                          <p>Bellagio酒店装饰华丽的客房配备了平面卫星电视、电动窗帘、柔软的浴袍、迷你吧和iPod基座。Bellagio酒店的客人可以在SPA中心体验各种理疗服务，在5座迷人的庭院泳池畔享受舒缓的按摩服务，或漫步葱翠的植物园和艺术画廊。</p>
                                          <p>酒店拥有各种餐饮场所，包括供应精致美食的Michael Mina餐厅、设有喷泉景户外用餐区的Picasso餐厅以及提供当代日本料理的Yellowtail餐厅。酒店内还设有高档精品店和The Bank Nightclub夜总会。</p>
                                          <p>Las Vegas Bellagio酒店距离麦卡伦国际机场（McCarran International Airport）有3英里（4.8公里）。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_Bellagio_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_Bellagio_lasvagas_logo.jpg',
                        ]),
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'ARIA Resort & Casino at CityCenter Las Vegas',
                            'name_cn' => '拉斯维加斯市中心艾莉亚赌场度假酒店',
                            'desc_en' => 'This upscale casino resort on the Strip is 1.9 miles from Bali Hai Golf Club and 2.2 miles from McCarran International Airport. Refined rooms (some with views of the Strip) feature floor-to-ceiling windows and 42-inch flat-screen TVs. WiFi is included in the resort fee. Suites add separate living spaces and wet bars.',
                            'desc_cn' => '豪华的5星级Aria Resort And Casino坐落于高档，离杜莎夫人蜡像馆，The Platters及齐格菲与罗伊的秘密花园与海豚馆几分钟路程。 建于2009年，酒店综合埃及的建筑风格及现代化设施于一体。餐厅将在完美的氛围下提供精美的中国的佳肴。',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_ARIAResort_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>Right behind the famous Fountains of Bellagio, this luxury Las Vegas Strip hotel and casino offers an upscale day spa, multiple dining options and elegant rooms with marble private bathrooms. The Cirque du Soleil show "O" is on site.</p>
                                          <p><strong>SHOPPING </strong>– The richly-decorated rooms of the Bellagio come with a flat-screen satellite TV and electric drapes. Soft bathrobes, a minibar and an iPod docking station are provided. Bellagio guests can experience a variety of treatments at the spa or enjoy a massage beside one of 5 beautiful courtyard pools. Lush botanical gardens and a fine art gallery are open for viewing.</p>
                                          <p><strong>DINING</strong>– A wide range of dining options are available, including Michael Mina fine dining restaurant, open-air dining with fountain views at Picasso and contemporary Japanese dishes at Yellowtail. Sophisticated boutique shops and The Bank Nightclub are also in the hotel.</p>
                                          <p><strong>ENTERTAINMENT</strong>– The Las Vegas Bellagio is 3 miles from McCarran International Airport. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews.</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_ARIAResort_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_ARIAResort_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_ARIAResort_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>这家高档度假酒店坐落于拉斯维加斯大道（Las Vegas Strip），设有一个15万平方英尺的赌场、16间餐厅和内部娱乐表演。所有客房都享有迷人的城市景观，可透过落地窗欣赏到角落美景。</p>
                                          <p>ARIA Resort and Casino at CityCenter Las Vegas度假酒店的客房包括一个储藏丰富的迷你吧，一键式房间控制系统，可供客人迅速自己布置客房，如灯光和温度。连接浴室内提供舒适的浴袍以及带凳子和浴缸的玻璃淋浴间。客人可以在3个室外游泳池和3个热浴缸中放松身心。仅供成人使用的季节性LIQUID Pool Lounge酒廊提供DJ娱乐活动、餐厅、酒吧和私人小屋出租服务。</p>
                                          <p>酒店内的Spa at ARIA拥有62间理疗室，提供按摩、面部护理和全方位的美发服务。酒店还提供个人培训和团体健身课程。ARIA酒店呈献太阳剧团（Cirque du Soleil）的Zarkana表演。该演出融合了杂技艺术与超现实主义以营造出因欢乐和友爱而不再混乱而疯狂的世界。</p>
                                          <p>ARIA Resort and Casino CityCenter酒店距离麦卡伦国际机场（McCarran International Airport）有3英里（4.8公里）。旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_ARIAResort_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_ARIAResort_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_ARIAResort_lasvagas_logo.jpg',
                        ]),
                        factory(\App\Hotel::class)->make([
                            'name_en' => 'Encore at Wynn Las Vegas',
                            'name_cn' => '拉斯维加斯永利安可酒店',
                            'desc_en' => 'In an iconic curved high-rise on the Las Vegas Strip, this lavish casino hotel is 1 mile from Las Vegas Convention Center. Plush rooms offer floor-to-ceiling windows, pillow-top mattresses and tubs, plus WiFi access, iPhone docks and flat-screen TVs. Lux suites add individual features like massage rooms, granite wet bars, whirlpool tubs and free in-room breakfast.',
                            'desc_cn' => '这家五星级酒店和赌场正坐落于拉斯维加斯大道（Las Vegas Strip），毗邻Fashion Show Mall购物中心。酒店提供豪华的住宿、5间内部餐厅和一个获奖的Spa中心。',
                            'body_en' => '<img class="ui fluid image" src="/images/hotels/hotel_EncoreatWynn_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>Right on the Las Vegas Strip, this 5-star hotel and casino is next to Fashion Show Mall. It features luxury accommodations, 5 on-site restaurants and an award-winning spa.</p>
                                          <p><strong>SHOPPING </strong>– The spacious suites at the Encore at Wynn Las Vegas feature modern décor with floor-to-ceiling windows. Each suite has at least 2 flat-screen TVs, an iPod docking station and a living room with a minibar. A work area with state-of-the-art office equipment is included.</p>
                                          <p><strong>DINING</strong>– The restaurants of Encore feature a variety of cuisines, ranging from premium steaks to classic Italian. The hotel also has 3 on-site nightclubs, including XS Nightclub, which includes a full bar and entertainment by the outdoor pools and cabanas. The hotel fitness center features daily classes. Personal trainers are available. </p>
                                          <p><strong>ENTERTAINMENT</strong>– This hotel is within walking distance of all restaurants and attractions on Las Vegas Boulevard. Check-out is a relaxed 12:00 PM, so you can sleep in and really enjoy that morning cup joe. Las Vegas Strip is a great choice for travelers interested in shopping, entertainment and nightlife. This is our guests favorite part of Las Vegas, according to independent reviews.</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_EncoreatWynn_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_EncoreatWynn_lasvagas_bottom2.jpg">',
                            'body_cn' => '<img class="ui fluid image" src="/images/hotels/hotel_EncoreatWynn_lasvagas_banner.jpg">
                                          <p></p>
                                          <p>这家五星级酒店和赌场正坐落于拉斯维加斯大道（Las Vegas Strip），毗邻Fashion Show Mall购物中心。酒店提供豪华的住宿、5间内部餐厅和一个获奖的Spa中心。</p>
                                          <p>Encore at Wynn Las Vegas酒店宽敞的套房提供现代装潢，拥有落地窗。每间套房都配备了至少2台平面电视、iPod基座和一间带迷你吧的客厅，还设有一个配有先进办公设备的工作区。</p>
                                          <p>Encore酒店的餐厅提供各种美食，从优质牛排到典雅的意大利美食，应有尽有。酒店内还设有3间夜总会，包括XS夜总会，该夜总会提供一个完整的酒吧和池畔娱乐节目表演以及凉亭。</p>
                                          <p>酒店的健身中心提供日常课程，可提供私人教练。这家酒店距离拉斯维加斯大道上所有的餐馆和景点都只有几步之遥。 退房时间12:00，睡个懒觉再收拾行李也来得及！旅友们喜爱拉斯维加斯大道的理由：购物、娱乐和夜生活。根据我们网站上的真实住客点评，这里是拉斯维加斯的人气地区之一。</p>
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_EncoreatWynn_lasvagas_bottom1.jpg">
                                          <p></p>
                                          <img class="ui fluid image" src="/images/hotels/hotel_EncoreatWynn_lasvagas_bottom2.jpg">',
                            'logo' => '/images/hotels/hotel_EncoreatWynn_lasvagas_logo.jpg',
                        ]),
                    ]);
                });

    }
}
