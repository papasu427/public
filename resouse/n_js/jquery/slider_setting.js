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