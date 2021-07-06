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
                <b>基本情報の変更確認</b>
            </div>
            <!--//タイトル-->

            <hr class="mx-4 mt-8">

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">お名前</div>
                <p class="mt-1">見本&nbsp;花子</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">フリガナ</div>
                <p class="mt-1">ミホン&nbsp;ハナコ</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">電話番号</div>
                <p class="mt-1">000-000-0000</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">携帯電話番号</div>
                <p class="mt-1">000-0000-0000</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">生年月日</div>
                <p class="mt-1">1990年1月1日</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">性別</div>
                <p class="mt-1">男性</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">メルマガ配信</div>
                <p class="mt-1">配信希望する</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">ハウスカード番号</div>
                <p class="mt-1">000000000</p>
                <hr class="mt-8">
            </div>

            <div class="mg-width5 text-center">
                <button type="submit" class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4">
                    登録する
                </button>
                <input type="hidden" name="lot_code" value="04301001101">
            </div>

            <div class="px-4 mb-12 mx-auto max-w-sm">
                <a href="#" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">基本情報に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>