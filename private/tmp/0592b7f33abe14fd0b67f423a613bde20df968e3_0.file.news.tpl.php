<?php
/* Smarty version 3.1.32, created on 2018-07-06 15:46:03
  from 'C:\Users\kaasv\Documents\ma\bewijzenmap\periode1.2\projP4\myBand\private\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3f729b91e275_62181752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0592b7f33abe14fd0b67f423a613bde20df968e3' => 
    array (
      0 => 'C:\\Users\\kaasv\\Documents\\ma\\bewijzenmap\\periode1.2\\projP4\\myBand\\private\\views\\news.tpl',
      1 => 1530884743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3f729b91e275_62181752 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/newsStyle.css">
<div class="NewsNavbar">
    <h3 class="currentPage">Current page: <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</h3>
    <form method="get" action="index.php">
        <input type="hidden" name="page" value="news">
        <input class="stuff" name="searchterm">
        <input class="button" type="submit" name="submit" value="ZOEK">
    </form>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
            <input class="button" type="button" onclick="location.href='index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
';" value="PREVIOUS" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
            <input class="button" type="button" onclick="location.href='index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
';" value="NEXT" />
        <?php }?>
</div>
    <main>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="containerNews">
                <div class="containerImage">
                    <img class="image" src="<?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
" alt="foobar" />
                </div>
                <h2 class="top-left">Title:<br><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
                <p class="article">Description:<br><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</main>
<style>
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .stuff{
        padding: 14px 31px;
        border: 2px solid black;
    }
</style>
<?php echo '<script'; ?>
 src="javascript/resize.js"><?php echo '</script'; ?>
>
<?php }
}
