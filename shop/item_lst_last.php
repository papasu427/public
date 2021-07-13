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
            <div class="relative border-b-1 pb-8 flex items-end justify-between">
                <div>
                    <div class="font-bold text-size32">野菜<span class="text-size14 pl-3 color-gray-4">全200件</span></div>
                    <span class="text-size14 pl-4 color-gray-4"><a href="../index.php" class="arrow-item-category-link-back">中カテゴリーへ戻る</a></span>
                </div>

                <div class="flex items-center pl-5 pr-5 text-size14 cursor-pointer rounded hover:tx-color-gray-light focus:outline-none modal-open" data-target="modal-sort-content">
                    <img src="../resouse/s_images/common/filter.png" class="w-10 mr-4">
                    <span class="tx-color-link">並び替え</span>
                </div>
            </div>

            <!-- アイテムリスト -->
            <!-- １列目  -->
            <div class="itme-type-1 mt-12px mb-12px">
                <ul class="item-ct-last-list ">
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                    <?php require("../_parts/modules/item_card.html") ?>
                </ul>
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
    <!-- <div id="modal-sort-content" class="hidden absolute w-full pl-5 pr-5 flex z-50 m-auto" style="top: 307.5px; position: fixed; display: block;">
        <div class="bg-white">
            <div class="bg-color-gray pl-2 pb-3">
                <div class="flex p-2 pl-5 pr-5 pb-1 justify-end">
                    <p id="modal-close" class="font-bold">×</p>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-1_2 text-center rounded p-1 mt-1 mb-3 ml-2 mr-2 bg-color-link text-white">
                        標準 </div>
                    <div class="w-1_2 p-1 mt-1 mb-3 ml-2 mr-2">
                    </div>
                    <a href="?order=2&amp;start=0" class="w-1_2 text-center bd-color-gray-dark bg-white rounded hover:bg-color-gray-light focus:outline-none p-1 mt-1 mb-3 ml-2 mr-2">
                        価格の安い順 </a>
                    <a href="?order=3&amp;start=0" class="w-1_2 text-center bd-color-gray-dark bg-white rounded hover:bg-color-gray-light focus:outline-none p-1 mt-1 mb-3 ml-2 mr-2">
                        価格の高い順 </a>
                </div>
            </div>
        </div>
    </div> -->
    <div id="modal-sort-content" class="js-modal modal">
        <div class="modal__bg modal-close"></div>
        <div class="modal__content modal__content_tokusyu relative">
            <div class="modal__tokusyu_title">並び替え</div>
            <a href="" class="modal-close text-size32" style="position: absolute;top: 0px;right: 12px;">×</a>
            <ul class="flex-list-2col_modal_tokusyu px-32px my-32px overflow-scroll">
                <li><a href="#" class="btn-large box-read ">標準</a></li>
                <li><a href="#" class="btn-large-outline box-read ">価格の安い順</a></li>
                <li><a href="#" class="btn-large-outline box-read ">価格の高い順</a></li>
            </ul>
        </div>
        <!--modal__inner-->
    </div>

    <?php require("../_parts/footer/footer.html") /* フッター */ ?>
    </div>
    <!--//wrap-->
</body>

</html>