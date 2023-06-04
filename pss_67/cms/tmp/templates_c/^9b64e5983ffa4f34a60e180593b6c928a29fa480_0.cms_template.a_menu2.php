<?php
/* Smarty version 3.1.31, created on 2023-06-04 07:08:05
  from "cms_template:a_menu2" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647c1c353bd432_96859179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b64e5983ffa4f34a60e180593b6c928a29fa480' => 
    array (
      0 => 'cms_template:a_menu2',
      1 => '1685855281',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647c1c353bd432_96859179 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.sitename.php';
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"><span class="navbar-brand"><h4><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h4></span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><ul class="navbar-nav"><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a></li></ul><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</nav><?php }
}
