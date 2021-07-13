<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <?php require("../_parts/header/header.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/css.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/javascript.html")/* コンテンツトップ */ ?>
</head>

<body>
    <div id="wrap">
        <!-- ヘッダートップ -->
        <?php require("../_parts/modules/heder_top.html") ?>

        <!-- 検索・レジ・特集タグ -->
        <?php require("../_parts/modules/heder_middle.html") ?>

        <!-- タブレットカテゴリ -->
        <?php require("../_parts/modules/tablet_category.html") ?>

        <!-- サイドメニュー -->
        <?php require("../_parts/modules/side_menu.html") ?>

        <!-- メインコンテンツ -->
        <div class="conts content-single-width">
            <div class="border-b-1 pb-8">
                <div class="flex"><img src="<?php dirname(__FILE__); ?>/resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="<?php dirname(__FILE__); ?>/resouse/s_images/common/tag_2.png" class="pr-3"></div>
                <div class="font-bold mt-3 text-size28">和歌山県または他国内産　はっさく</div>
            </div>

            <div class="px-40">
                <img src="../resouse/s_images/common/be_sm_1.png" width="40%" class="center-margin mt-40px">
                <ul class="text-right mt-40px">
                    <li class="flex justify-end items-end">
                        <span>1袋</span>
                        <p class="text-size32 price-color line_height_1 font-bold pl-4">100円</p>
                    </li>
                    <li>
                        <p cl>税込188.11円</p>
                    </li>
                </ul>
                <div class="flex items-center justify-center mt-32px">
                    <div class="btn-large-outline" style="width: calc(100% - 48px);">カートに追加</div>
                    <div class="w-48px flex justify-end"><img src="<?php dirname(__FILE__); ?>/resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color"></div>
                </div>

                <!-- 数量ボタン -->
                <!-- <div class="relative mt-12px w-320px center-margin">
                    <div class="absolute left-0 position-top-center"> <a href="#" class="cart-item-cart-minus minus-button tx-button bg-color-gray-2 bg-color-gray-light w-80px h-44px"></a>
                    </div>
                    <div class="cart_num block text-size16 text-center tx-color-gray font-bold w-full h-7">1</div>
                    <div class="absolute right-0 position-top-center tx-button"> <a href="#" class="cart-item-cart-plus plus-button tx-button bg-color-gray-2 bg-color-gray-light w-80px h-44px"></a>
                    </div>
                </div> -->
            </div>
            <div class="mt-48px mb-48px">
                <div class="border-b-1 pb-8 mb-32px">
                    <div class="font-bold mt-3 text-size20">商品説明</div>
                </div>
                <!-- 注意文言 -->
                <p class="tx-color4 text-size14">１注文あたり5個限り購入可能です。</p>
                <p>【酒類商品】酒類につきましては法令により20歳未満の方には販売はできません。</p>
            </div>
        </div>
    </div>
    <!-- ガイドボックス -->
    <div class="guide p-6 pb-8 content-width center-margin">
        <!-- お知らせ -->
        <?php require("../_parts/modules/news_box.html") ?>
        <div class="m-16"></div><!-- 空白 -->
        <!-- 担当店舗情報 -->
        <?php require("../_parts/modules/store_info.html") ?>
        <div class="m-16"></div><!-- 空白 -->
        <!-- 担当店舗情報 -->
        <?php require("../_parts/modules/medical_supplies.html") ?>
        <div style="margin: 100px;"></div><!-- 空白 -->
    </div>

    <!-- オススメ特集モーダルウインドウのエリア -->
    <?php require("../_parts/modules/modal_topic.html") ?>

    <?php require("../_parts/footer/footer.html") /* フッター */ ?>
    </div>
    <!--//wrap-->
</body>

</html>