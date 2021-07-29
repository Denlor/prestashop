<?php
/* Smarty version 3.1.39, created on 2021-07-29 14:38:06
  from '/var/www/admin/themes/default/template/helpers/list/list_action_default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102bd4eb7c014_64221944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983a7aa149e0c5670e49dd1021f1582d4b246099' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102bd4eb7c014_64221944 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
