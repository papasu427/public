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
                <b>優遇サービス申請確認</b>
                <a href="#" class="inline-block" onclick="showPlagin(1);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                <div id="boxOpen1" style="display:none" class="py-2 text-size12">
                    <p>各種優遇サービスの決済を行うカード情報を編集内容を確認します。
                        ※ご注文時のカード情報と共通の情報を使用しておりますので、当メニューでカード情報を編集後、 ご注文時に別のカード情報を入力された場合は、優遇サービスの決済のカード情報も変更されますのでご注意ください。
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
                <div class="m-1 mt-5 border-b pb-2">
                    <div class="text-size16 pt-3 pb-6">
                        <b class="mr-2">申請サービス</b>
                    </div>
                    <div class="inline-flex items-center pb-10">
                        <label for="cartMailList1"><span>留置きサービス(シート)</span></label>
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
                </div>
                <div class="px-5-10pt">
                    <form name="order_edt_chk" action="order_edt_chk.php" method="post" class="defaultform">
                        <div class="w-full border-b">
                            <div class="my-6">
                                <div class="w-full mb-6">
                                    <span class="font-bold text-size16">カード情報入力</span>
                                </div>
                                <div class="inline-flex items-center pb-10">
                                    <input type="radio" class="radio-wh-1" name="ready_mail" id="cartMailList5" value="1" checked="checked">
                                    <span class="ml-10pt">登録済みカードを使用</span>
                                </div><br>
                                <div class="inline-flex items-center pb-10">
                                    <input type="radio" class="radio-wh-1" name="ready_mail" id="cartMailList6" value="0">
                                    <span class="ml-10pt">新規カード情報入力</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full border-b">
                            <div class="my-4">
                                <div class="w-full mb-4">
                                    <span>カード番号</span>
                                </div>
                                <input id="card_no" name="card_no" type="text" class="p-2 px-2 w-full org-border1 rounded bg-color-gray-light-more" placeholder="1234567812345678" maxlength="16" value="" style="ime-mode:disabled">
                                <p class="pt-5pt">※半角数字で入力してください。</p>
                            </div>
                        </div>
                        <div class="w-full border-b">
                            <div class="my-4">
                                <div class="w-full mb-4">
                                    <span>カード有効期限</span>
                                </div>
                                <span class="p-1 org-border1 rounded bg-color-gray-light-more"><select id="card_month" name="card_month">
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>月&nbsp;／&nbsp;
                                <span class="p-1 org-border1 rounded bg-color-gray-light-more"><select id="card_year" name="card_year">
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                    </select>
                                </span>年<br>
                                <p class="pt-5pt">※「月」&nbsp;／&nbsp;「年」の順に入力してください。</p>
                            </div>
                        </div>
                        <div class="w-full border-b">
                            <div class="my-4">
                                <div class="w-full mb-4">
                                    <span>セキュリティコード</span>
                                </div>
                                <input type="text" id="card_security" name="card_security" class="p-2 px-2 w-16 org-border1 rounded bg-color-gray-light-more" value="" maxlength="4" style="ime-mode:disabled">
                                <p class="pt-5pt">※カード裏面のサインパネル右上に印字されております数値のうち下3桁となります。（上4桁はカード番号の下4桁となります。）</p>
                            </div>
                        </div>
                        <div class="w-full border-b">
                            <div class="my-4">
                                <div class="w-full mb-4">
                                    <span>カード名義人</span>
                                </div>
                                <input id="card_name" name="card_name" type="text" class="p-2 px-2 w-full org-border1 rounded bg-color-gray-light-more" placeholder="TARO YAMADA" maxlength="50" style="ime-mode:disabled">
                                <p class="pt-5pt">※カードの表記通り、半角英字(大文字)で入力してください。</p>
                            </div>
                        </div>
                        <div class="w-full border-b">
                            <div class="my-8">
                                <input type="checkbox" class="w-5 form-radio" name="ready_mail" id="cartMailList5" value="1">
                                <span>カード情報を登録</span>
                            </div>
                        </div>
                        <div class="mt-16 text-center">
                            <input class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4" type="submit" value="確認画面へ" onclick="submitForm();return false;">
                            <input type="hidden" name="mode" value="">
                            <input type="hidden" id="gmotoken" name="gmotoken" value="">
                        </div>
                    </form>
                </div>

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