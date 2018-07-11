<?php
/* Smarty version 3.1.32, created on 2018-07-11 12:35:05
  from 'C:\Users\kaasv\Documents\ma\bewijzenmap\periode1.2\projP4\myBand\private\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45dd59e92183_22826749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b09ea164cf6d14a0ae207b46c416df01b1f962c' => 
    array (
      0 => 'C:\\Users\\kaasv\\Documents\\ma\\bewijzenmap\\periode1.2\\projP4\\myBand\\private\\views\\header.tpl',
      1 => 1531305303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45dd59e92183_22826749 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<title>My Band</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html {
        height: 100%;
    }

    body {
        font-family: "Lato", sans-serif;
        min-height: 100%;
    }

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <!-- <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a> -->
        <a href="index.php?page=home" class="w3-bar-item w3-button w3-padding-large">Home</a>
        <a href="index.php?page=news" class="w3-bar-item w3-button w3-padding-large w3-hide-small">News</a>
        <a href="index.php?page=contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>
        <a href="index.php?page=login" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
        <!-- <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a> -->
    </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="index.php?page=home" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Home</a>
    <a href="index.php?page=news" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">News</a>
    <a href="index.php?page=contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>
    <a href="index.php?page=login" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Login</a>
</div>
<?php }
}
