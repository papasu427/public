//エラー項目を目立つにする
function changeColor(errorItem) {
	switch(errorItem) {
		case "cardNo":
		case "card_no":
			document.getElementById("card_no").style.backgroundColor = "#fdeef1";
			break;
		case "cardOwner":
		case "card_name":
			document.getElementById("card_name").style.backgroundColor = "#fdeef1";
			break;
		case "cardExp":
			document.getElementById("card_month").style.backgroundColor = "#fdeef1";
			document.getElementById("card_year").style.backgroundColor = "#fdeef1";
			break;
		case "securityCode":
		case "card_security":
			if (card_select_flg == 1) {
				if (typeof(document.getElementById('card_security')) != 'undefined' && document.getElementById('card_security') != null) {
					document.getElementById("card_security").style.backgroundColor = "#fdeef1";
				}
			} else if (card_select_flg == 2) {
				if (typeof(document.getElementById('card_security_lcc')) != 'undefined' && document.getElementById('card_security_lcc') != null) {
					document.getElementById("card_security_lcc").style.backgroundColor = "#fdeef1";
				}
			}
			break;
	}
}
// カード有効期限のチェック
function card_yearMonth_check(isOrder){
	var err_msg = "";
	var deliYmObj = document.getElementById('delivery_date_to_card_expried');

	if (typeof(deliYmObj) != 'undefined' && deliYmObj != null){
		var deliYm = deliYmObj.value;
	}else{
		var today = new Date();
		var mm = today.getMonth()+1;
		if(mm<10){
			mm='0'+mm;
		}
		var deliYm = today.getFullYear().toString() + mm;
	}

	//有効期限のチェック
	if(document.getElementById('card_month').value.length<2){
		expire = "20" + document.getElementById('card_year').value + "0" + document.getElementById('card_month').value;
	}else{
		expire = "20" + document.getElementById('card_year').value + "" + document.getElementById('card_month').value;
	}

	if( 6 !== expire.length){
		err_msg += "カード有効期限を選択してください。\n";
		changeColor("cardExp");
	}

	if( deliYm > expire){
		if(isOrder){
			err_msg += "配達日時点でクレジットカードの有効期限が切れています。\n";
			changeColor("cardExp");
		}else{
			err_msg += "クレジットカードの有効期限が切れています。\n";
			changeColor("cardExp");
		}
	}
	return err_msg;
}

//入力の整合性チェック(overrideしている)
var input_check = (function(isOrder){
	var original = input_check;
	return function(isOrder){
		var err_msg = "";

		//カード選択のチェック(1：新規入力、2：前回のカードを利用)
		if((document.getElementById('card_select_flg_input')) && document.getElementById('card_select_flg_input').checked){
			card_select_flg = 1;	//1：新規入力
		}else if((document.getElementById('card_select_flg_saved')) && document.getElementById('card_select_flg_saved').checked){
			card_select_flg = 2;	//2：前回のカードを利用
		}

		if(card_select_flg == 1){//1：新規入力

			//カード番号のチェック
			cardno = document.getElementById('card_no').value;
			if(!cardno || 0 === cardno.length){
				err_msg += "カード番号を入力してください。\n";
				changeColor("card_no");
			}

			//セキュリティコード
			var card_security = document.getElementById('card_security');
			securitycode = '';
			if (typeof(card_security) != 'undefined' && card_security != null)
			{
				securitycode = card_security.value;
				if(!securitycode || 0 === securitycode.length){
					err_msg += "セキュリティコードを入力してください。\n";
					changeColor("card_security");
				}
			}

			//カード有効期限チェック
			err_msg += card_yearMonth_check(isOrder);

			//カード名義人のチェック
			holdername = document.getElementById('card_name').value;
			if(!holdername || 0 === holdername.length){
				err_msg += "カード名義人を入力してください。\n";
				changeColor("card_name");
			}

		}else if(card_select_flg == 2){//2：前回のカードを利用
			var card_security = document.getElementById('card_security_lcc');
			if (typeof(card_security) != 'undefined' && card_security != null)
			{
				securitycode = card_security.value;
				if(!securitycode || 0 === securitycode.length){
					err_msg += "セキュリティコードを入力してください。\n";
					changeColor("card_security");
				}
			}
		}

		//カード保存するか
		if(document.getElementById('card_data_save_flg')){
			if(document.getElementById('card_data_save_flg').checked){
				card_data_save_flg = document.getElementById('card_data_save_flg').value;
			}
		}
		//カード削除するか
		if(document.getElementById('card_data_del_flg')){
			if(document.getElementById('card_data_del_flg').checked){
				card_data_del_flg = document.getElementById('card_data_del_flg').value;
			}
		}
		err_msg += original();
		return err_msg;
	};
})();