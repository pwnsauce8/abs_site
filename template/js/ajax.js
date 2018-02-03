//Аякс отправка форм
//Документация: http://api.jquery.com/jquery.ajax/
$("#callback").submit(function() {
    $.ajax({
        type: "GET",
        url: "template/php/telephone.php",
        data: $("#callback").serialize()
    }).done(function() {
        alert("Спасибо за заявку!");
        setTimeout(function() {
            $.fancybox.close();
        }, 1000);
    });
    return false;
});

$("#callback_text").submit(function() {
    $.ajax({
        type: "GET",
        url: "template/php/mail.php",
        data: $("#callback_text").serialize()
    }).done(function() {
        alert("Спасибо за заявку!");
        setTimeout(function() {
            $.fancybox.close();
        }, 1000);
    });
    return false;
});