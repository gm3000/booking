<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = \App\City::firstOrNew([]);

        $city->activities()->saveMany([
            factory(\App\Activity::class)->make([
                'name_en' => 'The New Yorker Helicopter Tour',
                'name_cn' => '纽约直升飞机观光游',
                'desc_en' => 'The New Yorker Helicopter Tour',
                'desc_cn' => '★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景
                              ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味
                              ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅',
                'body_en' => '<p>All aboard for a fantastic birds-eye view of the magic isle of Manhattan. Experience the beauty of the New York Harbor including an up-close view of the Statue of Liberty. Your journey in the sky will take you near the 120 year old Brooklyn Bridge, South Street Seaport, Governors Island and Ellis Island.<br><br>You will make your way up the Hudson River and enjoy the sights of the Chrysler and Empire State Buildings, World Financial Center, Chelsea Piers, Jacob Javits Convention Center, the Intrepid Sea, Air and Space Museum, Time Warner Center and Central Park. Dont forget about the New Jersey Coast including the Goldman Sachs Tower, Colgate Clock, Liberty State Park and you will also view Ground Zero.<br><br>All this and more of the dramatic New York skyline makes this tour a must for any visitor.<br><br>Meeting/pick-up point: Downtown Manhattan Heliport Pier 6 – East River, New York, NY 10004. Please call the Helicopter Flight Services 24-48 hours before your tour date to reconfirm your departure time.<br><br>Duration: 15 minutes.<br><br>Start/opening time: Monday-Saturday from 9:00am to 6:00pm and 9:00 am to 4:00 pm on Sundays. Please ensure you arrive at the meeting point at least 30 minutes prior to the tour start time.<br><br>Languages: English.<br><br>Others: Children under 2 years old must sit in an adults lap. All bags are subject to inspection. All passengers will view a safety video before flying. Only cameras and pocket wallets are permitted on the helicopters. Bags/purses must be locked up.</p>',
                'body_cn' => '<p>【概况】<br><br>
                                 ★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景<br>
                                 ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味<br>
                                 ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅<br><br>

                                 【产品介绍】<br><br>
                                 全新的观光直升飞机，最多可容纳7人，大型的透明窗户，可360度赏纽约美景。坐着机舱舒适的皮椅，自由伸展双腿，透过专门设计的超大观光玻璃机舱门，以180度的绝佳视线来俯瞰纽约，尽赏纽约港美景，近距离观看自由女神像。天空之旅将带您接近有120多年历史的布鲁克林大桥，还有南街海港、总督岛和埃利斯岛。乘着直升飞机，掠过哈德逊河上空，欣赏令人震撼的克莱斯勒大厦、帝国大厦、环球金融中心、切尔西码头、无畏号航天航空博物馆、时代华纳中心和中央公园等纽约客耳熟能详的地标性建筑和景点。当然，新泽西的海港、高盛大厦、科尔盖特钟、自由州立公园和世贸遗址也都尽收眼底。<br>
                                 全纽约最美的风景，尽在纽约观光直升飞机之旅。直升飞机将带您以不一样的视角鸟瞰纽约，欣赏纽约别样的美，快来给自己一个自由的空中之旅吧！<br><br>

                                 【机票类型】<br><br>
                                 * The New Yorker<br>
                                 时间：12-15分钟<br>
                                 途经景点：自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Ultimate Tour<br>
                                 时间：18-20分钟<br>
                                 途经景点：中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Deluxe Tour<br>
                                 时间：28-30分钟<br>
                                 途经景点：康尼岛、布鲁克林&新泽西、维拉萨诺大桥、曼哈顿北端、资助墓、中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br><br>

                                 【地点】<br><br>
                                 地点：Downtown Manhattan Heliport, Pier 6, East River & South Street(位于South Street Seaport和the Staten Island Ferry Terminal 之间)<br><br>

                                 【推荐交通】：地铁<br><br>
                                 - 方案一：乘坐地铁R到Whitehall Street，向东走至South Street，然后沿着东河向北走，直升飞机就在右侧，5分钟可达；<br>
                                 - 方案二：乘坐地铁#1到South Ferry，沿着东河向北走(朝着绿色大厦方向)，直升飞机就在右侧，4分钟可达；<br>
                                 - 方案三：地铁#4、#5到Bowling Green，向Staten Island Ferry走，左转进入South Street，直升飞机就在右侧，8分钟可达。<br><br>

                                 【开放时间】<br><br>
                                 * 周一到周六：9:00am-5:00pm<br><br>
                                 * 周日：10:00am-4:00pm<br><br>

                                 【温馨提示】<br><br>
                                 * 请提前半个小时到达乘坐直升飞机的地点</p>',
                'poster' => '/images/activities/Activity-NewYork1-3.jpg',
                'gallery' => '/images/activities/Activity-NewYork1-1.jpg;/images/activities/Activity-NewYork1-2.jpg;/images/activities/Activity-NewYork1-3.jpg;/images/activities/Activity-NewYork1-4.jpg;/images/activities/Activity-NewYork1-5.jpg'
            ]),
            factory(\App\Activity::class)->make([
                'name_en' => 'The New Yorker Helicopter Tour',
                'name_cn' => '纽约直升飞机观光游',
                'desc_en' => 'The New Yorker Helicopter Tour',
                'desc_cn' => '★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景
                              ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味
                              ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅',
                'body_en' => '<p>All aboard for a fantastic birds-eye view of the magic isle of Manhattan. Experience the beauty of the New York Harbor including an up-close view of the Statue of Liberty. Your journey in the sky will take you near the 120 year old Brooklyn Bridge, South Street Seaport, Governors Island and Ellis Island.<br><br>You will make your way up the Hudson River and enjoy the sights of the Chrysler and Empire State Buildings, World Financial Center, Chelsea Piers, Jacob Javits Convention Center, the Intrepid Sea, Air and Space Museum, Time Warner Center and Central Park. Dont forget about the New Jersey Coast including the Goldman Sachs Tower, Colgate Clock, Liberty State Park and you will also view Ground Zero.<br><br>All this and more of the dramatic New York skyline makes this tour a must for any visitor.<br><br>Meeting/pick-up point: Downtown Manhattan Heliport Pier 6 – East River, New York, NY 10004. Please call the Helicopter Flight Services 24-48 hours before your tour date to reconfirm your departure time.<br><br>Duration: 15 minutes.<br><br>Start/opening time: Monday-Saturday from 9:00am to 6:00pm and 9:00 am to 4:00 pm on Sundays. Please ensure you arrive at the meeting point at least 30 minutes prior to the tour start time.<br><br>Languages: English.<br><br>Others: Children under 2 years old must sit in an adults lap. All bags are subject to inspection. All passengers will view a safety video before flying. Only cameras and pocket wallets are permitted on the helicopters. Bags/purses must be locked up.</p>',
                'body_cn' => '<p>【概况】<br><br>
                                 ★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景<br>
                                 ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味<br>
                                 ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅<br><br>

                                 【产品介绍】<br><br>
                                 全新的观光直升飞机，最多可容纳7人，大型的透明窗户，可360度赏纽约美景。坐着机舱舒适的皮椅，自由伸展双腿，透过专门设计的超大观光玻璃机舱门，以180度的绝佳视线来俯瞰纽约，尽赏纽约港美景，近距离观看自由女神像。天空之旅将带您接近有120多年历史的布鲁克林大桥，还有南街海港、总督岛和埃利斯岛。乘着直升飞机，掠过哈德逊河上空，欣赏令人震撼的克莱斯勒大厦、帝国大厦、环球金融中心、切尔西码头、无畏号航天航空博物馆、时代华纳中心和中央公园等纽约客耳熟能详的地标性建筑和景点。当然，新泽西的海港、高盛大厦、科尔盖特钟、自由州立公园和世贸遗址也都尽收眼底。<br>
                                 全纽约最美的风景，尽在纽约观光直升飞机之旅。直升飞机将带您以不一样的视角鸟瞰纽约，欣赏纽约别样的美，快来给自己一个自由的空中之旅吧！<br><br>

                                 【机票类型】<br><br>
                                 * The New Yorker<br>
                                 时间：12-15分钟<br>
                                 途经景点：自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Ultimate Tour<br>
                                 时间：18-20分钟<br>
                                 途经景点：中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Deluxe Tour<br>
                                 时间：28-30分钟<br>
                                 途经景点：康尼岛、布鲁克林&新泽西、维拉萨诺大桥、曼哈顿北端、资助墓、中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br><br>

                                 【地点】<br><br>
                                 地点：Downtown Manhattan Heliport, Pier 6, East River & South Street(位于South Street Seaport和the Staten Island Ferry Terminal 之间)<br><br>

                                 【推荐交通】：地铁<br><br>
                                 - 方案一：乘坐地铁R到Whitehall Street，向东走至South Street，然后沿着东河向北走，直升飞机就在右侧，5分钟可达；<br>
                                 - 方案二：乘坐地铁#1到South Ferry，沿着东河向北走(朝着绿色大厦方向)，直升飞机就在右侧，4分钟可达；<br>
                                 - 方案三：地铁#4、#5到Bowling Green，向Staten Island Ferry走，左转进入South Street，直升飞机就在右侧，8分钟可达。<br><br>

                                 【开放时间】<br><br>
                                 * 周一到周六：9:00am-5:00pm<br><br>
                                 * 周日：10:00am-4:00pm<br><br>

                                 【温馨提示】<br><br>
                                 * 请提前半个小时到达乘坐直升飞机的地点</p>',
                'poster' => '/images/activities/Activity-NewYork1-3.jpg',
                'gallery' => '/images/activities/Activity-NewYork1-1.jpg;/images/activities/Activity-NewYork1-2.jpg;/images/activities/Activity-NewYork1-3.jpg;/images/activities/Activity-NewYork1-4.jpg;/images/activities/Activity-NewYork1-5.jpg'
            ]),
            factory(\App\Activity::class)->make([
                'name_en' => 'The New Yorker Helicopter Tour',
                'name_cn' => '纽约直升飞机观光游',
                'desc_en' => 'The New Yorker Helicopter Tour',
                'desc_cn' => '★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景
                              ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味
                              ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅',
                'body_en' => '<p>All aboard for a fantastic birds-eye view of the magic isle of Manhattan. Experience the beauty of the New York Harbor including an up-close view of the Statue of Liberty. Your journey in the sky will take you near the 120 year old Brooklyn Bridge, South Street Seaport, Governors Island and Ellis Island.<br><br>You will make your way up the Hudson River and enjoy the sights of the Chrysler and Empire State Buildings, World Financial Center, Chelsea Piers, Jacob Javits Convention Center, the Intrepid Sea, Air and Space Museum, Time Warner Center and Central Park. Dont forget about the New Jersey Coast including the Goldman Sachs Tower, Colgate Clock, Liberty State Park and you will also view Ground Zero.<br><br>All this and more of the dramatic New York skyline makes this tour a must for any visitor.<br><br>Meeting/pick-up point: Downtown Manhattan Heliport Pier 6 – East River, New York, NY 10004. Please call the Helicopter Flight Services 24-48 hours before your tour date to reconfirm your departure time.<br><br>Duration: 15 minutes.<br><br>Start/opening time: Monday-Saturday from 9:00am to 6:00pm and 9:00 am to 4:00 pm on Sundays. Please ensure you arrive at the meeting point at least 30 minutes prior to the tour start time.<br><br>Languages: English.<br><br>Others: Children under 2 years old must sit in an adults lap. All bags are subject to inspection. All passengers will view a safety video before flying. Only cameras and pocket wallets are permitted on the helicopters. Bags/purses must be locked up.</p>',
                'body_cn' => '<p>【概况】<br><br>
                                 ★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景<br>
                                 ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味<br>
                                 ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅<br><br>

                                 【产品介绍】<br><br>
                                 全新的观光直升飞机，最多可容纳7人，大型的透明窗户，可360度赏纽约美景。坐着机舱舒适的皮椅，自由伸展双腿，透过专门设计的超大观光玻璃机舱门，以180度的绝佳视线来俯瞰纽约，尽赏纽约港美景，近距离观看自由女神像。天空之旅将带您接近有120多年历史的布鲁克林大桥，还有南街海港、总督岛和埃利斯岛。乘着直升飞机，掠过哈德逊河上空，欣赏令人震撼的克莱斯勒大厦、帝国大厦、环球金融中心、切尔西码头、无畏号航天航空博物馆、时代华纳中心和中央公园等纽约客耳熟能详的地标性建筑和景点。当然，新泽西的海港、高盛大厦、科尔盖特钟、自由州立公园和世贸遗址也都尽收眼底。<br>
                                 全纽约最美的风景，尽在纽约观光直升飞机之旅。直升飞机将带您以不一样的视角鸟瞰纽约，欣赏纽约别样的美，快来给自己一个自由的空中之旅吧！<br><br>

                                 【机票类型】<br><br>
                                 * The New Yorker<br>
                                 时间：12-15分钟<br>
                                 途经景点：自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Ultimate Tour<br>
                                 时间：18-20分钟<br>
                                 途经景点：中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Deluxe Tour<br>
                                 时间：28-30分钟<br>
                                 途经景点：康尼岛、布鲁克林&新泽西、维拉萨诺大桥、曼哈顿北端、资助墓、中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br><br>

                                 【地点】<br><br>
                                 地点：Downtown Manhattan Heliport, Pier 6, East River & South Street(位于South Street Seaport和the Staten Island Ferry Terminal 之间)<br><br>

                                 【推荐交通】：地铁<br><br>
                                 - 方案一：乘坐地铁R到Whitehall Street，向东走至South Street，然后沿着东河向北走，直升飞机就在右侧，5分钟可达；<br>
                                 - 方案二：乘坐地铁#1到South Ferry，沿着东河向北走(朝着绿色大厦方向)，直升飞机就在右侧，4分钟可达；<br>
                                 - 方案三：地铁#4、#5到Bowling Green，向Staten Island Ferry走，左转进入South Street，直升飞机就在右侧，8分钟可达。<br><br>

                                 【开放时间】<br><br>
                                 * 周一到周六：9:00am-5:00pm<br><br>
                                 * 周日：10:00am-4:00pm<br><br>

                                 【温馨提示】<br><br>
                                 * 请提前半个小时到达乘坐直升飞机的地点</p>',
                'poster' => '/images/activities/Activity-NewYork1-3.jpg',
                'gallery' => '/images/activities/Activity-NewYork1-1.jpg;/images/activities/Activity-NewYork1-2.jpg;/images/activities/Activity-NewYork1-3.jpg;/images/activities/Activity-NewYork1-4.jpg;/images/activities/Activity-NewYork1-5.jpg'
            ]),
            factory(\App\Activity::class)->make([
                'name_en' => 'The New Yorker Helicopter Tour',
                'name_cn' => '纽约直升飞机观光游',
                'desc_en' => 'The New Yorker Helicopter Tour',
                'desc_cn' => '★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景
                              ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味
                              ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅',
                'body_en' => '<p>All aboard for a fantastic birds-eye view of the magic isle of Manhattan. Experience the beauty of the New York Harbor including an up-close view of the Statue of Liberty. Your journey in the sky will take you near the 120 year old Brooklyn Bridge, South Street Seaport, Governors Island and Ellis Island.<br><br>You will make your way up the Hudson River and enjoy the sights of the Chrysler and Empire State Buildings, World Financial Center, Chelsea Piers, Jacob Javits Convention Center, the Intrepid Sea, Air and Space Museum, Time Warner Center and Central Park. Dont forget about the New Jersey Coast including the Goldman Sachs Tower, Colgate Clock, Liberty State Park and you will also view Ground Zero.<br><br>All this and more of the dramatic New York skyline makes this tour a must for any visitor.<br><br>Meeting/pick-up point: Downtown Manhattan Heliport Pier 6 – East River, New York, NY 10004. Please call the Helicopter Flight Services 24-48 hours before your tour date to reconfirm your departure time.<br><br>Duration: 15 minutes.<br><br>Start/opening time: Monday-Saturday from 9:00am to 6:00pm and 9:00 am to 4:00 pm on Sundays. Please ensure you arrive at the meeting point at least 30 minutes prior to the tour start time.<br><br>Languages: English.<br><br>Others: Children under 2 years old must sit in an adults lap. All bags are subject to inspection. All passengers will view a safety video before flying. Only cameras and pocket wallets are permitted on the helicopters. Bags/purses must be locked up.</p>',
                'body_cn' => '<p>【概况】<br><br>
                                 ★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景<br>
                                 ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味<br>
                                 ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅<br><br>

                                 【产品介绍】<br><br>
                                 全新的观光直升飞机，最多可容纳7人，大型的透明窗户，可360度赏纽约美景。坐着机舱舒适的皮椅，自由伸展双腿，透过专门设计的超大观光玻璃机舱门，以180度的绝佳视线来俯瞰纽约，尽赏纽约港美景，近距离观看自由女神像。天空之旅将带您接近有120多年历史的布鲁克林大桥，还有南街海港、总督岛和埃利斯岛。乘着直升飞机，掠过哈德逊河上空，欣赏令人震撼的克莱斯勒大厦、帝国大厦、环球金融中心、切尔西码头、无畏号航天航空博物馆、时代华纳中心和中央公园等纽约客耳熟能详的地标性建筑和景点。当然，新泽西的海港、高盛大厦、科尔盖特钟、自由州立公园和世贸遗址也都尽收眼底。<br>
                                 全纽约最美的风景，尽在纽约观光直升飞机之旅。直升飞机将带您以不一样的视角鸟瞰纽约，欣赏纽约别样的美，快来给自己一个自由的空中之旅吧！<br><br>

                                 【机票类型】<br><br>
                                 * The New Yorker<br>
                                 时间：12-15分钟<br>
                                 途经景点：自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Ultimate Tour<br>
                                 时间：18-20分钟<br>
                                 途经景点：中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Deluxe Tour<br>
                                 时间：28-30分钟<br>
                                 途经景点：康尼岛、布鲁克林&新泽西、维拉萨诺大桥、曼哈顿北端、资助墓、中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br><br>

                                 【地点】<br><br>
                                 地点：Downtown Manhattan Heliport, Pier 6, East River & South Street(位于South Street Seaport和the Staten Island Ferry Terminal 之间)<br><br>

                                 【推荐交通】：地铁<br><br>
                                 - 方案一：乘坐地铁R到Whitehall Street，向东走至South Street，然后沿着东河向北走，直升飞机就在右侧，5分钟可达；<br>
                                 - 方案二：乘坐地铁#1到South Ferry，沿着东河向北走(朝着绿色大厦方向)，直升飞机就在右侧，4分钟可达；<br>
                                 - 方案三：地铁#4、#5到Bowling Green，向Staten Island Ferry走，左转进入South Street，直升飞机就在右侧，8分钟可达。<br><br>

                                 【开放时间】<br><br>
                                 * 周一到周六：9:00am-5:00pm<br><br>
                                 * 周日：10:00am-4:00pm<br><br>

                                 【温馨提示】<br><br>
                                 * 请提前半个小时到达乘坐直升飞机的地点</p>',
                'poster' => '/images/activities/Activity-NewYork1-3.jpg',
                'gallery' => '/images/activities/Activity-NewYork1-1.jpg;/images/activities/Activity-NewYork1-2.jpg;/images/activities/Activity-NewYork1-3.jpg;/images/activities/Activity-NewYork1-4.jpg;/images/activities/Activity-NewYork1-5.jpg'
            ]),
            factory(\App\Activity::class)->make([
                'name_en' => 'The New Yorker Helicopter Tour',
                'name_cn' => '纽约直升飞机观光游',
                'desc_en' => 'The New Yorker Helicopter Tour',
                'desc_cn' => '★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景
                              ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味
                              ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅',
                'body_en' => '<p>All aboard for a fantastic birds-eye view of the magic isle of Manhattan. Experience the beauty of the New York Harbor including an up-close view of the Statue of Liberty. Your journey in the sky will take you near the 120 year old Brooklyn Bridge, South Street Seaport, Governors Island and Ellis Island.<br><br>You will make your way up the Hudson River and enjoy the sights of the Chrysler and Empire State Buildings, World Financial Center, Chelsea Piers, Jacob Javits Convention Center, the Intrepid Sea, Air and Space Museum, Time Warner Center and Central Park. Dont forget about the New Jersey Coast including the Goldman Sachs Tower, Colgate Clock, Liberty State Park and you will also view Ground Zero.<br><br>All this and more of the dramatic New York skyline makes this tour a must for any visitor.<br><br>Meeting/pick-up point: Downtown Manhattan Heliport Pier 6 – East River, New York, NY 10004. Please call the Helicopter Flight Services 24-48 hours before your tour date to reconfirm your departure time.<br><br>Duration: 15 minutes.<br><br>Start/opening time: Monday-Saturday from 9:00am to 6:00pm and 9:00 am to 4:00 pm on Sundays. Please ensure you arrive at the meeting point at least 30 minutes prior to the tour start time.<br><br>Languages: English.<br><br>Others: Children under 2 years old must sit in an adults lap. All bags are subject to inspection. All passengers will view a safety video before flying. Only cameras and pocket wallets are permitted on the helicopters. Bags/purses must be locked up.</p>',
                'body_cn' => '<p>【概况】<br><br>
                                 ★ 全新观光直升飞机，透过超大观光玻璃，让您从高空以绝佳视线俯瞰纽约美景<br>
                                 ★ 天空之旅将带您游览自由女神像、帝国大厦、中央公园、布鲁克林大桥等著名景点，别有一番趣味<br>
                                 ★ 全纽约最美的风景，尽在纽约观光直升飞机之旅<br><br>

                                 【产品介绍】<br><br>
                                 全新的观光直升飞机，最多可容纳7人，大型的透明窗户，可360度赏纽约美景。坐着机舱舒适的皮椅，自由伸展双腿，透过专门设计的超大观光玻璃机舱门，以180度的绝佳视线来俯瞰纽约，尽赏纽约港美景，近距离观看自由女神像。天空之旅将带您接近有120多年历史的布鲁克林大桥，还有南街海港、总督岛和埃利斯岛。乘着直升飞机，掠过哈德逊河上空，欣赏令人震撼的克莱斯勒大厦、帝国大厦、环球金融中心、切尔西码头、无畏号航天航空博物馆、时代华纳中心和中央公园等纽约客耳熟能详的地标性建筑和景点。当然，新泽西的海港、高盛大厦、科尔盖特钟、自由州立公园和世贸遗址也都尽收眼底。<br>
                                 全纽约最美的风景，尽在纽约观光直升飞机之旅。直升飞机将带您以不一样的视角鸟瞰纽约，欣赏纽约别样的美，快来给自己一个自由的空中之旅吧！<br><br>

                                 【机票类型】<br><br>
                                 * The New Yorker<br>
                                 时间：12-15分钟<br>
                                 途经景点：自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Ultimate Tour<br>
                                 时间：18-20分钟<br>
                                 途经景点：中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br>
                                 * The Deluxe Tour<br>
                                 时间：28-30分钟<br>
                                 途经景点：康尼岛、布鲁克林&新泽西、维拉萨诺大桥、曼哈顿北端、资助墓、中央公园、哥伦比亚大学、洋基体育场、新泽西州帕利塞兹、乔治华盛顿大桥、自由女神像、埃利斯岛、自由塔、环球金融中心、克莱斯勒大厦、帝国大厦、切尔西码头、大无畏航天航空博物馆等<br><br>

                                 【地点】<br><br>
                                 地点：Downtown Manhattan Heliport, Pier 6, East River & South Street(位于South Street Seaport和the Staten Island Ferry Terminal 之间)<br><br>

                                 【推荐交通】：地铁<br><br>
                                 - 方案一：乘坐地铁R到Whitehall Street，向东走至South Street，然后沿着东河向北走，直升飞机就在右侧，5分钟可达；<br>
                                 - 方案二：乘坐地铁#1到South Ferry，沿着东河向北走(朝着绿色大厦方向)，直升飞机就在右侧，4分钟可达；<br>
                                 - 方案三：地铁#4、#5到Bowling Green，向Staten Island Ferry走，左转进入South Street，直升飞机就在右侧，8分钟可达。<br><br>

                                 【开放时间】<br><br>
                                 * 周一到周六：9:00am-5:00pm<br><br>
                                 * 周日：10:00am-4:00pm<br><br>

                                 【温馨提示】<br><br>
                                 * 请提前半个小时到达乘坐直升飞机的地点</p>',
                'poster' => '/images/activities/Activity-NewYork1-3.jpg',
                'gallery' => '/images/activities/Activity-NewYork1-1.jpg;/images/activities/Activity-NewYork1-2.jpg;/images/activities/Activity-NewYork1-3.jpg;/images/activities/Activity-NewYork1-4.jpg;/images/activities/Activity-NewYork1-5.jpg'
            ]),
        ]);
    }
}
