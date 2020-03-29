<?php 
require_once('./libs/Smarty.class.php');
$smarty= new Smarty;
$smarty->caching =true;
$smarty->cache_lifetime = 120;
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';



?>