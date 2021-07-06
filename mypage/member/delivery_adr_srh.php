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
                <b>配達先追加</b>
                <a href="#" class="inline-block" onclick="showPlagin(1);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                <div id="boxOpen1" style="display:none" class="py-2 text-size12">
                    <p>自宅の他に会社の住所など、配達先を複数登録することが可能です。
                    </p>
                </div>
            </div>
            <!--//タイトル-->

            <div class="table table-fixed pg-width5 w-full px-4">
                <hr>
                <div class="m-1 border-b py-8">
                    <div class="text-size16">
                        <b class="mr-2">郵便番号から住所を検索</b>
                        <a href="#" class="inline-block" onclick="showPlagin(2);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                    </div>
                    <div id="boxOpen2" style="display:none" class="py-2">
                        <p>郵便番号から検索できます。お住まいの地域の郵便番号を入力して「次のステップへ」ボタンをクリックしてください。</p>
                    </div>
                    <form id="entryZipForm" action="user_adr_sel.php" method="post">
                        <span class="font-bold mt-3">〒</span>
                        <input type="text" name="zip_code" class="m-2 p-2 tx-color1 bg-color2 org-border1 rounded" value="" maxlength="7" style="ime-mode: disabled" />
                        <div><small>※半角数字で入力してください。</small></div>
                        <div class="mt-8 text-center">
                            <input class="bg-base text-size12 font-bold tx-color5 tbl-70per rounded p-2" type="submit" value="次のステップへ" onclick="return(input_check(this.form))" />
                        </div>
                    </form>
                </div>
                <div class="m-1 border-b py-8">
                    <div class="text-size16 py-3">
                        <b class="mr-2">ご住所(都道府県)から住所を検索</b>
                        <a href="#" class="inline-block" onclick="showPlagin(3);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                    </div>
                    <div id="boxOpen3" style="display:none" class="py-2">
                        <p>ご住所からお選びいただけます。お住まいのご住所を以下の一覧から選択してクリックしてください。</p>
                    </div>
                    <div class="text-center mt-3">都道府県</div>
                    <div class="m-2 p-2 bg-color-gray-light-more rounded tx-color-link">
                        <ul class="entryAddressList">
                            <li><a href="delivery_adr_sel.php">北海道</a></li>
                            <li><a href="delivery_adr_sel.php">宮城県</a></li>
                            <li><a href="delivery_adr_sel.php">茨城県</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="delivery_adr_sel.php">埼玉県</a></li>
                            <li><a href="delivery_adr_sel.php">東京都</a></li>
                            <li><a href="delivery_adr_sel.php">長野県</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="delivery_adr_sel.php">京都府</a></li>
                            <li><a href="delivery_adr_sel.php">大阪府</a></li>
                            <li><a href="delivery_adr_sel.php">沖縄県</a></li>
                        </ul>
                        <ul class="entryAddressList">
                            <li><a href="delivery_adr_sel.php">テスト県</a></li>
                        </ul>
                    </div>
                </div>
                <div class="m-1 py-8">
                    <div class="text-size16">
                        <b class="mr-2">法人コードから登録</b>
                        <a href="#" class="inline-block" onclick="showPlagin(4);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                    </div>
                    <div id="boxOpen4" style="display:none" class="py-2">
                        <p>にご登録いただいている法人会員様から<br />発効された法人コードをご入力いただいて会員登録が行えます。<br />
                            配達先などの情報は法人会員様のご登録いただいた情報に基づいて登録されます。</p>
                    </div>
                    <form action="user_reg.php" name="corp" method="post">
                        <div class="font-bold mt-3">法人コード</div>
                        <input type="hidden" name="mode" value="corp" />
                        <input type="text" name="corp_code" size="25" maxlength="20" value="" class="my-2 p-2 tx-color1 bg-color2 org-border1 rounded" style="ime-mode:disabled" />
                        <div class="mt-8 text-center">
                            <input class="bg-base text-size12 font-bold tx-color5 tbl-70per rounded p-2" type="submit" value="次のステップへ" onclick="return(input_check(this.form))" />
                        </div>
                    </form>
                </div>
                <hr>
            </div>

            <div class="px-4 mt-12 mb-12 mx-auto max-w-sm">
                <a href="member_top.php" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">基本情報に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>