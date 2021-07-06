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
        <div class="container ">
            <div class="text-size18 px-4 mt-6 mb-8">
                <b>配達先登録完了</b>
            </div>
            <!--//タイトル-->
            <div class="content-center-outer h-50per">
                <p class="px-4 mt-1 mb-6 text-center">配達先の登録が完了しました。<br>
                    登録した配達先へ変更する場合は<a href="delivery_list.php text-blue-600">配達先の変更ページ</a>配達先の変更ページからプルダウンメニューよりお選びください。</p>

                <div class="px-4 mb-8 mx-auto max-w-sm">
                    <a href="#" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">会員情報に戻る</a>
                </div>
                <!--//会員情報に戻る-->

                <div class="px-4 mb-12 mx-auto max-w-sm">
                    <a href="#" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">配達先一覧に戻る</a>
                </div>
                <!--//配達先一覧-->
            </div>

        </div>
        <div class="footer-end">
            <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        </div>
        <!--//wrap-->
    </div>
</body>

</html>