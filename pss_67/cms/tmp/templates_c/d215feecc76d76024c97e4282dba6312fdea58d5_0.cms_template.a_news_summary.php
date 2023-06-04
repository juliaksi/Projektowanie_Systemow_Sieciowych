<?php
/* Smarty version 3.1.31, created on 2023-06-04 06:48:44
  from "cms_template:a_news_summary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647c17aceac4e5_02497095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215feecc76d76024c97e4282dba6312fdea58d5' => 
    array (
      0 => 'cms_template:a_news_summary',
      1 => '1685854064',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647c17aceac4e5_02497095 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cms\\lib\\plugins\\modifier.cms_escape.php';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
  
<div class="NewsSummary">

<div class="NewsSummaryLink">
<h2><p class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a></p></h2>
</div>


<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
	<div class="NewsSummarySummary">
		<p class="text-center"><?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>
</p>
	</div>

	<div class="NewsSummaryMorelink">
		<p class="text-center">[<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]</p>
	</div>

<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
	<div class="NewsSummaryContent">
		<p class="text-center><?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>
</p>
	</div>
<?php }?>


</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



<!-- Paginacja -->

<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
  <p class="text-center">
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {
echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }
echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</p>
<?php }
}
}
