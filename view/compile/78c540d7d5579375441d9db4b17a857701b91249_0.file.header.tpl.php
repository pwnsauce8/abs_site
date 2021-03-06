<?php
/* Smarty version 3.1.30, created on 2018-02-04 13:16:06
  from "C:\Open\OSPanel\domains\abs\view\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a76dd6687b708_67204848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c540d7d5579375441d9db4b17a857701b91249' => 
    array (
      0 => 'C:\\Open\\OSPanel\\domains\\abs\\view\\header.tpl',
      1 => 1517737504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a76dd6687b708_67204848 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/template/css/main.css"/>
    <link rel="stylesheet" href="/template/css/media.css"/>
    <link rel="shortcut icon" href="/img/logo/favi.ico">
    <link rel="stylesheet" href="/template/libs/fancybox/jquery.fancybox.css"/>
    <link rel="stylesheet" href="/template/libs/countdown/jquery.countdown.css"/>

    <link rel="stylesheet" type="text/css" href="/template/libs/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/template/libs/slick/slick-theme.css"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="stylesheet" href="/template/css/animate.min.css" />
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage"><?php echo $_smarty_tpl->tpl_vars['data']->value['logo'];?>
</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about"><?php echo $_smarty_tpl->tpl_vars['data']->value['menu1'];?>
</a></li>
                <li><a href="#services"><?php echo $_smarty_tpl->tpl_vars['data']->value['menu2'];?>
</a></li>
                <li><a href="#portfolio"><?php echo $_smarty_tpl->tpl_vars['data']->value['menu3'];?>
</a></li>
                <li><a href="#pricing"><?php echo $_smarty_tpl->tpl_vars['data']->value['menu4'];?>
</a></li>
                <li><a href="#partners"><?php echo $_smarty_tpl->tpl_vars['data']->value['menu5'];?>
</a></li>
                <li><a href="#contact"><?php echo $_smarty_tpl->tpl_vars['data']->value['menu6'];?>
</a></li>
            </ul>
        </div>
    </div>
</nav><?php }
}
