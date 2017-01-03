<?php /* Smarty version 3.1.27, created on 2016-12-29 14:02:58
         compiled from "C:\OpenServer\domains\md-test.ru\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:58915864ed62903495_85429616%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b48a3a348954a7cbe34f12c0ebf2ee4dd81d9cfa' => 
    array (
      0 => 'C:\\OpenServer\\domains\\md-test.ru\\setup\\templates\\footer.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58915864ed62903495_85429616',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5864ed629143d6_51682092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5864ed629143d6_51682092')) {
function content_5864ed629143d6_51682092 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OpenServer/domains/md-test.ru/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '58915864ed62903495_85429616';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>