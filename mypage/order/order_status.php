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
				<b>注文の確認</b>
			</div>
			<!--//タイトル-->

			<div class="px-4 my-8">
				<div class="mb-4">
					<div class="inline-block text-size16 font-bold">購入経歴一覧</div>
					<a href="#" class="inline-block" onclick="showPlagin(1);return false;"><img src="../resouse/s_images/common/question.png" alt="" style="width:15px;" /></a>
					<div id="boxOpen1" style="display:none" class="py-2 text-size12">
						<p>詳細な購入履歴を確認する場合は「注文詳細」をクリックしてください。
							購入商品明細をキャンセル・再度ご注文する場合は「追加・変更・キャンセル」ボタンをクリックしてください。<br>
							<span class="font-bold text-red-400">ご注文締切時間（受付時間）内であれば、商品の追加・変更・キャンセルが可能です。</span>
							<span class="text-red-400">
								※商品の在庫切れや改廃などにより、過去にご購入いただいた商品が一部表示されない場合がございます。
								※お客様住所の変更や、配達先の選択状況により注文明細からご注文いただけない場合がございます。
							</span>
						</p>
					</div>
				</div>
			</div>
			<!--//サブタイトル-->

			<div class="flex px-4 justify-between items-baseline">
				<div class="font-bold">2020年12月</div>
				<div class="text-size12">2件中&nbsp;1~2件表示</div>
			</div>
			<!--//検索された日付-->

			<div class="bg-gray-200 flex items-center mt-4 justify-end px-4 py-3">
				<div class="text-size12">購入月</div>
				<form action="履歴" class="ml-2 flex items-center">
					<select class="border border-gray-400 py-1 px-2" name="年月">
						<option value="1">2020年12月</option>
						<option value="1">2020年11月</option>
						<option value="1">2020年10月</option>
					</select>
					<button class="ml-2 border-solid bg-gray-600 text-center border py-1 px-3 rounded-md text-white text-size12" type="submit">検索</button>
				</form>
			</div>
			<!--//検索-->

			<div class="px-4 mb-2">
				<div class="table table-fixed pg-width5 w-full border-b">
					<div class="mt-8 mb-12">

						<div class="mt-5 cartItemSumBox text-size12">
							<ul class="cartItemSumList">
								<li class="bg-color-gray-light flex items-center justify-between">
									<span class="ml-4">注文番号&nbsp;:&nbsp;171608</span>
									<a href="purchase_history.php" class="mr-4 border-solid bg-gray-600 text-center border py-1 px-5 rounded-md text-white text-size12">注文詳細</a>
								</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>配達日時</span></li>
								<li class="description3 text-right">12月28日 14:00-16:00</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>合計金額</span></li>
								<li class="description3 text-right">6,777円</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>購入店舗</span></li>
								<li class="description3 text-right">テスト店</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>ステータス</span></li>
								<li class="description3 text-right">出荷完了</li>
							</ul>
						</div>
						<!--//box-->

						<div class="mt-5 cartItemSumBox text-size12">
							<ul class="cartItemSumList">
								<li class="bg-color-gray-light flex items-center justify-between">
									<span class="ml-4">注文番号&nbsp;:&nbsp;171608</span>
									<a class="mr-4 border-solid bg-gray-600 text-center border py-1 px-5 rounded-md text-white text-size12">注文詳細</a>
								</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>配達日時</span></li>
								<li class="description3 text-right">12月28日 14:00-16:00</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>合計金額</span></li>
								<li class="description3 text-right">6,777円</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>購入店舗</span></li>
								<li class="description3 text-right">テスト店</li>
							</ul>
							<ul class="cartItemSumList">
								<li class="label bg-color-gray-light text-right"><span>ステータス</span></li>
								<li class="description3 text-right">出荷完了</li>
							</ul>
						</div>
						<!--//box-->

					</div>
				</div>
			</div>
			<!--//お支払い詳細-->

			<div class="px-4 mt-12 mb-12 mx-auto max-w-sm">
				<a href="../" class="block border-solid border-gray-900 text-center border py-2 rounded text-size12">マイページに戻る</a>
			</div>
			<!--//買い物に戻る-->
		</div>
		<?php require("../_parts/footer/footer.html") /* フッター */ ?>
		<!--//wrap-->
	</div>
</body>

</html>