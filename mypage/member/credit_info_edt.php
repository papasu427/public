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
                <b>クレジットカード情報の変更</b>
            </div>
            <!--//タイトル-->

            <div class="table table-fixed pg-width5 w-full px-4">
                <div class="mb-8">
                    <div class="text-size16 font-bold mb-6">カード情報入力</div>
                </div>
                <div>
                    <form name="order_edt_chk" action="order_edt_chk.php" method="post" class="defaultform">

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
                        <div class="mt-16 text-center">
                            <input class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4" type="submit" value="確認画面へ" onclick="submitForm();return false;">
                            <input type="hidden" name="mode" value="">
                            <input type="hidden" id="gmotoken" name="gmotoken" value="">
                        </div>
                    </form>
                </div>
            </div>

            <div class="px-4 mt-6 mb-12 mx-auto max-w-sm">
                <a href="credit_info.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>