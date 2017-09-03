<?php /* Smarty version Smarty-3.1.18, created on 2017-09-03 10:36:48
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47595380059ab58b0e4b2c8-10800106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1504402133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47595380059ab58b0e4b2c8-10800106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59ab58b0eac931_84165369',
  'variables' => 
  array (
    'title' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ab58b0eac931_84165369')) {function content_59ab58b0eac931_84165369($_smarty_tpl) {?><!DOCTYPE html>
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
			<label class="control-label col-sm-2 col-xs-5" for="name">担当名<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="name" class="form-control form-required" placeholder="田中 太郎">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-8" for="kana">担当名（フリガナ）<span class="required">必須</span></label>
			<div class="col-sm-5">
				<input type="text" id="kana" class="form-control form-required" placeholder="タナカ タロウ">
				<span class="help-block">項目を入力してください</span>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-5" for="zipcode">住所<span class="required">必須</span></label>
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
				<div class="btn btn-primary sendbtn" id="submit">送信</div>
			</div>
			<div class="col-sm-1">
				
			</div>
		</div>
	</div>
</div>

<!--<input type="hidden" id="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">-->

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
