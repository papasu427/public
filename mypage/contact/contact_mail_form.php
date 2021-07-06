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
                <b>お問い合わせメールフォーム</b>
                <a href="#" class="inline-block" onclick="showPlagin(1);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
                <div id="boxOpen1" style="display:none" class="py-2 text-size12">
                    <p>お問合わせ・ご要望はこちらのフォームをご利用願います。<br>
                        お問い合わせの内容などにより、すぐにご連絡差し上げることができない場合がございます。あらかじめご了承願います。<br>
                        必要な事項を入力、選択の上、お問い合わせ内容に間違いがなければ、<a href="#" class="text-blue-600">プライバシーポリシー</a>の項目を確認の上、「確認画面へ」ボタンをクリックしてください。
                    </p>
                </div>
            </div>
            <!--//タイトル-->

            <div class="px-4 my-8">
                <div>
                    <ul class="mb-5 flex items-center justify-between">
                        <li class="bg-red-400 flex px-3 py-2 items-center justify-center" style="width: 28%;">
                            <div class="text-size10 font-bold text-white">お問い合わせ</div>
                        </li>
                        <li class="flex justify-evenly" style="width: 10%;">
                            <div class="circle1 bg-gray-300"></div>
                            <div class="circle1 bg-gray-300"></div>
                            <div class="circle1 bg-gray-300"></div>
                        </li>
                        <li class="bg-gray-300 flex px-3 py-2 items-center justify-center" style="width: 28%;">
                            <div class="text-size10 font-bold text-white">内容確認</div>
                        </li>
                        <li class="flex justify-evenly" style="width: 10%;">
                            <div class="circle1 bg-gray-300"></div>
                            <div class="circle1 bg-gray-300"></div>
                            <div class="circle1 bg-gray-300"></div>
                        </li>
                        <li class="bg-gray-300 flex px-3 py-2 items-center justify-center" style="width: 28%;">
                            <div class="text-size10 font-bold text-white">送信完了</div>
                        </li>
                    </ul>
                </div>
                <hr class="mt-8">
            </div>
            <!--//配送ステップ-->

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">会員ID</div>
                <p class="mt-1">ASP111111</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8 mb-8">
                <div class="text-size16 font-bold mb-4">ご担当店舗</div>
                <p class="mt-1">テスト店</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8">
                <div class="table table-fixed pg-width5 w-full">
                    <form id="entryEditForm" action="user_reg_chk.php" method="post" onsubmit="return(input_check(this))">
                        <div class="pb-2">
                            <div class="my-6">
                                <span class="red text-size16">※</span><b class="text-size16">ご返信件名</b>
                                <div class="my-10pt">
                                    <select class="border border-gray-400 py-1 w-full px-2 bg-white" name="年月">
                                        <option value="1">2020年12月</option>
                                        <option value="1">2020年11月</option>
                                        <option value="1">2020年10月</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-4">
                        <div class="w-full">
                            <div class="my-8">
                                <div class="flex items-end pb-10">
                                    <span class="red text-size16">※</span><b class="text-size16">ご意見・具体的な内容</b>
                                </div>
                                <textarea name="note" rows="5" class="p-2 px-2 w-full org-border1 rounded bg-color-gray-light-more"></textarea>
                            </div>
                        </div>

                        <div class="mg-width5 pt-10 text-center">
                            <button type="submit" class="bg-button text-size12 font-bold text-white tbl-90per rounded p-4">
                                確認画面へ
                            </button>
                            <input type="hidden" name="lot_code" value="04301001101">
                        </div>
                    </form>
                </div>
            </div>

            <div class="px-4 pt-6 mb-12 mx-auto max-w-sm">
                <a href="../" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">お問い合わせ経歴へ戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>