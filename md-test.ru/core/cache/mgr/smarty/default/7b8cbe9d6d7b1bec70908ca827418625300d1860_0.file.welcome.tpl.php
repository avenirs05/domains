<?php /* Smarty version 3.1.27, created on 2016-12-29 14:03:40
         compiled from "C:\OpenServer\domains\md-test.ru\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:265455864ed8c688d85_24975971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b8cbe9d6d7b1bec70908ca827418625300d1860' => 
    array (
      0 => 'C:\\OpenServer\\domains\\md-test.ru\\manager\\templates\\default\\welcome.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265455864ed8c688d85_24975971',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5864ed8c68b2e1_01197826',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5864ed8c68b2e1_01197826')) {
function content_5864ed8c68b2e1_01197826 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '265455864ed8c688d85_24975971';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>