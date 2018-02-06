<footer class="footr text-center">
    <a href="#myPage" title="Вверх">
        <span class="glyphicon glyphicon-chevron-up animated fadeOutUp"></span>
    </a>
    <p>{$data.footer_company}</p>
    <p>{$data.footer_telephone}</p>
    <p>разработка сайта: mukanova98@gmail.com</p>
</footer>

<div id="hidden">
    <form method="post" id="callback" action="../template/php/telephone.php" autocomplete="off">
        <h3 class="hidden_text">{$data.fancybox_1_header} <span class="red">{$data.fancybox_1_header_red}</span></h3>
        <p class="hidden_under_text">{$data.fancybox_1_under_text}</p>

        <!-- END Hidden Required Fields -->
        <input id="name" type="text" name="name" placeholder=" {$data.fancybox_1_name}" required><br>
        <input id="email" type="email" name="email" placeholder=" {$data.fancybox_2_email}"><br>
        <input id="number" type="tel" name="number" placeholder=" {$data.fancybox_1_telephone}"><br>
        <textarea class="form-control" id="text" name="text" placeholder="{$data.fancybox_2_comment}" rows="5"></textarea>
        <button type="submit" id="otpravka_tel" style=" margin-left: 65px;" class="bu form_center animated pulse">{$data.fancybox_button}</button>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="/template/libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="/template/libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="/template/libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="/template/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="/template/libs/countdown/jquery.plugin.js"></script>
<script src="/template/libs/countdown/jquery.countdown.min.js"></script>
<script src="/template/libs/countdown/jquery.countdown-ru.js"></script>
<script src="/template/libs/landing-nav/navigation.js"></script>
<script src="/template/js/common.js"></script>
<script src="/template/js/ajax.js"></script>

<script type="text/javascript" src="/template/libs/slick/slick.min.js"></script>

</body>
</html>