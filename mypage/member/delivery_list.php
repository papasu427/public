<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <?php require("../_parts/header.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/css.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/javascript.html")/* コンテンツトップ */ ?>
    <style>
        .modal {
            display: none;
            height: 100vh;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .modal__bg {
            background: rgba(0, 0, 0, 0.8);
            height: 100vh;
            position: absolute;
            width: 100%;
        }

        .modal__content {
            background: #fff;
            left: 50%;
            padding: 40px 10px;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <?php require("../_parts/contents_top.html") ?>
        <div class="container">
            <div class="text-size18 px-4 mt-6 mb-8">
                <b>配達先一覧</b>
            </div>
            <!--//タイトル-->
            <div class="px-4 mt-16 mb-8">
                <div class="flex">
                    <div class="text-size16 font-bold mb-4 flex-auto">配達先1</div>
                    <ul class="flex flex-initial">
                        <li class="mr-4"><a href="" class="modal-open bg-red-600 text-white font-bold text-center py-1 px-6 rounded text-size12" data-target="modal01">削除</a></li>
                        <li><a href="delivery_adr_srh.php" class="border-solid border-gray-900 text-center border py-1 px-6 rounded text-size12">変更</a></li>
                    </ul>
                </div>
                <hr class="mt-3">
                <ul id="list" class="open-close relative">
                    <div class="relative">
                        <li class="parent_1 arrow_down">
                            <p class="bd-b-color-gray-light p-3">初回登録住所</p>
                            <ul class="hidden ml-3 bd-b-color-gray-light bg-color-gray-light-more">
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">郵便番号</p>
                                    <p class="mt-1 px-3">〒064-0941</p>
                                    <hr class="mt-4">
                                </li>
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">住所</p>
                                    <p class="mt-1 px-3">北海道札幌市&nbsp;中央区旭ケ丘１丁目 111</p>
                                    <hr class="mt-4">
                                </li>
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">配達先氏名</p>
                                    <p class="mt-1 px-3">見本&nbsp;花子</p>
                                    <hr class="mt-4">
                                </li>
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">ご連絡先</p>
                                    <p class="mt-1 px-3">000-0000-0000</p>
                                    <hr class="mt-4 border-0">
                                </li>
                            </ul>
                        </li>

                    </div>
                </ul>
            </div>

            <div class="px-4 mt-16 mb-8">
                <div class="flex">
                    <div class="text-size16 font-bold mb-4 flex-auto">配達先2</div>
                    <ul class="flex flex-initial">
                        <li class="mr-4"><a href="" class="modal-open bg-red-600 text-white font-bold text-center py-1 px-6 rounded text-size12" data-target="modal02">削除</a></li>
                        <li><a href="member_top.php" class="border-solid border-gray-900 text-center border py-1 px-6 rounded text-size12">変更</a></li>
                    </ul>

                </div>
                <hr class="mt-3">
                <ul id="list" class="open-close relative">
                    <div class="relative">
                        <li class="parent_1 arrow_down">
                            <p class="bd-b-color-gray-light p-3">初回登録住所</p>
                            <ul class="hidden ml-3 bd-b-color-gray-light bg-color-gray-light-more">
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">郵便番号</p>
                                    <p class="mt-1 px-3">〒064-0941</p>
                                    <hr class="mt-4">
                                </li>
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">住所</p>
                                    <p class="mt-1 px-3">北海道札幌市&nbsp;中央区旭ケ丘１丁目 111</p>
                                    <hr class="mt-4">
                                </li>
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">配達先氏名</p>
                                    <p class="mt-1 px-3">見本&nbsp;花子</p>
                                    <hr class="mt-4">
                                </li>
                                <li class="relative ml-4 py-6 pb-0 text-size12">
                                    <p class=" px-3 font-bold">ご連絡先</p>
                                    <p class="mt-1 px-3">000-0000-0000</p>
                                    <hr class="mt-4 border-0">
                                </li>
                            </ul>
                        </li>
                    </div>
                </ul>
            </div>

            <div class="px-4 mt-12 mb-8">
                <a href="delivery_ser.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">サービス申請</a>
                <p class="px-3 mt-3 text-size12">現在こちらの配達先では、月々定額で手数料などがお得になる優遇サービスが申請できます。</p>
                <hr class="mt-12">
            </div>


            <div class="px-4 mt-12 mb-8 mx-auto max-w-sm">
                <a href="member_top.php" class="block mx-auto bg-button text-center text-white py-4 rounded text-size12">配達先の追加</a>
            </div>

            <div class="px-4 mb-12 mx-auto max-w-sm">
                <a href="member_top.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">基本情報に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>

        <!-- モーダルウインドウのエリア  ポイント-->
        <div id="modal01" class="js-modal modal">
            <div class="modal__bg modal-close"></div>
            <div class="modal__content">
                <p class="text-center font-bold">本当に削除しても宜しいですか。</p>
                <a href="" class="modal-close mx-10pt text-size18" style="position: absolute;top: 0px;right: 0px;">×</a>
                <ul class="flex items-center justify-evenly mt-6">
                    <li class="tbl-45per"><a href="" class="modal-close w-full block border-solid border-gray-900 text-center border py-2 rounded text-size12">キャンセル</a></li>
                    <li class="tbl-45per"><a href="" class="w-full block border-solid border border-red-600 bg-red-600  rounded text-white font-bold text-center py-2 rounded text-size12" data-target="modal02">削除</a></li>
                </ul>
            </div>
            <!--modal__inner-->
        </div>
        <!--modal-->

        <!-- モーダルウインドウのエリア  ポイント-->
        <div id="modal02" class="js-modal modal">
            <div class="modal__bg modal-close"></div>
            <div class="modal__content">
                <p class="text-center font-bold">本当に削除しても宜しいですか。</p>
                <a href="" class="modal-close mx-10pt text-size18" style="position: absolute;top: 0px;right: 0px;">×</a>
                <ul class="flex items-center justify-evenly mt-6">
                    <li class="tbl-45per"><a href="" class="modal-close w-full block border-solid border-gray-900 text-center border py-2 rounded text-size12">キャンセル</a></li>
                    <li class="tbl-45per"><a href="" class="w-full block border-solid border border-red-600 bg-red-600  rounded text-white font-bold text-center py-2 rounded text-size12" data-target="modal02">削除</a></li>
                </ul>
            </div>
            <!--modal__inner-->
        </div>
        <!--modal-->

        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

<script>
    $(function() {
        $('.toggle_menu').click(function() {
            $('#list').slideToggle();
            $(this).next('ul').slideToggle();
        });
        $('li').click(function(e) {
            $(this).children('ul').slideToggle();
            $(this).toggleClass('open', 10);
            e.stopPropagation();
        });

        $('.modal-open').each(function() {
            $(this).on('click', function() {
                var target = $(this).data('target');
                var modal = document.getElementById(target);
                $(modal).fadeIn(300);
                return false;
            });
        });
        $('.modal-close').on('click', function() {
            $('.js-modal').fadeOut(200);
            return false;
        });
    });
</script>

</html>