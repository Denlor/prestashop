<?php
/* Smarty version 3.1.39, created on 2021-07-29 14:38:06
  from '/var/www/admin/themes/default/template/controllers/modules/warning_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102bd4e91fb74_50835501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1def9db789cba8e0222a4635185a44761950af8' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102bd4e91fb74_50835501 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }
}
