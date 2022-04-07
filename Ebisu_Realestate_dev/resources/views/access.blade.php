@extends('layout')

@section('content')


<!-- 開発対象 -->
<!-- 背景色、テキスト一時的に調整 -->
<div class="d-flex justify-content-center bg-black">
    <img  class="w-25 img-fluid mt-ex" src="{{ asset('/images/the access.svg') }}">
</div>

<div>

<div class="py-4" style="background-color: #000;">
    <div class="access_info_group">
        <div class="access_info ft2">
            <div class="d-flex align-items-end">
                <div>
                    <p class="s14">JR山手線・埼京線</p>
                    <p class="s14">湘南新宿ライン<span class="s18">「恵比寿」駅</span></p>
                </div>
                <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">11</span>分 /</p>
            </div>
            <p class="s9">
                <span style="color: transparent;">ーーーーーーーーーーー</span>
                （恵比寿スカイウォークより徒歩7分）
            </p>
        </div>
        <div class="access_info ft2">
            <div class="d-flex align-items-end">
                <div>
                    <p class="s14">&nbsp;</p>
                    <p class="s14">東京メトロ日比谷線<span class="s18">「恵比寿」駅</span></p>
                </div>
                <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">13</span>分 /</p>
            </div>
            <p class="s9">&nbsp;</p>
        </div>
        <div class="access_info ft2">
            <div class="d-flex align-items-end">
                <div>
                    <p class="s14">JR山手線・東京メトロ南北線・</p>
                    <p class="s14">都営地下鉄三田線・東急目黒線<span class="s18">「目黒」駅</span></p>
                </div>
                <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">13</span>分</p>
            </div>
            <p class="s9">&nbsp;</p>
        </div>
    </div>
</div>


<div class="main-content mx-auto" style="max-width:1200px; padding: 40px 40px 0 45px;">

    <!-- 路線図 -->
    <div class="animation d-flex justify-content-between w-100" > 
        <img  class="d-block animation-0-zm" style="width: calc(25% - 19px)" src="{{ asset('/images/access_shibuya.png') }}">
        <img  class="d-block animation-0-zm" style="width: calc(25% - 19px)" src="{{ asset('/images/access_roppongi.png') }}">
        <img  class="d-block animation-1-zm" style="width: calc(25% - 19px)" src="{{ asset('/images/access_shinjuku.png') }}">
        <img  class="d-block animation-1-zm" style="width: calc(25% - 19px)" src="{{ asset('/images/access_shinagawa.png') }}">
    </div>

    <p class="pt18 w-50 gold-2" style="margin:30px 0 10px 50%;">2駅7路線が利用可能。もっと自由な都心生活を。</p>

    <!-- 路線情報 -->
    <div class="d-flex justify-content-between align-items-between">
        <div class="d-flex flex-column justify-content-between animation-0-zm" style="width: 48%;">
            <img class="w-100" src="{{ asset('/images/rosenzu.svg') }}" style="margin-top: 20px;">
            <p class="s9 m-0">※各駅への所要時間はJR線「恵比寿」駅発、東京メトロ日比谷線「恵比寿」駅発、また東京メトロ南北線・<br>
                &emsp;都営三田線「目黒」駅発の所要時間は日中平常時、平日の13時台及び(  )内は通勤時8時台の<br>
                &emsp;最短所要時間を表記しています。<br>
                ※所要時間には、乗り換え・待ち時間は含まれません。(JR線・東京メトロ線・都営地下鉄線時刻表調べ)<br>
                ※2駅7路線とは、JR山手線・埼京線・湘南新宿ライン「恵比寿」駅、東京メトロ日比谷線「」恵比寿駅、<br>
                &emsp;JR山手線「目黒」駅、都営地下鉄三田線・東京メトロ南北線・東急目黒線「目黒」駅のことです。<br>
                ※現地からの徒歩分数は、80mを1分として算出し、端数は切り上げております。<br>
                ※掲載の情報は、令和4年3月現在によるもので変更になる場合があります。
            </p>
        </div>
        <div class="w-50 small animation">
            <p class="ft2 s11" style="margin-bottom: 18px;">「ラ・アトレ恵比寿グランガーデン」は、JR山手線・埼京線・湘南新宿ライン「恵比寿」駅徒歩11分の3路線、<br>
                東京メトロ日比谷線「恵比寿」駅徒歩13分の1路線、JR山手線・都営地下鉄三田線・東京メトロ南北線・<br>
                東急目黒線「目黒」駅徒歩13分の4路線が利用でき、都心の主要エリアへダイレクトアクセスが可能です。
            </p>

            <p class="border-bottom ft2 s13" style="padding-bottom:10px; margin-bottom:10px;">■ＪＲ山手線・埼京線・湘南新宿ライン「恵比寿」駅より</p>
            <table class="ft2 s11">
                <tr>
                    <td><span class="s18">「渋谷」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">2</span>分（1分）&nbsp;</td>
                    <td><span class="s18">「新宿」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">7</span>分（6分）</td>
                </tr>
                <tr>
                    <td class="s9">ＪＲ湘南新宿ライン利用</td>
                    <td class="s9">ＪＲ湘南新宿ライン利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「品川」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">9</span>分（9分）&nbsp;</td>
                    <td><span class="s18">「池袋」</span>駅へ直通…………<span class="s18">12</span>分（11分）</td>
                </tr>
                <tr>
                    <td class="s9">ＪＲ山手線利用</td>
                    <td class="s9">ＪＲ湘南新宿ライン利用</td>
                </tr>
            </table>
            
            <p class="border-bottom ft2 s13" style="padding-bottom:10px; margin-bottom:10px; margin-top:25px;">■東京メトロ日比谷線「恵比寿」駅より</p>
            <table class="ft2 s11">
                <tr>
                    <td><span class="s18">「六本木」</span>駅へ直通………<span class="s18">5</span>分（6分）</td>
                    <td><span class="s18">「霞ヶ関」</span>駅へ直通……&nbsp;<span class="s18">11</span>分（12分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ日比谷線利用</td>
                    <td class="s9">東京メトロ日比谷線利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「銀座」</span>駅へ直通…………<span class="s18">15</span>分（15分）</td>
                    <td><span class="s18">「東京」</span>駅へ直通…………<span class="s18">16</span>分（16分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ日比谷線利用</td>
                    <td class="s9">東京メトロ日比谷線利用、「霞ヶ関」駅で東京メトロ丸ノ内線乗り換え</td>
                </tr>
            </table>

            <p class="border-bottom ft2 s13" style="padding-bottom:10px; margin-bottom:10px; margin-top:25px;">■東京メトロ南北線・都営三田線「目黒」駅より</p>
            <table class="ft2 s11">
                <tr>
                    <td><span class="s18">「三田」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">7</span>分（7分）</td>
                    <td><span class="s18">「六本木一丁目」</span>駅へ直通……<span class="s18">9</span>分（9分）</td>
                </tr>
                <tr>
                    <td class="s9">都営三田線利用</td>
                    <td class="s9">東京メトロ南北線利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「永田町」</span>駅へ直通……&nbsp;<span class="s18">12</span>分（12分）</td>
                    <td><span class="s18">「大手町」</span>駅へ直通……&nbsp;<span class="s18">15</span>分（15分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ南北線利用</td>
                    <td class="s9">都営三田線利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「飯田橋」</span>駅へ直通……&nbsp;<span class="s18">18</span>分（18分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ南北線利用</td>
                </tr>
            </table>
        </div>
    </div>


    
    <p class="gold-2 animation ft2 s18" style="margin:65px 0 20px;">都心の様々な要所へ、タクシーでの移動にも優れたロケーションです。</p>
        
    <!-- タクシー情報 -->
    <div class="animation d-flex justify-content-start align-items-start" style="margin-bottom:30px;">
        <div class="d-flex align-items-center animation-0-zm" style="width:30%; margin-top:30px;">
            <img class="w-75" src="{{ asset('/images/access_taxi.png') }}">
            <img class="w-25" src="{{ asset('/images/access_taxi_mono.png') }}" style="margin-left:5px;">
        </div>
        <div class="animation ft2 s10" style="margin-left:10px;">
            <table class="taxi_table text-center" style="margin-bottom:22px;">
                <tr class="border-bottom">
                    <td></td>
                    <td></td>
                    <td class="s12" style="padding:0 0 9px 30px;">距離</td>
                    <td class="s12" style="padding:0 0 9px;">日中料金</td>
                    <td class="s12" style="padding:0 0 9px;">所要時間</td>
                    <td class="s12" style="padding:0 0 9px;">深夜料金</td>
                    <td class="s12" style="padding:0 30px 9px 0;">所要時間</td>
                    <td class="s12" style="padding:0 0 9px;">乗車場所</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s11"><span class="s16">品 川 駅 </span>から</td>
                    <td style="padding:8px 0 8px;"><span class="s11">SHINAGAWA</span></td>
                    <td><span class="s16 border-start" style="padding-left:30px;">3.9</span>km</td>
                    <td><span class="s16">1,700</span>円</td>
                    <td><span class="s16">14</span>分</td>
                    <td><span class="s16">2,020</span>円</td>
                    <td><span class="s16">14</span>分<span class="s16 border-end" style="padding-left:30px;"></span></td>
                    <td>(高輪口より乗車)</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s12"><span class="s16">六 本 木 駅 </span>から</td>
                    <td style="padding:8px 0 8px;"><span class="s11">ROPPONGI</span></td>
                    <td><span class="s16 border-start" style="padding-left:30px;">3.5</span>km</td>
                    <td><span class="s16">1,540</span>円</td>
                    <td><span class="s16">12</span>分</td>
                    <td><span class="s16">1,860</span>円</td>
                    <td><span class="s16">12</span>分<span class="s16 border-end" style="padding-left:30px;"></span></td>
                    <td>(六本木交差点より乗車)</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s12"><span class="s16">銀 座 駅 </span>から</td>
                    <td style="padding:8px 0 8px;"><span class="s11">GINZA</span></td>
                    <td><span class="s16 border-start" style="padding-left:30px;">6.9</span>km</td>
                    <td><span class="s16">2,980</span>円</td>
                    <td><span class="s16">24</span>分</td>
                    <td><span class="s16">3,540</span>円</td>
                    <td><span class="s16">23</span>分<span class="s16 border-end" style="padding-left:30px;"></span></td>
                    <td>(銀座4丁目交差点より乗車)</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s12"><span class="s16">東 京 駅 </span>から</td>
                    <td style="padding:8px 0 8px;"><span class="s11">TOKYO</span></td>
                    <td><span class="s16 border-start" style="padding-left:30px;">7.9</span>km</td>
                    <td><span class="s16">3,380</span>円</td>
                    <td><span class="s16">26</span>分</td>
                    <td><span class="s16">4,020</span>円</td>
                    <td><span class="s16">26</span>分<span class="s16 border-end" style="padding-left:30px;"></span></td>
                    <td>(丸ノ内南口より乗車)</td>
                </tr>
            </table>
            <p class="m-0 ft2 s9">※出典:Japan Taxi https://japantaxi<br>
                ※掲載の情報は2022年2月現在のJapan Taxiウェブサイトにて算出したもので実際の走行ルートは料金と異なる可能性があります。<br>
                &emsp;料金・所要時間は有料・高速道路を利用していない場合の内容です。深夜料金該当時間は22:00～5:00を設定しています。
            </p>
        </div>
    </div>
</div>



@endsection