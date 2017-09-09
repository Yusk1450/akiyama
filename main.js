
/*----------------------------------------------------------------------------------------
 * Ajaxを利用してサーバからデータを取得する
 * @param URL
 * @param true:非同期 false:同期
 * @param PHP側に送るデータ
 * @param リクエストが成功したときの関数（function(data){}）
 * @param リクエストが失敗したときの関数（function(XMLHttpRequest, textStatus, errorThrown){}）
----------------------------------------------------------------------------------------*/
function ajaxWrapper(url, is_async, data, success_function, error_function)
{
	$.ajax(
	{
		type          : 'POST',
		data          : data,
		// contentType   : 'application/JSON',
		async         : is_async,
		url           : url,
		cache         : false,
		scriptCharset : 'utf-8',
		dataType      : 'text',

		success:success_function,					// リクエスト成功時の処理
		error:error_function						// リクエスト失敗時の処理
	});
}

$(function()
{
	// $('#name').val('石郷');
	// $('#kana').val('イシゴウ');
	// $('#address').val('岐阜県美濃市');
	// $('#latitude').val('35.558372');
	// $('#longitude').val('136.931079');
	// $('#area').val('10000');
	// $('#volume').val('500');
	// $('.woodType').prop('checked', true);
	// $('#limitation').prop('checked', true);
	// $('#route').val('林道は整備済みです');
	// $('#mail').val('ishigo@4dpocket.co.jp');
	// $('#tell').val('08069088656');
	// $('#note').val('備考');


	(function()
	{
		$.fn.autoKana('#name', '#kana', {
			katakana: true
		});
	})();

	$('#submit').click(function()
	{
		// 必須項目の入力チェック
		var failed = false;
		$('input').each(function()
		{
			$(this).next('span').hide();
			if ($(this).hasClass('form-required') && $(this).val() == '')
			{
				$(this).next('span').show();
				failed = true;
			}
		});

		if (!checkAddress($('#mail').val()))
		{
			alert('メールアドレスが不正です');
			failed = true;
		}

		if (failed)
		{
			return;
		}

		ajaxWrapper('register.php',
					false,
					{
						data: generateJsonData()
					},
					function(data)
					{
						window.location.href = "index.php";
					},
					function(XMLHttpRequest, textStatus, errorThrown)
					{
						alert('送信エラーです');
					});
	});
});

function checkAddress(address)
{
	if (address.match(/^[^@]+@.+\..+$/))
	{
		return true;
	}
	return false;
}

function generateJsonData()
{
	var data = {};

	data['name'] = $('#name').val();												// 名前
	data['kana'] = $('#kana').val();												// 名前（カナ）
	data['address'] = $('#address').val();											// 住所
	data['place'] = {'lat': $('#latitude').val(), 'lon': $('#longitude').val()};	// 場所
	data['area'] = $('#area').val();												// 面積（m2）
	data['volume'] = $('#volume').val();											// 材積（m3）
	// 樹種
	data['limitation'] = $('#limitation').prop('checked');		// 制限の有無
	data['route'] = $('#route').val();							// 路網状況
	data['mail'] = $('#mail').val();							// メールアドレス
	data['tell'] = $('#tell').val();							// 電話番号
	data['note'] = $('#note').val();							// 備考

	// 日時
	var date = new Date();
	data['date'] = date.getFullYear()+'/'+(date.getMonth()+1)+'/'+date.getDate()+' '+date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();

	return JSON.stringify(data);
}
