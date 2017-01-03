<?php /* Smarty version 3.1.27, created on 2016-12-29 14:19:59
         compiled from "C:\OpenServer\domains\md-test.ru\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:258495864f15f41dcd4_11149484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8d29d6954daf70d143685d944ff584ef17251a1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\md-test.ru\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258495864f15f41dcd4_11149484',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5864f15f427c59_58660855',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5864f15f427c59_58660855')) {
function content_5864f15f427c59_58660855 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '258495864f15f41dcd4_11149484';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>