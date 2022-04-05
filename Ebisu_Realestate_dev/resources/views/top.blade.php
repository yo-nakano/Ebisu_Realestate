@extends('layout')

@section('content')

    <div class="first_view">

        <video autoplay muted class="movie-1 w-100 vh-100" style="">
            <source src="{{ asset('/images/ebisu_mae_0331.mp4') }}" type="video/mp4">
        </video>

        <!-- 上の動画が消えた後に下の動画が同じ画角上で流れる用にする -->
        <video autoplay muted class="movie-2 w-100 vh-100 position-absolute top-0 start-0 d-none" style="">
            <source src="{{ asset('/images/ebisu_ato_0331.mp4') }}" type="video/mp4">
        </video>

        <!-- スキップボタン -->
        <div class="movie_skip position-absolute bottom-0 end-0">
            <button type="button" class="movie_skip_btn btn btn-outline-light">SKIP</button>
        </div>
    </div>

    <div class="second_view">
        <!-- ブラック背景テキストエリア -->
        <div class="black_wall text-white py-5">
            <!-- 移動 -->
            <div class="animation mb-4">
                <div class="access_info_group pt18">
                    <div class="access_info">
                        <div class="d-flex align-items-end">
                            <div>
                                <p class="pt14">JR山手線・埼京線</p>
                                <p><span class="pt14">湘南新宿ライン</span>「恵比寿」駅</p>
                            </div>
                            <p>徒歩<span class="pt42 gold-2" style="line-height: 100%;">11</span>分 /</p>
                        </div>
                        <p class="font-11">
                            <span class="pt9" style="color: transparent;">ーーーーーーーーーーー</span>
                            （恵比寿スカイウォークより徒歩7分）
                        </p>
                    </div>
                    <div class="access_info">
                        <div class="d-flex align-items-end">
                            <div>
                                <p class="pt14">&nbsp;</p>
                                <p><span class="pt14">東京メトロ日比谷線</span>「恵比寿」駅</p>
                            </div>
                            <p>徒歩<span class="pt42 gold-2" style="line-height: 100%;">13</span>分 /</p>
                        </div>
                        <p class="pt8">&nbsp;</p>
                    </div>
                    <div class="access_info">
                        <div class="d-flex align-items-end">
                            <div>
                                <p class="pt14">JR山手線・東京メトロ南北線・</p>
                                <p><span class="pt14">都営地下鉄三田線・東急目黒線</span>「目黒」駅</p>
                            </div>
                            <p>徒歩<span class="pt42 gold-2" style="line-height: 100%;">13</span>分</p>
                        </div>
                        <p class="pt8">&nbsp;</p>
                    </div>
                </div>
            </div>

            <!-- 枠 -->
            <div class="animation gold-2 pb-5">
                <!-- 枠1 -->
                <div class="mt-5 gold_info_group">
                    <div class="gold_info">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100 h5">
                                    <p class="font-11">&nbsp;</p>
                                    <p>最寄りのJR山手線・埼京線「恵比寿」駅より、</p>
                                    <p class="font-11">&nbsp;</p>
                                    <p>「渋谷」駅へ<span class="h4">2</span>分「新宿」駅へ<span class="h4">7</span>分「品川」駅へ<span class="h4">9</span>分</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gold_info">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100 h5">
                                    <p class="font-11">&nbsp;</p>
                                    <p>緑に包まれた<span class="h4">「ウエスティンホテル東京」</span></p>
                                    <p class="font-11"><span style="color: transparent;">ーーーーーーーーーーーーーーーーーー&nbsp;</span>※1</p>
                                    <p><span class="h4">「恵比寿ガーデンプレイス」</span>に隣接</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 枠2 -->
                <div class="gold_info_group">
                    <div class="gold_info">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100 h4">
                                    <p class="font-11">&nbsp;</p>
                                    <p class="font-11"><span style="color: transparent;">ーーーーーーーーーーーーーーーーーーーーーー&nbsp;</span>※2</p>
                                    <p class="" style="line-height:100%;">内廊下設計、角住戸率<span class="h3" style="line-height:100%;">57%</span>超</p>
                                    <p class="font-11">&nbsp;</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gold_info">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100 h5">
                                    <p class="font-11">&nbsp;</p>
                                    <p class="h4">大型SUV車、スポーツカーも安心</p>
                                    <p class="font-11"><span style="color: transparent;">ーーーーーーーーーーーーーーーーーーーーーー</span>※3</p>
                                    <p class="h4">全12台分の駐車場を設置</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- アンケートエリア -->
            <div class="animation my-5">
                <div class="mb-4">
                    <p class="gold-title-2 text-center pt24 mt-5 mb-4 mx-auto" style="width: 80%;">「お住まいについてのアンケート」にご協力ください。</p>
                </div>
                <div class="pb-5 questionnaire_info mx-auto" style="">
                    <div class="border-gold-2 text-center py-4 mx-auto w-100">
                        <p class="text-center mt-2 mb-3 pt16" style="line-height:2;"><span class="pb-1" style="border-bottom:1px solid white;">アンケート項目すべてにご協力いただいた方に、</span><br>もれなくAmazonギフト券(1000円相当)を進呈します。</p> 
                        <div class="">
                            <form action="/questionnaire" method="GET">
                                <button type="submit" class="gold_btn px-5 mh-parts mt-4 mb-2"><span class="pt20 text-white">アンケートはこちら</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INFOMATION -->
            <div class="row animation my-5">
                <div class="mb-4"> 
                    <p class="gold-title-2 text-center pt30 mx-auto" style="width: 80%;">INFORMATION</p>
                </div>
                <div class="">
                    <table class="text-white pt14 info_table mx-auto">
                        <tr>
                            <td class="py-3" scope="col">2022.4.15</td>
                            <td class="py-3 ps-5" scope="col">ラ・アトレ恵比寿グランガーデン　ホームページ開設</td>
                        </tr>
                        <tr>
                            <td class="py-3" scope="col">2022.4.15</td>
                            <td class="py-3 ps-5" scope="col">お住まいのアンケートを開設しました。(期間中、全てのアンケートに回答していただいた方にAmazonギフト券をプレゼントします。)</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>


        <div class="" style="padding-top:80px;">
            <!-- Ebisu -->
            <div class="read_more_link d-flex align-items-auto" style="margin-bottom:128px;">
                <div class="animation-0-zm h-100 picture_side">
                    <img src="{{ asset('/images/the ebisu photo1.png') }}" alt="サンプル画像" class="w-100" style="object-fit: cover;">
                </div>
                <div class="animation ebisu_col text_side">
                    <img class="d-block ebisu_img" src="{{ asset('/images/theebisu.svg') }}" alt="サンプル画像">
                    <p class="d-block ebisu_p s15">恵比寿、それも「恵比寿ガーデンプレイス」<br>
                        「ウエスティンホテル東京」を間近とする住宅地。<br>
                        その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
                        多くを語らずとも本物を知る人を魅了するレジデンス。<br>
                        「ラ・アトレ恵比寿」-ゆるぎなき矜持がここにある。
                    </p>
                    <div class="gold_line ebisu_line" style=""></div>
                    
                    <div style="width:80%">
                    <button class="d-block gold_btn read_more s15 mx-auto" type="button">
                        <a href="/concept" class="text-white mh-parts" style="text-decoration: none;">Read More</a>
                    </button>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="read_more_link d-flex align-items-auto" style="margin-bottom: 135px;">
                <div class="animation location_col text_side">
                    <img class="d-block location_img" src="{{ asset('/images/thelocation.svg') }}" alt="サンプル画像">
                    <p class="d-block mx-auto mb-4 location_p s15">洗練と成熟に抱かれた街、恵比寿。<br>
                        ここに誕生するのは、静けさと美しさを纏う邸宅。<br>
                        「ラ・アトレ恵比寿グランガーデン」<br>
                        建築の美しいモダン邸宅と街並みの美しい潤いが、<br>
                        ココに暮らす人々の姿さえも、この地の美しい風景となる。
                    </p>
                    <div class="gold_line w-50 mb-4 location_line"></div>
                    <button class="mx-auto d-block gold_btn read_more s15" type="button">
                        <a href="/location" class="text-white mh-parts" style="text-decoration: none; pointer-events:none;">Read More</a>
                    </button>
                </div>
                <div class="picture_side d-flex" style="padding-right:38px;">
                    <div class="d-flex flex-column h-100" style="width:calc(50% - 7px);">
                        <img src="{{ asset('/images/恵比寿ガーデンプレイス.png') }}" alt="サンプル画像" class="animation-0-zm location_pic">
                        <img src="{{ asset('/images/アメリカ橋公園.png') }}" alt="サンプル画像"  class="animation-0-zm location_pic" style="margin-top:20px;">
                    </div>
                    <div class="d-flex flex-column h-100" style="width:calc(50% - 7px); margin-left: 14px;">
                        <img src="{{ asset('/images/ウエスティンホテル.png') }}" alt="サンプル画像" class="animation-1-zm location_pic">
                        <img src="{{ asset('/images/国立科学博物館付属自然教育園.png') }}" alt="サンプル画像"  class="animation-1-zm location_pic" style="margin-top:20px;">
                    </div>
                </div>
            </div>

            <!-- Access -->
            <div class="read_more_link d-flex justify-content-between align-items-auto" style="margin-bottom: 130px;">
                <div class="picture_side animation-0-zm">
                    <img src="{{ asset('/images/4区.png') }}" alt="サンプル画像" class="w-100" style="object-fit: cover;">
                </div>
                <div class="text_side animation access_col">
                    <img class="d-block access_img w-75" src="{{ asset('/images/theaccess.svg') }}" alt="サンプル画像">
                    <p class="d-block mb-4 access_p s15">都心をもっと近くする、スピーディなアクセス。<br>
                        渋谷、新宿、東京、品川など主要都市を結ぶ山手線。<br>
                        渋谷、霞ヶ関、銀座へダイレクトに繋がることのできる日比谷線。<br>
                        ここには、目的に合わせて、路線を使いこなせる自由がある。
                    </p>
                    <div class="gold_line w-50 mb-4 access_line"></div>
                    <button class="mx-auto d-block gold_btn read_more s15" type="button">
                        <a href="/access" class="text-white mh-parts" style="text-decoration: none;">Read More</a>
                    </button>
                </div>
            </div>

            <!-- Design -->
            <div class="read_more_link d-flex justify-content-between align-items-auto" style="margin-bottom: 129px;">
                <div class="text_side animation design_col">
                    <img class="d-block design_img w-75" src="{{ asset('/images/thedesign.svg') }}" alt="サンプル画像">
                    <p class="d-block mb-4 design_p s15">常緑樹の深い緑も豊かな静謐なる街並み。周辺の<br>
                        高級住宅街にふさわしい丘上の瀟洒な5階建て。<br>
                        緑と調和しながら独自の存在感を醸し出しています。<br>
                        バルコニーの目立たない高級感にあふれる雁行フォルム。<br>
                        落ち着いた基調色が街並みと美しく調和します。
                    </p>
                    <div class="gold_line w-50 mb-4 design_line"></div>
                    <button class="mx-auto d-block gold_btn read_more s15" type="button">
                        <a href="/design" class="text-white mh-parts" style="text-decoration:none; pointer-events:none;">Read More</a>
                    </button>
                    <!-- <img src="{{ asset('/images/デザイン1.png') }}" alt="サンプル画像" class="design_img2 mt-4 mx-auto d-block img-fluid { max-width: 100%; height: auto }"> -->
                </div>
                <div class="picture_side animation-1-zm">
                    <img src="{{ asset('/images/the design photo1.png') }}" alt="サンプル画像" class="w-100">
                </div>
            </div>

            <!-- Plan -->
            <!-- <div class="row my-5 py-5">
                <div class="col-8 animation-0-zm">
                    <img src="{{ asset('/images/ダミーマップ.jpg') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                </div>
                <div class="col-4 animation ft2 plan_col">
                    <img class="d-block ms-5 plan_img w-75" src="{{ asset('/images/theplan.svg') }}" alt="サンプル画像">
                    <p class="d-block ms-5 mb-4 plan_p">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、
                        「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、
                        その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。多くを語らずとも、
                        本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、
                    </p>
                    <div class="gold_line w-50 mb-4 plan_line"></div>
                    <button class="mx-auto d-block gold_btn" type="button">
                        <a href="/plan" class="text-white mh-parts small" style="text-decoration:none; pointer-events:none;">Read More</a>
                    </button>
                </div>
            </div> -->

            <div class="animation-0-zm" style="padding:0 120px; margin: ;">
                <a href="/blanding" style="pointer-events:none;" class="w-100">
                <img src="{{ asset('/images/bland photo.png') }}" class="w-100">
                </a>
            </div>

            <div class="animation">
                <div class="" style="padding: 60px 425px;">
                    <button class="d-block copper_btn py-3 w-100" type="button">
                        <a href="/entry" class="text-white mh-parts pt19" style="text-decoration: none;">物件エントリー受付中</a>
                    </button>
                </div>
                <div class="row">
                    <p class="col-2"></p>
                    <p class="col-8 pt11">
                        ※1）恵比寿ガーデンプレイスまで徒歩4分(約260m)、ウエスティンホテル東京まで徒歩4分(約300m)<br>
                        ※2）総戸数21戸中12戸が角住戸により、57％超の角住戸率となります。<br>
                        ※3）全12台の駐車場は、大型SUV車・スポーツカーが3台駐車可能となります。また、1台分の屋外平置式シェアカーを含んでいます。<br>
                        ※正射画像データ:国土地理院刊行の正射画像データに、一部CG加工を施しており、実際とは異なります。<br>
                        ※航空写真:令和4年3月撮影の航空写真に、一部CG加工を施しており、実際とは異なります。<br>
                        ※掲載の写真は2022年3月に撮影したもので、一部加工・修正を施しております。<br>
                    </p>
                    <p class="col-2"></p>
                </div>
            </div>

        </div>
        
    </div>

    <!-- 後々"layout.js"に記述予定 -->
    <script>
        $(function(){
            $(window).on('load',function (){
                let btn = $('.read_more').outerHeight();

                var ebisu_col = $('.ebisu_col').height();
                var ebisu_img = $('.ebisu_img').height();
                var ebisu_p = $('.ebisu_p').height();
                
                var location_col = $('.location_col').height();
                var location_img = $('.location_img').height();
                var location_p = $('.location_p').height();

                var access_col = $('.access_col').height();
                var access_img = $('.access_img').height();
                var access_p = $('.access_p').height();

                var design_col = $('.design_col').height();
                var design_img = $('.design_img').height();
                var design_p = $('.design_p').height();

                // var plan_col = $('.plan_col').height();
                // var plan_img = $('.plan_img').height();
                // var plan_p = $('.plan_p').height();


                var ebisu_line = ebisu_col - ebisu_img - ebisu_p - btn - 48
                var location_line = location_col - location_img - location_p - btn - 48
                var access_line = access_col - access_img - access_p - btn - 48
                var design_line = design_col - design_img - design_p - btn  - 48
                // var plan_line = plan_col - plan_img - plan_p - btn - 48

                $('.ebisu_line').height(ebisu_line);
                $('.location_line').height(location_line);
                $('.access_line').height(access_line);
                $('.design_line').height(design_line);
                // $('.plan_line').height(plan_line);
            })
        })
    </script>

@endsection
