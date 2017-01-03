<?php

include 'config.php';
include_once 'lib/Smarty.class.php';

$smarty = new Smarty();

$arr = array(1, 2, 3, 4, 5);
$arr2 = array('one' => 1, 'two' => 2, 'three' => 3);

$result = mysql_query("SELECT id,title,author,date,img_src,discription,view,ball,kol_gol 
										FROM statti 
										WHERE cat='1'
										ORDER BY id 
										LIMIT 10");

for($i = 0; $i < mysql_num_rows($result); $i++) {
		$row[] = mysql_fetch_array($result, MYSQL_ASSOC);
}					

//print_r($row);					
			
$smarty->assign('row', $row);			
$smarty->assign('site_name', $site_name);
$smarty->display('index.tpl');
//$template = $smarty->fetch('index.tpl');




?>

