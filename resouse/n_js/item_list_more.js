// スマートフォン用に変更(必要なものは下から上に移動させ、開発が落ち着いたら使われていない下のものは削除)
// --------------------------------------------------共通--------------------------------------------------
//<![CDATA[
// ソート順POPUP
$(document).ready(function(){
	$(".popup").colorbox({width:"90%", inline:true, href:"#itemSortBox"});
});
//]]>
$(function() {
	$('.more').on("click",function()
	{
		var ID = $(this).attr("id");
		var URL = $(this).attr("url");
		var LOADING = $(this).attr("loading");
		if(ID)
		{
			//$("#more_area").html('<img src="../_common/s_images/icon/ajax-loader.gif" />');
			$("#more_area").html('<img src="' + LOADING + '" />');
			var param = {"start":ID,"more":"1"};
			$.ajax({
				type: "GET",
				url: URL,
				data: param,
				dataType: "json",
				cache: false,
				success: function(data){
				var out_html = "";
				var item_data_arr = new Array();
				//配列組み直し
				var id_val = "";
				var noService = false;
				var intax_price_ar = "";
				for( var i in data.item_data ){
					//item_data_arr.push({key:i,val:data.item_data[0][i]});
//					item_data_arr.push({val:data.item_data[0][i]});
//				}
//				for(var i=0; i<item_data_arr.length; i++){
					id_val = data.item_data[i];
					id_cnt = i + data.start_key;
					// お気に入りの商品表示時に取り扱っていない商品の場合はtrue
					noService = false;
					if (('item_exists' in id_val) && id_val.item_exists == false && data.disp_mode == 'fvrt') {
						noService = true;
					}

					out_html += '<div class="itemListBox" id="d_' + $.escapeHTML(id_val.item_code) + '">' + "\n"
						+ '<input type="hidden" id="p_exec_code_' + id_cnt + '" name="p_exec_code[]" value="0" />' + "\n"
					   + '<input type="hidden" name="p_item_code[]" value="' + $.escapeHTML(id_val.item_code) + '" />' + "\n"
					   + '<input type="hidden" id="item_full_name_' + id_cnt + '" name="item_full_name" value="' + $.escapeHTML(id_val.full_item_name) + '" />' + "\n";


					if ('event_id' in id_val && id_val.event_id) {
						out_html += '<input type="hidden" name="p_event_id[]" value="' + $.escapeHTML(id_val.event_id) + '" />' + "\n";
					} else {
						out_html += '<input type="hidden" name="p_event_id[]"  value="" />' + "\n";
					}
					if ('category_code' in id_val) {
						out_html += '<input type="hidden" name="p_group_code[]" value="' + $.escapeHTML(id_val.category_code) + '" />' + "\n";
					} else {
						out_html += '<input type="hidden" name="p_group_code[]" value="" />' + "\n";
					}


					// JSに渡す引数を生成
					var detail_js_arg  = "'" + $.escapeHTML(id_val.item_code) + "'";
					if (('category_code' in id_val) && id_val.category_code != '') {
						detail_js_arg += ",'" + $.escapeHTML(id_val.category_code) + "'";
					} else {
						detail_js_arg += ",''";
					}

					out_html += '<div class="itemInfoBox">'
						+ '<div class="itemImagesBox">'
						+ 	'<p class="itemImages"><a href="javascript:move_detail(' + detail_js_arg + ')" class="itemListLink">' + "\n"
						+ 	'<img src="' + $.escapeHTML(id_val.img_url) + '" class="itemThumbImages_m" alt="' + $.escapeHTML(id_val.full_item_name) + '" /></a></p>' + "\n"
						+ '</div>';


					// 取り扱っているときはリンクを張る
					if (!noService) {
						out_html += '			<a href="javascript:move_detail(' + detail_js_arg + ')" class="itemListLink">' + "\n";
						out_html += '				<div class="itemTextBox">' + "\n";
					}else{
						out_html += '				<div class="itemTextBoxNo">' + "\n";
					}
					out_html += '					<p class="itemIcon">' + "\n";
					// 配列に溜めたアイコンを表示
					if (id_val.ary_icon.length == 0) {
						out_html += '&nbsp;' + "\n";
					} else {
						for (var j = 0; j < id_val.ary_icon.length; j ++) {
							out_html += '<img src="'+ id_val.ary_icon[j].url + '" alt="' + id_val.ary_icon[j].alt + '" class="imgItemIcon" />' + "\n";
						}
					}
					out_html += '					</p>' + "\n";

					out_html += '<p class="itemTitle">' + $.escapeHTML(id_val.full_item_name) + '</p>'  + "\n";

					if (noService) {
							// お気に入り表示で、商品を取り扱っていない
					//	out_html += '					<p class="itemNumAlert">&nbsp;</p>' + "\n";
					//	out_html += '					<p class="itemPrice">&nbsp;</p>' + "\n";

					} else {
						// 残り僅か表示
						if (id_val.stock_alert == true) {
							out_html += '					<p class="itemNumAlert">';
							out_html += $.escapeHTML(data.str_stock_alert);
							out_html += '</p>' + "\n";
						}

						// 価格表示
						out_html += '					<p class="itemPrice">';
						if (data.price_display_type == '0') {
							// 商品マスタ表示価格タイプ 0:税込価格
							out_html += '<span class="itemPrice">' + $.number_format(id_val.sell_price) + '</span><span class="zeikomi">円</span>';
						} else if (data.price_display_type == '1') {
							// 商品マスタ表示価格タイプ 1:本体価格表示のみ
							out_html += '<span class="zeikomi">本体</span>&nbsp;<span class="itemPrice">' + $.number_format(id_val.base_price) + '</span><span class="zeikomi">円</span>';
						} else {
							// 商品マスタ表示価格タイプ 9:両方の価格表示
							out_html += '<span class="zeikomi">本体</span>&nbsp;<span class="itemPrice">' + $.number_format(id_val.base_price) + '</span><span class="zeikomi">円</span>&nbsp;';
							if (data.number_of_digits > 0) {
								intax_price_ar = id_val.sell_price.toString().split('.');
								out_html += '<span class="zeikomi small">税込</span>&nbsp;<span class="itemPrice-small">' + $.number_format(intax_price_ar[0],data.number_of_digits) + '.' + intax_price_ar[1] + '</span><span class="zeikomi smal">円</span>';
							} else {
								out_html += '<span class="zeikomi small">税込</span>&nbsp;<span class="itemPrice-small">' + $.number_format(id_val.sell_price) + '</span><span class="zeikomi small">円</span>';
							}
						}

						if (data.reduced_tax_disp_flg && id_val.tax_disp != '') {
							out_html += '&nbsp;<span class="zeikomi small">' + id_val.tax_disp + '</span>';
						}
						out_html +=  '</p>' + "\n";
					}
					out_html +=  '</div>';

					if (!noService) {
						out_html +=  '</a>';
					}
					out_html +=  '</div>'
						+ '<div class="itemFloatBox">';

					// 「数量セレクトとカゴへボタン」または購入不可アイコンの表示
					// とりあえず見学中は買えない
					if (data.tour_flg) {
						out_html +=  '			<div class="itemMarkBox"><p class="mark mark1">店内見学中</p></div>' + "\n";

					// お気に入り表示で、商品を取り扱っていない
					} else if (('item_exists' in id_val) && id_val.item_exists == false && data.disp_mode == 'fvrt') {
						out_html +=  '			<div class="itemCartSet"><p class="mark mark1">取扱っておりません</p></div>' + "\n";

					// 品切れ中も買えない
					} else if (id_val.stockout) {
						out_html +=  '			<div class="itemStockOut"><p class="mark mark1">品切れ中</p></div>' + "\n";

					// カゴに入っている
					} else if (id_val.in_cart) {
						out_html +=  '			<div class="itemCartSet"><p class="mark markCartIn">選択済</p></div>' + "\n";

					// 数量セレクトとカゴへ
					} else {
						out_html += '			<div class="itemNum" id="itemOp_'+id_val.item_code+'"><select name="p_item_num[' +  id_cnt  +  ']" class="itemNumSelect">' + "\n";

						for (var order_quantity in data.order_quantity) {
							// alert(order_quantity + "_" + data.order_quantity[order_quantity]);

							if (data.order_quantity[order_quantity] <= id_val.order_quantity ){
								out_html += '				<option value="' + $.escapeHTML(order_quantity) + '">' + $.escapeHTML(data.order_quantity[order_quantity]) + '</option>' + "\n";
							} else {
								break;
							}
						}
						out_html += '			</select></div>' + "\n";

						// JavaScript関数に渡す引数部分の文字列をあらかじめ作っておく
						var js_arg = "'" + $.escapeHTML(id_val.item_code) + "'";
						if (id_val.medicine_data_exist && data.shop_inquiry_flg) {
						} else {
						js_arg += ",'" + $.escapeHTML(id_val.full_item_name) + "'";
						js_arg += ",''";	// 販売企画ID
						}
						if ('category_code' in id_val) {
							js_arg += ",'" + $.escapeHTML(id_val.category_code) + "'";
						} else {
							js_arg += ",''";
						}
						js_arg += ",'" + id_cnt + "'";
						// ボタンの切り替えと追加注文モードの場合の引数追加
						if (('add_item_mode' in data) && data.add_item_mode == false) {
							// 通常モード
							var cart_btn = '				カゴへ' + "\n";
						} else {
							// 追加注文モード
							var cart_btn = '				追加注文' + "\n";
							js_arg += ",'add'";
						}
						//医薬品判定
						if (id_val.medicine_data_exist && data.shop_inquiry_flg) {
							if(typeof id_val.resale_date === 'undefined' || id_val.resale_date == '0') {
								out_html += '			<div id="itemBox_'+id_val.item_code+'" class="itemCartSet"><p><a onclick="JavaScript:move_medicine_attention(' + js_arg + ');" class="button button1">' + "\n";
							} else {
								out_html += '			<div id="itemBox_'+id_val.item_code+'" class="itemCartSet"><p><a onclick="JavaScript:resaleMedicineAlert(' + id_val.resale_date + ');" class="button button1">' + "\n";
							}
						//医薬品ではない場合
						} else {
						out_html += '			<div id="itemBox_'+id_val.item_code+'" class="itemCartSet"><p><a onclick="JavaScript:setCart(' + js_arg + ');" class="button button1">' + "\n";
						}
						out_html += cart_btn;
						out_html +=  '			</a></p></div>' + "\n";
					}

					// 「店内見学でない」場合のみお気に入り状態アイコンの表示
//					if ( data.isLogin && ! data.tour_flg && ( !('item_exists' in id_val) || id_val.item_exists != false || data.disp_mode != 'fvrt')) {
					if ( data.isLogin && ! data.tour_flg ) {
						// JavaScript関数に渡す引数部分の文字列をあらかじめ作っておく
						var js_arg = "'" + $.escapeHTML(id_val.item_code) + "'";
						js_arg += ",'" + $.escapeHTML(id_val.full_item_name) + "'";
						if ('event_id' in id_val && id_val.event_id) {
							js_arg += ",'" + $.escapeHTML(id_val.event_id) + "'";
						} else {
							js_arg += ",''";
						}
						if ('category_code' in id_val) {
							js_arg += ",'" + $.escapeHTML(id_val.category_code) + "'";
						} else {
							js_arg += ",''";
						}
						js_arg += ",'list'";

						if (id_val.favorite == false) {
							// お気に入り登録ボタン
							out_html += '			<div class="itemfavoriteSet" id="favBox_'+id_val.item_code+'" ><p><a onclick="JavaScript:setFavorite(' + js_arg + ');" class="button button3">';
							out_html +=  'お気に入りへ</a></p></div>' + "\n";
						} else {
							if (data.disp_mode != 'fvrt') {
								// お気に入り登録済み
								out_html +=   '			<div class="itemfavoriteSet"><p class="mark markFavoriteIn">';
								out_html +=   'お気に入り登録済</p></div>' + "\n";
							} else {
								// お気に入り解除
								out_html +=  '			<div class="itemfavoriteSet"><p><a onclick="JavaScript:delFavorite(' + js_arg + ');" class="button button3">';
								out_html +=   'お気に入り解除</a></p></div>' + "\n";
							}
						}
					}
					out_html +=   '		</div>' + "\n";
					out_html +=   '	<!--//itemListBox--></div>' + "\n";
				}
				$("div#updates").append(out_html);
//				$("#more"+ID).remove();
				if (data.next_page_no > 0){
					var more_html = '<a href="#" class="more" id="' + $.escapeHTML(data.next_page_no) + '"'
						+ 'url="' + URL + '" '
						+ 'loading="' + LOADING + '"> '
						+ '次の' + $.escapeHTML(data.next_count) + '件を見る</a>';
				}else{
					var more_html = 'これ以上商品はありません';
				}
				$("#more_area").html(more_html);
			},
				error: function(data){
					alert('err->' + data);
					//location.reload();
				}
			});
		}
		else
		{
			$(".morebox").html('これ以上商品はありません');
		}
		return false;

	});
	$.escapeHTML = function(val) {
	    return $("<div/>").text(val).html();
    };
    $.number_format = function(val) {
    	return(val.toString().replace( /([0-9]+?)(?=(?:[0-9]{3})+$)/g , '$1,' ));
   	};
});
// --------------------------------------------------/商品一覧(画像有無共通)--------------------------------------------------

$(function() {
	$('.more_cmpn').on("click",function()
	{
		var ID = $(this).attr("id");
		var URL = $(this).attr("url");
		var LOADING = $(this).attr("loading");
		if(ID)
		{
			//$("#more_area").html('<img src="../_common/s_images/icon/ajax-loader.gif" />');
			$("#more_area").html('<img src="' + LOADING + '" />');
			var param = {"start":ID,"more":"1"};
			$.ajax({
				type: "GET",
				url: URL,
				data: param,
				dataType: "json",
				cache: false,
				success: function(data){
				var out_html = "";
				var item_data_arr = new Array();
				//配列組み直し
				for( var i in data.item_data[0] ){
					//item_data_arr.push({key:i,val:data.item_data[0][i]});
					item_data_arr.push({val:data.item_data[0][i]});
				}
				var id_val = "";
				var event_data = data.event_data;
				var base_price = "";
				var intax_price = "";
				var intax_price_ar = "";
				for(var i=0; i<item_data_arr.length; i++){
					id_val = item_data_arr[i].val;
					id_cnt = i + data.start_key;

					out_html += '<div class="itemListBox" id="d_' + $.escapeHTML(id_val.item_code) + '">' + "\n";


					out_html += '<div class="itemInfoBox">'
						+ '<div class="itemImagesBox">'
						+ 	'<p class="itemImages"><img src="' + $.escapeHTML(id_val.img_url) + '" class="itemThumbImages_m" alt="' + $.escapeHTML(id_val.full_item_name) + '" /></p>' + "\n"
						+ '</div>';


					out_html += '			<a href="cmpn_item_dtl.php?itcd=' + $.escapeHTML(id_val.item_code) + '" class="itemListLink">' + "\n";
					out_html += '				<div class="itemTextBox">' + "\n";
					out_html += '					<p class="itemIcon">' + "\n";
					// 配列に溜めたアイコンを表示
					if (id_val.ary_icon.length == 0) {
						out_html += '&nbsp;' + "\n";
					} else {
						for (var j = 0; j < id_val.ary_icon.length; j ++) {
							out_html += '<img src="'+ id_val.ary_icon[j].url + '" alt="' + id_val.ary_icon[j].alt + '" class="imgItemIcon" style="padding:1px"/>' + "\n";
						}
					}
					out_html += '					</p>' + "\n";

					out_html += '<p class="itemTitle">' + $.escapeHTML(id_val.full_item_name) + '</p>'  + "\n";
					out_html += '<p class="itemPrice">';
					if(event_data.event_type_flg == 1){
						// ポイント倍付けのときは標準価格
						base_price = id_val.sell_base_price;
						intax_price = id_val.sell_price;
					} else {
						base_price = id_val.event_base_price;
						intax_price = id_val.event_price;
					}
					if (data.price_display_type == '0') {
						// 商品マスタ表示価格タイプ 0:税込価格
						out_html += '<span class="itemPrice">' + $.escapeHTML(number_format(intax_price)) + '</span>円';
					} else if (data.price_display_type == '1') {
						// 商品マスタ表示価格タイプ 1:本体価格表示のみ
						out_html += '本体&nbsp;<span class="itemPrice">' + $.escapeHTML(number_format(base_price)) + '</span>円&nbsp;';
					} else {
						// 商品マスタ表示価格タイプ 9:両方の価格表示
						out_html += '本体&nbsp;<span class="itemPrice">' + number_format(base_price) + '</span>円&nbsp;';
						if (data.number_of_digits > 0) {
							intax_price_ar = intax_price.toString().split('.');
							out_html += '<span class="small">税込</span>&nbsp;<span class="itemPrice-small">' + $.escapeHTML(number_format(intax_price_ar[0],data.number_of_digits)) + '.' + intax_price_ar[1] + '</span><span class="small">円</span>';
						} else {
							out_html += '<span class="small">税込</span>&nbsp;<span class="itemPrice-small">' + $.escapeHTML(number_format(intax_price)) + '</span><span class="small">円</span>';
						}
					}
					if (data.reduced_tax_disp_flg && id_val.tax_disp != '') {
						out_html += '&nbsp;<span class="small">' + id_val.tax_disp + '</span>';
					}
					out_html += '</p>' + "\n";

					out_html +=  '</div>';
					out_html +=  '</a>';
					out_html +=  '</div>';
					out_html +=   '	<!--//itemListBox--></div>' + "\n";
				}
				$("div#updates").append(out_html);
//				$("#more"+ID).remove();
				if (data.next_page_no > 0){
					var more_html = '<a href="#" class="more_cmpn" id="' + $.escapeHTML(data.next_page_no) + '"'
						+ 'url="' + URL + '" '
						+ 'loading="' + LOADING + '"> '
						+ '次の' + $.escapeHTML(data.next_count) + '件を見る</a>';
				}else{
					var more_html = 'これ以上商品はありません';
				}
				$("#more_area").html(more_html);
			},
				error: function(data){
					alert('err->' + data);
					//location.reload();
				}
			});
		}
		else
		{
			$(".morebox").html('これ以上商品はありません');
		}
		return false;

	});
	$.escapeHTML = function(val) {
	    return $("<div/>").text(val).html();
    };
    $.number_format = function(val) {
    	return(val.toString().replace( /([0-9]+?)(?=(?:[0-9]{3})+$)/g , '$1,' ));
   	};
});
// --------------------------------------------------/販売企画商品一覧(画像有無共通)--------------------------------------------------
