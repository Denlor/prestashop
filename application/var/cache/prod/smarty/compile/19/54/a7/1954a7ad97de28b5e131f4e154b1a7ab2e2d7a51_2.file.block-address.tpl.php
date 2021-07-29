<?php
/* Smarty version 3.1.39, created on 2021-07-29 14:38:07
  from '/var/www/themes/classic/templates/customer/_partials/block-address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102bd4f275788_95563558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1954a7ad97de28b5e131f4e154b1a7ab2e2d7a51' => 
    array (
      0 => '/var/www/themes/classic/templates/customer/_partials/block-address.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102bd4f275788_95563558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14407790276102bd4f26fe72_02605682', 'address_block_item');
?>

<?php }
/* {block 'address_block_item_actions'} */
class Block_17346548436102bd4f2738d5_14547623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="address-footer">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl ) );?>
" data-link-action="edit-address">
          <i class="material-icons">&#xE254;</i>
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id'],'params'=>array('delete'=>1,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
" data-link-action="delete-address">
          <i class="material-icons">&#xE872;</i>
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
      </div>
    <?php
}
}
/* {/block 'address_block_item_actions'} */
/* {block 'address_block_item'} */
class Block_14407790276102bd4f26fe72_02605682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_block_item' => 
  array (
    0 => 'Block_14407790276102bd4f26fe72_02605682',
  ),
  'address_block_item_actions' => 
  array (
    0 => 'Block_17346548436102bd4f2738d5_14547623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article id="address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="address" data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="address-body">
      <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</h4>
      <address><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</address>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdditionalCustomerAddressFields','address'=>$_smarty_tpl->tpl_vars['address']->value),$_smarty_tpl ) );?>

    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17346548436102bd4f2738d5_14547623', 'address_block_item_actions', $this->tplIndex);
?>

  </article>
<?php
}
}
/* {/block 'address_block_item'} */
}
