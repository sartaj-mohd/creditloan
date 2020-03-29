<?php 
require('./smartyHeader.php');
$smarty->assign('title','Sign up-CreditLoan');
$smarty->assign('login','Log in');
$smarty->assign('sign','Sign Up');

$smarty->display('signup.tpl');

?>