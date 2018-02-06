<?php


require_once 'template/libs/smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'view';
$smarty->compile_dir = 'view/compile';
$smarty->config_dir = 'view/configs/';
$smarty->cache_dir = 'view/cache';


$site = array(
    'title' => 'АБС - Агенство Бухгалтерского Сопровождения',
    'logo' => 'АБС',

    // Меню
    'menu1' => 'О нас',
    'menu2' => 'Почему мы',
    'menu3' => 'Сертификты',
    'menu4' => 'Услуги',
    'menu5' => 'Партнеры',
    'menu6' => 'Контакты',


    // Заголовочная информация
    'welcome_text' => 'БУХГАЛТЕРСКИЕ УСЛУГИ В АЛМАТЫ',
    'under_welcome_text' => 'для бизнеса любого уровня',
    'button' => 'Закажите обратный звонок',
    'text_under_button' => 'и мы перезвоним Вам через 10 минут',

    // 1-й блок "О нас"
    'about_header_red' => 'О ',
    'about_header' => 'НАШЕЙ КОМПАНИИ',
    'about_text' => 'Наша компания — это настоящий сервисный центр для Вашего бизнеса,
     с отличным качеством обслуживания и демократичными ценами на услуги.',
    'about_red' => 'Индивидуальный подход к каждому клиенту.',
    'about_button' => 'Напишите нам',
    'about_logo_img' => 'img/logo/logo.png',

    // 2-й блок "Наши цели"
    'mission_header_red' => 'НАШИ ',
    'mission_header' => 'ЦЕЛИ',
    'mission_text_bold' => 'Мы ценим',
    'mission_text' => 'Мы ценим',
    'mission_text2' => 'ваше время и стремимся создать максимум возможностей для 
    уверенного развития вашего бизнеса. Мы помогаем нашим клиентам достичь успеха, 
    выявляя их потребности и предлагая новые и выгодные решения.',
    'mission_text_grey_bold' => 'Мы предлагаем Вам :',
    'mission_text_gray' => ' Гибкую систему скидок, Индивидуальный подход к вам и вашим пожеланиям, Полную информацию о наших услугах, 
    Выезд к клиенту, в удобное время, 100% гарантия на качество наших услуг, Беспратную консультацию',

    // 3-й блок "6 Причин"
    'reason_header_red' => '6 ',
    'reason_header' => 'ПРИЧИН РАБОТАТЬ С НАМИ',
    'reason_under_header' => ' ',

    'reason_icon1_header' => 'ВЫСОКИЙ УРОВЕНЬ СЕРВИСА',
    'reason_icon2_header' => 'ПРОФЕСИАНАЛИЗМ',
    'reason_icon3_header' => 'ЭКОНОМИЯ ВАШЕГО ВРЕМЕНИ И ФИНАНСОВ',
    'reason_icon4_header' => 'НАДЕЖНЫЙ БИЗНЕС ПАРТНЕР',
    'reason_icon5_header' => 'КОНФИДЕНЦИАЛЬНОСТЬ',
    'reason_icon6_header' => 'МАТЕРИАЛЬНАЯ ОТВЕТСТВЕННОСТЬ',

    'reason_icon1_text' => 'Наша компания — это настоящий сервисный центр для вашего
     бизнеса, с отличным качеством обслуживания и демократичными ценами на услуги. 
     Индивидуальный подход к каждому клиенту.',

    'reason_icon2_text' => 'На вашу компанию работает лучшая команда квалифицированных 
    специалистов, вместо одного штатного бухгалтера. Соблюдения требований по МСФО, 
    налогового и бухгалтерского законодательства.',

    'reason_icon3_text' => 'Наши услуги обойдутся вам дешевле содержания штатного 
    бухгалтера. У вас будет больше времени для развития своего бизнеса.',

    'reason_icon4_text' => 'Вы в любое время можете обратиться за консультацией, 
    за кротчайшие сроки мы можем вам предоставить информацию.

',
    'reason_icon5_text' => 'Мы гарантируем полную конфиденциальность вашей финансовой 
    информации и защиту персональных данных.',

    'reason_icon6_text' => 'Мы гарантируем полную ответственность за ведение вашего учета.',

    // 4-й блок "Сертификаты"
    'certificate_header_red' => 'СЕРТИФИКАТЫ ',
    'certificate_header' => '',
    'under_header' => 'сертификаты наших работкинов',

    // Сертификаты
    'cer_img_1' => 'img/certificates/img-150421152610-1.jpg',
    'cer_img_2' => 'img/certificates/img-150421152644-1.jpg',
    'cer_img_3' => 'img/certificates/img-150421152714-1.jpg',
    'cer_img_4' => 'img/certificates/img-150421152809-1.jpg',
    'cer_img_5' => 'img/certificates/img-150421152840-1.jpg',
    'cer_img_6' => 'img/certificates/img-150421152908-1.jpg',
    'cer_img_7' => 'img/certificates/img-150421152930-1.jpg',
    'cer_img_8' => 'img/certificates/img-150421152954-1.jpg',
    'cer_img_9' => 'img/certificates/img-150421153018-1.jpg',
    'cer_img_10' => 'img/certificates/img-150421153045-1.jpg',
    'cer_img_11' => 'img/certificates/img-150421153111-1.jpg',
    'cer_img_12' => 'img/certificates/img-150421153137-1.jpg',
    'cer_img_13' => 'img/certificates/img-150421153159-1.jpg',
    'cer_img_14' => 'img/certificates/img-150421153221-1.jpg',
    'cer_img_15' => 'img/certificates/img-150421153243-1.jpg',
    'cer_img_16' => 'img/certificates/img-150421153306-1.jpg',
    'cer_img_17' => 'img/certificates/img-150421153332-1.jpg',
    'cer_img_18' => 'img/certificates/img-150421153356-1.jpg',
    'cer_img_19' => 'img/certificates/img-150421153420-1.jpg',
    'cer_img_20' => 'img/certificates/img-150421153446-1.jpg',
    'cer_img_21' => 'img/certificates/CAP Azizbek-1.jpg',
    'cer_img_22' => 'img/certificates/CAP Natalya-1.jpg',
    'cer_img_23' => 'img/certificates/Prof Azizbek-1.jpg',
    'cer_img_24' => 'img/certificates/Prof Natalya-1.jpg',


    // Партнеры

    'par_img_1' => 'img/partners/ASC.PNG',
    'par_img_2' => 'img/partners/Dega.png',
    'par_img_3' => 'img/partners/grupart-logo2-300px.png',
    'par_img_4' => 'img/partners/Hairun.png',
    'par_img_5' => 'img/partners/inoxpoint.png',
    'par_img_6' => 'img/partners/Logo-VENTRA-159-na-53_seryj.png',
    'par_img_7' => 'img/partners/logo_inoxasia.png',
    'par_img_8' => 'img/partners/papirus1.png',

    'reviews' => 'Отзывы',

    'quote1' => '"Эта компания лучшая"',
    'quote1_name' => 'Кто-то',

    'quote2' => '"Эта компания лучшая"',
    'quote2_name' => 'Кто-то',

    'quote3' => '"Эта компания лучшая"',
    'quote3_name' => 'Кто-то',

    // 5-й блок "Наши услуги"
    'services_header_red' => 'НАШИ ',
    'services_header' => 'УСЛУГИ',
    'services_under_header' => 'И это только небольшая часть тех услуг, которые мы оказываем нашим клиентам.
Мы всегда рядом и готовы прийти вам на помощь.
Обратившись к нам, Вы получите грамотные ответы на ваши вопросы.',

    'services1_header' => 'Бухгалтерский учет',
    'services1_line1' => 'Ведение бухгалтерского учета',
    'services1_line2' => 'Составление отчетности',
    'services1_line3' => 'Разработка учетной и налоговой политики',
    'services1_line4' => 'Подготовка и сдача налоговой декларации',

    'services2_header' => 'Кадровое делопроизводство',
    'services2_line1' => 'Постановка кадрового учета',
    'services2_line2' => 'Оформление документов сотрудников',
    'services2_line3' => 'Расчет и начисление з/п и налогов',
    'services2_line4' => 'Разработка должостных инструкций',

    'services3_header' => 'Юридическое сопровождение',
    'services3_line1' => 'Регистрация и перерегистрация предприятий',
    'services3_line2' => 'Работа с договорами',
    'services3_line3' => 'Составление процессуальных документов',
    'services3_line4' => 'Судебное представительство',

    // 6-й блок "Партнеры"
    'partners_header_red' => 'Наши',
    'partners_header' => 'партнеры',
    'partners_img' => 'img/partners/partners_1.png',


    // 7-й блок "Контакты"
    'contacts_header' => 'КОНТАКТЫ',
    'contacts_text' => 'Напишите нам, и мы вам ответим за 15 минут',
    'contacts_adress' => ' Казыбек би 117, бизнес центр "Galianos" 5 этаж, офис 506',
    'contacts_telephones' => '+7 (771) 503-00-33; +7 (727) 328-27-27',
    'contacts_mail' => 'office@absuchet.kz',

    // 8-й блок "Напишите нам"
    'contacts_left_header' => 'Напишите нам, и мы вам',
    'contacts_left_red' => 'перезвоним!',
    'contacts_left_button' => 'Отправить',

    // "Карта"
    'footer_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2054.708337128433!2d76.92779681627715!3d43.25568876450291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836eb0a1f822ab%3A0x3ec68bc66cbad1f5!2z0YPQu9C40YbQsCDQmtCw0LfRi9Cx0LXQuiDQkdC4IDExNywg0JDQu9C80LDRgtGLLCDQmtCw0LfQsNGF0YHRgtCw0L0!5e0!3m2!1sru!2scz!4v1517509045763',

    // "Низ"
    'footer_company' => '© ООО «АБС - Агенство Бухгалтерского Сопровождения», 2015',
    'footer_telephone' => '+7 (771) 503-00-33; +7 (727) 328-27-27',

    // "Всплывающее окно 1"
    'fancybox_1_header' => 'Оставьте',
    'fancybox_1_header_red' => 'заявку',
    'fancybox_1_under_text' => 'Мы гарантируем безопасность ваших данных',
    'fancybox_1_name' => 'Ваше имя...',
    'fancybox_1_telephone' => 'Ваш телефон...',
    'fancybox_button' => 'Отправить',

    // "Всплывающее окно 2"
    'fancybox_2_header' => 'У вас есть',
    'fancybox_2_header_red' => 'вопрос?',
    'fancybox_2_under_text' => 'Мы ответим вам через 15 минут',
    'fancybox_2_name' => 'Ваше имя...',
    'fancybox_2_email' => 'Ваш E-mail...',
    'fancybox_2_comment' => 'Коментарий...'
);

$smarty->assign('data', $site);
$smarty->display('template.tpl');

?>



