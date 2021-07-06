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
                <b>会員情報</b>
            </div>
            <!--//タイトル-->

            <div class="px-4 my-8">
                <div class="text-size16 font-bold">会員情報の管理</div>
                <ul class="mb-8">
                    <li>
                        <hr class="my-8">
                        <div class="flex justify-between items-center">
                            <span>基本情報</span>
                            <a href="bes_info.php" class="border-solid border-gray-600 text-center border py-1 px-6 w-100 rounded text-size12">確認・変更</a>
                        </div>
                        <hr class="my-8">
                    </li>
                    <li>
                        <div class="flex justify-between items-center">
                            <span>メールアドレス</span>
                            <a href="mail_edt.php" class="border-solid border-gray-600 text-center border py-1 px-6 w-100 rounded text-size12">確認・変更</a>
                        </div>
                        <hr class="my-8">
                    </li>
                    <li>
                        <div class="flex justify-between items-center">
                            <span>パスワード</span>
                            <a href="pass_edt.php" class="border-solid border-gray-600 text-center border py-1 px-6 w-100 rounded text-size12">変更</a>
                        </div>
                        <hr class="my-8">
                    </li>
                    <li>
                        <div class="flex justify-between items-center">
                            <span>配達先一覧・各種サービス</span>
                            <a href="delivery_list.php" class="border-solid border-gray-600 text-center border py-1 px-6 w-100 rounded text-size12">確認・変更</a>
                        </div>
                        <hr class="my-8">
                    </li>
                    <li>
                        <div class="flex justify-between items-center">
                            <span>クレジットカード情報</span>
                            <a href="credit_info.php" class="border-solid border-gray-600 text-center border py-1 px-6 w-100 rounded text-size12">確認・変更</a>
                        </div>
                        <hr class="my-8">
                    </li>
                </ul>
            </div>
            <!--//メニュー項目-->

            <div class="px-4 mt-12 mb-12 mx-auto max-w-sm">
                <a href="../" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">マイページに戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>