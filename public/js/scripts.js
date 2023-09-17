!(function (t) {
  "use strict";
  t("[data-appear-animation]").each(function () {
    var a = t(this);
    a.data("appear-animation"), a.data("appear-animation-delay") && a.data("appear-animation-delay");
    t(window).width() > 959
      ? (a.html("0"),
        a.waypoint(
          function (t) {
            if (!a.hasClass("completed")) {
              var e = a.data("from"),
                s = a.data("to"),
                i = a.data("interval");
              a.numinate({
                format: "%counter%",
                from: e,
                to: s,
                runningInterval: 2e3,
                stepUnit: i,
                onComplete: function (t) {
                  a.addClass("completed");
                },
              });
            }
          },
          { offset: "85%" }
        ))
      : a.html(a.data("to"));
  }),
    t(".slick-carousel").each(function () {
      var a = t(this),
        e = (a.data("items") && a.data("items"), !!a.data("dots") && a.data("dots")),
        s = !!a.data("arrows") && a.data("arrows"),
        i = !a.attr("data-autoplay") || a.data("autoplay"),
        o = a.attr("data-slides") ? a.data("slides") : 3,
        n = a.attr("data-tslides") ? a.data("tslides") : 2,
        r = a.attr("data-islides") ? a.data("islides") : 1;
      a.slick({
        dots: e,
        infinite: !1,
        arrows: s,
        autoplay: i,
        speed: 300,
        slidesToShow: o,
        slidesToScroll: 1,
        responsive: [
          { breakpoint: 1024, settings: { slidesToShow: n, slidesToScroll: 1 } },
          { breakpoint: 600, settings: { slidesToShow: r, slidesToScroll: 1 } },
          { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        ],
      });
    }),
    t(".skill-bar").each(function (a, e) {
      var s = t(this),
        i = s.attr("data-percent") || "100",
        o = s.attr("data-delay") || "100",
        n = s.attr("data-type") || "%";
      s.hasClass("progress-animated") || s.css({ width: "0%" });
      t(e).appear(function () {
        setTimeout(function () {
          s.animate({ width: i + "%" }, "easeInOutCirc").addClass("progress-animated"),
            s.delay(o).append('<span class="progress-type animated fadeIn">' + n + '</span><span class="progress-number animated fadeIn">' + i + "</span>");
        }, o);
      });
    }),
    t('a[data-rel^="prettyPhoto"]').prettyPhoto(),
    t('a[rel^="prettyPhoto"]').prettyPhoto(),
    t(".site-header a.search-btn").on("click", function () {
      return t(".ts-search-overlay").addClass("st-show"), t("body").addClass("st-prevent-scroll"), t(".field.searchform-s").focus(), !1;
    }),
    t(".ts-icon-close").on("click", function () {
      return t(".ts-search-overlay").removeClass("st-show"), t("body").removeClass("st-prevent-scroll"), !1;
    }),
    t(".ts-site-searchform").on("click", function (t) {
      t.stopPropagation();
    }),
    setTimeout(function () {
      t(".home-banner .carousel-item").eq(0).addClass("first-slide");
    }, 300),
    t("#Bannerslider").on("slide.bs.carousel", function () {
      t("#Bannerslider .carousel-item").eq(0).removeClass("first-slide"), t("#Bannerslider .carousel-item").eq(0).addClass("first-slide-active");
    }),
    t(".main-menu ul.navigation li.dropdown").append("<span class='righticon'><i class='optico-icon-angle-down'></i></span>"),
    t(".main-menu ul.navigation li.dropdown .righticon").on("click", function () {
      return t(this).siblings().toggleClass("open"), t(this).find("i").toggleClass("optico-icon-angle-down optico-icon-angle-up"), !1;
    }),
    t(window).scroll(function () {
      var a = t(".site-header-menu");
      t(window).scrollTop() >= 90 ? a.addClass("sticky-header") : a.removeClass("sticky-header");
    }),
    t(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({ default_offset_pct: 0.7 }),
    t(".twentytwenty-container[data-orientation='vertical']").twentytwenty({ default_offset_pct: 0.3, orientation: "vertical" }),
    jQuery(".db-circle-outer").each(function () {
      var t = jQuery(this),
        a = t.data("emptyfill"),
        e = t.data("thickness"),
        s = t.data("gradient"),
        i = t.data("fill"),
        o = (-Math.PI / 4) * 2;
      if (t.closest(".db-fid").hasClass("db-fid-boxstyle-style2")) o = (-Math.PI / 4) * 1.7;
      if (("" != s && (i = { gradient: [(s = s.split("|"))[0], s[1]] }), "function" == typeof jQuery.fn.circleProgress)) {
        var n = t.data("digit"),
          r = t.data("before"),
          l = t.data("after"),
          d = (n = Number(n)) / 100,
          c = t.data("size");
        jQuery(".db-circle", t)
          .circleProgress({ value: 0, size: c, startAngle: o, thickness: e, emptyFill: a, fill: i })
          .on("circle-animation-progress", function (a, e, s) {
            t.find(".db-circle-number").html(r + Math.round(100 * s) + l);
          });
      }
      t.waypoint(
        function (a) {
          t.hasClass("completed") || ("function" == typeof jQuery.fn.circleProgress && jQuery(".db-circle", t).circleProgress({ value: d }), t.addClass("completed"));
        },
        { offset: "85%" }
      );
    });
})(jQuery);
