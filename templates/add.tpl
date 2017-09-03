<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>{if $title}{$title} | {/if}空き山バンク</title>
{include file='html_head.tpl'}
</head>
<body>
{include file='header.tpl'}

<div class="container">

	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-sm-offset-1">
				<div class="formHead">空き山登録フォーム</div>
			</div>
		</div>
		<hr>		
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="name">お名前<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="name" class="form-control form-required" placeholder="田中 太郎">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-8" for="kana">お名前（フリガナ）<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="kana" class="form-control form-required" placeholder="タナカ タロウ">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="zipcode">森林の住所<span class="required">必須</span></label>
			<div class="col-sm-5">
				<div class="row" style="padding-left: 15px;">
					<div class="col-sm-4">
						<input type="text" name="zip21" id="zipcode-1" class="form-control form-required" placeholder="1008111" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
					</div>
				</div>
				<input type="text" name="address" id="address" class="form-control form-required" placeholder="東京都千代田区千代田1-1" style="margin-top: 10px;">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="mail">樹種<span class="required">必須</span></label>
			<div class="col-sm-5">
				<div class="checkbox"><label><input type="checkbox" value="すぎ">すぎ</label></div>
				<div class="checkbox"><label><input type="checkbox" value="ひのき">ひのき</label></div>
				<div class="checkbox"><label><input type="checkbox" value="まつ">まつ</label></div>
				<div class="checkbox"><label><input type="checkbox" value="広葉樹">広葉樹</label></div>
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="mail">メール<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="mail" class="form-control form-required" placeholder="info@company.com">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="tell">電話<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="tell" class="form-control form-required" placeholder="08012345678" maxlength="11">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2" for="tell">備考欄</label>
			<div class="col-sm-8">
				<textarea type="text" id="note" class="form-control"></textarea>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-1">
				<div class="btn btn-primary sendbtn" id="submit">登録</div>
			</div>
		</div>
	</div>

</div>

<!--<input type="hidden" id="key" value="{$key}">-->

{include file='footer.tpl'}
</body>
</html>