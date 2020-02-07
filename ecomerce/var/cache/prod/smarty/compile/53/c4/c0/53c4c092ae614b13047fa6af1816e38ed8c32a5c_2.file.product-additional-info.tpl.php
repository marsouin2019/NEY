<?php
/* Smarty version 3.1.33, created on 2020-01-09 19:29:05
  from '/var/www/html/ecomerce/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1770f18aedc6_64572435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c4c092ae614b13047fa6af1816e38ed8c32a5c' => 
    array (
      0 => '/var/www/html/ecomerce/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1578407662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1770f18aedc6_64572435 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
