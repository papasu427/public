$(function(){

var scrollPosition;

//モーダルウィンドウを出現させるクリックイベント
$("#modal-open").click( function(){

	//キーボード操作などにより、オーバーレイが多重起動するのを防止する
	$( this ).blur() ;	//ボタンからフォーカスを外す
	if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない (防止策1)
	//if($("#modal-overlay")[0]) $("#modal-overlay").remove() ;		//現在のモーダルウィンドウを削除して新しく起動する (防止策2)

	//オーバーレイを出現させる
	$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
	$( "#modal-overlay" ).fadeIn( "fast" ) ;

	//コンテンツをセンタリングする
	centeringModalSyncer() ;

	//コンテンツをフェードインする
	$( "#modal-content" ).fadeIn( "fast" ) ;

	//入力内容の保持
	if( $( "#modal-open" ).val()  !=""){
		$( "#p_srh_wd" ).val($( "#modal-open" ).val());
	}else{
		$( "#p_srh_wd" ).val('');
	}
	//カーソルは入力欄に移動
	$( "#p_srh_wd" ).focus() ;

	//スクロール位置を保持
	scrollPosition = $(window).scrollTop();

	//スクロールTOPへ
	$(window).scrollTop(0);

	//cssを変更
	$('#modal-content').css('position', 'absolute');

	//[#modal-overlay]、または[#modal-close]をクリックしたら…
	$( "#modal-overlay,#modal-close" ).unbind().click( function(){

		//スクロール位置を戻す
		window.scrollTo( 0 , scrollPosition );

		//cssをもとに戻す(absoluteのままだとスクロール位置がtopになる)
		$('#modal-content').css('position', 'fixed');

		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$( "#modal-content,#modal-overlay" ).fadeOut( "fast" , function(){
			//入力されている内容の保持
			$( "#modal-open" ).val($( "#p_srh_wd" ).val());
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove() ;

		} ) ;

	} ) ;
} );

//リサイズされたら、センタリングをする関数[centeringModalSyncer()]を実行する
$( window ).resize( centeringModalSyncer ) ;

	//センタリングを実行する関数
	function centeringModalSyncer() {

		//画面(ウィンドウ)の幅、高さを取得
		var w = $( window ).width() ;
		var h = $( window ).height() ;

		// コンテンツ(#modal-content)の幅、高さを取得
		// jQueryのバージョンによっては、引数[{margin:true}]を指定した時、不具合を起こします。
//		var cw = $( "#modal-content" ).outerWidth( {margin:true} );
//		var ch = $( "#modal-content" ).outerHeight( {margin:true} );
		var cw = $( "#modal-content" ).outerWidth();
		var ch = $( "#modal-content" ).outerHeight();

		//センタリングを実行する
		$( "#modal-content" ).css( {"top": ((h - ch)/2) + "px"} ) ;

	}

} ) ;


$(function(){
	//モーダルウィンドウを出現させるクリックイベント
	$("#cart-check").click( function(){

		$( this ).blur() ;	//ボタンからフォーカスを外す

		$('#modal-overlay').remove() ;

		//オーバーレイを出現させる
		$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
		$( "#modal-overlay" ).fadeIn( "fast" ) ;

		//コンテンツをセンタリングする
		centeringModal() ;

		//カート情報を作成する
//		makeCartInfo();

		//コンテンツをフェードインする
		$( "#cart-check-modal-content" ).fadeIn( "fast" ) ;

		//モーダルウィンドウを閉じるクリックイベント
		$("#modal-overlay, #modal-cart-close").unbind().click( function(){
			$( "#modal-content,#modal-overlay" ).fadeOut( "fast" , function(){
				//[#modal-overlay]を削除する
				$('#modal-overlay').remove() ;
				$('#cart-check-modal-content').hide() ;
			} ) ;
		} ) ;
	} ) ;


	//センタリングを実行する関数
	function centeringModal() {

		//画面(ウィンドウ)の幅、高さを取得
		var w = $( window ).width() ;
		var h = $( window ).height() ;

		// コンテンツ(#modal-content)の幅、高さを取得
		// jQueryのバージョンによっては、引数[{margin:true}]を指定した時、不具合を起こします。
		var cw = $( "#cart-check-modal-content" ).outerWidth();
		var ch = $( "#cart-check-modal-content" ).outerHeight();

		//コンテンツがスマホサイズより小さい場合、センタリングを実行する
		if (h > ch) {
			$( "#cart-check-modal-content" ).css( {"top": ((h - ch)/2) + "px"} ) ;
			$( "#cart-check-modal-content" ).css('position', 'fixed') ;
		}
	}

} );

function makeCartInfo() {
		formname='cart_chk.php';
		$.ajax({
			type: "POST",
			url: 'cart_chk.php',
			headers: {"pragma": "no-cache"},
			dataType: "json",
			cache: false,
			async: false,
			success: function(data){
				try{
					var result = data.result;
					if(result){	//お気に入りに正常に追加/削除できた
						//画面表示
						var cart_data = '';
						var cart = data.cart_data.data;
						for (var i=0; i<cart.length; i++) {
							cart_data += '<div class="w-1/2 mb-5">';
							cart_data += '<div class="table align-middle m-3">';
							cart_data += '<div class="table-row">';
							cart_data += '<img class="inline-block pic-size1" src="">';
							cart_data += '</div>';
							cart_data += '<div class="table-row">';
							cart_data += '<ul class="trade-name tx-size10 tracking-wide">';
							cart_data += '<li class="ml-10pt">' + cart[i]['item_name'] + '</li>';
							cart_data += '</ul>';
							cart_data += '</div>';
							cart_data += '<div class="table-row">';
							cart_data += '<div class="relative ml-10pt w-full mt-2">';
							cart_data += '<div class="inline-block align-top">';
							cart_data += '<b class="tx-color-money tx-size13 pic-size2">';
							if(cart[i]['event_id'] != null && strlen(cart[i]['event_id']) > 0) {
								cart_data += cart[i]['event_price'];
							} else {
								cart_data += cart[i]['sell_price'];
							}
							cart_data += '円</b>';
							cart_data += '</div>';
							cart_data += '</div>';
							cart_data += '</div>';
							cart_data += '<div class="m-auto">';
							cart_data += '</div>';
							cart_data += '</div>';
							cart_data += '</div>';
						}

						$("#cart_index").html(cart_data);

					}else{	//お気に入り追加でエラー
						document.error_list.output_flg.value = data.output_flg;
						document.error_list.error_file.value = data.error_file;
						document.error_list.error_line.value = data.error_line;
						document.error_list.error_type.value = data.error_type;
						document.error_list.error_msg.value = data.error_msg;
						document.error_list.next_file.value = data.next_file;
						document.error_list.comment.value = data.comment;
						document.error_list.submit();
					}
				}catch(e){
					favoriteError(e,formname);
				}
			},
			error: function(xhr, status, err){
				var error     = new Error();
				error.name    = "POST Failure ";
				favoriteError(error,formname);
				favoriteError(error.message,formname);
			}
		});

}