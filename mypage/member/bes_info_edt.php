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

            <hr class="mx-4 mt-8">

            <div class="table table-fixed pg-width5 w-full p-10">
                <form id="entryEditForm" action="user_reg_chk.php" method="post" onsubmit="return(input_check(this))">
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">お名前</b>
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
                            <span class="red text-size16">※</span><b class="text-size16">ふりがな</b>
                            <div class="my-10pt">
                                <label for="userForm3">せい
                                    <label>&nbsp;:
                                        <input placeholder="せい" id="userForm3" type="text" name="name1_kana" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-35per" value="" required="">
                                        <label for="userForm4">めい
                                            <label>&nbsp;:
                                                <input placeholder="めい" id="userForm4" type="text" name="name2_kana" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-35per" value="" required="">
                                            </label>
                                        </label>
                                    </label>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">電話番号①</b>
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
                            <b class="text-size16">電話番号②</b>
                            <div class="my-10pt">
                                <input placeholder="03" type="text" name="tel_mobile1" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="13">
                                &nbsp;<span>-</span>&nbsp;
                                <input placeholder="1234" type="text" name="tel_mobile2" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="4">
                                &nbsp;<span>-</span>&nbsp;
                                <input placeholder="1234" type="text" name="tel_mobile3" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="4">
                            </div>
                        </div>
                    </div>

                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">生年月日</b>
                            <div class="my-10pt">
                                <input placeholder="1980" type="text" name="birth_y" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-25per" value="" maxlength="4" required="" style="ime-mode: disabled">
                                &nbsp;<span>年</span>&nbsp;
                                <input placeholder="1" type="text" name="birth_m" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-20per" value="" maxlength="2" required="" style="ime-mode: disabled">
                                &nbsp;<span>月</span>&nbsp;
                                <input placeholder="1" type="text" name="birth_d" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more tbl-20per" value="" maxlength="2" required="" style="ime-mode: disabled">
                                &nbsp;<span>日</span>&nbsp;
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <span class="red text-size16">※</span><b class="text-size16">性別</b>
                            <div class="flex flex-col flex-row">
                                <div class="inline-flex items-center mg-width1 mb-3">
                                    <input type="radio" name="gender" value="0" id="entrySex1" required="" class="radio-wh-1">
                                    <span class="pl-3">男性</span><br>
                                </div>
                                <div class="inline-flex items-center mg-width1 mb-3">
                                    <input type="radio" name="gender" value="1" checked="checked" id="entrySex1" required="" class="radio-wh-1">
                                    <span class="pl-3">女性</span><br>
                                </div>
                                <div class="inline-flex items-center mg-width1 mb-3">
                                    <input type="radio" name="gender" value="9" id="entrySex1" required="" class="radio-wh-1">
                                    <span class="pl-3">不問</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-3">
                        <div class="my-6">
                            <b class="text-size16">ハウスカード番号</b>
                            <div class="my-10pt">
                                <input type="text" name="free1" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" maxlength="8" style="ime-mode: disabled" value="">
                            </div>
                        </div>
                    </div>

                    <div class="border-b pb-3 mb-16">
                        <div class="my-6">
                            <b class="text-size16">メルマガ配信</b>
                            <div class="flex flex-col flex-row">
                                <div class="inline-flex items-center mg-width1 mb-3">
                                    <input type="radio" name="mail_status" value="5" checked="checked" id="entryMailmag1" class="radio-wh-1">
                                    <span class="pl-3">配信希望する</span><br>
                                </div>
                                <div class="inline-flex items-center mg-width1 mb-3">
                                    <input type="radio" name="mail_status" value="1" id="entryMailmag1" class="radio-wh-1">
                                    <span class="pl-3">配信希望しない</span><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mg-width5 text-center">
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