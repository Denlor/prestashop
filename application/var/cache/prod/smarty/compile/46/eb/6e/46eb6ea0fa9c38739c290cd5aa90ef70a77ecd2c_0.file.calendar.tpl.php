<?php
/* Smarty version 3.1.39, created on 2021-07-29 14:38:06
  from '/var/www/admin/themes/default/template/controllers/stats/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102bd4e9d0205_02785613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46eb6ea0fa9c38739c290cd5aa90ef70a77ecd2c' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../form_date_range_picker.tpl' => 1,
  ),
),false)) {
function content_6102bd4e9d0205_02785613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="statsContainer" class="col-md-9">
	<?php $_smarty_tpl->_subTemplateRender("file:../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
