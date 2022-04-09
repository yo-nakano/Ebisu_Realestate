@extends('layout2')

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="{{ asset('/css/questionnaire.css') }}">

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>
<div id="questionnaire" style="margin: 150px 200px 0px;" class="pb-40px">
    <div class="">
        <h1 class="p-title gold-title-2 text-center ft2 s24" style="margin-bottom: 50px;">お住まいについてのアンケート</h1>
        <div class="pl-120px pr-120px">
            <img class="pb-40px img1" src="{{ asset('/images/お住まいアンケート1.png') }}">
        </div>
        <div class="text-center test ft2 s16">
            <p class="m-none" style="margin-bottom: 20px;">この度、目黒区・渋谷区・港区・品川区を中心とするエリアで、LAホールディングスグループの<br>
                株式会社ラ・アトレが分譲マンションの計画を検討しています。<br>
                そこで、今後の商品・販売計画の参考に資するべく当アンケートを企画させていただきました。<br>
                つきましては、目黒区三田・渋谷区恵比寿・港区白金台・品川区上大崎にお住いの皆様の<br>
                様々なご意見をお聞かせいただければ幸いです。
            </p>
        </div>
        <div class="pr-22px pl-22px">
            <img class="mb-45px img2" src="{{ asset('/images/お住まいのアンケート2.png') }}">
        </div>
    </div>
    <div class="main-content center-block mx-auto">
        <div class="text-center caption1 ft2 s16">
            <p class="m-none">下記のフォームに必要な項目を入力のうえ、「送信」ボタンを押してください。</p>
            <p class="m-none"><span class="badge badge-danger">必須</span>は必須項目です</p>
        </div>
        <form class="mailformpro" metdod="POST" action="{{ route('form.post') }}">
            @csrf
            <div style="padding-left: 20px; padding-right: 20px;">
                <table class="gold-table-questionnaire animation ft2 s14"
                    style="width: 100%;">
                    <tbody>
                        <tr class="top">
                            <td class="column1" style="width: 22%; padding-left: 1.5rem"><label for="name"><span
                                        class="badge badge-danger">必須</span>お名前</label>
                            </td>
                            <td class="column2" style="width: 120px;"></td>
                            <td class="column3" style="width: auto;">
                                <input class="input" style="width: 30%;" type="text" name="sei" data-kana="セイ" placeholder="姓" required
                                    data-error_placement="#sei">
                                <input class="input ms-2" style="width: 30%;" type="text" name="mei" data-kana="メイ" placeholder="名" required
                                    data-error_placement="#mei">
                                <div class="validation-message" id="sei"></div>
                                <div class="validation-message" id="mei"></div>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2"><label for="name"><span class="badge badge-danger">必須</span>フリガナ</label>
                            </td>
                            <td>
                                <input class="input" style="width: 30%;" type="text" name="sei_kana" data-charcheck="kana" placeholder="セイ"
                                    required data-error_placement="#sei-kana">
                                <input class="input ms-2" type="text" name="mei_kana" data-charcheck="kana"
                                    placeholder="メイ" style="width: 30%;" required data-error_placement="#mei-kana">
                                <div class="validation-message" id="sei-kana"></div>
                                <div class="validation-message" id="mei-kana"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2"><label for="name"><span class="badge badge-danger">必須</span>性別</label></td>
                            <td style="padding-top: 10px; padding-bottom: 10px;">
                                <div class="s16"><input type="radio" name="gender" value="male" data-error_placement="#gender">男性
                                </div>
                                <div class="s16"><input type="radio" name="gender" value="female" data-error_placement="#gender">女性
                                </div>
                                <div class="validation-message" id="gender"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2"><label for="name"><span class="badge badge-danger">必須</span>ご家族人数</label>
                            </td>
                            <td>
                                <div><input type="text" style="width: 70px;" name="family_size" required data-error_placement="#family_size"
                                        class="me-2">人
                                </div>
                                <div class="validation-message" id="family_size"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem"><label for="name" class="s14 ft2"><span class="badge badge-danger">必須</span>ご住所</label></td>
                            <td colspan="2" style="padding-top: 10px; padding-bottom: 10px;" class="ft2">
                                <table class="questionnaire-table-nest ft2" style="width: 100%;">
                                    <tr rowspan="2">
                                        <td valign="top" style="width: 120px;">
                                            <label for="name" class="s14">郵便番号<span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td>
                                            <input type="text" style="width: 60px;" name="home_post_code"
                                                data-error_placement="#home_post_code"> - <input type="text" style="width: 100px;">
                                            <div class="validation-message" id="home_post_code"></div>
                                            <p style="margin: 0;" class="s12">※半角数字で入力してください</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">都道府県<span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            <select name="home_prefectures" class="s11">
                                                <option value="">選択</option>
                                                @foreach ($prefectures as $prefecture)
                                                <option value="{{ $prefecture }}"
                                                    data-error_placement="#home_prefectures">
                                                    {{$prefecture}}</option>
                                                @endforeach
                                                <div class="validation-message" id="home_prefectures"></div>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">市区町村<span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            <input type="text" style="width: 250px;" name="home_manicipalities"
                                                data-error_placement="#home_manicipalities">
                                            <div class="validation-message" id="home_manicipalities"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">丁目番地<span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            <input type="text" style="width: 250px;"  name="home_chome_address"
                                                data-error_placement="#home_chome_address">
                                            <div class="validation-message" id="home_chome_address"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">建物名</label>
                                        </td>
                                        <td class="py-1">
                                            <input type="text" style="width: 250px;"  name="home_building_name">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2"><label for="name" class="s14"><span
                                        class="badge badge-danger">必須</span>現在のお住まいの年数</label>
                            </td>
                            <td>
                                <div><input type="text" style="width: 60px;"  name="years_of_residence" required
                                        data-error_placement="#years_of_residence" class="me-2"><span class="s14">年</span></div>
                                <div class="validation_message" id="years_of_residence"></div>
                                <p style="margin: 0;" class="s12">※半角数字で入力してください</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2"><label for="name" class="s14"><span class="badge badge-danger">必須</span>現在お住まいの住居形態<br>
                                    <p style="text-indent: 2.75rem; margin: 0;">※該当するものを1つだけ</p>
                                       <p style="text-indent: 3.75rem; margin: 0;">選択してください。</p></label></td>
                            <td>
                                <div class="s16"><input type="radio" name="housing_form"
                                        data-error_placement="#housing_form">分譲マンション
                                </div>
                                <div class="s16"><input type="radio" name="housing_form" data-error_placement="#housing_form">一戸建持家
                                </div>
                                <div class="s16"><input type="radio" name="housing_form"
                                        data-error_placement="#housing_form">賃貸マンション
                                </div>
                                <div class="s16"><input type="radio" name="housing_form" data-error_placement="#housing_form">社宅・官舎
                                </div>
                                <div class="s16"><input type="radio" name="housing_form"
                                        data-error_placement="#housing_form">その他<input class="ms-2" type="text"></div>
                                <div class="validation_message" id="housing_form"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2" class="s14"><label for="name"><span class="badge badge-danger">必須</span>電話番号</label>
                            </td>
                            <td>
                                <input type="tel" name="phone_number" data-type="tel" name="電話番号"
                                    placeholder="(例)00099998888" data-error_placement="#phone_number">
                                <p style="margin: 0;" class="s12">※半角数字・ハイフンなしで入力してください</p>
                                <div class="validation_message" id="phone_number"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2">
                                <div><label for="name" class="s14"><span class="badge badge-danger">必須</span>メールアドレス</label></div>
                            </td>
                            <td>
                                <div><input type="email" style="width: 350px;" name="email" data-error_placement="#email"></div>
                                <div class="validation_message" id="email"></div>
                                <p style="margin: 0;" class="s12">※確認のためもう一度ご入力ください</p>
                                <div><input type="text" style="width: 350px;" name="confirm_email" data-error_placement="#confirm_email">
                                </div>
                                <div class="validation_message" id="confirm_email"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" colspan="2"><label for="name" class="s14"><span class="badge badge-danger">必須</span>勤務先名</label>
                            </td>
                            <td>
                                <div><input type="text" name="office_name" required data-error_placement="#office_name">
                                </div>
                                <div class="validation_message" id="office_name"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1.5rem" class="ft2"><label for="name"><span class="badge badge-danger">必須</span>勤務先ご住所</label></td>
                            <td colspan="2">
                                <table class="questionnaire-table-nest ft2" style="width: 100%;">
                                    <tr rowspan="2">
                                        <td style="width: 120px;" valign="top" class="s16">
                                            <label for="name" class="s14 ft2">郵便番号<span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td>
                                            <input type="text" style="width: 60px;" name="work_post_code"
                                                data-error_placement="#work_post_code"> - <input style="width: 100px;">
                                            <div class="validation-message" id="work_post_code"></div>
                                            <p style="margin: 0;" class="s12">※半角数字(ハイフンなし)で入力してください</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14 ft2">都道府県<span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            <select name="work_prefectures" class="s11">
                                                <option value="">選択</option>
                                                @foreach ($prefectures as $prefecture)
                                                <option value="{{ $prefecture }}"
                                                    data-error_placement="#work_prefectures">
                                                    {{$prefecture}}</option>
                                                @endforeach
                                                <div class="validation-message" id="work_prefectures"></div>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14 ft2"><span class="s14 ft2">市区町村</span><span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            <input type="text" style="width: 250px;" name="work_manicipalities"
                                                data-error_placement="#work_manicipalities">
                                            <div class="validation-message" id="work_manicipalities"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14 ft2">丁目番地<span class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            <input type="text" style="width: 250px;" name="work_chome_address"
                                                data-error_placement="#work_chome_address">
                                            <div class="validation-message" id="work_chome_address"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">建物名</label>
                                        </td>
                                        <td class="py-1">
                                            <input type="text" style="width: 250px;" name="work_building_name">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="animation">
                <p class="text-center py-3 text-white ft2 s16"
                    style="background-color:#444444; margin-top: 50px; margin-bottom: 0;">お住まいについてのアンケート
                </p>
            </div>

            <div class="mt-2 animation ft2 s16">
                <p class="indent-1 mt-20px mb-45px">※アンケート項目すべてにご協力いただいた方に、もれなくAmazonギフトカードを進呈いたします。<br>※アンケートはすべて必須項目になります。</p>
                <!-- <p class="indent-1 mb-45px">※アンケートはすべて必須項目になります。</p> -->
                <div class="gold_line_bottom  pb-25px ft2 s14">
                    <div class="questionnaire questionnaire1">
                        <p class="pb-2"><span class="question-num mr-20px">1</span>仮に今後お住まいを購入するとした場合、どのような住居形態を希望しますか。(1つだけ回答)</p>
                        <ul class="s16">
                            <li><input type="checkbox" id="box_1" name="q1[]" value="1"
                                    onclick="click_cb(1, 'questionnaire1');">一戸建てにこだわる</li><br>
                            <li><input type="checkbox" id="box_2" name="q1[]" value="2"
                                    onclick="click_cb(1, 'questionnaire1');">マンションにこだわる</li><br>
                            <li><input type="checkbox" id="box_3" name="q1[]" value="3"
                                    onclick="click_cb(1, 'questionnaire1');">一戸建てもマンションも同様に検討する</li><br>
                        </ul>
                    </div>
                </div>
                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire2_1">
                        <p class="pb-2 ft2 s14"><span class="question-num mr-20px">2</span>あなたがお住まいに求める条件をお聞かせください。(それぞれ3つ回答)
                        </p>
                        <p class="s14">【駅名】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q2_1[]" value="1"
                                    onclick="click_cb(3, 'questionnaire2_1');">恵比寿</li>
                            <li><input type="checkbox" name="q2_1[]" value="2"
                                    onclick="click_cb(3, 'questionnaire2_1');">目黒</li>
                            <li><input type="checkbox" name="q2_1[]" value="3"
                                    onclick="click_cb(3, 'questionnaire2_1');">白金台</li>
                            <li><input type="checkbox" name="q2_1[]" value="4"
                                    onclick="click_cb(3, 'questionnaire2_1');">白金高輪
                            </li>
                            <li><input type="checkbox" name="q2_1[]" value="5"
                                    onclick="click_cb(3, 'questionnaire2_1');">麻布十番
                            </li>
                            <li><input type="checkbox" name="q2_1[]" value="6"
                                    onclick="click_cb(3, 'questionnaire2_1');">広尾<br>
                            </li><br>
                            <li><input type="checkbox" name="q2_1[]" value="7"
                                    onclick="click_cb(3, 'questionnaire2_1');">中目黒</li>
                            <li><input type="checkbox" name="q2_1[]" value="8"
                                    onclick="click_cb(3, 'questionnaire2_1');">代官山</li>
                            <li><input type="checkbox" name="q2_1[]" value="9"
                                    onclick="click_cb(3, 'questionnaire2_1');">品川</li>
                            <li><input type="checkbox" name="q2_1[]" value="10"
                                    onclick="click_cb(3, 'questionnaire2_1');">三田</li>
                            <li><input type="checkbox" name="q2_1[]" value="11"
                                    onclick="click_cb(3, 'questionnaire2_1');">その他<input class="ms-2" type="text">
                            </li><br>
                        </ul>
                    </div>
                    <div class="questionnaire questionnaire2_2">
                        <p class="s14">【立地】</p>
                        <ul class="s16">
                            <li>
                            <input type="checkbox" class="min_check" name="q2_2[]" value="1"
                                onclick="click_cb(3, 'questionnaire2_2');min_check1()">駅徒歩分数(
                            </li>
                            <input class="min" type="checkbox" name="q2_2[]" value="2" disabled onclick="min_check2()">～5分
                            <input class="min" type="checkbox" name="q2_2[]" value="3" disabled onclick="min_check2()">～7分
                            <input class="min" type="checkbox" name="q2_2[]" value="4" disabled onclick="min_check2()">～10分
                            <input class="min" type="checkbox" name="q2_2[]" value="5" disabled onclick="min_check2()">～12分
                            <input class="min" type="checkbox" name="q2_2[]" value="6" disabled onclick="min_check2()">～15分 )
                            <br>

                            <li>
                            <input type="checkbox" name="q2_2[]" value="7"
                                onclick="click_cb(3, 'questionnaire2_2');">通勤・通学に便利
                            </li>

                            <li>
                            <input type="checkbox" name="q2_2[]" value="8"
                                onclick="click_cb(3, 'questionnaire2_2');">落ち着いた環境
                            </li>

                            <li>
                            <input type="checkbox" name="q2_2[]" value="9"
                                onclick="click_cb(3, 'questionnaire2_2');">緑が多い
                            </li><br>

                            <li>
                            <input type="checkbox" name="q2_2[]" value="10"
                                onclick="click_cb(3, 'questionnaire2_2');">スーパーや病院など生活利便設備が徒歩圏に揃うこと
                            </li>

                            <li>
                            <input type="checkbox" name="q2_2[]" value="11"
                                onclick="click_cb(3, 'questionnaire2_2');">その他<input class="ms-2" type="text">
                            </li>
                        </ul>
                    </div>
                    <div class="questionnaire questionnaire2_3">
                        <p class="s14">【建物】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q2_3[]" value="1"
                                    onclick="click_cb(3, 'questionnaire2_3');">価格</li>
                            <li><input type="checkbox" name="q2_3[]" value="2"
                                    onclick="click_cb(3, 'questionnaire2_3');">広さ</li>
                            <li><input type="checkbox" name="q2_3[]" value="3"
                                    onclick="click_cb(3, 'questionnaire2_3');">間取り</li>
                            <li><input type="checkbox" name="q2_3[]" value="4"
                                    onclick="click_cb(3, 'questionnaire2_3');">眺望</li>
                            <li><input type="checkbox" name="q2_3[]" value="5"
                                    onclick="click_cb(3, 'questionnaire2_3');">駐車場有無
                            </li>
                            <li><input type="checkbox" name="q2_3[]" value="6"
                                    onclick="click_cb(3, 'questionnaire2_3');">角住戸</li>
                            <li><input type="checkbox" name="q2_3[]" value="7"
                                    onclick="click_cb(3, 'questionnaire2_3');">内廊下</li>
                            <li><input type="checkbox" name="q2_3[]" value="8"
                                    onclick="click_cb(3, 'questionnaire2_3');">低層住宅
                            </li><br>
                            <li><input type="checkbox" name="q2_3[]" value="9"
                                    onclick="click_cb(3, 'questionnaire2_3');">高層住宅
                            </li>
                            <li><input type="checkbox" name="q2_3[]" value="10"
                                    onclick="click_cb(3, 'questionnaire2_3');">収納の多さ
                            </li>
                            <li><input type="checkbox" name="q2_3[]" value="11"
                                    onclick="click_cb(3, 'questionnaire2_3');">設備の充実
                            </li>
                            <li><input type="checkbox" name="q2_3[]" value="12"
                                    onclick="click_cb(3, 'questionnaire2_3');">新築</li>
                            <li><input type="checkbox" name="q2_3[]" value="13"
                                    onclick="click_cb(3, 'questionnaire2_3');">その他<input class="ms-2" type="text">
                            </li><br>
                        </ul>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire3_1 ft2 s14">
                        <p class="pb-2"><span class="question-num mr-20px">3</span>仮に今後、マンション購入を検討する場合に希望される間取りと広さをお聞かせください。(それぞれ1つ回答)
                        </p>
                        <p class="s14">【ご希望の間取り】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q3_1[]" value="1"
                                    onclick="click_cb(1, 'questionnaire3_1');">1LDK
                            </li>
                            <li><input type="checkbox" name="q3_1[]" value="2"
                                    onclick="click_cb(1, 'questionnaire3_1');">2LDK
                            </li>
                            <li><input type="checkbox" name="q3_1[]" value="3"
                                    onclick="click_cb(1, 'questionnaire3_1');">3LDK
                            </li>
                            <li><input type="checkbox" name="q3_1[]" value="4"
                                    onclick="click_cb(1, 'questionnaire3_1');">その他<input class="ms-2" type="text">
                            </li><br>
                        </ul>
                    </div>
                    <div class="questionnaire questionnaire3_2">
                        <p class="s14">【ご希望の広さ】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q3_2[]" value="1"
                                    onclick="click_cb(1, 'questionnaire3_2');">～60㎡
                            </li>
                            <li><input type="checkbox" name="q3_2[]" value="2"
                                    onclick="click_cb(1, 'questionnaire3_2');">60㎡～
                            </li>
                            <li><input type="checkbox" name="q3_2[]" value="3"
                                    onclick="click_cb(1, 'questionnaire3_2');">70㎡～
                            </li>
                            <li><input type="checkbox" name="q3_2[]" value="4"
                                    onclick="click_cb(1, 'questionnaire3_2');">80㎡～
                            </li>
                            <li><input type="checkbox" name="q3_2[]" value="5"
                                    onclick="click_cb(1, 'questionnaire3_2');">90㎡～
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire4_1 ft2 s14">
                        <p>
                            <span class="question-num mr-20px">4</span>新築分譲マンション・分譲リノベーションマンションを購入するとした場合についてお聞かせください。(1つだけ回答)
                        </p>
                        <ul class="s16">
                            <li><input type="checkbox" value="1" name="q4[]"
                                    onclick="click_cb(1, 'questionnaire4_1');">新築分譲マンションのみ
                            </li>
                            <li><input type="checkbox" value="2" name="q4[]"
                                    onclick="click_cb(1, 'questionnaire4_1');">分譲リノベーションマンションのみ</li><br>
                            <li><input type="checkbox" value="3" name="q4[]"
                                    onclick="click_cb(1, 'questionnaire4_1');">どちらも検討する
                            </li>
                            <li><input type="checkbox" value="4" name="q4[]"
                                    onclick="click_cb(1, 'questionnaire4_1');">購入予定はない
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire5_1 ft2 s14">
                        <p class="pb-2">
                            <span class="question-num mr-20px">5</span>仮に今後、新たに住宅を検討するとした場合の購入エリアについてお聞かせください。(複数回答可)
                        </p>
                        <p class="s14">【渋谷区】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q5_1[]" value="1">恵比寿2丁目</li>
                            <li><input type="checkbox" name="q5_1[]" value="2">恵比寿3丁目</li>
                            <li><input type="checkbox" name="q5_1[]" value="3">恵比寿4丁目</li><br>
                            <li><input type="checkbox" name="q5_1[]" value="4">恵比寿南1丁目</li>
                            <li><input type="checkbox" name="q5_1[]" value="5">恵比寿南2丁目</li>
                            <li><input type="checkbox" name="q5_1[]" value="6">恵比寿南3丁目</li>
                        </ul>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire5_2">
                        <p class="s14">【目黒区】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q5_2[]" value="1">三田1丁目</li>
                            <li><input type="checkbox" name="q5_2[]" value="2">三田2丁目</li>
                            <li><input type="checkbox" name="q5_2[]" value="3">目黒1丁目</li>
                            <li><input type="checkbox" name="q5_2[]" value="4">目黒2丁目</li>
                        </ul>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire5_3">
                        <p class="s14">【港区】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q5_3[]" value="1">白金台2丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="2">白金台3丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="3">白金台4丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="4">白金台5丁目</li><br>
                            <li><input type="checkbox" name="q5_3[]" value="5">白金1丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="6">白金2丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="7">白金3丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="8">白金4丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="9">白金5丁目</li>
                            <li><input type="checkbox" name="q5_3[]" value="10">白金6丁目</li>
                        </ul>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire5_4">
                        <p class="s14">【品川区】</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q5_4[]" value="1">上大崎1丁目</li>
                            <li><input type="checkbox" name="q5_4[]" value="2">上大崎2丁目</li>
                            <li><input type="checkbox" name="q5_4[]" value="3">その他<input class="ms-2" type="text">
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire6_1 ft2 s14">
                        <p><span class="question-num mr-20px ft2 s14">6</span>仮に上記エリアで新規分譲マンションまたは分譲リノベーションマンションを検討する場合、どの住戸を検討しますか。</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q6[]" value="1">1LDK&emsp;&emsp;58㎡超&emsp;&emsp;12,000万円～
                            </li>
                            <li><input type="checkbox" name="q6[]" value="2">1LDK&emsp;&emsp;64㎡超&emsp;&emsp;14,000万円～
                            </li><br>
                            <li><input type="checkbox" name="q6[]" value="3">2LDK&emsp;&emsp;88㎡超&emsp;&emsp;18,000万円～
                            </li><br>
                            <li><input type="checkbox" name="q6[]" value="4">その他<input class="ms-2" type="text">
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire7 s14">
                        <p><span class="question-num mr-20px">7</span>世帯主様の職業は何でしょうか。</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q7[]" value="1">会社経営者</li>
                            <li><input type="checkbox" name="q7[]" value="2">会社役員</li>
                            <li><input type="checkbox" name="q7[]" value="3">会社員</li>
                            <li><input type="checkbox" name="q7[]" value="4">公務員</li><br>
                            <li><input type="checkbox" name="q7[]" value="5">医師</li>
                            <li><input type="checkbox" name="q7[]" value="6">弁護士</li>
                            <li><input type="checkbox" name="q7[]" value="7">その他<input class="ms-2" type="text">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire8 ft2 s14">
                        <p><span class="question-num mr-20px">8</span>世帯主様の通勤手段は何でしょうか。</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q8[]" value="1">電車</li>
                            <li><input type="checkbox" name="q8[]" value="2">車</li>
                            <li><input type="checkbox" name="q8[]" value="3">バイク</li>
                            <li><input type="checkbox" name="q8[]" value="4">自転車</li>
                            <li><input type="checkbox" name="q8[]" value="5">その他<input class="ms-2" type="text">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire9 ft2 s14">
                        <p class="pb-2"><span class="question-num mr-20px">9</span>現在のお住まいで所有している自家用車の台数と車種をお聞かせ下さい。
                        </p>
                        <p class="s16">［台 数］<input type="text" class="me-2">台 ［車 種］<input type="text" name="q9"></p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire10 ft2 s14">
                        <p class="pb-2"><span class="question-num-2 mr-20px-2">10</span>ご家族全体の年収をお聞かせください。</p>
                        <ul class="s16">
                            <li><input type="checkbox" name="q10[]" value="1">～1,000万円</li>
                            <li><input type="checkbox" name="q10[]" value="2">1,001万円～1,500万円</li>
                            <li><input type="checkbox" name="q10[]" value="3">1,501万円～2,000万円</li>
                            <li><input type="checkbox" name="q10[]" value="4">2,001万円～</li>
                        </ul>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire11 ft2 s14">
                        <p class="pb-2"><span
                                class="question-num-2 mr-20px-2">11</span>目黒区三田1丁目の分譲リノベーションマンションについてご興味はございますか。
                        </p>
                        <ul class="s14">
                            <li><input type="checkbox" name="q11" value="1">ある</li><br>
                            <li><input type="checkbox" name="q11" value="2">ない</li>
                        </ul>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire12 ft2 s14">
                        <p class="pb-2"><span class="question-num-2 mr-20px-2">12</span>現在の住宅から買い替え予定はありますか。</p>
                        <ul class="s14">
                            <li><input type="checkbox" name="q12_1[]" value="1">ある<input type="text" name="q12_2" class="mx-2 w-25">年以内</li><br>
                            <li><input type="checkbox" name="q12_1[]" value="2">ない</li>
                        </ul>
                    </div>
                </div>
                <div class="gold_line_bottom pt-30px">
                    <div class="questionnaire questionnaire13 ft2 s14">
                        <div>
                            <p><span class="question-num-2 mr-20px-2">13</span>現在の住宅購入をする場合の予算はどのぐらいですか。</p>
                            <p class="indent-1 s16"><input type="text" name="q13" class="me-2">万円</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-end animation mb-45px ft2 s12">アンケートにご協力いただき、誠にありがとうございました。</p>

            <button class="mh-parts btn btn-dark mb-35px d-block mx-auto" style="width: 220px;"><span
                    class="p-3 s18 ft2">入力内容の確認</span></button>

        </form>
    </div>
    <div class="border border-dark animation mb-40px ft2 s12">
        <p class="m-none pt-25px pr-20px pl-20px pb-25px">【アンケートご回答者様からご提供いただいた個人情報の取り扱いについて】<br>
            ※本アンケートは市場調査(商品企画)に反映するために企画したものです。<br>
            ※ご回答内容につきましては、ご回答を集計処理・保管をいたしますので、皆様にご迷惑をおかけすることは一切ございませんことを、確約させていただきます。<br>
            &emsp;忌憚のないご意見を頂戴できましたら、幸いでございます。<br>
            ※ご提供いただきました個人情報については、アンケート謝礼送付、本エリアでの物件情報をお送りするために利用いたします。<br>
            ※当社は、個人情報の保護に関する法令、国が定める指針その他の規範を尊重・遵守し、個人情報の適正な取り扱いと保護に努めます。<br>
            &emsp;当社の「個人情報保護方針」につきましては、https://lattrait.co.jp/privacy/をご覧ください。<br>
            ※アンケートにご協力いただいた方は、今後販売する本プロジェクトへの優先的なご案内をさせていただく際にも利用させていただきます。<br>
            <調査主体・調査実施>株式会社ラ・アトレ　<アンケート集計・調査分析>株式会社アドバンスクリエイティブ

        </p>
    </div>
</div>
@endsection