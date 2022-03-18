@extends('layout')

@section('content')


<!-- 開発対象 -->
<h1 class="p-title">ACCESS</h1>

<!-- 背景色、テキスト一時的に調整 -->
<div class="main-content container bg-dark text-white">

<!-- 路線図 -->
    <div class="row pt-3 pb-5 animation">
        <p>ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイ</p>
        <img  class="col-8 d-block mx-auto" src="{{ asset('/images/路線図.jpg') }}">
        <p class="small">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずと</p>
    </div>



    <!-- 路線情報 -->
    <div class="row pt-2 pb-2 animation">
        <p class="h3">■ＪＲ線「恵比寿」駅より</p>
        <div class="col-3 border">
            <p>「渋谷」駅へ直通…………………………………………2分（01分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「新宿」駅へ直通…………………………………………7分（06分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「品川」駅へ………………………………………………9分（09分）<br>ＪＲ山手線利用</p>
        </div>
        <div class="col-3 border">
            <p>「池袋」駅へ………………………………………………12分（11分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
    </div>

    <div class="row pt-2 pb-2 animation">
        <p class="h3">■タクシー利用料金</p>
        <div class="col-3 border">
            <p>「渋谷」駅へから…………………………………約0,000円</p>
        </div>
        <div class="col-3 border">
            <p>「新宿」駅へから…………………………………約0,000円</p>
        </div>
        <div class="col-3 border">
            <p>「品川」駅へ………………………………………約0,000円</p>
        </div>
        <div class="col-3 border">
            <p>「東京」駅へ………………………………………約0,000円</p>
        </div>
    </div>
    <div class="row pt-2 pb-2 animation">
        <p class="h3">■ＪＲ線「恵比寿」駅より</p>
        <div class="col-3 border">
            <p>「渋谷」駅へ直通…………………………………………2分（01分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「新宿」駅へ直通…………………………………………7分（06分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「品川」駅へ………………………………………………9分（09分）<br>ＪＲ山手線利用</p>
        </div>
        <div class="col-3 border">
            <p>「池袋」駅へ………………………………………………12分（11分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
    </div>


    <!-- ４つ写真 -->
    <div class="row pt-3 pb-5 animation">
        <p class="pb-3">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住ま</p>
        <img  class="col-3" src="{{ asset('/images/shibuya2.jpg') }}">
        <img class="col-3" src="{{ asset('/images/環境-新宿.png') }}">
        <img class="col-3" src="{{ asset('/images/_品川4179785.jpg') }}">
        <img class="col-3" src="{{ asset('/images/スクリーンショット (1057).png') }}">
        <p class="pt-3 pb-3 small">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住ま</p>
    </div>
  
    <div class="row pt-3 pb-5 animation">
        <p>ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま
        住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイ
        </p>
    </div>
        
    <!-- タクシー写真 -->
    <div class="row pt-3 pb-3 animation">
        <img class="col-3" src="{{ asset('/images/about_2.c821cf7.jpg') }}">
        <img class="col-3" src="{{ asset('/images/images-1.jpg') }}">
        <div class="col-3">
            <p class="border"><span class="small">■タクシー利用料金</span><br>
            「渋谷」駅へから…………………………………約0,000円<br>
            「新宿」駅へから…………………………………約0,000円<br>
            「品川」駅へ………………………………………約0,000円<br>
            「東京」駅へ………………………………………約0,000円
        </p>
        </div>
        <div class="col-3">
            <p>を知る人を魅了 → を知る人を魅了<br>
                を知る人を魅了 → を知る人を魅了<br>
                を知る人を魅了 → を知る人を魅了
            </p>
        </div>
    </div>
</div>


@endsection