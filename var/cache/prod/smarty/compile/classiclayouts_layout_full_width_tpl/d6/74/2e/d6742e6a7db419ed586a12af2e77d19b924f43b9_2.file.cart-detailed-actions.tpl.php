<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-24 11:22:59
  from 'F:\wamp64\www\personalshopper\themes\classic\templates\checkout\_partials\cart-detailed-actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe46c03364227_69642496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6742e6a7db419ed586a12af2e77d19b924f43b9' => 
    array (
      0 => 'F:\\wamp64\\www\\personalshopper\\themes\\classic\\templates\\checkout\\_partials\\cart-detailed-actions.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe46c03364227_69642496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12524317185fe46c033528d9_56580488', 'cart_detailed_actions');
?>

<?php }
/* {block 'cart_detailed_actions'} */
class Block_12524317185fe46c033528d9_56580488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_actions' => 
  array (
    0 => 'Block_12524317185fe46c033528d9_56580488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout cart-detailed-actions card-block">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </div>
    <?php } else { ?>
      <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayExpressCheckout'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'cart_detailed_actions'} */
}
