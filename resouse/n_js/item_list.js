// スマートフォン用に変更
// --------------------------------------------------共通--------------------------------------------------
// HTMLエスケープ
function escapeHTML(val){
    return $("<div/>").text(val).html();
};
// 数値表示用カンマ区切り
function number_format(val) {
	return(val.toString().replace( /([0-9]+?)(?=(?:[0-9]{3})+$)/g , '$1,' ));
};

//<![CDATA[
// ソート順POPUP
$(document).ready(function(){
	$(".popup").colorbox({width:"90%", inline:true, href:"#itemSortBox"});
});
//]]>
// チェック表示非表示
function ChDsp(flg,ch,seq){
	var obj=document.all && document.all(ch) || document.getElementById && document.getElementById(ch);
	if(obj && obj.style){
		if(flg){
			obj.style.display = "block";
			document.getElementById("p_exec_code_"+seq).value = 1;
		} else {
			obj.style.display = "none";
			document.getElementById("p_exec_code_"+seq).value = 0;
		}
	}
}
// チェックを一括ではずす
function chkOff() {
	if (!document.all) {
		var objChk = document.getElementsByName("checkedElmns");
		for (var i=0; i<objChk.length; i++) {
			ChDsp(0, objChk[i].id, i);
		}
	} else {
		var objChk = document.all.tags('p');
		$seq = 0;
		for (var i=0; i<objChk.length; i++) {
			if (document.all.tags('p')(i).name == "checkedElmns") {
				ChDsp(0, document.all.tags('p')(i).id, $seq);
				$seq++;
			}
		}
	}
}

// --------------------------------------------------共通--------------------------------------------------
// お気に入りに追加
function setFavorite(item_code,item_full_name, event_id, category_code, mode) {

	try{
		mode = mode || '';

		//formのhiddenにセットする
		document.favorite_set.p_item_code.value = item_code;
		if (event_id != '') {
			document.favorite_set.p_event_id.value = event_id;
		}
		if (category_code != '') {
			document.favorite_set.p_group_code.value = category_code;
		}
		var url = document.favorite_set.action;
		callFavoriteSet(item_code
				,item_full_name
				,document.favorite_set.p_event_id.value
				,document.favorite_set.p_group_code.value
				,false
				,url
				,document.favorite_set.tkn.value
				,mode
				,'favorite_set'
				);
			//popupClose('itemDetailBox');
	} catch (e) {
		favoriteError(e,'favorite_set');
	}
}
// お気に入り解除
function delFavorite(item_code, item_full_name, event_id, category_code, mode,tkn,url) {

	mode = mode || '';
	var disp_mode = '';
		//formのhiddenにセットする
		document.favorite_set.p_item_code.value = item_code;
		if (event_id != '') {
			document.favorite_set.p_event_id.value = event_id;
		}
		if (category_code != '') {
			document.favorite_set.p_group_code.value = category_code;
		}
	var url = document.favorite_del.action;
	callFavoriteSet(item_code
				,item_full_name
				,event_id
				,category_code
				,false
				,url
				,document.favorite_del.tkn.value
				,'delete'
				,'favorite_set'
				);
}

//favorite_set呼び出し
function callFavoriteSet(item_code,item_name,event_id,group_code,is_top,url,tkn,set,formname){
	try{
		if(set == 'delete') { //削除
			var param = {"p_item_code":item_code
						,"p_event_id":event_id
						,"p_group_code":group_code
						,"p_aj_mode":"1"
						,"tkn":tkn
						,"set":set
						,"p_time":new Date().getTime()
				};
			var msg = 'を<br>お気に入りから削除しました。';
		}else{
			var param = {"p_item_code":item_code
					,"p_event_id":event_id
					,"p_group_code":group_code
					,"p_aj_mode":"1"
					,"tkn":tkn
					,"p_time":new Date().getTime()
			};
			var msg = 'を<br>お気に入りへ追加しました。';
		}
		$.ajax({
			type: "POST",
			url: url,
			headers: {"pragma": "no-cache"},
			data: param,
			dataType: "json",
			cache: false,
			async: false,
			success: function(data){
				try{
					var result = data.result;
					if(result){	//お気に入りに正常に追加/削除できた
						if(set != 'delete') { //削除
							//メッセージ表示
							dispMsg(item_name + msg,'favorite');
						}

						//画面ごとの表示
						modifyFavoriteList(item_code,item_name,event_id,group_code,data.tkn,set);
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
	}catch(e){
		throw e;
	}
}
function favoriteError(e,formname){
	document.error_list.output_flg.value = "0";
	document.error_list.error_file.value = 1;
	document.error_list.error_line.value = 1;
	document.error_list.error_type.value = 9;
	document.error_list.error_msg.value = "通信エラーです。";
	document.error_list.next_file.value = "";
	document.error_list.comment.value = e;
	document.error_list.submit();
}

//お気に入りボタン書き換え
function modifyFavoriteList(item_code,item_name,event_id,group_code,tkn,mode){

	if(mode == 'delete') { //削除
		// お気に入りボタンを設定なしにする
		$('#favorite_off_' + item_code).addClass('block');
		$('#favorite_off_' + item_code).removeClass('hidden');
		$('#favorite_on_' + item_code).addClass('hidden');
		$('#favorite_on_' + item_code).removeClass('block');
	}else{
		// お気に入りボタンを設定ありにする
		$('#favorite_on_' + item_code).addClass('block');
		$('#favorite_on_' + item_code).removeClass('hidden');
		$('#favorite_off_' + item_code).addClass('hidden');
		$('#favorite_off_' + item_code).removeClass('block');
	}

	document.favorite_set.tkn.value = tkn;
	document.favorite_del.tkn.value = tkn;
	document.cart_set.tkn.value = tkn;

}

//右上メッセージ表示
function dispMsg(msg,style_name) {
	$.growl({ title: "", message: msg});	
}

//カートに追加
function setCart(item_code, item_full_name, event_id, category_code, mode) {
	try{
		var formname = "cart_set";
		//数量
		var num  = document.getElementsByName("p_item_num_" + item_code)[0].value;
		num = Number(num) + 1;

		document.cart_set.p_item_code.value = item_code;
		if (event_id != '') {
			document.cart_set.p_event_id.value = event_id;
		}
		if (category_code != '') {
			document.cart_set.p_group_code.value = category_code;
		}

		document.getElementsByName("p_item_num_" + item_code)[0].value = num;

		var url = document.cart_set.action;
		callCartSet(item_code,item_full_name,document.cart_set.p_event_id.value,document.cart_set.p_group_code.value,num,url,formname);
	} catch (e) {
		cartError(e,formname,'setCart');
	}
}

//カートから削除
function delCart(item_code, item_full_name, event_id, category_code, mode) {
	try{
		var formname = "cart_set";

		//変更前の数量が0以下の場合、終了
		if (num <= 0) {
			return false;
		}

		//数量
		var num  = document.getElementsByName("p_item_num_" + item_code)[0].value;
		num = Number(num) - 1;

		document.cart_set.p_item_code.value = item_code;
		if (event_id != '') {
			document.cart_set.p_event_id.value = event_id;
		}
		if (category_code != '') {
			document.cart_set.p_group_code.value = category_code;
		}

		document.getElementsByName("p_item_num_" + item_code)[0].value = num;

		if (num <= 0) {
			var url = 'cart_del.php';
			callCartDel(item_code,item_full_name,document.cart_set.p_event_id.value,document.cart_set.p_group_code.value,num,url,formname);
		} else {
			var url = document.cart_set.action;
			callCartSet(item_code,item_full_name,document.cart_set.p_event_id.value,document.cart_set.p_group_code.value,num,url,formname);
		}
	} catch (e) {
		cartError(e,formname,'setCart');
	}
}

//cart_set呼び出し
function callCartSet(item_code,item_name,event_id,group_code,item_num,url,formname){
	try{
		try{
			var param = {"p_item_code":item_code
						,"p_event_id":event_id
						,"p_group_code":group_code
						,"p_item_num":item_num
						,"p_aj_mode":"1"
						,"p_time":new Date().getTime()
				};
		}catch(e){
			cartError(e,formname,'callCartSet_param');
			return;
		}
		try{
			$.ajax({
				type: "POST",
				url: url,
				headers: {"pragma": "no-cache"},
				data: param,
				dataType: "json",
				cache: false,
				async: false,
				success: function suc(data){
					try{
						var result = data.result;
						if(result){	//カゴに正常に追加できた
							//商品ごとのカート数量を反映
							$("#itemBox_" + item_code + " #cart_num").html(item_num);
							$("#itemBox_" + item_code + " #p_item_num").html(item_num);

							//カート金額を反映
							var sum_price_str = '<b>' + number_format(data.cart_price) + '円</b>';
							$("#sum_price").html(sum_price_str);
							$("#sum_price_f_modal").html(sum_price_str);

							//メニューの金額を反映
							var sum_price_menu = '<sapn>' + data.cart_price + '円</sapn>';
							$("#sum_price_menu").html(sum_price_menu);

							//フッターの商品点数を反映
							var cart_sum_f = data.total_num;
							$("#cart_sum_f").html(cart_sum_f);

							//画面ごとの表示
							if (item_num <= 0) {
								//数量ボタンをカートボタンに
								$("#cart_add_on_" + item_code).css('display', 'block');		//表示
								$("#cart_add_num_" + item_code).css('display', 'none');		//非表示
							} else {
								//カートボタンを数量ボタンに反映
								$("#cart_add_on_" + item_code).css('display', 'none');		//非表示
								$("#cart_add_num_" + item_code).css('display', 'block');	//表示
							}

							//かごに入れましたメッセージ表示
							dispMsg(item_name + '  を<br>' + item_num + '個  に変更しました','cart');

						}else{	//カゴ追加でエラー
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
						cartError(e,formname,'ajax after success');
					}
				},
				error: function err(xhr, status, err){
					var error     = new Error();
					error.name    = "POST Failure ";
					error.message = err.substr(0, 500);
					cartError(error,formname,'ajax post error');
				}
			});
		}catch(e){
			cartError(e,formname,'callCartSet_ajax');
		}
	}catch(e){
		cartError(e,formname,'callCartSet');
	}
}

//cart_set呼び出し
function callCartDel(item_code,item_name,event_id,group_code,item_num,url,formname){
	try{
		try{
			var param = {"p_item_code":item_code
						,"p_event_id":event_id
						,"p_group_code":group_code
						,"p_item_num":item_num
						,"p_time":new Date().getTime()
				};
		}catch(e){
			cartError(e,formname,'callCartSet_param');
			return;
		}
		try{
			$.ajax({
				type: "POST",
				url: url,
				headers: {"pragma": "no-cache"},
				data: param,
				dataType: "json",
				cache: false,
				async: false,
				success: function suc(data){
					try{
						var result = data.result;
						if(result){	//カゴに正常に追加できた
							//商品ごとのカート数量を反映
							$("#itemBox_" + item_code + " #cart_num").html(item_num);
							$("#itemBox_" + item_code + " #p_item_num").html(item_num);

							//カート金額を反映
							var sum_price_str = '<b>' + number_format(data.cart_price) + '円</b>';
							$("#sum_price").html(sum_price_str);

							//メニューの金額を反映
							var sum_price_menu = '<sapn>' + data.cart_price + '円</sapn>';
							$("#sum_price_menu").html(sum_price_menu);

							//フッターの商品点数を反映
							var total_num = $("#cart_sum_f").html();
							var cart_sum_f = total_num - item_num;
							$("#cart_sum_f").html(cart_sum_f);

							//画面ごとの表示
							if (item_num <= 0) {
								//数量ボタンをカートボタンに
								$("#cart_add_on_" + item_code).css('display', 'block');		//表示
								$("#cart_add_num_" + item_code).css('display', 'none');		//非表示
							} else {
								//カートボタンを数量ボタンに反映
								$("#cart_add_on_" + item_code).css('display', 'none');		//非表示
								$("#cart_add_num_" + item_code).css('display', 'block');	//表示
							}

							//かごに入れましたメッセージ表示
							dispMsg(item_name + '  を<br>' + item_num + '個  に変更しました','cart');

						}else{	//カゴ追加でエラー
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
						cartError(e,formname,'ajax after success');
					}
				},
				error: function err(xhr, status, err){
					var error     = new Error();
					error.name    = "POST Failure ";
					error.message = err.substr(0, 500);
					cartError(error,formname,'ajax post error');
				}
			});
		}catch(e){
			cartError(e,formname,'callCartSet_ajax');
		}
	}catch(e){
		cartError(e,formname,'callCartSet');
	}
}
function cartError(e,formname,label){
	document.forms[formname].p_error.value = e + " label:" + label;
	document.forms[formname].submit();
}

//カゴボタン書き換え
function modifyList(item_code){
	//カゴボタン書き換え
	var item_box_html = "";
	item_box_html = '<p class="mark markCartIn">選択済</p>';
	var item_area = 'itemBox_' + item_code;			//itemListImage.html
	$("#" + item_area).html(item_box_html);
	var option_area = 'itemOp_' + item_code;
	var obj = document.getElementById(option_area);
	if(obj && obj.style){
		obj.style.display = "none";
	}

}

// --------------------------------------------------/共通--------------------------------------------------

// --------------------------------------------------店舗トップ--------------------------------------------------
// 追加確認
function add_conf($obj, $item_name) {
	var $num = $obj.p_item_num.value;
	if (window.confirm('【'+$item_name+'】を'+$num+'個追加します。\nお間違いなければ「OK」をクリックしてください。')) {
		return true;
	} else {
		return false;
	}
}
// --------------------------------------------------/店舗トップ--------------------------------------------------

// --------------------------------------------------商品一覧(画像有無共通)--------------------------------------------------
// カートに追加(単体)
//function setCart($item_code, $event_id, $category_code, $seq, $mode) {
//	var $num  = document.getElementsByName("p_item_num["+$seq+"]")[0].value;
//	if ($mode == 'add') {
//		var $item_name = document.getElementById("item_full_name_"+$seq).value;
//		if (window.confirm('【'+$item_name+'】を'+$num+'個追加します。\nお間違いなければ「OK」をクリックしてください。')) {
//		} else {
//			return false;
//		}
//	}
//	document.cart_set.p_item_code.value = $item_code;
//	if ($event_id != '') {
//		document.cart_set.p_event_id.value = $event_id;
//	}
//	if ($category_code != '') {
//		document.cart_set.p_group_code.value = $category_code;
//	}
//	document.cart_set.p_item_num.value = $num;
//	document.cart_set.submit();
//}
// 一括でカートに追加
function chkCartSet($mode) {
	var $action = 'cart_set.php';
	if ($mode == 'add') {
		$action = 'add_item.php';
		if (window.confirm('チェックされた全ての商品を追加注文します。\nお間違いなければ「OK」をクリックしてください。')) {
		} else {
			return;
		}
	}
	document.item_list.p_tool_exec.value = '1';
	document.item_list.action = $action;
	document.item_list.submit();
}
// 一括でお気に入りに追加
function chkFvrtSet($action) {
	document.item_list.p_tool_exec.value = '1';
	document.item_list.action = $action;
	document.item_list.submit();
}
// 戻るボタン対策(onload)
function flg_reset() {
	var objExecCode = document.getElementsByName("p_exec_code[]");
	for (var i=0; i<objExecCode.length; i++) {
		objExecCode[i].value = 0;
	}
	// カゴに商品を入れたり、お気に入り登録後に追従バーを出すため
	window.scrollBy(0, -1);
}
