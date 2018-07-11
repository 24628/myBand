<?php
/* Smarty version 3.1.32, created on 2018-07-06 11:59:59
  from 'C:\Users\kaasv\Documents\ma\bewijzenmap\periode1.2\projP4\myBand\private\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3f3d9fc42685_53405333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd6823e216cf5e1196ab8f0119cb9e0f39ad3ae7' => 
    array (
      0 => 'C:\\Users\\kaasv\\Documents\\ma\\bewijzenmap\\periode1.2\\projP4\\myBand\\private\\views\\login.tpl',
      1 => 1530871198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3f3d9fc42685_53405333 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/loginCss.css">
<form action="index.php" method="post">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="w3-black" name="submit_login">Login</button>
    </div>

    <div class="container">
        <button type="button" class="w3-black" onclick="location.href='index.php?page=home'" class="cancelbtn">Cancel</button>
    </div>
</form>
<style>
    footer,
    .push {
        height: 220px;
    }
</style><?php }
}
