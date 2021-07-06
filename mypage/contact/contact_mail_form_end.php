<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <?php require("../_parts/header.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/css.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/javascript.html")/* コンテンツトップ */ ?>
</head>

<body>
    <div id="wrap" class="container-footer-end">
        <?php require("../_parts/contents_top.html") ?>
        <div class="container">
            <div class="text-size18 px-4 mt-6">
                <b>お問い合わせメール送信完了</b>
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
                        <li class="bg-red-400 flex px-3 py-2 items-center justify-center" style="width: 28%;">
                            <div class="text-size10 font-bold text-white">送信完了</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--//配送ステップ-->

            <div class="px-4">
                <p class="font-bold text-red-600">お客様のお問い合わせメールが送信完了しました。</p>
                <p class="mt-1 mb-8">この度はご意見・お問合せいただき、ありがとうございます。お客様からいただきましたご意見・ご要望を確認後、ご記載いただきましたご連絡先にご返答させていただきます。</p>

                <div class="px-4 mb-12 mx-auto max-w-sm">
                    <a href="contact.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">お問い合わせ経歴へ戻る</a>
                </div>
                <!--//買い物に戻る-->
            </div>

        </div>
        <div class="footer-end">
            <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        </div>
        <!--//wrap-->
    </div>
</body>

</html>