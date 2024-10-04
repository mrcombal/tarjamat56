"use strict";
$(document).ready(function() {
    $(".header-color").on("click", function() {
        var a = $(this).attr("data-color"),
            s = $("body").attr("data-header-color");
        $("body").removeClass(s).addClass(a).attr("data-header-color", a)
    }), $(".sidebar-color").on("click", function() {
        var a = $(this).attr("data-color"),
            s = $("body").attr("data-sidebar-color");
        $("body").removeClass(s).addClass(a).attr("data-sidebar-color", a), $("body").hasClass("sidebar-dark") ? $(".main-sidebar").css("background-image", "url('../build/images/backgrounds/10.jpg')") : $("body").hasClass("sidebar-light") && $(".main-sidebar").css("background-image", "url('../build/images/backgrounds/11.jpg')")
    }), $(".sidebar-bg").on("click", function() {
        $("body").removeClass("sidebar-no-bg"), $("#sidebar-bg").prop("checked", !0);
        var a = "../build/images/backgrounds/" + $(this).attr("data-bg");
        $(".main-sidebar").css("background-image", "url(" + a + ")")
    }), $("#sidebar-bg").on("click", function() {
        $(this).prop("checked") === !0 ? ($("body").removeClass("sidebar-no-bg"), $("body").hasClass("sidebar-dark") ? $(".main-sidebar").css("background-image", "url('../build/images/backgrounds/10.jpg')") : $("body").hasClass("sidebar-light") && $(".main-sidebar").css("background-image", "url('../build/images/backgrounds/11.jpg')")) : $(this).prop("checked") === !1 && ($("body").addClass("sidebar-no-bg"), $(".main-sidebar").css("background-image", ""))
    })
});