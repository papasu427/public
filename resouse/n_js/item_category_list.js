// スマートフォン用商品カテゴリセレクトボックス表示
//中カテゴリリスト作成
function searchMCat() {
	var select_str = '<select class="catSelect" id="ctMsel" onChange="searchSCat()">';
		select_str += '<option value="" selected>すべてのカテゴリ</option>';
	var catData = JSON.parse($('#menu_group_json').val());
	var mg_cd = $('#mgsel').val();   //大カテゴリ
	if (mg_cd != "") {
		if(mg_cd == "cmpn"){  //特売
			for (var i = 0; i < catData.item[0].length; i++) {
				select_str += '<option value="' + i + "_" + catData.item[0][i].event_id + '">' + catData.item[0][i].event_name + '</option>';
			}
		}else if(mg_cd != "fvrt"){ //お気に入り以外
			for (var i = 0; i < catData.item[mg_cd].group_data.length; i++) {
				select_str += '<option value="' + i + "_" + catData.item[mg_cd].group_data[i].category_code + '">' + catData.item[mg_cd].group_data[i].category_name + '</option>';
			}
		}
	}
	select_str += '</select>';
	select_str += '<input type="hidden" id="p_dtl_srh_ct_m" name="p_dtl_srh_ct_m" value="">';
	$('#mcat_sel').html(select_str);

	//小カテゴリリストクリア
	select_str = '<select name="p_dtl_srh_ct_s" class="catSelect">';
	select_str += '<option value="">すべてのカテゴリ</option>';
	select_str += '</select>';
	$('#scat_sel').html(select_str);
}

//小カテゴリリスト作成
function searchSCat() {
	var select_str = '<select name="p_dtl_srh_ct_s" class="catSelect" id="ctSsel">';
		select_str += '<option value="" selected>すべてのカテゴリ</option>';
	var catData = JSON.parse($('#menu_group_json').val());
	var mg_cd = $('#mgsel').val();   //大カテゴリ
	var ct_cd_arr = $('#ctMsel').val().split("_"); //中カテゴリ

	if (ct_cd_arr[0] != "") {
		$('#p_dtl_srh_ct_m').val(ct_cd_arr[1]);
		if( mg_cd != "cmpn" && mg_cd != "fvrt" ){ //特売、お気に入り以外
			var catObj = catData.item[mg_cd].group_data[ct_cd_arr[0]];
			for (var i = 0; i < catObj.group_data.length; i++) {
				select_str += '<option value="' + catObj.group_data[i].category_code + '">' + catObj.group_data[i].category_name + '</option>';
			}
		}
	}
	select_str += '</select>';
	$('#scat_sel').html(select_str);
}

//カテゴリリスト初期化
function clearCategory() {
	//大カテゴリリスト一番上へ
	$('#mgsel').val("");

	//中カテゴリリストクリア
	var select_str = '<select name="p_dtl_srh_ct_m" class="catSelect">';
	select_str += '<option value="">すべてのカテゴリ</option>';
	select_str += '</select>';
	$('#mcat_sel').html(select_str);

	//小カテゴリリストクリア
	select_str = '<select name="p_dtl_srh_ct_s" class="catSelect">';
	select_str += '<option value="">すべてのカテゴリ</option>';
	select_str += '</select>';
	$('#scat_sel').html(select_str);
}

