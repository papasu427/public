<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <?php require("../_parts/header.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/css.html")/* コンテンツトップ */ ?>
    <?php require("../_parts/header/javascript.html")/* コンテンツトップ */ ?>
</head>

<body>
    <div id="wrap" class="container-footer-end">
        <?php require("../_parts/contents_top.html") ?>
        <div class="container">
            <div class="text-size18 px-4 mt-6 mb-8">
                <b>メールアドレスの変更受付</b>
            </div>
            <!--//タイトル-->

            <div class="px-4 mt-8">
                <p class="mt-1 text-red-400">メールアドレスの変更を受け付けました。</p>
                <p class="mt-1">メールアドレスの変更を受け付けました。
                    メールアドレスの変更手続きを完了するには、以下の項目を確認してください。</p>
                <hr class="mt-8">
            </div>

            <div class="px-4 mt-8">
                <p class="mt-1 p-2 bg-red-200 font-bold text-red-600">以下の内容を必ずご確認いただき、完了処理を行ってください。</p>
                <p class="mt-3">
                    ご変更いただきましたメールアドレス(<span class="font-bold">test@test.com</span>)へ、<br>
                    「メールアドレス変更受付メール」をお送りさせていただ いておりますので、受信されましたことをご確認くださいませ。<br>
                    メールアドレスを間違えられた場合、メールアドレス変更&nbsp;受付メールを受信できません。お手数ですが再度メールアドレスの変更を行なってください。<br>
                    メールアドレス変更受付メールが受信できましたら、メールに記載されている下記URLをクリックしてください。
                </p>
                <p class="mt-4 font-bold text-size12">
                    例). https://〇〇〇〇〇〇.〇〇〇/smart/user/u ser_reg_cmp.php?n1=XXXXXXXXXXX
                </p>
                <p class="mt-4">
                    修正完了画面が表示されましたらメールアドレス変更のお手続きが完了となります。<br>
                    この時にメールアドレス変更完了メールを再度ご登録メールアドレス宛にお送りさせていただきます。<br>
                </p>
                <p class="mt-4 font-bold text-red-600">■メールアドレス変更受付メールが受信できない方へ</p>
                <p class="mt-1">「受信できない理由は様々ございますが、まずは以下の内容 をご確認下さいませ。</p>
                <div class="mt-5 bg-yellow-100 p-4">
                    <ul>
                        <li class="mt-3">
                            <p class="font-bold">1.&nbsp;メール受信ボックスの容量超過</p>
                            <p>ご使用されているパソコンまたはスマートフォンのメール受信ボックスの容量が超過されている可能性がございます。</p>
                        </li>
                        <li class="mt-3">
                            <p class="font-bold">2.&nbsp;迷惑メールフォルダへの振り分け</p>
                            <p>ご使用されているパソコンまたはスマートフォンのメールソフトの迷惑メールフォルダへ自動的に振り分けられた可能性がございます。</p>
                        </li>
                        <li class="mt-3">
                            <p class="font-bold">3.&nbsp;スマートフォンのメールフィルター機能</p>
                            <p>docomo,au,softbankでは迷惑メール対策としてさまざまなメールフィルター機能が提供されています。受信できない場合は各メーカーへお問い合わせください。</p>
                        </li>
                        <li class="mt-3">
                            <p class="font-bold">4.&nbsp;スマートフォンで特定の場所で受信できない</p>
                            <p>受信中に電波状態が悪くなるとメールを受信できなくなる可能性があります。その場合、電波の良い場所でメール受信を再度実行してみてください。また、ご契約プロバイダにて工事等によるサービス一時停止のお知らせがないかなどご確認ください。</p>
                        </li>
                    </ul>
                </div>
                <p class="mt-4 font-bold text-red-600">■上記操作で改善されない方へ</p>
                <p class="mt-1">ご契約されているプロバイダ側での受信拒否、または回線障害などが考えられます。恐れ入りますがそのメールアドレスにてお問い合わせフォームよりご連絡くださいませ。
                </p>
            </div>

            <div class="px-4 mb-12 mt-10 mx-auto max-w-sm">
                <a href="member_top.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">基本情報に戻る</a>
            </div>
            <!--//買い物に戻る-->
        </div>
        <?php require("../_parts/footer/footer.html") /* フッター */ ?>
        <!--//wrap-->
    </div>
</body>

</html>