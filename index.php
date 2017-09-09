<?php

require('smarty/Smarty.class.php');

date_default_timezone_set('Asia/Tokyo');

$smarty = new Smarty();

$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';

$data = file_get_contents('./data/data.json');
$data = json_decode($data, true);

$smarty->assign('list', array_reverse($data));
$smarty->display('index.tpl');