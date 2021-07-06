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
            <div class="text-size18 px-4 mt-6 mb-8">
                <b>メールアドレスの変更確認</b>
            </div>
            <!--//タイトル-->

            <div class="px-4 mt-8">
                <div class="text-size16 font-bold mb-4">変更メールアドレス</div>
                <p class="mt-1">test@test.com</p>
                <p class="mt-10 text-red-400 text-size12">入力内容に間違いがなければ「登録する」ボタンをクリックしてください。</p>
                <hr class="mt-8">
            </div>

            <div class="table table-fixed pg-width5 w-full p-10">
                <form id="entryEditForm" action="user_reg_chk.php" method="post" onsubmit="return(input_check(this))">

                    <div class="mg-width5 text-center">
                        <button type="submit" class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4">
                            登録する
                        </button>
                        <input type="hidden" name="lot_code" value="04301001101">
                    </div>
                </form>
            </div>


            <div class="px-4 mb-12 mx-auto max-w-sm">
                <a href="member_top.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">基本情報に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <div class="footer-end">
            <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        </div>
        <!--//wrap-->
    </div>
</body>

</html>