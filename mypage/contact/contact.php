<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <?php require("../_parts/header.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/css.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/javascript.html")/* コンテンツトップ */ ?>
</head>

<body>
    <div id="wrap">
        <?php require("../_parts/contents_top.html") ?>
        <div class="container">
            <div class="text-size18 px-4 mt-6 mb-8">
                <b>お問い合わせ</b>
            </div>
            <!--//タイトル-->

            <div class="mb-10 text-center">
                <a href="contact_mail_form.php" class="block bg-button text-size12 font-bold text-white tbl-70per rounded p-4 mx-auto">新しいお問い合わせをする</a>
            </div>

            <div class="px-4">
                <div class="flex justify-between items-baseline">
                    <div class="font-bold text-size16">お問い合わせ経歴</div>
                    <div class="text-size12">全2件</div>
                </div>
                <!--//検索された日付-->
                <div class="table table-fixed pg-width5 w-full">
                    <div class="mb-6">

                        <div class="mt-5 cartItemSumBox text-size12">
                            <ul class="cartItemSumList">
                                <li class="bg-color-gray-light flex items-center justify-center">
                                    <span class="ml-4">問い合わせタイトル</span>
                                </li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right pl-5 pr-20pt">お問い合わせ日時</li>
                                <li class="description3 text-right">12月28日 14:00-16:00</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>返信数</span></li>
                                <li class="description3 text-right">0</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="bg-white flex items-center justify-center">
                                    <a href="contact_info.php" class="block border-solid border-gray-900 text-center border py-2 px-8 rounded text-size12">詳細を確認する</a>
                                </li>
                            </ul>
                        </div>
                        <!--//box-->
                    </div>
                </div>
                <div class="table table-fixed pg-width5 w-full">
                    <div class="mb-6">

                        <div class="mt-5 cartItemSumBox text-size12">
                            <ul class="cartItemSumList">
                                <li class="bg-color-gray-light flex items-center justify-center">
                                    <span class="ml-4">問い合わせタイトル</span>
                                </li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right pl-5 pr-20pt">お問い合わせ日時</li>
                                <li class="description3 text-right">12月28日 14:00-16:00</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>返信数</span></li>
                                <li class="description3 text-right">0</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="bg-white flex items-center justify-center">
                                    <a href="../" class="block border-solid border-gray-900 text-center border py-2 px-8 rounded text-size12">詳細を確認する</a>
                                </li>
                            </ul>
                        </div>
                        <!--//box-->
                    </div>
                </div>
            </div>



            <div class="px-4 pt-6 mb-12 mx-auto max-w-sm">
                <a href="../" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">マイページに戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>