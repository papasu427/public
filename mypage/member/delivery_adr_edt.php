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
                <b>配達先修正フォーム</b>
            </div>
            <!--//タイトル-->

            <hr class="mx-4 mt-8">

            <div class="table table-fixed pg-width5 w-full p-10">
                <form id="entryEditForm" action="user_reg_chk.php" method="post" onsubmit="return(input_check(this))">
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">登録名称</b>
                            <div class="my-10pt">
                                <input type="text" name="free1" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" maxlength="8" style="ime-mode: disabled" value="">
                            </div>
                            <p class="text-size12">(例)自宅、祖母の等(全角8文字)
                            </p>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <div class="text-size16 font-bold mb-4">配達先住所</div>
                            <p class="mt-1">〒064-0941</p>
                            <p class="mt-1">北海道札幌市&nbsp;中央区旭ケ丘４丁目</p>
                        </div>
                    </div>

                    <div class="border-b pb-3">
                        <div class="my-6">
                            <b class="text-size16">ご自宅住所</b>
                            <p class="pt-2 pb-6 px-2 w-full">〒&nbsp;989-0821<br>宮城県&nbsp;刈田郡　蔵王町大字円田字青木</p>
                            <span class="red">※</span><b>番地</b>
                            <div class="my-10pt">
                                <input placeholder="１番地" type="text" name="address2" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" value="" required="">
                            </div>
                            <b>建物(マンション)名&nbsp;号室</b>
                            <div class="my-10pt">
                                <input placeholder="サンプルマンション１０１号室" type="text" name="address3" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" value="">
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">受取人のお名前</b>
                            <div class="mb-5 mt-3">
                                <label for="userForm1">姓</label>&nbsp;:
                                <input placeholder="姓" id="userForm1" type="text" name="name1" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-35per" value="" required="">
                                &nbsp;&nbsp;<label for="userForm2">名</label>&nbsp;:
                                <input placeholder="名" id="userForm2" type="text" name="name2" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-35per" value="" required="">
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">受取人のフリガナ</b>
                            <div class="my-10pt">
                                <label for="userForm3">せい<label>&nbsp;:
                                        <input placeholder="せい" id="userForm3" type="text" name="name1_kana" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-35per" value="" required="">
                                        <label for="userForm4">めい<label>&nbsp;:
                                                <input placeholder="めい" id="userForm4" type="text" name="name2_kana" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-35per" value="" required="">
                                            </label></label></label></label>
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">受取人の電話番号</b>
                            <div class="my-10pt">
                                <input placeholder="090" type="text" name="tel_basic1" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="3" required="">
                                &nbsp;<span>-</span>&nbsp;
                                <input placeholder="1234" type="text" name="tel_basic2" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="4" required="">
                                &nbsp;<span>-</span>&nbsp;
                                <input placeholder="1234" type="text" name="tel_basic3" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="4" required="">
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <b class="text-size16">受取人の携帯番号</b>
                            <div class="my-10pt">
                                <input placeholder="03" type="text" name="tel_mobile1" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="13">
                                &nbsp;<span>-</span>&nbsp;
                                <input placeholder="1234" type="text" name="tel_mobile2" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="4">
                                &nbsp;<span>-</span>&nbsp;
                                <input placeholder="1234" type="text" name="tel_mobile3" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="4">
                            </div>
                        </div>
                    </div>

                    <div class="mg-width5 pt-8 text-center">
                        <button type="submit" class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4">
                            確認する
                        </button>
                        <input type="hidden" name="lot_code" value="04301001101">
                    </div>
                </form>
            </div>


            <div class="px-4 mb-12 mx-auto max-w-sm">
                <a href="delivery_list.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">配達先一覧に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>