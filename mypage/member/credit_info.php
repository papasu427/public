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
                <b>クレジットカード情報</b>
            </div>
            <!--//タイトル-->

            <div class="table table-fixed pg-width5 w-full px-4">
                <div class="mb-8">
                    <div class="text-size16 font-bold mb-6">申請対象の配達先</div>
                    <ul>
                        <li>
                            <div class="bg-color-gray-light">
                                <p class="px-4 border-t-2 py-1">カード番号</p>
                            </div>
                            <p class="my-6">XXXX-XXXX-XXXX-2940</p>
                        </li>
                        <li>
                            <div class="bg-color-gray-light">
                                <p class="px-4 border-t-2 py-1">カード有効期限</p>
                            </div>
                            <p class="my-6">2021/11</p>
                        </li>
                        <li>
                            <div class="bg-color-gray-light">
                                <p class="px-4 border-t-2 py-1">カード名義人</p>
                            </div>
                            <p class="my-6">MIHON HANAKO</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mg-width5 text-center">
                <button type="submit" class="bg-button text-size12 font-bold text-white tbl-70per rounded p-4">
                    変更する
                </button>
                <input type="hidden" name="lot_code" value="04301001101">
            </div>

            <div class="px-4 mt-6 mb-12 mx-auto max-w-sm">
                <a href="member_top.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">会員情報に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>