<?php 
require('./smartyHeader.php');
$msg = 'Hello Wolrd, This is my 1st Smarty Project';
$title = 'Hello Smarty World';

$smarty->assign('title',$title);
$smarty->assign('message',$msg);

$smarty->display('test.tpl');

?>