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
            <!-- カテゴリーバナー-->
            <div><img src="../resouse/s_images/banner/sample_ct.png"></div>
            <div class="relative border-b-1 pb-8">
                <div class="font-bold mt-10 text-size32">野菜・フルーツ</div>
                <span class="text-size14 pl-4 color-gray-4"><a href="../index.php" class="arrow-item-category-link-back">TOPページへ戻る</a></span>
            </div>

            <!-- アイテムリスト -->
            <?php
            $top = 1;
            $title1 = '野菜';
            $title2 = 'フルーツ';
            require("../_parts/modules/shop_item_list.html")
            ?>
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