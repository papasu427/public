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
                <b>優遇サービス申請</b>
                <a href="#" class="inline-block" onclick="showPlagin(1);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                <div id="boxOpen1" style="display:none" class="py-2 text-size12">
                    <p>選択された配達先に適用できる優遇サービスを申請します。
                        ※ご注文時のカード情報と共通の情報を使用しておりますので、当メニューでカード情報を編集後、 ご注文時に別のカード情報を入力された場合は、優遇サービスの決済のカード情報も変更されますのでご注意ください。
                        ※は必須項目です。
                        入力内容に間違いがなければ「確認する」ボタンをクリックしてください。
                    </p>
                </div>
            </div>
            <!--//タイトル-->

            <div class="table table-fixed pg-width5 w-full px-4">
                <hr>
                <div class="mt-8 mb-8">
                    <div class="text-size16 font-bold mb-6">申請対象の配達先</div>
                    <ul>
                        <li>
                            <div class="bg-color-gray-light">
                                <p class="px-4 border-t-2 py-1">配達先名称</p>
                            </div>
                            <p class="my-6">test</p>
                        </li>
                        <li>
                            <div class="bg-color-gray-light">
                                <p class="px-4 border-t-2 py-1">担当店舗</p>
                            </div>
                            <p class="my-6">ASP旗艦店</p>
                        </li>
                        <li>
                            <div class="bg-color-gray-light">
                                <p class="px-4 border-t-2 py-1">エリア名</p>
                            </div>
                            <p class="my-6">狭域エリア</p>
                        </li>
                        <li>
                            <div class="bg-color-gray-light">
                                <p class="px-4 border-t-2 py-1">配達先住所</p>
                            </div>
                            <p class="my-6">〒111-1111<br>宮城県仙台市&nbsp;青葉区荒巻中央111</p>
                        </li>
                    </ul>

                    <hr class="mt-8">
                </div>
                <form name="order_edt" id="order_edt" action="" method="post" class="defaultform">
                    <div class="m-1 mt-5 border-b pb-2">
                        <div class="text-size16 pt-3 pb-6">
                            <b class="mr-2">申請サービスの選択</b>
                        </div>
                        <div class="inline-flex items-center pb-10">
                            <input type="radio" class="radio-wh-1" name="stock_out_case" id="cartMailList1" value="1" checked="checked">
                            <label for="cartMailList1"><span class="ml-10pt">留置きサービス(シート)</span></label>
                        </div>
                        <div class="cartItemSumBox text-size12 mb-10">
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>月額利用料</span></li>
                                <li class="description3 text-right">105円</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>サービス内容</span></li>
                                <li class="description3 text-right">6,777円</li>
                            </ul>
                        </div>
                        <div class="inline-flex items-center pb-10">
                            <input type="radio" class="radio-wh-1" name="stock_out_case" id="cartMailList2" value="2">
                            <label for="cartMailList2"><span class="ml-10pt">月額会員</span></label>
                        </div>
                        <div class="cartItemSumBox text-size12 mb-10">
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>月額利用料</span></li>
                                <li class="description3 text-right">105円</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>サービス内容</span></li>
                                <li class="description3 text-right">6,777円</li>
                            </ul>
                        </div>
                        <div id="boxOpen928" style="display:none" class="pt-5pt">
                            <p class="text-size12">※代替商品希望のお客様で、代替品のご指定がある場合は以下の「備考欄」にご記入ください。</p>
                        </div>
                    </div>

                    <div class="mt-16 text-center">
                        <button class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4" type="submit" onclick="nextFunc()">確認する
                        </button>
                    </div>
                </form>

            </div>

            <div class="px-4 mt-6 mb-12 mx-auto max-w-sm">
                <a href="delivery_list.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">配達先一覧に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>