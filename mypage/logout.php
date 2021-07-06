<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
	<?php require("_parts/header.html")/* コンテンツトップ */ ?>
	<?php require("_parts/header/css.html")/* コンテンツトップ */ ?>
	<?php require("_parts/header/javascript.html")/* コンテンツトップ */ ?>
</head>

<body>
	<div id="wrap" class="container-footer-end">
		<?php require("_parts/contents_top.html") ?>
		<div class="container">

			<div class="px-4 mt-12">
				<p class="font-bold text-size16 text-red-600 text-center">ログアウトしました。</p>
				<p class="mt-3 text-center">再度ログインする場合は、「トップへ戻る」をクリックしてください。</p>
				<p class="mt-6 text-center font-bold text-red-600">トップページへ戻る場合は、ブラウザの「戻る」ボタンを使用せず、必ず下の「トップへ戻る」ボタンをクリックしてお戻り下さい。</p>

				<div class="px-4 mt-12 mb-12 mx-auto max-w-sm">
					<a href="contact.php" class="block w-150 mx-auto border-solid border-gray-900 text-center border py-2 rounded text-size12">トップへ戻る</a>
				</div>
				<!--//買い物に戻る-->
			</div>

		</div>
		<div class="footer-end">
			<?php require("_parts/footer/footer.html") /* フッター */ ?>
		</div>
		<!--//wrap-->
	</div>
</body>

</html>