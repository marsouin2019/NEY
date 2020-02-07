<?php
/* Smarty version 3.1.33, created on 2020-01-08 20:45:31
  from '/var/www/html/ecomerce/admin973xcix99/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e16315b5e1a80_56582861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf91b625f5d1379e5c959ea7de2b6d36cc28675' => 
    array (
      0 => '/var/www/html/ecomerce/admin973xcix99/themes/default/template/content.tpl',
      1 => 1578407661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e16315b5e1a80_56582861 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
