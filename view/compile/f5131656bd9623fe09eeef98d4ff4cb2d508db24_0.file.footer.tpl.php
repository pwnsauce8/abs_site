<?php
/* Smarty version 3.1.30, created on 2018-02-04 16:16:46
  from "C:\Open\OSPanel\domains\abs\view\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7707be45c305_80541675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5131656bd9623fe09eeef98d4ff4cb2d508db24' => 
    array (
      0 => 'C:\\Open\\OSPanel\\domains\\abs\\view\\footer.tpl',
      1 => 1517750073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7707be45c305_80541675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footr text-center">
    <a href="#myPage" title="Вверх">
        <span class="glyphicon glyphicon-chevron-up animated fadeOutUp"></span>
    </a>
    <p><?php echo $_smarty_tpl->tpl_vars['data']->value['footer_company'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['data']->value['footer_telephone'];?>
</p>
    <p>разработка сайта: mukanova98@gmail.com</p>
</footer>

<div id="hidden">
    <form method="post" id="callback" action="../template/php/telephone.php" autocomplete="off">
        <h3 class="hidden_text"><?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_1_header'];?>
 <span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_1_header_red'];?>
</span></h3>
        <p class="hidden_under_text"><?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_1_under_text'];?>
</p>

        <!-- END Hidden Required Fields -->
        <input id="name" type="text" name="name" placeholder=" <?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_1_name'];?>
" required><br>
        <input id="email" type="email" name="email" placeholder=" <?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_2_email'];?>
"><br>
        <input id="number" type="tel" name="number" placeholder=" <?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_1_telephone'];?>
"><br>
        <textarea class="form-control" id="text" name="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_2_comment'];?>
" rows="5"></textarea>
        <button type="submit" id="otpravka_tel" style=" margin-left: 65px;" class="bu form_center animated pulse"><?php echo $_smarty_tpl->tpl_vars['data']->value['fancybox_button'];?>
</button>
    </form>
</div>


<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/fancybox/jquery.fancybox.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/waypoints/waypoints-1.6.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/scrollto/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/owl-carousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/countdown/jquery.plugin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/countdown/jquery.countdown.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/countdown/jquery.countdown-ru.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/libs/landing-nav/navigation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/ajax.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="/template/libs/slick/slick.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
