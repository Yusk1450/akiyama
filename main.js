
$(function()
{

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
	});
});


function getJson()
{

}
