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
				<b>購入履歴詳細</b>
			</div>
			<!--//タイトル-->

			<div class="px-4 mt-8 mb-8">
				<div class="text-size16 font-bold mb-4">購入日時</div>
				<p class="mt-1">06/16(火)18:00~20:00</p>
				<hr class="mt-8">
			</div>
			<!--//到着予定時刻-->

			<div class="px-4 mt-8 mb-8">
				<div class="text-size16 font-bold mb-4">お届け先</div>
				<p class="mt-1">見本&nbsp;花子&nbsp;様</p>
				<p class="mt-1">〒981-0916</p>
				<p class="mt-1">宮城県仙台市</p>
				<p class="mt-1">青葉区青葉町テスト</p>
				<p class="mt-1">090-0000-0000</p>
				<hr class="mt-8">
			</div>
			<!--//お届け先-->


			<div class="px-4 mt-8">
				<div class="text-size16 font-bold mb-3">ご注文商品一覧</div>
				<div id="" class="flex items-center w-full border-b pt-6 pb-6">
					<div class="text-center tbl-35per">
						<img src="http://kmuroyama.asp.volabo.ns-staging.com/box/123456789.jpg" class="inline-block pic-size100" alt="">
					</div>
					<div class="tbl-65per pl-4 pb-6">
						<div style="word-break : break-all;">
							<p class="mb-1">［2便・3便限定］埼玉県または他国内産&nbsp;さといも</p>
							<p class="mb-3 pb-2 text-size12 border-b">1袋</p>
						</div>
						<div class="mt-3 flex justify-between">
							<div class="table-cell">
								<span class="text-size10">数量</span>&nbsp;
								<span class="text-size16">6</span>
							</div>
							<b class="tx-color-money text-size16">429円</b>
						</div>
					</div>
				</div>
				<div id="" class="flex items-center w-full border-b pt-6 pb-6">
					<div class="text-center tbl-35per">
						<img src="http://kmuroyama.asp.volabo.ns-staging.com/box/123456789.jpg" class="inline-block pic-size100" alt="">
					</div>
					<div class="tbl-65per pl-4 pb-6">
						<div style="word-break : break-all;">
							<p class="mb-1">［2便・3便限定］埼玉県または他国内産&nbsp;さといも</p>
							<p class="mb-3 pb-2 text-size12 border-b">1袋</p>
						</div>
						<div class="mt-3 flex justify-between">
							<div class="table-cell">
								<span class="text-size10">数量</span>&nbsp;
								<span class="text-size16">6</span>
							</div>
							<b class="tx-color-money text-size16">429円</b>
						</div>
					</div>
				</div>
			</div>
			<!--//ご注文商品一覧-->

			<div class="px-4 mt-8 mb-8">
				<div class="text-size16 font-bold">お支払い詳細</div>
				<div class="table table-fixed pg-width5 w-full border-b">
					<div class="mt-8 mb-16">
						<div class="cartItemSumBox text-size12">
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>商品代金計</span></li>
								<li class="description2 text-right tx-color-money"><b>2,388円</b></li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>代引き手数料
									</span></li>
								<li class="description2 text-right"><span> 210円</span></li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>配達料 </span></li>
								<li class="description2 text-right"><span> 500円</span></li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>小計</span></li>
								<li class="description2 text-right"><span>3,598円</span></li>
							</ul>

							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>消費税等</span></li>
								<li class="description2 text-right"><span>262円</span></li>
							</ul>


							<ul class="cartItemSumList	">
								<li class="label bg-color-gray-light text-right"><span>お支払総額</span></li>
								<li class="description2 text-right tx-color-money"><b>3,360円</b></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--//お支払い詳細-->

			<div class="px-4 mt-8 mb-8">
				<div class="text-size16 font-bold mb-4">備考</div>
				<p class="mt-1">テスト</p>
				<hr class="mt-8">
			</div>
			<!--//備考-->

			<div class="px-4 mt-8 mb-8">
				<div class="text-size16 font-bold mb-4">店舗からのお知らせ</div>
				<p class="mt-1">テスト</p>
				<hr class="mt-8">
			</div>
			<!--//店舗からのお知らせ-->

			<div class="px-4 mt-12 mb-12 mx-auto max-w-sm">
				<a href="order_status.php" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">戻る</a>
			</div>
			<!--//買い物に戻る-->
		</div>
		<?php require("../_parts/footer/footer.html") /* フッター */ ?>
		<!--//wrap-->
	</div>
</body>

</html>