<?php /* Smarty version Smarty-3.1.18, created on 2017-09-03 15:24:47
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47595380059ab58b0e4b2c8-10800106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1504419882,
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
    'list' => 0,
    'data' => 0,
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

	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
	<div class="forestdata">
		<div class="forestdata_title"><span style="font-size:0.8em;">ID:</span> <span style="font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</span></div>
		<div class="forestdata_item_area">
			<table>
				<tr>
					<td class="forestdata_item">住所</td>
					<td>
						<div><?php echo $_smarty_tpl->tpl_vars['data']->value['address'];?>
</div>
						<iframe src="http://maps.google.co.jp/maps?q=<?php echo $_smarty_tpl->tpl_vars['data']->value['place']['lat'];?>
,<?php echo $_smarty_tpl->tpl_vars['data']->value['place']['lon'];?>
&output=embed&t=m&z=16&hl=ja" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</td>
				</tr>
				<tr>
					<td class="forestdata_item">面積</td>
					<td><?php echo $_smarty_tpl->tpl_vars['data']->value['area'];?>
 m<sup>2</sup></td>
				</tr>
				<tr>
					<td class="forestdata_item">材積（1ha辺り）</td>
					<td><?php echo $_smarty_tpl->tpl_vars['data']->value['volume'];?>
 m<sup>3</sup></td>
				</tr>
				<tr>
					<td class="forestdata_item">樹種</td>
					<td>ひのき、まつ</td>
				</tr>
				<tr>
					<td class="forestdata_item">保安林等の制限</td>
					<td><?php if ($_smarty_tpl->tpl_vars['data']->value['limitation']==true) {?>あり<?php } else { ?>なし<?php }?></td>
				</tr>
				<tr>
					<td class="forestdata_item">路網の整備状況</td>
					<td><?php echo $_smarty_tpl->tpl_vars['data']->value['route'];?>
</td>
				</tr>
				<tr>
					<td class="forestdata_item">備考</td>
					<td><?php echo $_smarty_tpl->tpl_vars['data']->value['note'];?>
</td>
				</tr>
			</table>
		</div>
		<div class="btn btn-primary">所有者に連絡する</div>
	</div>
	<?php } ?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
