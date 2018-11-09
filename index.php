<?php
error_reporting(1);session_start();
include dirname(__FILE__).'/class/query.php';
$queryObj = new Query();

$queryObj->connect('localhost','root','','doan');

$queryObj->parseURI();
$urlRoot = 'http://'.$_SERVER['HTTP_HOST'].'/doan/';

$urlBackEnd = 'http://'.$_SERVER['HTTP_HOST'].'/doan/admin/';
$urlFontEnd = 'http://'.$_SERVER['HTTP_HOST'].'/doan/';
if($_REQUEST['view']=='admin'){
	//backend
	$urlTemplateAdmin = 'http://'.$_SERVER['HTTP_HOST'].'/doan/admin/template/';
	include dirname(__FILE__).'/admin/index.php';
}
else{
	//font end
	$urlTemplate = 'http://'.$_SERVER['HTTP_HOST'].'/doan/module/';
	include dirname(__FILE__).'/module/index.php';
}