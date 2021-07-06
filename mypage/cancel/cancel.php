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
                <b>退会</b>
            </div>
            <!--//タイトル-->

            <div class="px-4 mt-8">
                <p class="mt-1">この度は[ASP_mergeVer2]ネットスーパーをご利用頂き、誠にありがとうございます。<br>
                    <span class="text-red-600">見本&nbsp;花子&nbsp;様</span>の退会手続きを行いますので宜しければパスワードをご入力の上、「退会確認へ」ボタンをクリックしてください。
                </p>
            </div>

            <div class="px-4 mt-8">
                <div class="text-size16 font-bold mb-4">会員ID</div>
                <p class="mt-1">ASP1111111</p>
                <hr class="mt-8">
            </div>

            <div class="table table-fixed pg-width5 w-full p-10">
                <form id="entryEditForm" action="user_reg_chk.php" method="post" onsubmit="return(input_check(this))">

                    <div class="border-b">
                        <div class="my-6">
                            <b class="text-size16">パスワード</b>
                            <div class="my-10pt">
                                <input type="password" name="pass" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" maxlength="12" required="" style="ime-mode: disabled">
                            </div>
                            <p class="text-size12">
                                ※6～12文字の半角英数字を記入してください。<br>
                                パスワードをお忘れの方は<a href="../member/pass_edt.php" class="text-blue-600">こちら</a>
                            </p>
                        </div>
                    </div>

                    <div class="mx-10 mt-10 mb-6 text-center">
                        <button type="submit" class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4">
                            確認する
                        </button>
                        <input type="hidden" name="lot_code" value="04301001101">
                    </div>
                </form>
            </div>


            <div class="px-4 mb-12 mx-auto max-w-sm">
                <a href="../" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">マイページに戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>