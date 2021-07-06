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
                <b>お問い合わせ詳細</b>
            </div>
            <!--//タイトル-->

            <div class="px-4">
                <div class="flex justify-between items-baseline">
                    <div class="font-bold text-size16">お問い合わせ内容</div>
                </div>
                <!--//検索された日付-->
                <div class="table table-fixed pg-width5 w-full">
                    <div class="mb-6">

                        <div class="mt-5 cartItemSumBox text-size12">
                            <ul class="cartItemSumList">
                                <li class="bg-color-gray-light flex items-center justify-center">
                                    <span class="ml-4">問い合わせタイトル</span>
                                </li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right pl-5 pr-20pt">お問い合わせ日時</li>
                                <li class="description3 text-right">12月28日 14:00-16:00</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>返信数</span></li>
                                <li class="description3 text-right">0</li>
                            </ul>
                        </div>
                        <!--//box-->
                    </div>
                </div>
                <hr class="mt-3 mb-6">
            </div>

            <div class="px-4">
                <div class="flex justify-between items-baseline">
                    <div class="font-bold text-size16">返信履歴</div>
                </div>
                <!--//検索された日付-->
                <div class="table table-fixed pg-width5 w-full">
                    <div class="mb-6">

                        <div class="mt-5 cartItemSumBox text-size12">
                            <ul class="cartItemSumList">
                                <li class="bg-color-gray-light flex items-center justify-center">
                                    <span class="ml-4">re:野菜とお肉の件</span>
                                </li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right pl-5 pr-20pt ver-middle">内容</li>
                                <li class="description3 text-right">商品のラベルをご確認ください。</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>お問い合わせ日時</span></li>
                                <li class="description3 text-right">12月28日 14:00-16:00</li>
                            </ul>
                        </div>
                        <!--//box-->
                    </div>
                </div>
                <div class="table table-fixed pg-width5 w-full">
                    <div class="mb-6">

                        <div class="mt-5 cartItemSumBox text-size12">
                            <ul class="cartItemSumList">
                                <li class="bg-color-gray-light flex items-center justify-center">
                                    <span class="ml-4">re:野菜とお肉の件</span>
                                </li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right pl-5 pr-20pt ver-middle">内容</li>
                                <li class="description3 text-right">商品のラベルをご確認ください。</li>
                            </ul>
                            <ul class="cartItemSumList">
                                <li class="label bg-color-gray-light text-right"><span>お問い合わせ日時</span></li>
                                <li class="description3 text-right">12月28日 14:00-16:00</li>
                            </ul>
                        </div>
                        <!--//box-->
                    </div>
                </div>
                <hr class="mt-3 mb-6">
            </div>
            <div class="px-4 mt-8">
                <div class="text-size16 font-bold mb-6">ご返信フォーム</div>

                <div class="pb-6">
                    <p class="text-size16">メールアドレス</p>
                    <p>test@test.com</p>
                </div>

                <div class="table table-fixed pg-width5 w-full">
                    <form id="entryEditForm" action="user_reg_chk.php" method="post" onsubmit="return(input_check(this))">
                        <div class="pb-2">
                            <div class="my-6">
                                <span class="red text-size16">※</span><b class="text-size16">ご返信件名</b>
                                <div class="my-10pt">
                                    <input type="text" name="email_pc_conf" class="p-2 px-2 rounded bd-color-gray-dark bg-color-gray-light-more w-full" value="" required="" style="ime-mode: disabled">
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="my-8">
                                <div class="flex items-end pb-10">
                                    <span class="red text-size16">※</span><b class="text-size16">ご返信内容</b>
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