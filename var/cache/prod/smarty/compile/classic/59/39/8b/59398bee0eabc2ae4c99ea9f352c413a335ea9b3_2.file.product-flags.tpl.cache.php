<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-24 10:12:03
  from 'F:\wamp64\www\personalshopper\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe45b631cca04_95780920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59398bee0eabc2ae4c99ea9f352c413a335ea9b3' => 
    array (
      0 => 'F:\\wamp64\\www\\personalshopper\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe45b631cca04_95780920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '20268695205fe45b631c1f10_45339552';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11590584855fe45b631c3d16_85659295', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_11590584855fe45b631c3d16_85659295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_11590584855fe45b631c3d16_85659295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
