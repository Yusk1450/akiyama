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
			<label class="control-label col-sm-2 col-xs-5" for="address">住所<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="address" class="form-control form-required" placeholder="岐阜県美濃市">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="place">森林の場所<span class="required">必須</span></label>
			<div class="col-sm-5">
				緯度<input type="text" id="latitude" class="form-control form-required" placeholder="35.558372">
				経度<input type="text" id="longitude" class="form-control form-required" placeholder="136.931079">
				<div><a href="https://user.numazu-ct.ac.jp/~tsato/webmap/sphere/coordinates/advanced.html" target="_blank">緯度・経度検索サイト（外部サイト）</a></div>
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="area">面積（m<sup>2</sup>）<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="area" class="form-control form-required" placeholder="10000">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="volume">1ha辺りの材積（m<sup>3</sup>）<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="volume" class="form-control form-required" placeholder="500">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="woodType">樹種<span class="required">必須</span></label>
			<div class="col-sm-5">
				<div class="checkbox"><label><input type="checkbox" class="woodType" value="すぎ">すぎ</label></div>
				<div class="checkbox"><label><input type="checkbox" class="woodType" value="ひのき">ひのき</label></div>
				<div class="checkbox"><label><input type="checkbox" class="woodType" value="まつ">まつ</label></div>
				<div class="checkbox"><label><input type="checkbox" class="woodType" value="広葉樹">広葉樹</label></div>
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="limitation">保安林<span class="required">必須</span></label>
			<div class="col-sm-5">
				<div class="checkbox"><label><input type="checkbox" id="limitation" value="制限あり">あり</label></div>					
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="route">路網の整備状況<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="route" class="form-control form-required" placeholder="林道あり、◯◯駅より◯分 等">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="mail">メール<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="mail" class="form-control form-required" placeholder="info@example.com">
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
			<label class="control-label col-sm-2" for="note">備考欄</label>
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