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
                <b>配達先登録(住所一覧)</b>
                <a href="#" class="inline-block" onclick="showPlagin(1);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                <div id="boxOpen1" style="display:none" class="py-2 text-size12">
                    <p>ご住所からお選びいただけます。お住まいのご住所を以下の一覧から選択してクリックしてください。
                    </p>
                </div>
            </div>
            <!--//タイトル-->

            <div class="table table-fixed pg-width5 w-full px-4">
                <div class="m-1 border-b py-8">
                    <div class="text-center">テスト県テスト市サンプル町</div>
                    <div class="m-2 p-2 bg-color-gray-light-more rounded tx-color-link">
                        <ul class="entryAddressList">
                            <li><a href="delivery_adr_edt.php">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=04">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=08">1丁目</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="user_adr_sel.php?pref_code=11">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=13">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=20">1丁目</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="user_adr_sel.php?pref_code=26">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=27">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=47">1丁目</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="user_adr_sel.php?pref_code=99">1丁目県</a></li>
                        </ul>
                    </div>
                </div>
                <!--//1段-->
                <div class="m-1 border-b py-8">
                    <div class="text-center">テスト県テスト市サンプル町</div>
                    <div class="m-2 p-2 bg-color-gray-light-more rounded tx-color-link">
                        <ul class="entryAddressList">
                            <li><a href="user_adr_sel.php?pref_code=01">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=04">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=08">1丁目</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="user_adr_sel.php?pref_code=11">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=13">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=20">1丁目</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="user_adr_sel.php?pref_code=26">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=27">1丁目</a></li>
                            <li><a href="user_adr_sel.php?pref_code=47">1丁目</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="user_adr_sel.php?pref_code=99">1丁目県</a></li>
                        </ul>
                    </div>
                </div>
                <!--//2段-->
            </div>
        </div>

        <div class="px-4 my-12 mx-auto max-w-sm">
            <a href="member_top.php" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">基本情報に戻る</a>
        </div>
        <!--//買い物に戻る-->
    </div>
    <?php require("../_parts/footer/footer.html") /* フッター */ ?>
    <!--//wrap-->
    </div>
</body>

</html>