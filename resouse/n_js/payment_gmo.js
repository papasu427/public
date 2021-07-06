// トーコンを取得する
function get2set_token(){
	//前回のカードを使う場合、トーコンの取得が不要
	if(card_select_flg == 2){
		return false;
	}
	//トーコン取得数
	var tokennumber = 1;
	if(card_select_flg == 1 && (document.getElementById('card_data_save_flg')) && document.getElementById('card_data_save_flg').checked){
		//カード登録が選択された場合、登録と決済2つトーコンが必要
		tokennumber = 2;
	}

	Multipayment.init(document.getElementById('gmo_shop_id').value);
	Multipayment.getToken({
		cardno: cardno,
		expire: expire,
		securitycode:securitycode,
		holdername:holdername,
		tokennumber:tokennumber
	},setToken);
	return true;
}

// トーコンの取得が成功する場合の対応
function setToken ( response ){
	switch(response.resultCode){
		case 100:
		case 101:
		case 102:
			window.alert( 'カード番号が正しくありません。 E'+ response.resultCode );
			changeColor("card_no");
			chk_flg = false;
			return;
		case 110:
		case 111:
		case 112:
		case 113:
			window.alert( '有効期限が正しくありません。 E'+ response.resultCode );
			changeColor("cardExp");
			chk_flg = false;
			return;
		case 121:
			window.alert( 'セキュリティコードフォーマットが正しくありません(数字以外を含む)。 E'+ response.resultCode );
			changeColor("card_security");
			chk_flg = false;
			return;
		case 122:
			window.alert( 'セキュリティコードフォーマットが正しくありません。 E'+ response.resultCode );
			changeColor("card_security");
			chk_flg = false;
			return;
		case 131:
			window.alert( '名義人が正しくありません(半角英数字、一部の記号以外を含む)。 E'+ response.resultCode );
			changeColor("card_name");
			chk_flg = false;
			return;
		case 132:
			window.alert( '名義人が正しくありません(51桁以上)。 E'+ response.resultCode );
			changeColor("card_name");
			chk_flg = false;
			return;
		case "000":
			//トークン取得成功
			break;
		default:
			window.alert( 'クレジットカード決済処理でエラーが発生しました。 E'+ response.resultCode );
			chk_flg = false;
			return;
	}
	//カード情報は念のため値を除去
	document.getElementById('card_no').value="";
	document.getElementById('card_year').value="";
	document.getElementById('card_month').value="";
	if (typeof(document.getElementById('card_security')) != 'undefined' && document.getElementById('card_security') != null){
		document.getElementById('card_security').value="";
	}
	//予め購入フォームに用意した token フィールドに、値を設定
	//複数個指定した場合はカンマ区切り
	document.getElementById('gmotoken').value = response.tokenObject.token;
	//スクリプトからフォームを submit
	document. getElementById('submitForm').submit();
}