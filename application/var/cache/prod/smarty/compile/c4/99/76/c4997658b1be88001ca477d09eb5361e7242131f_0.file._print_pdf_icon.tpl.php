<?php
/* Smarty version 3.1.39, created on 2021-07-29 14:38:06
  from '/var/www/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102bd4ea55700_10011582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4997658b1be88001ca477d09eb5361e7242131f' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102bd4ea55700_10011582 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateInvoicePDF','id_order_invoice'=>$_smarty_tpl->tpl_vars['id_invoice']->value)),'html','UTF-8' ));?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }
}
}
