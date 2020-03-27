<?php 
require('./smartyHeader.php');
$smarty->assign('title','Home-CreditLoan');
$smarty->assign('login','Log in');
$smarty->assign('sign','Sign Up');

$smarty->display('index.tpl');

?>

