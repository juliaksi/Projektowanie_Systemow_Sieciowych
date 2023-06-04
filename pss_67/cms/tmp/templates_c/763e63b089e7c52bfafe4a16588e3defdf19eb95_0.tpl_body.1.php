<?php
/* Smarty version 3.1.31, created on 2023-06-04 07:22:42
  from "tpl_body:1" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647c1fa270a703_20478915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763e63b089e7c52bfafe4a16588e3defdf19eb95' => 
    array (
      0 => 'tpl_body:1',
      1 => '1685856092',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647c1fa270a703_20478915 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>

	<nav id="menu">
		<?php echo Navigator::function_plugin(array('template'=>"a_menu2"),$_smarty_tpl);?>

	</nav>

	<section id="content">
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Autor: Julia Księżyk</p>
  <p>Strona została wykonana w ramach realizacji przedmiotu "Projektowanie Systemów Sieciowych"</p>
</div>

</body>

</html><?php }
}
