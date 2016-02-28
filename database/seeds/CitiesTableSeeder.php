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
                'slider_caption_cn' => '欢迎来到拉斯维加斯;出发前请及早预定以获得最佳优惠',
                'slider_caption_en' => 'Welcome to Las Vegas;Book your Activities and Sightseeing Tours before you go.',
                'body_cn' => '<p>拉斯维加斯位于内华达州的莫哈韦沙漠里，是一个以拥有不懈活力而闻名的度假胜地，有24小时营业的娱乐场和无尽的娱乐项目。其焦点是在拉斯维加斯大道，仅有4个多英里长，但是遍布精致的主题酒店，如金字塔形的卢克索酒店和有完整大运河的威尼斯酒店;以及豪华度假村包括有标志性音乐喷泉的贝拉吉欧酒店等;当然还有拉斯维加斯最出名的无数娱乐场。</p>
                    <p>也许最早到达拉斯维加斯地区的游客是游牧的古印第安人，他们在这里走过并留下一万年前的岩画。</p>
                    <p>一位名为拉斐尔·里维拉的年轻墨西哥探险家据信作为第一个非北美土著人来到这里。而后的1829年，商人安东尼率领一个60人的商团沿着“西班牙小径”前往洛杉矶时经过这里，并把该地区被命名为拉斯维加斯：西班牙语“草地”的意思，因为它拥有丰富的野草，以及沙漠的泉水，为前往西部大开发的拓荒者们准备了一个营地。而1844年约翰C.</p>
                    <p>弗里蒙特，其有关拉斯维加斯的著作引诱了大批拓荒者到来。后来，拉斯维加斯市中心的弗里蒙特街因此而得名。</p>
                    <p>十一年后的摩门教教会的成员选择拉斯维加斯作为盐湖城和洛杉矶之间的中继站，在那里他们建立了物资供应的城堡。数年后， 该城堡被遗弃。但是该遗址还可以在拉斯维加斯大道和华盛顿大道的交汇处残存。</p>
                    <p>拉斯维加斯成立于1905年，与联合太平洋铁轨接壤的110英亩（45公顷）土地被拍卖成为市区。 1911年，拉斯维加斯成为了一个城市。</p>
                    <p>对于拉斯维加斯而言，1931年是关键的一年。当时，内华达州将赌博合法化，同时在附近开建胡佛水坝。建筑工人及其家属的大量涌入帮助拉斯维加斯避免了大萧条。该大坝于1935年竣工。</p>
                    <p>1941年，拉斯维加斯陆军航空兵学院成立，即目前的内利斯空军基地，这里的著名飞行表演队是"雷鸟"。</p>
                    <p>第二次世界大战之后，装饰华丽的酒店、博彩业和大牌娱乐成了拉斯维加斯的代名词。</p>
                    <p>1951年，第一颗原子弹在拉斯维加斯西北部65英里（105公里）的沙漠中爆炸。城市的居民和游客都能够亲眼目睹蘑菇云。</p>
                    <p>标志性的“欢迎来到拉斯维加斯”的标识以前并不存在，后来由贝蒂·威利斯，在1959年创建。</p>',
                'body_en' => '<p>Las Vegas, in Nevada’s Mojave Desert, is a resort town famed for its buzzing energy, 24-hour casinos and endless entertainment options. Its focal point is the Strip, just over 4 miles long and lined with elaborate theme hotels such as the pyramid-shaped Luxor and the Venetian, complete with Grand Canal; luxury resorts including the Bellagio, set behind iconic dancing fountains; and innumerable casinos.</p>
                              <p>Perhaps the earliest visitors to the Las Vegas area were nomadic Paleo-Indians, who traveled here 10,000 years ago, leaving behind petroglyphs. Anasazi and Paiute tribes followed at least 2,000 years ago.<br><br>A young Mexican scout named Rafael Rivera is credited as the first non-Native American to encounter the valley, in 1829. Trader Antonio Armijo led a 60-man party along the Spanish Trail to Los Angeles, California in 1829. The area was named Las Vegas, which is Spanish for "the meadows", as it featured abundant wild grasses, as well as desert spring waters for westward travelers. The year 1844 marked the arrival of John C. Fremont, whose writings helped lure pioneers to the area. Downtown Las Vegas\' Fremont Street is named after him.<br><br>Eleven years later members of the LDS Church chose Las Vegas as the site to build a fort halfway between Salt Lake City and Los Angeles, where they would travel to gather supplies. The fort was abandoned several years afterward. The remainder of this Old Mormon Fort can still be seen at the intersection of Las Vegas Boulevard and Washington Avenue.<br><br>Las Vegas was founded as a city in 1905, when 110 acres (45 ha) of land adjacent to the Union Pacific Railroad tracks were auctioned in what would become the downtown area. In 1911, Las Vegas was incorporated as a city.<br><br>1931 was a pivotal year for Las Vegas. At that time, Nevada legalized casino gambling and reduced residency requirements for divorce to six weeks. This year also witnessed the beginning of construction on nearby Hoover Dam. The influx of construction workers and their families helped Las Vegas avoid economic calamity during the Great Depression. The construction work was completed in 1935.<br><br>In 1941, the Las Vegas Army Air Corps Gunnery School was established. Currently known as Nellis Air Force Base, it is home to the aerobatic team called the Thunderbirds.<br><br>Following World War II, lavishly decorated hotels, gambling casinos and big-name entertainment became synonymous with Las Vegas.<br><br>The 1950s saw the opening of the Moulin Rouge, the first racially integrated casino-hotel in Las Vegas.<br><br>In 1951, the first atomic bomb was detonated at the Nevada Test Site, 65 miles (105 km) northwest of Las Vegas. City residents and visitors were able to witness the mushroom clouds until 1963 when the limited Test Ban Treaty required that nuclear tests be moved underground.<br><br>The iconic "Welcome to Las Vegas" sign, which was never located in the city, was created in 1959 by Betty Willis, who never copyrighted it.</p>
                              ',
                'package_cn' => '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th colspan="2">所有招行信用卡客户，只要订了“机+酒”套票，并至少在拉斯维加斯连住5晚及以上，将获得以下免费赠品：</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    在FASHION SHOW里使用的100美金用餐卡以及免费的购物护照
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    在部分全世界最好的零售商享受超高折扣!
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    享受大运河商场购物折扣
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    在Berger and Sons珠宝店的10%折扣
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    “买一送一”直升机畅游拉斯维加斯大道
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    太阳马戏团表演门票50%折扣
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    Range 72 的75折之折扣券
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    夜总会的VIP准入许可
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">总共价值超过5000美金！</th>
                            </tr>
                        </tfoot>
                    </table>',
                'package_en' => '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th colspan="2">Every CMB Cardholders that books a minimum of 5 nights will qualify for the following Exclusive Offers:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    $100 Dining Card, Free Shopping Passport at Fashion Show
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    Great Discounts at some of the best retailers in the world.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    Discounts at Grand Canal Shops
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    10% Discount on all Jewelery at Berger and Sons in the Fashion Show
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    2 for 1 Helicopter Tour of the Las Vegas Strip
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    50% discount on Cirque du Soleil tickets
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    25% of Range 702
                                </td>
                                <td>
                                    <i class="large green checkmark icon"></i>
                                    VIP Access to Nightclubs
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">Total Value of over $5,000USD.</th>
                            </tr>
                        </tfoot>
                    </table>',
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
