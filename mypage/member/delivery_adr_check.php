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
                <b>配達先登録内容の確認</b>
            </div>
            <!--//タイトル-->

            <hr class="mx-4 mt-8">

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">登録名称</div>
                <p class="mt-1">test</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">配達先郵便番号</div>
                <p class="mt-1">〒064-0941 </p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">配達先住所</div>
                <p class="mt-1">北海道札幌市&nbsp;中央区旭ケ丘４丁目</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">配達先番地</div>
                <p class="mt-1">000</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">受取人のお名前</div>
                <p class="mt-1">見本&nbsp;花子</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">受取人のフリガナ</div>
                <p class="mt-1">ミホン&nbsp;ハナコ</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">受取人の電話番号</div>
                <p class="mt-1">000-0000-0000</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">受取人の携帯電話番号</div>
                <p class="mt-1">000-0000-0000</p>
                <hr class="mt-8">
            </div>

            <div class="mg-width5 text-center">
                <button type="submit" class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4">
                    登録する
                </button>
                <input type="hidden" name="lot_code" value="04301001101">
            </div>

            <div class="px-4 mb-12 mx-auto max-w-sm">
                <a href="delivery_adr_edt.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>