// --------------------------------------------------共通--------------------------------------------------
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
// お気に入りに追加(単体)
function setFavorite($item_code, $event_id, $category_code) {
	alert('「お気に入り」は店内見学で使用することができません。');
}
// お気に入り解除(単体)
function delFavorite($item_code, $event_id, $category_code) {
	alert('「お気に入り」は店内見学で使用することができません。');
}
// --------------------------------------------------/共通--------------------------------------------------

// --------------------------------------------------店舗トップ--------------------------------------------------
// 追加確認
function add_conf($obj, $item_name) {
	alert('「追加注文」は店内見学で使用することができません。');
}
// --------------------------------------------------/店舗トップ--------------------------------------------------

// --------------------------------------------------商品一覧(画像有無共通)--------------------------------------------------
// カートに追加(単体)
function setCart($item_code, $event_id, $category_code, $seq, $mode) {
	alert('「買い物カゴ」は店内見学で使用することができません。');
}
// 一括でカートに追加
function chkCartSet($mode) {
	alert('「買い物カゴ」は店内見学で使用することができません。');
}
// 戻るボタン対策(onload)
function flg_reset() {
	var objExecCode = document.getElementsByName("p_exec_code[]");
	for (var i=0; i<objExecCode.length; i++) {
		objExecCode[i].value = 0;
	}
}
// --------------------------------------------------/商品一覧(画像有無共通)--------------------------------------------------
