<?php
/* Smarty version 3.1.39, created on 2021-07-29 14:38:06
  from '/var/www/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102bd4e4768d1_37665362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f03cc9fe2af2f3d7a18b4af7509eba2fd3c191fe' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102bd4e4768d1_37665362 (Smarty_Internal_Template $_smarty_tpl) {
?><a onclick="loadTaxRule('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
