<?php
/* Smarty version 3.1.32, created on 2018-06-18 12:33:34
  from 'C:\Users\kaasv\Documents\ma\bewijzenmap\periode1.4\proj\myBand\private\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b278a7ed1d075_07153652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7932ff89fdbba4766715820f3417050e824ce0ac' => 
    array (
      0 => 'C:\\Users\\kaasv\\Documents\\ma\\bewijzenmap\\periode1.4\\proj\\myBand\\private\\views\\home.tpl',
      1 => 1529317644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b278a7ed1d075_07153652 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hallo Smarty</h1>
<p>de mailadressen zijn:
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailadresses']->value, 'mail');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mail']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p>
<a href="index.php?page=contact">Contact</a><?php }
}
