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
            <div class="text-size18 px-4 mt-6">
                <b>お問い合わせご返信内容の確認</b>
            </div>
            <!--//タイトル-->

            <div class="px-4 my-8">
                <div>
                    <ul class="mb-5 flex items-center justify-between">
                        <li class="bg-red-400 flex px-3 py-2 items-center justify-center" style="width: 28%;">
                            <div class="text-size10 font-bold text-white">お問い合わせ</div>
                        </li>
                        <li class="flex justify-evenly" style="width: 10%;">
                            <div class="circle1 bg-red-400"></div>
                            <div class="circle1 bg-red-400"></div>
                            <div class="circle1 bg-red-400"></div>
                        </li>
                        <li class="bg-red-400 flex px-3 py-2 items-center justify-center" style="width: 28%;">
                            <div class="text-size10 font-bold text-white">内容確認</div>
                        </li>
                        <li class="flex justify-evenly" style="width: 10%;">
                            <div class="circle1 bg-red-400"></div>
                            <div class="circle1 bg-red-400"></div>
                            <div class="circle1 bg-red-400"></div>
                        </li>
                        <li class="bg-gray-300 flex px-3 py-2 items-center justify-center" style="width: 28%;">
                            <div class="text-size10 font-bold text-white">送信完了</div>
                        </li>
                    </ul>
                </div>
                <hr class="mt-8">
            </div>
            <!--//配送ステップ-->

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">メールアドレス</div>
                <p class="mt-1">test@test.com</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">ご返信件名</div>
                <p class="mt-1">Re：テスト</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">ご返信内容</div>
                <p class="mt-1">テスト</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8">

                <div class="mg-width5 pt-10 text-center">
                    <button type="submit" class="bg-button text-size12 font-bold text-white tbl-90per rounded p-4">
                        送信する
                    </button>
                    <input type="hidden" name="lot_code" value="04301001101">
                </div>
            </div>

            <div class="px-4 pt-6 mb-12 mx-auto max-w-sm">
                <a href="../" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">お問い合わせ経歴へ戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>