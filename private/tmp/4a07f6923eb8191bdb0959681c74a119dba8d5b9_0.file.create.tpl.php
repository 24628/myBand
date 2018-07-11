<?php
/* Smarty version 3.1.32, created on 2018-07-06 12:16:56
  from 'C:\Users\kaasv\Documents\ma\bewijzenmap\periode1.2\projP4\myBand\private\views\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3f4198aaedb8_75898665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a07f6923eb8191bdb0959681c74a119dba8d5b9' => 
    array (
      0 => 'C:\\Users\\kaasv\\Documents\\ma\\bewijzenmap\\periode1.2\\projP4\\myBand\\private\\views\\create.tpl',
      1 => 1530872215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3f4198aaedb8_75898665 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
<form method="post" action="index.php" enctype="multipart/form-data">
    <label><input type="file" name="uploaded_image"/></label>
    <label>Title<input name="title"/></label>
    <label>Description<input name="description"></label>
    <input type="submit" name="submit_image" value="GO"/>
</form>
<style>
    footer,
    .push {
        height: 200px;
    }
</style>
</div><?php }
}
