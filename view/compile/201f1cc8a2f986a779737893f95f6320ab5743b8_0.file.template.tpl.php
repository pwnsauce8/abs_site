<?php
/* Smarty version 3.1.30, created on 2018-02-04 20:12:07
  from "C:\Open\OSPanel\domains\abs\view\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a773ee72659e1_29243864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '201f1cc8a2f986a779737893f95f6320ab5743b8' => 
    array (
      0 => 'C:\\Open\\OSPanel\\domains\\abs\\view\\template.tpl',
      1 => 1517751361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.tpl' => 1,
    'file:view/footer.tpl' => 1,
  ),
),false)) {
function content_5a773ee72659e1_29243864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="jumbotron text-center">
  <h1 id="welcome_text" class="animated bounceInDown"><?php echo $_smarty_tpl->tpl_vars['data']->value['welcome_text'];?>
</h1>
  <p><?php echo $_smarty_tpl->tpl_vars['data']->value['under_welcome_text'];?>
</p>
    <input href="#hidden" class="headbtn btn-lg animated pulse fancybox" type="button" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['button'];?>
" id="show-button">
    <p class="welcome_under"><?php echo $_smarty_tpl->tpl_vars['data']->value['text_under_button'];?>
</p>
</div>




<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <h2 class="about_header"><span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['about_header_red'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['data']->value['about_header'];?>
</h2><br>
      <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['about_text'];?>
</h4><br>
      <h4 class="text"><span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['about_red'];?>
</span></h4>
      <br>
      <input href="#hidden" class="btn btn-lg animated pulse fancybox" type="button" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['about_button'];?>
" id="show-button">

    </div>
    <div class="col-sm-4">
      <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['about_logo_img'];?>
" alt="logo">
      <!--<span class="glyphicon glyphicon-signal logo"></span>-->
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-9">
      <h2 class="about_header"><span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_header_red'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_header'];?>
</h2><br>
      <h4><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_text_bold'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['data']->value['mission_text2'];?>
</h4><br>
      <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_text_grey_bold'];?>
</strong><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_text_gray'];?>
</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2 class="about_header"><span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_header_red'];?>
</span><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_header'];?>
</h2>
  <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_under_header'];?>
</h4>
  <br>
  <div class="row slideanim">

    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon1_header'];?>
</h4>
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon1_text'];?>
</p>
    </div>

    <div class="col-sm-4">
        <i class="fas fa-handshake logo-small"></i>
      <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon2_header'];?>
</h4>
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon2_text'];?>
</p>
    </div>

    <div class="col-sm-4">
        <i class="fas fa-hourglass-half logo-small"></i>
      <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon3_header'];?>
</h4>
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon3_text'];?>
</p>
    </div>
  </div>

  <br><br>

  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon4_header'];?>
</h4>
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon4_text'];?>
</p>
    </div>

    <div class="col-sm-4">
      <i class="fas fa-briefcase logo-small"></i>
      <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon5_header'];?>
</h4>
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon5_text'];?>
</p>
    </div>

    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;"><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon6_header'];?>
</h4>
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['reason_icon6_text'];?>
</p>
    </div>
  </div>
</div>

<!-- Container (Certificates Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2 class="about_header"><span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['certificate_header_red'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['certificate_header'];?>
</h2><br>
  <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['under_header'];?>
</h4>

<div class="slider_cer">
  <div class="center">
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_1'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_2'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_3'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_4'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_5'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_6'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_7'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_8'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_9'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_10'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_11'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_12'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_13'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_14'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_15'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_16'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_17'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_18'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_19'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_20'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_21'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_22'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_23'];?>
" alt="Сертификат1" "></div>
    <div class="center"><img class="sl_img" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['cer_img_24'];?>
" alt="Сертификат1" "></div>
  </div>
</div>

  <h2 style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['data']->value['reviews'];?>
</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['quote1'];?>
<br><span><?php echo $_smarty_tpl->tpl_vars['data']->value['quote1_name'];?>
</span></h4>
      </div>
      <div class="item">
        <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['quote2'];?>
<br><span><?php echo $_smarty_tpl->tpl_vars['data']->value['quote2_name'];?>
</span></h4>
      </div>
      <div class="item">
        <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['quote3'];?>
<br><span><?php echo $_smarty_tpl->tpl_vars['data']->value['quote3_name'];?>
</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2 class="about_header"><span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['services_header_red'];?>
</span><?php echo $_smarty_tpl->tpl_vars['data']->value['services_header'];?>
</h2>
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['services_under_header'];?>
</h4>
  </div>


  <div class="row slideanim">


    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1 class="services_header"><?php echo $_smarty_tpl->tpl_vars['data']->value['services1_header'];?>
</h1>
        </div>
        <div class="panel-body">
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services1_line1'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services1_line2'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services1_line3'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services1_line4'];?>
</strong></p>
          <h4 class="mini_text">и еще..</h4>
        </div>
        <div class="panel-footer">
          <h3><i class="fas fa-chart-pie fa-lg"></i></h3>
        </div>
      </div>      
    </div>


    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1 class="services_header"><?php echo $_smarty_tpl->tpl_vars['data']->value['services2_header'];?>
</h1>
        </div>
        <div class="panel-body">
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services2_line1'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services2_line2'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services2_line3'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services2_line4'];?>
</strong></p>
          <h4 class="mini_text">и еще..</h4>
        </div>
        <div class="panel-footer">
          <i style="margin-top: 13px;" class="fas fa-cog fa-spin fa-3x"></i>
        </div>
      </div>      
    </div>


    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1 class="services_header"><?php echo $_smarty_tpl->tpl_vars['data']->value['services3_header'];?>
</h1>
        </div>
        <div class="panel-body">
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services3_line1'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services3_line2'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services3_line3'];?>
</strong></p>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['services3_line4'];?>
</strong></p>
          <h4 class="mini_text">и еще..</h4>
        </div>
        <div class="panel-footer">
          <i style="margin-top: 13px;" class="fas fa-chart-line fa-3x"></i>
        </div>
      </div>      
    </div>    
  </div>
</div>


<div id="partners" class="container-fluid">
  <div class="text-center">
    <h2 class="about_header"><span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['partners_header_red'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['partners_header'];?>
</h2>
    <h4></h4>
    <img class="img_part slideanim" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['partners_img'];?>
" alt="partners">
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="about_header" style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_header'];?>
</h2>
  <div class="row">
    <div class="col-sm-5">
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_text'];?>
</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>  <?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_adress'];?>
</p>
      <p><span class="glyphicon glyphicon-phone"></span>  <?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_telephones'];?>
</p>
      <p><span class="glyphicon glyphicon-envelope"></span>   <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_mail'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_mail'];?>
</a></p>
    </div>

    <div class="col-sm-7 slideanim">
      <h2 style="margin-top: 0;"><?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_left_header'];?>
 <span class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_left_red'];?>
</span></h2>


      <form method="get" id="callback_text" action="../template/php/telephone.php" autocomplete="off">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Имя" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>

            <input style="margin-top: 6px" class="form-control" id="number" name="number" placeholder="Телефон" type="tel" required>
            <textarea class="form-control" id="text" name="text" placeholder="Комментарий" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" name="submit" id="btm_hidden" class="bu form_center"><?php echo $_smarty_tpl->tpl_vars['data']->value['contacts_left_button'];?>
</button>
                </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<iframe src="<?php echo $_smarty_tpl->tpl_vars['data']->value['footer_map'];?>
"  frameborder="0" style=" width: 100%; height: 400px;" allowfullscreen></iframe>

<?php $_smarty_tpl->_subTemplateRender("file:view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
