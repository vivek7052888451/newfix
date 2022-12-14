/*  Plugin: hs Menu (Modern Mega Menu) 
 *   Frameworks: jQuery 3.3.1 & Material Design Iconic Font 2.0
 *   Author: Asif Mughal
 *   GitHub: https://github.com/CodeHimBlog
 *   URL: https://www.codehim.com
 *   License: MIT License
 *   Copyright (c) 2019 - Asif Mughal
 */
/* File: jquery.hsmenu.min.js */
(function (a) {
    a.fn.hsMenu = function (b) {
        var c = a.extend({
            bgFading: true,
            outClickToClose: true,
            navControls: true,
            fixedMenubar: true,
        }, b);
        return this.each(function () {
            var g, i, d, f, j;
            g = a(".hs-navigation");
            if (c.bgFading == true) {
                j = e();
                a(j).addClass("dim-overlay").insertAfter(g)
            }
            if (c.fixedMenubar == true) {
                a(this).addClass("sticky")
            }
            a(".toggle").click(function () {
                a(this).toggleClass("ripple-out");
                $reveal = a(this).attr("data-reveal");
                $allRevealable = ".grid-items, .user-penal, .user-info";
                if (a($reveal).hasClass("fadeInUp")) {
                    a($reveal).removeClass("fadeInUp").fadeOut()
                } else {
                    a($reveal).fadeIn().addClass("fadeInUp")
                }
                a($allRevealable).not($reveal).removeClass("fadeInUp ripple-out").fadeOut()
            });
            a(".menu-trigger").click(function () {
                a(this).toggleClass("ripple-out");
                a(g).toggleClass("open");
                a(j).toggle(50)
            });
            var k = a(".search-box").find("input");
            a(".search-trigger").click(function () {
                a(this).toggleClass("ripple-out");
                a(this).find(".zmdi").removeClass("zmdi-search").addClass("zmdi-close");
                if (a(this).hasClass("ripple-out")) {
                    a(".search-box").animate({
                        width: "250px",
                    }, 500, function () {
                        k.focus()
                    })
                } else {
                    a(".search-box").animate({
                        width: "0px",
                    }, 500);
                    a(this).find(".zmdi").removeClass("zmdi-close").addClass("zmdi-search")
                }
            });
            a(k).keyup(function () {
                if (a(this).val().length > 0) {
                    a(".search-submit").attr("disabled", false)
                } else {
                    a(".search-submit").attr("disabled", true)
                }
            });
            if (c.outClickToClose == true) {
                a(window).click(function (l) {
                    if (a(l.target).closest(".more-trigger, .grid-trigger,  .user-penal, .grid-items, .menu-trigger, .hs-navigation, .hs-user, .user-info").length) {
                        return
                    }
                    a(".user-penal, .grid-items, .user-info").fadeOut().removeClass("fadeInUp");
                    a(g).removeClass("open");
                    a(j).fadeOut()
                })
            }
            if (c.navControls == true) {
                i = e();
                d = h();
                f = h();
                a(d).html("<i class='zmdi zmdi-unfold-more'></i>").addClass("nav-fixed").appendTo(i);
                a(f).addClass("nav-full").html("<i class='zmdi zmdi-crop-free'></i>").appendTo(i);
                a(i).addClass("nav-controls").prependTo(".hs-navigation");
                a(".nav-fixed").on("click", function (l) {
                    l = a(this).find(".zmdi");
                    if (l.hasClass("zmdi-unfold-more")) {
                        a(g).animate({
                            position: "fixed",
                            top: 0,
                        }, 400, function () {
                            a(g).css({
                                overflow: "auto",
                            });
                            l.removeClass("zmdi-unfold-more").addClass("zmdi-unfold-less")
                        })
                    } else {
                        a(g).animate({
                            top: "50px",
                        }, 400, function () {
                            a(g).css({
                                overflow: "hidden",
                            });
                            l.addClass("zmdi-unfold-more").removeClass("zmdi-unfold-less")
                        })
                    }
                });
                a(".nav-full").click(function (l) {
                    l = a(this).find(".zmdi");
                    if (l.hasClass("zmdi-crop-free")) {
                        l.removeClass("zmdi-crop-free").addClass("zmdi-aspect-ratio-alt");
                        a(".hs-navigation").width("320")
                    } else {
                        a(".hs-navigation").width("270px");
                        l.addClass("zmdi-crop-free").removeClass("zmdi-aspect-ratio-alt")
                    }
                })
            }
            a(".hs-user").click(function () {
                var l = a(this).find("img").clone();
                a(".profile-pic").html(l)
            });
            a(".its-parent").click(function () {
                a(this).siblings(".its-children").slideToggle();
                a(this).toggleClass("downed")
            });

            function e() {
                return document.createElement("div")
            }

            function h() {
                return document.createElement("button")
            }
        })
    }
})(jQuery);