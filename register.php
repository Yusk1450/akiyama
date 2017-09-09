<?php

$data = $_POST['data'];
$data = json_decode($data, true);

$list = array();
$id = 1;

$filename = './data/data.json';
if (file_exists($filename))
{
	$loadData = file_get_contents($filename);
	$list = json_decode($loadData, true);
	$id = count($list)+1;
}

$data['id'] = $id;
$list []= $data;

file_put_contents($filename, json_encode($list));

