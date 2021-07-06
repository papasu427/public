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
                <b>基本情報の変更</b>
            </div>
            <!--//タイトル-->

            <div class="px-4 mt-8">
                <div class="text-size16 font-bold mb-4">登録メールアドレス</div>
                <p class="mt-1">test@test.com</p>
                <hr class="mt-8">
            </div>

            <div class="table table-fixed pg-width5 w-full p-10">
                <form id="entryEditForm" action="user_reg_chk.php" method="post" onsubmit="return(input_check(this))">
                    <div class="border-b">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">メールアドレス確認用</b>
                            <div class="my-10pt">
                                <input placeholder="test@vectorone.co.jp" type="text" name="email_pc_conf" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" value="" required="" style="ime-mode: disabled">
                            </div>
                        </div>
                    </div>

                    <div class="border-b">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">パスワード</b>
                            <div class="my-10pt">
                                <input type="password" name="pass" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" maxlength="12" required="" style="ime-mode: disabled">
                            </div>
                            <p class="pt-5pt">※6～12文字半角英数字</p>
                        </div>
                    </div>

                    <div class="mg-width5 pt-10 text-center">
                        <button type="submit" class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4">
                            確認する
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
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>