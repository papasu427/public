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
				<b>ランク・ポイント</b>
			</div>
			<!--//タイトル-->

			<div class="w-full bg-gray-100 border-solid border-b-2 border-t-2 border-gray-600">
				<ul class="px-4 my-4">
					<li class="font-bold pb-2 text-size16">見本花子&nbsp;様</li>
					<li class="pb-1">会員ID&nbsp;:&nbsp;<span>MRA9999<span></li>
					<li class="pb-1">会員ランク&nbsp;:&nbsp;<span>ゴールド<span></li>
				</ul>
			</div>
			<!--//会員情報-->

			<div class="px-4 mt-8 mb-8">
				<div class="text-size16 font-bold">ポイント詳細</div>
				<div class="table table-fixed pg-width5 w-full border-b">
					<div class="mt-8 mb-16">
						<div class="cartItemSumBox text-size12">
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>利用可能ポイント</span></li>
								<li class="description2 text-right"><span>198pt</span></li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>獲得予定ポイント</span></li>
								<li class="description2 text-right"><span>105pt</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--//お支払い詳細-->

			<div class="px-4 mt-12 mb-12 mx-auto max-w-sm">
				<a href="../" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">マイページへ戻る</a>
			</div>
			<!--//買い物に戻る-->
		</div>
		<?php require("../_parts/footer/footer.html") /* フッター */ ?>
		<!--//wrap-->
	</div>
</body>

</html>