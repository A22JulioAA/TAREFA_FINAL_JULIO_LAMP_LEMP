<?php
/* Smarty version 4.3.4, created on 2024-03-11 09:38:49
  from '/app/admin/themes/default/template/helpers/list/list_action_addstock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eed129c916b7_50305537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a0eb708f6a5e18207954dba3ea58012878ca65' => 
    array (
      0 => '/app/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eed129c916b7_50305537 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
