<?php
/* Smarty version 3.1.32, created on 2018-07-04 14:48:23
  from 'C:\Users\kaasv\Documents\ma\bewijzenmap\periode1.2\projP4\myBand\private\views\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3cc2172f8145_39053922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9bac3c6fe645cc366dc653f323258abefb536d9' => 
    array (
      0 => 'C:\\Users\\kaasv\\Documents\\ma\\bewijzenmap\\periode1.2\\projP4\\myBand\\private\\views\\edit.tpl',
      1 => 1530708501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3cc2172f8145_39053922 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="post" action="index.php">
    <table>
        <tr>
            <th>Title</th>
            <th>Text</th>
            <th>Image</th>
        </tr>
        <table>
            <tr>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <th>
                    <label><input type="text" name="voornaam" value="<?php echo $_smarty_tpl->tpl_vars['voornaam']->value;?>
"</label><br>
                </th>
                <th>
                    <label><input type="textarea" name="tussenvoegsel" value="<?php echo $_smarty_tpl->tpl_vars['tussenvoegsel']->value;?>
"</label><br>
                </th>
                <th>
                    <label><input type="text" name="achternaam" value="<?php echo $_smarty_tpl->tpl_vars['achternaam']->value;?>
"</label><br>
                </th>
            </tr>
        </table>
    </table>
    <label><input type="submit" name="submit_edit" value="Go!"</label>
</form>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    td, th{
        width: 100px;
    }

    input{
        width: 100%;
        height: 8em;
    }

</style><?php }
}
