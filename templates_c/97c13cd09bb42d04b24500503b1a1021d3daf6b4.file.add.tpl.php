<?php /* Smarty version Smarty-3.1.18, created on 2017-09-03 15:19:48
         compiled from "./templates/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121846373559ab67134b1bf7-37881084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13cd09bb42d04b24500503b1a1021d3daf6b4' => 
    array (
      0 => './templates/add.tpl',
      1 => 1504419586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121846373559ab67134b1bf7-37881084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59ab671350c5c5_17458269',
  'variables' => 
  array (
    'title' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ab671350c5c5_17458269')) {function content_59ab671350c5c5_17458269($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php if ($_smarty_tpl->tpl_vars['title']->value) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php }?>空き山バンク</title>
<?php echo $_smarty_tpl->getSubTemplate ('html_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

<!--<input type="hidden" id="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">-->

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
