<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
	<?php require("_parts/header.html")/* コンテンツトップ */ ?>
	<?php require("_parts/header/css.html")/* コンテンツトップ */ ?>
	<?php require("_parts/header/javascript.html")/* コンテンツトップ */ ?>
	<script type="text/javascript">
		$(function() {
			$('.slider-itme-type-1').slick({
				dots: false, // スライダー下部に表示される、ドット状のページネーションです
				infinite: false, // 無限ループ
				speed: 300, // 切り替わりのスピード
				slidesToShow: 6, //通常 1024px以上の領域では4画像表示
				slidesToScroll: 6,
				responsive: [{
						breakpoint: 1300,
						settings: { //601px～1024pxでは3画像表示
							slidesToShow: 5,
							slidesToScroll: 5,
						}
					},
					{
						breakpoint: 1100,
						settings: { //601px～1024pxでは3画像表示
							slidesToShow: 4,
							slidesToScroll: 4,
						}
					},
					{
						breakpoint: 1024,
						settings: { //481px～600pxでは2画像表示
							slidesToShow: 5,
							slidesToScroll: 5,
						}
					},
					{
						breakpoint: 944,
						settings: { //480px以下では1画像表示
							slidesToShow: 4,
							slidesToScroll: 4,
						}
					},
					{
						breakpoint: 824,
						settings: { //480px以下では1画像表示
							slidesToShow: 3,
							slidesToScroll: 3,
						}
					}
				]
			});
			$('.slider-news').slick({
				dots: false, // スライダー下部に表示される、ドット状のページネーションです
				infinite: false, // 無限ループ
				speed: 300, // 切り替わりのスピード
			});
			$('.slider-top-sp-feature').slick({
				centerMode: true,
				centerPadding: '10%',
				dots: true,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 1000,
				infinite: true,
				prevArrow: '<button class="slick-prev-top slick-arrow" aria-label="Previous" type="button">Previous</button>',
				nextArrow: '<button class="slick-next-top slick-arrow" aria-label="Next" type="button">Next</button>',
			});
		});
	</script>

	<style>
		/*==3階層目*/
	</style>
</head>

<body>
	<div id="wrap">
		<!-- ヘッダートップ -->
		<div class="headerTop flex items-center relative content-width center-margin h-60px">
			<div class="absolute  mx-20px"><img src="resouse/s_logo.png" width="160px"></div>
			<ul class="header-top-menu flex absolute" style="right: 90px;">
				<li class="flex items-center display-none">
					<img src="resouse/track.png" width="24px" class="pr-2">
					<p class="pr-4">3便 | 06/16(火)18:00~20:00</p>
					<a href="#" class="btn-tag-outline px-20px" style="color:black; border-color:#000;">日時変更</a>
				</li>
				<li><a href="#">ようこそゲスト 様(ログアウト)</a></li>
			</ul>
			<div class="absolute border-r-1 bd-black-1" style="right: 70px; height:60%"></div>
			<?php require("_parts/menu.html")/* コンテンツトップ */ ?>
		</div>

		<!-- 検索・レジ・特集タグ -->
		<div class="header-nav border-t-1 bd-gray-4">
			<div class="heder-nav-cont flex border-b-6 bd-b-category justify-between content-width center-margin relative">
				<div class="w-full flex justify-center items-center flex-wrap">
					<div class="flex w-full" style="background-color:#ffffff; padding: 12px 16px;">
						<form id="form1" class="heder-serch-width mr-20px mt-4px" action="自分のサイトURL">
							<input id="sbox" id="s" name="s" type="text" placeholder="キーワードで検索" />
							<button id="sbtn" type="submit">
								<img style="width: 60%;margin: 0 auto;" src="resouse/s_images/common/musimegane.png">
							</button>
						</form>

						<ul class="top-menu flex">
							<li>
								<div class="h-28px flex items-center justify-center">
									<img class="center-margin" src="resouse/s_images/common/menu-shop.png" width="50%" height="50%">
								</div>
								<div class="text-size14">
									売場一覧
								</div>
							</li>
							<li>
								<div class="h-28px flex items-center justify-center">
									<img class="center-margin" src="resouse/s_images/common/haert.png" width="50%" height="50%">
								</div>
								<div class="text-size14">
									いつもの
								</div>
							</li>
							<li>
								<div class="h-28px flex items-center justify-center relative">
									<img class="center-margin" src="resouse/s_images/common/mail.png" width="50%" height="50%">
									<span class="absolute notice" style="left: 44px; top: -2px;">100</span>
								</div>
								<div class="text-size14">
									お知らせ
								</div>
							</li>
						</ul>
					</div>
					<ul class="flex justify-evenly items-center text-center bg-topic-tag w-full h-54px">
						<li class="tag-menu-width text-size14 btn-tag-categorey px-12px">
							<a href="#" class="align-middle">お肉特集</a>
						</li>
						<li class="tag-menu-width text-size14 btn-tag-categorey px-12px box-read "><a href="#" class="align-middle">お魚特集</a></li>
						<li class="tag-menu-width text-size14 btn-tag-categorey px-12px box-read "><a href="#" class="align-middle">お魚特集</a></li>
						<li class="tag-menu-width tag-menu-3 text-size14 btn-tag-categorey px-12px box-read "><a href="#" class="align-middle">お肉特集</a></li>
						<li class="tag-menu-width tag-menu-4 text-size14 btn-tag-categorey px-12px box-read "><a href="#" class="align-middle">お魚特集</a></li>
						<li class="tag-menu-width tag-menu-5 text-size14 btn-tag-categorey px-12px box-read "><a href="shop/index.html" class="align-middle">お魚特集お魚特集お魚特集</a></li>
						<li class="tag-menu-width text-size14 box-read modal-open btn-tag-categorey px-12px" data-target="modal01">特集を全て表示</li>
					</ul>
				</div>
				<div class="cart-box">
					<div class="cart-contnet cart-text-color">
						<div class="flex justify-between items-center">
							<div class="relative">
								<img class="item-cart-icon-color-black" src="resouse/s_images/common/cart.png">
								<span class="absolute notice" style="left: 34px; top: -2px;">100</span>
							</div>
							<ul class="text-right text-size14 cart-text-color">
								<li>小計<span class="text-size20 bold price-color">200</span>円</li>
								<li class="text-size12">送料300円</li>
								<li class="text-size12">あと1850円で送料無料</li>
							</ul>
						</div>
						<a href="#" class="btn-cart mt-8px">レジへ進む</a>
					</div>
					<ul id="cart-item-list" class="cart-item-list flex flex-wrap">
						<?php
						for ($val = 0; $val <= 10; $val++) {
							echo '						<li class="cart-item py-20px px-20px w-180px relative">
							<div class="absolute cart-item-close">x</div>
							<div><img src="resouse/s_images/common/banana.png" width="60%" class="center-margin"></div>
							<p class="mt-6 box-read-lines item-card-text-h text-size14">[産地契約商品]北海道産トマト</p>
							<div class="text-right">
								<div class="flex items-baseline justify-end">
									<span class="text-size14 color-gray-4 pr-2">1袋</span>
									<p class="font-bold text-size16 price-color line_height_1">100円</p>
								</div>
								<p class="text-size14">税込188.11円</p>
							</div>
							<div>
								<div class="relative mt-12px">
									<div class="absolute left-0 position-top-center"> <a href="#" class="cart-item-cart-minus minus-button tx-button bg-color-gray-2 bg-color-gray-light w-44px h-24px"></a>
									</div>
									<div class="cart_num block text-size16 text-center tx-color-gray font-bold w-full h-7">1</div>
									<div class="absolute right-0 position-top-center tx-button"> <a href="#" class="cart-item-cart-plus plus-button tx-button bg-color-gray-2 bg-color-gray-light w-44px h-24px"></a>
									</div>
								</div>
							</div>
							<div class="border-b-1 border-solid pt-20px"></div>
						</li>';
						}
						?>
					</ul>
				</div>
			</div>
		</div>

		<!-- タブレットカテゴリ -->
		<div class="bg-category sideBoxBody-category">
			<div class="overflow-x-scroll overflow-x-hidden whitespace-no-wrap content-width center-margin h-48px">
				<ul class="menuList bd-b-color-gray itemList flex justify-state items-center h-full text-size16 relative">
					<?php
					if (isset($_GET['product'])) {
						$product = $_GET['product'];
					} else {
						$product = 0;
					};
					for ($val = 0; $val <= 20; $val++) {
						if ($val == $product) {
							echo '<li class="flex items-center h-full relative"><div class="menuList';
							echo $val;
							echo ' px-12px font-bold">
							<a href="#" class="menu">お気に入り</a>
						</div>
						<div class="basic-border bd-b-category absolute w-full inset-x-0 bottom-0"></div>
						</li>';
						} else {
							echo '<li><div class="menuList';
							echo $val;
							echo ' px-12px">
							<a href="?product=';
							echo $val;
							echo '" class="menu">お気に入り</a>
						</div>
						</li>';
						};
					}

					?>
				</ul>
			</div>
		</div>

		<!-- サイドメニュー -->
		<div class="main pt-12 p-6 pb-8 flex" style="height: auto; min-width:750px; max-width:1373px; margin:0 auto;">
			<div class="side" style="height: 400px; min-width:228px; width: 228px; margin-right:15px;">
				<div>
					<div class="side-menu-title-back">
						<span class="pr-2"><img src="resouse/s_images/common/truck.png" width="24px"></span>配送日時
					</div>
					<p class="mt-6">3便 | 06/16(火)18:00~20:00</p>
					<a href="#" class="btn-small w-full btn-color3 mt-2">配送日時変更</a>
				</div>
				<!-- 売場一覧 -->
				<div class="mt-16">
					<div class="side-menu-title-back">
						<span class="pr-2"><img src="resouse/s_images/common/menu-shop.png" width="24px"></span>売場一覧
					</div>

					<nav>
						<ul>
							<li class="has-child level-1"><a href="#">オススメ</a>
								<!--子要素を持つ li にはhas-childというクラス名をつける-->
								<ul>
									<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ</li>
									<li class="text-size14"><a href="#">オススメ1</a></li>
									<li class="text-size14"><a href="#">オススメ2</a></li>
									<li class="has-child text-size14"><a href="#">オススメ3</a>
										<ul>
											<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3</li>
											<li class="has-child"><a href="#">オススメ3-1</a>
												<ul>
													<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1</li>
													<li class="text-size14"><a href="#">オススメ3-1-1</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-2</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-3</a></li>
													<li class="has-child text-size14"><a href="#">オススメ3-1-4</a>
														<ul>
															<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1-4</li>
															<li class="text-size14"><a href="#">オススメ3-1-4-1</a></li>
															<li class="text-size14"><a href="#">オススメ3-1-4-2</a></li>
															<li class="text-size14"><a href="#">オススメ3-1-4-3</a></li>
															<li class="text-size14"><a href="#">オススメ3-1-4-4</a></li>
															<li class="text-size14"><a href="#">オススメ3-1-4-5</a></li>
														</ul>
													</li>
													<li><a href="#">オススメ3-1-5</a></li>
												</ul>
											</li>
											<li><a href="#">オススメ3-2</a></li>
											<li><a href="#">オススメ3-3</a></li>
											<li><a href="#">オススメ3-4</a></li>
											<li><a href="#">オススメ3-5</a></li>
										</ul>
									</li>
									<li class="text-size14"><a href="#">オススメ4</a></li>
								</ul>
							</li>
							<li class="has-child level-1"><a href="#">魚</a>
								<!--子要素を持つ li にはhas-childというクラス名をつける-->
								<ul>
									<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3</li>
									<li class="has-child text-size14"><a href="#">オススメ3-1</a>
										<ul>
											<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1</li>
											<li class="text-size14"><a href="#">オススメ3-1-1</a></li>
											<li class="text-size14"><a href="#">オススメ3-1-2</a></li>
											<li class="text-size14"><a href="#">オススメ3-1-3</a></li>
											<li class="has-child text-size14"><a href="#">オススメ3-1-4</a>
												<ul>
													<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1-4</li>
													<li class="text-size14"><a href="#">オススメ3-1-4-1</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-2</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-3</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-4</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-5</a></li>
												</ul>
											</li>
											<li><a href="#">オススメ3-1-5</a></li>
										</ul>
									</li>
									<li class="text-size14"><a href="#">オススメ3-2</a></li>
									<li class="text-size14"><a href="#">オススメ3-3</a></li>
									<li class="text-size14"><a href="#">オススメ3-4</a></li>
									<li class="text-size14"><a href="#">オススメ3-5</a></li>
								</ul>
							</li>
							<li class="has-child level-1"><a href="#">野菜・フルーツ</a>
								<!--子要素を持つ li にはhas-childというクラス名をつける-->
								<ul>
									<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3</li>
									<li class="has-child text-size14"><a href="#">オススメ3-1</a>
										<ul>
											<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1</li>
											<li class="text-size14"><a href="#">オススメ3-1-1</a></li>
											<li class="text-size14"><a href="#">オススメ3-1-2</a></li>
											<li class="text-size14"><a href="#">オススメ3-1-3</a></li>
											<li class="has-child text-size14"><a href="#">オススメ3-1-4</a>
												<ul>
													<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1-4</li>
													<li class="text-size14"><a href="#">オススメ3-1-4-1</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-2</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-3</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-4</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-5</a></li>
												</ul>
											</li>
											<li><a href="#">オススメ3-1-5</a></li>
										</ul>
									</li>
									<li class="text-size14"><a href="#">オススメ3-2</a></li>
									<li class="text-size14"><a href="#">オススメ3-3</a></li>
									<li class="text-size14"><a href="#">オススメ3-4</a></li>
									<li class="text-size14"><a href="#">オススメ3-5</a></li>
								</ul>
							</li>
							<li class="has-child level-1"><a href="#">和風デイリー</a>
								<!--子要素を持つ li にはhas-childというクラス名をつける-->
								<ul>
									<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3</li>
									<li class="has-child text-size14"><a href="#">オススメ3-1</a>
										<ul>
											<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1</li>
											<li class="text-size14"><a href="#">オススメ3-1-1</a></li>
											<li class="text-size14"><a href="#">オススメ3-1-2</a></li>
											<li class="text-size14"><a href="#">オススメ3-1-3</a></li>
											<li class="has-child text-size14"><a href="#">オススメ3-1-4</a>
												<ul>
													<li class="bold text-size16" style="border: none; margin: 8px 12px;">オススメ3-1-4</li>
													<li class="text-size14"><a href="#">オススメ3-1-4-1</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-2</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-3</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-4</a></li>
													<li class="text-size14"><a href="#">オススメ3-1-4-5</a></li>
												</ul>
											</li>
											<li><a href="#">オススメ3-1-5</a></li>
										</ul>
									</li>
									<li class="text-size14"><a href="#">オススメ3-2</a></li>
									<li class="text-size14"><a href="#">オススメ3-3</a></li>
									<li class="text-size14"><a href="#">オススメ3-4</a></li>
									<li class="text-size14"><a href="#">オススメ3-5</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				<!-- カラムバナー -->
				<div class="mt-16">
					<div class="side-menu-title-back">
						<span class="pr-2"><img src="resouse/s_images/common/mail.png" width="24px"></span>お知らせ
					</div>
					<ul>
						<li class="border-b bd-gray-4 p-12px">
							<a href="#">
								<span class="text-size14">2020/12/01</span>
								<p class="box-read">お野菜キャンペーン</p>
							</a>
						</li>
						<li class="border-b bd-gray-4 p-12px">
							<a href="#">
								<span class="text-size14">2020/12/01</span>
								<p class="box-read">お肉キャンペーン</p>
							</a>
						</li>
					</ul>
				</div>
				<ul class="mt-16">
					<li class="mt-8px">
						<a href="#">
							<img src="resouse/s_images/banner/colbanner.png">
						</a>
					</li>
					<li class="mt-8px">
						<a href="#">
							<img src="resouse/s_images/banner/colbanner.png">
						</a>
					</li>
				</ul>
			</div>

			<div class=" conts" style="min-width:750px; width:1100px;">
				<div class="warning-news-top flex">
					<div class="flex items-center justify-center news-title-box">
						<img src="resouse/s_images/icon/icon-kinkyu.png" width="20px">
						<span class="pl-2 text-white">
							緊急連絡
						</span>

					</div>
					<div class="news-cont-box">
						<ul class="slider-news">
							<li>
								<div class="slider-news-title">緊急お知らせタイトル</div>
								<div class="slider-news-text">緊急お知らせテキスト緊急お知らせテキスト緊急お知らせテキスト緊急お知らせテキスト</div>
							</li>
							<li>
								<div class="slider-news-title">緊急お知らせタイトル</div>
								<div class="slider-news-text">緊急お知らせテキスト緊急お知らせテキスト緊急お知らせテキスト緊急お知らせテキスト緊急お知らせテキスト緊急お知らせテキスト</div>
							</li>
						</ul>
					</div>
				</div>

				<ul class="slider-top-sp-feature center-margin mt-16">
					<li>
						<img src="resouse/s_images/common/dame.jpg" style="border:3px solid red;" width="100%">
					</li>
					<li>
						<img src="resouse/s_images/common/dame.jpg" width="100%">
					</li>
					<li>
						<img src="resouse/s_images/common/dame.jpg" style="border:3px solid blue;" width=" 100%">
					</li>
				</ul>

				<ul class="flex-list-2col mt-40px">
					<li><img src="resouse/s_images/common/dame.jpg" width="100%"></li>
					<li><img src="resouse/s_images/common/dame.jpg" width="100%"></li>
					<li><img src="resouse/s_images/common/dame.jpg" width="100%"></li>
				</ul>
				<div class="itme-type-1 mt-20 mb-20">
					<img src="resouse/s_images/common/dame.jpg" width="100%">
					<div class="flex items-baseline relative border-b-1 border-solid">
						<p class="font-bold mt-10 mb-4 text-size18">オススメ商品1</p>
						<span class="text-size14 pl-8 color-gray-4"><a href="#" class="arrow-item-category-link">全て表示</a></span>
					</div>
					<ul class="slider-itme-type-1 item-card-margin-y-40px">
						<li class="itme-type-1-box px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOn.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
					</ul>
				</div>
				<div class="itme-type-1 mt-20 mb-20">
					<img src="resouse/s_images/common/dame.jpg" width="100%">
					<div class="flex items-baseline relative border-b-1 border-solid">
						<p class="font-bold mt-10 mb-4 text-size18">オススメ商品1</p>
						<span class="text-size14 pl-8 color-gray-4"><a href="#" class="arrow-item-category-link">全て表示</a></span>
					</div>
					<ul class="slider-itme-type-1 item-card-margin-y-40px">
						<li class="itme-type-1-box px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOn.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
						<li class="px-6 py-6 mt-4 bd-gray-4 border-r-1 border-dashed item-card-w">
							<div><img src="resouse/s_images/common/banana.png" class="center-margin"></div>
							<div class="flex mt-6"><img src="resouse/s_images/common/tag_1.jpg" class="pr-3"><img src="resouse/s_images/common/tag_2.png" class="pr-3"></div>
							<p class="mt-6 box-read-lines item-card-text-h">[産地契約商品]北海道産ブロッコリー</p>
							<div class="flex justify-between items-center mt-6">
								<div>
									<span class="text-size14 color-gray-4">1袋</span>
									<p class="font-bold text-size20 price-color">100円</p>
									<p class="text-size14">税込188.11円</p>
								</div>
								<div>
									<img src="resouse/s_images/common/hartOff.png" class="item-card-icon-heart-size item-card-icon-heart-color">
								</div>
							</div>
							<a href="#" class="btn-small-outline mt-6">カートに追加</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="guide p-6 pb-8" style="max-width:1373px; margin:0 auto;">
			<div class="news-box border-1 border-solid bd-gray-3">
				<div class="title-back-color news-box-title font-bold text-size20">お知らせ</div>
				<ul class="px-20px news-cont">
					<li class="py-20px">
						<a href="#">
							<div class="flex items-center pb-4">
								<p class="mr-6">2020/02/01</p><span class="tag-outline px-20p">キャンペーン</span>
							</div>
							<p>台風による配達遅延によるお詫び</p>
						</a>
					</li>
					<li class="py-20px">
						<a href="#">
							<div class="flex items-center pb-2">
								<p class="mr-6">2020/02/01</p><span class="tag-outline px-20px">キャンペーン</span>
							</div>
							<p>台風による配達遅延によるお詫び</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="m-16"></div><!-- 空白 -->
			<div class="shop-info-box">
				<p class="text-size20 mb-2">担当店舗情報</p>
				<div class="border-1 border-solid bd-gray-3 p-20px">
					<p class="pb-4">テスト店３</p>

					<ul>
						<li>住所：淀川区西中島5丁目55-555</li>
						<li>999-9999-9999</li>
						<li>酒類販売管理者：ベクトル手須戸</li>
						<li>ネットスーパー担当者：ベクトル手須戸</li>
					</ul>
				</div>
			</div>
			<div class="m-16"></div><!-- 空白 -->
			<div class="medical-supplies-info-box">
				<p class="text-size20 mb-2">医薬品販売適合証</p>
				<div class="border-1 border-solid bd-gray-3 p-20px">
					<p class="pb-4">適合証更新</p>

					<a href="#">https://merge.asp-ver2.com/asp-ver2.com/</a>
				</div>
			</div>
			<div style="margin: 100px;"></div><!-- 空白 -->
		</div>

		<!-- モーダルウインドウのエリア  ポイント-->
		<div id="modal01" class="js-modal modal">
			<div class="modal__bg modal-close"></div>
			<div class="modal__content modal__content_tokusyu relative">
				<div class="modal__tokusyu_title">全ての特集</div>
				<a href="" class="modal-close text-size32" style="position: absolute;top: 0px;right: 12px;">×</a>
				<ul class="flex-list-2col_modal_tokusyu px-32px my-32px overflow-scroll">
					<?php
					for ($val = 0; $val <= 20; $val++) {
						echo '<li><a href="#" class="btn-large-outline box-read ">オススメ特集</a></li>';
					}
					?>
				</ul>
			</div>
			<!--modal__inner-->
		</div>
		<!--modal-->

		<?php require("_parts/footer/footer.html") /* フッター */ ?>
	</div>
	<!--//wrap-->
</body>
<!--//モーダル-->
<script src="../resouse/n_js/jquery/modal.js"></script>
<script src="../resouse/n_js/jquery/tab_maouseover.js"></script>

</html>