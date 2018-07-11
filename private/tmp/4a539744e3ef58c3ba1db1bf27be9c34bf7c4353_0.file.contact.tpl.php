<?php
/* Smarty version 3.1.32, created on 2018-07-06 11:58:32
  from 'C:\Users\kaasv\Documents\ma\bewijzenmap\periode1.2\projP4\myBand\private\views\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3f3d485d5956_13307344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a539744e3ef58c3ba1db1bf27be9c34bf7c4353' => 
    array (
      0 => 'C:\\Users\\kaasv\\Documents\\ma\\bewijzenmap\\periode1.2\\projP4\\myBand\\private\\views\\contact.tpl',
      1 => 1530871103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3f3d485d5956_13307344 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
            <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
            <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
            <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
        </div>
        <div class="w3-col m6">
            <form action="/action_page.php" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
            </form>
        </div>
    </div>
</div>
<style>
    footer,
    .push {
        height: 200px;
    }
</style><?php }
}
