<?php
/* Smarty version 3.1.39, created on 2021-07-29 14:38:07
  from '/var/www/themes/classic/templates/customer/password-new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102bd4f304d02_58335280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32c93a7051a88f2f550ea0cc276e251080bf61a6' => 
    array (
      0 => '/var/www/themes/classic/templates/customer/password-new.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102bd4f304d02_58335280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12685153746102bd4f2fef08_40857054', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12288195146102bd4f300512_66019359', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2050736006102bd4f303f34_24212349', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_12685153746102bd4f2fef08_40857054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_12685153746102bd4f2fef08_40857054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset your password','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_12288195146102bd4f300512_66019359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_12288195146102bd4f300512_66019359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" method="post">
    <ul class="ps-alert-error">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
        <li class="item">
          <i>
            <svg viewBox="0 0 24 24">
              <path fill="#fff" d="M11,15H13V17H11V15M11,7H13V13H11V7M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20Z"></path>
            </svg>
          </i>
          <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
      <section class="form-fields renew-password">

        <div class="email">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address: %email%','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('%email%'=>stripslashes($_smarty_tpl->tpl_vars['customer_email']->value))),$_smarty_tpl ) );?>

        </div>

        <div class="container-fluid">
          <div class="row form-group">
            <label class="form-control-label col-md-3 offset-md-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New password','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-4">
              <input class="form-control" type="password" data-validate="isPasswd" name="passwd" value="">
            </div>
          </div>

          <div class="row form-group">
            <label class="form-control-label col-md-3 offset-md-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirmation','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-4">
              <input class="form-control" type="password" data-validate="isPasswd" name="confirmation" value="">
            </div>
          </div>

          <input type="hidden" name="token" id="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          <input type="hidden" name="id_customer" id="id_customer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_customer']->value, ENT_QUOTES, 'UTF-8');?>
">
          <input type="hidden" name="reset_token" id="reset_token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reset_token']->value, ENT_QUOTES, 'UTF-8');?>
">

          <div class="row form-group">
            <div class="offset-md-5">
              <button class="btn btn-primary" type="submit" name="submit">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change Password','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </div>
          </div>
        </div>

      </section>
    </form>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_2050736006102bd4f303f34_24212349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_2050736006102bd4f303f34_24212349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul>
    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
  </ul>
<?php
}
}
/* {/block 'page_footer'} */
}
