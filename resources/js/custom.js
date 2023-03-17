import '../css/app.css';
import './bootstrap';
$(document).ready(function() {
    let navigation = $(".vertical-nav"),
        estade = $(".remove .container-remove lottie-player"),
        colors = $(".list-switch li");

    /*-------------------- loader -------------------------*/
    $('.loader').delay(1500).fadeOut(1000, function() {
        $(this).remove();
    });

    /*--------------------Active menu  ---------------------*/

    $(".vertical-nav #toogle-menu").click(function(e) {
        e.preventDefault();
        navigation.toggleClass("menu-active");
        $(".toogle_menu").toggleClass("active-toogle");
    });
    /*---------------------- setting switch -----------------*/
    $(".cover-switch").click(function(e) {
        e.preventDefault();
        $(".cover-switch ").addClass("hide");
        $(".switch").addClass("show");
    });
    $(".switch .hide-button").click(function(e) {
        e.preventDefault();
        $(".cover-switch ").removeClass("hide");
        $(".switch").removeClass("show");
    });
    $(colors).click(function(e) {
        e.preventDefault();
        let colorIdentificator = $(this).attr('data-color');
        let color = document.documentElement.style.setProperty('--color_icons', colorIdentificator)
    });
    /*----------------- Setting networks -----------------*/
    $("#home .container-button button").click(function(e) {
        e.preventDefault();
        $(".networks").addClass("active-networks");
        $(".remove-networks i").click(function(e) {
            e.preventDefault();
            $(".networks").removeClass("active-networks");
        });
    });
    /*---------------------- smoth scroll-------------------*/
    $(".vertical-nav .mini-menu > ul li a").on("click", function(e) {
        e.preventDefault();
        let selector = $(this);
        $(".vertical-nav").removeClass('menu-active');
        $(selector.attr('href')).addClass('active').siblings("section").removeClass('active');
        $(".toogle_menu").removeClass("active-toogle");
    });
    /*----------------------  portfolio  ----------------------*/

    $(".portfolio .options > ul li").on('click', function() {
        const selector = $(this).attr('data-filter');
        if (selector == 'all') {
            $(".c-i").removeClass('active');
        } else {
            $('.c-i').not('.' + selector).addClass('active');
            $('.c-i').filter('.' + selector).removeClass('active');
        }
    });
    $(".portfolio .options > ul li").click(function(e) {
        e.preventDefault();
        $(this).addClass('active').siblings().removeClass('active');
    });
    /*----------------------------- my blog -----------------------------*/
    $(estade).click(function(e) {
        e.preventDefault();
        $(".information-blog").toggleClass("blog-active");
        $(".information-blog").toggleClass("close-pointer");
        $("#blog").toggleClass("active-scroll");
    });
});