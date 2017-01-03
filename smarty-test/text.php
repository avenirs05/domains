<?php

include 'config.php';
include_once 'lib/Smarty.class.php';

$smarty = new Smarty();

if (isset($_GET['id']) && !empty($_GET['id'])) { $id = (int)$_GET['id']; }
if($id == 0) { exit('error'); }

$result = mysql_query("SELECT id,title,meta_k,meta_d,author,date,text,view,sl 
						FROM statti 
						WHERE id=$id");
if (!$result) {	exit("<p>РћС€РёР±РєР° РІС‹Р±РѕСЂРєРё РґР°РЅРЅС‹С…</p>"); }
if (mysql_num_rows($result) == 0) {	exit('РўР°РєРѕРіРѕ С‚РµРєСЃС‚Р° РЅРµС‚'); }

$row = mysql_fetch_array($result, MYSQL_ASSOC);

// print_r($row);

$smarty->assign('site_name', $site_name);
$smarty->assign('row', $row);
$smarty->display('text.tpl');

?>

