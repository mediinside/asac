var slider = [], co = [], fn = []; co.getdoc = function(e, n, t, o) { switch ($("body").css("z-index")) { case "1": "pc" != co.device && (co.device = "pc", co.respond = !0, co.respondView = !0); break; case "2": "tb" != co.device && (co.device = "tb", co.respond = !0, co.respondView = !0); break; case "3": "mb" != co.device && (co.device = "mb", co.respond = !0, co.respondView = !0) } }, slider.item = [], fn.sliderOption = function(el, custom, option) { el = el.parent(); var id = el.attr("id"); return !custom.speed && (custom.speed = 500), !custom.pause && (custom.pause = 6e3), !custom.controlPrefix && (custom.controlPrefix = "mswiper"), option = { responsive: !0, touchEnabled: !0, oneToOneTouch: !1, pager: !1, controls: !1, autoControls: !1, nextText: '<i class="ip-icon-' + custom.controlPrefix + '-next"></i><span class="text-ir">next</span>', prevText: '<i class="ip-icon-' + custom.controlPrefix + '-prev"></i><span class="text-ir">prev</span>', startText: '<i class="ip-icon-' + custom.controlPrefix + '-play"></i><span class="tup">play</span>', stopText: '<i class="ip-icon-' + custom.controlPrefix + '-pause"></i><span class="tup">pause</span>' }, $.extend(option, custom), custom.buildPager && (option.buildPager = function(sliderIndex) { return eval(custom.buildPager)(el, sliderIndex) }), option.onSlideBefore = function($slideElement, oldIndex, newIndex) { custom.onSlideBefore && eval(custom.onSlideBefore)(el, $slideElement, oldIndex, newIndex), $slideElement.siblings(".active").removeClass("active"), el.find(".bx-controls").addClass("disabled"), setTimeout(function() { $slideElement.addClass("active") }) }, option.onSlideAfter = function($slideElement, oldIndex, newIndex) { custom.onSlideAfter && eval(custom.onSlideAfter)(el, $slideElement, oldIndex, newIndex), el.find(".bx-controls").removeClass("disabled") }, option.onSliderLoad = function(currentIndex) { custom.onSliderLoad && eval(custom.onSliderLoad)(el, currentIndex), setTimeout(function() { el.find(".swiper").children().not(".bx-clone").eq(0).addClass("active") }) }, option }, co.tab = function(e, n) { var t = $(e), o = t.children(".trigger"), i = t.children(".list"), r = i.children("li"), s = function(e) { var n = e.parent().index(), s = e.html(); if (o.html(s), i.children(".on").removeClass("on"), r.eq(n).addClass("on"), t.next().hasClass("tab_contents")) { var c = t.next(); c.children(".on").removeClass("on"), c.children().eq(n).addClass("on") } i.removeClass("on") }; o.on("click", function() { i.addClass("on") }), r.children("a").on({ click: function() { var e = $(this); return "mb" != co.device || i.hasClass("on") ? s(e) : (i.addClass("on"), e.trigger("focus")), "function" == typeof n && n(e), !1 }, blur: function() { return setTimeout(function() { i.removeClass("on") }, 250), !1 } }), t.hasClass("link") || s(r.eq(0).children("a")) }, co.nav = function() { var e = $("#nav"), n = e.children(".trigger"), t = e.children(".group"), o = t.children(".btn-close"); n.on("click", function() { "pc" != co.device && $("html,body").css("overflow", "hidden"), t.fadeIn(function() { $(this).removeAttr("style"), $("html,body").removeAttr("style").addClass("nav-show") }) }), o.on("click", function() { "pc" != co.device && $("html,body").css("overflow", "visible"), t.fadeOut(function() { $(this).removeAttr("style"), $("html,body").removeAttr("style").removeClass("nav-show") }) }) }, co.accordian = function() { $(".accordion").each(function() { var e = $(this).children(), n = ".acco-contents"; e.on("click", ".acco-trigger", function() { var e = $(this).parent(), t = e.find(n); e.hasClass("on") ? (e.removeClass("on"), t.stop().slideUp(250)) : (e.siblings(".on").removeClass("on").find(n).stop().slideUp(250), e.addClass("on"), t.stop().slideDown(250)); return !1 }), e.filter(".active").find(".acco-trigger").trigger("click") }) }, co.init = function() { co.getdoc(), co.nav(), co.accordian(); var e = $("#ie-version"); e.length && e.on("click", ".version-close", function() { e.remove() }); $(window), $("body"); var n = $("#nav"); if ($(".swiper").each(function(e, n) { var t = (n = $(n)).parent().attr("id"); slider.item[t] = n.bxSlider(fn.sliderOption(n, n.data())) }), $("#location").length > 0) { var t = $("#location"), o = n.find(".dp1.current"), i = o.find(".dp2.current"), ha=(o.parent("ul").find("li.dp1").length - 1), r = i.prev().length > 0 ? i.prev().children("a").attr("href") : o.prev().length > 0 ? o.prev().find(".dp2").last().children("a").attr("href") : "javascript:void(0)"; next = i.next().length > 0 ? i.next().children("a").attr("href") : o.index() < ha ? o.next().find(".dp2").eq(0).children("a").attr("href") : "javascript:void(0)", i.length && t.find(".current").text(i.children("a").text()), t.find(".prev").attr("href", r), t.find(".next").attr("href", next); var s = t.find(".depth"), c = s.eq(0), d = s.eq(1); $("#visual").children(".page-title").text(o.children("a").text()), c.children("a").html(o.children("a").html()), c.children(".dp-section").children("li").eq(o.index()).addClass("current"), d.children("a").html(i.children("a").html()), d.children(".dp-section").html(o.find(".dp-section").html()), s.find(".dp2.sub").removeClass("sub").children(".dp-section").remove(), s.children("a").on("click", function() { var e = $(this).parents(".depth"); e.hasClass("on") ? e.removeClass("on").find(".dp-section").stop().slideUp(200) : (s.removeClass("on").find(".dp-section").stop().slideUp(200), e.addClass("on").find(".dp-section").css("height", "auto").slideDown(200)) }), s.on("mouseleave", function() { t.find(":focus").trigger("blur"), s.removeClass("on").find(".dp-section").stop().slideUp(200) }) } $(".fileBtn input").bind("change", function() { var e = $(this).val(); $(this).parent().prev(".txt").val(e) }) }, co.reszieEvent = "orientationchange" in window ? "orientationchange" : "resize", co.resize = function(e) { co.getdoc() }, $((jQuery, $(document).on("ready", function() { co.init(), fn.init && fn.init() }), void $(window).on(co.reszieEvent, function() { co.resize(this), fn.resize && fn.resize(this), co.respond = !1 }))), Date.prototype.format = function(e) { if (!this.valueOf()) return " "; var n, t = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"], o = this; return e.replace(/(yyyy|yy|MM|dd|E|hh|mm|ss|a\/p)/gi, function(e) { switch (e) { case "yyyy": return o.getFullYear(); case "yy": return (o.getFullYear() % 1e3).zf(2); case "MM": return (o.getMonth() + 1).zf(2); case "dd": return o.getDate().zf(2); case "E": return t[o.getDay()]; case "HH": return o.getHours().zf(2); case "hh": return ((n = o.getHours() % 12) ? n : 12).zf(2); case "mm": return o.getMinutes().zf(2); case "ss": return o.getSeconds().zf(2); case "a/p": return o.getHours() < 12 ? "AM" : "PM"; default: return e } }) }, String.prototype.string = function(e) { for (var n = "", t = 0; t++ < e;) n += this; return n }, String.prototype.zf = function(e) { return "0".string(e - this.length) + this }, Number.prototype.zf = function(e) { return this.toString().zf(e) }, Array.prototype.remove = function() { for (var e, n, t = arguments, o = t.length; o && this.length;) for (e = t[--o]; - 1 !== (n = this.indexOf(e));) this.splice(n, 1); return this };