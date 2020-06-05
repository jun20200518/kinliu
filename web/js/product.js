!
function(t) {
    function e(e) {
        for (var i, r, a = e[0], u = e[1], l = e[2], h = 0, f = []; h < a.length; h++) r = a[h],
        Object.prototype.hasOwnProperty.call(o, r) && o[r] && f.push(o[r][0]),
        o[r] = 0;
        for (i in u) Object.prototype.hasOwnProperty.call(u, i) && (t[i] = u[i]);
        for (c && c(e); f.length;) f.shift()();
        return s.push.apply(s, l || []),
        n()
    }
    function n() {
        for (var t, e = 0; e < s.length; e++) {
            for (var n = s[e], i = !0, a = 1; a < n.length; a++) {
                var u = n[a];
                0 !== o[u] && (i = !1)
            }
            i && (s.splice(e--, 1), t = r(r.s = n[0]))
        }
        return t
    }
    var i = {},
    o = {
        3 : 0
    },
    s = [];
    function r(e) {
        if (i[e]) return i[e].exports;
        var n = i[e] = {
            i: e,
            l: !1,
            exports: {}
        };
        return t[e].call(n.exports, n, n.exports, r),
        n.l = !0,
        n.exports
    }
    r.m = t,
    r.c = i,
    r.d = function(t, e, n) {
        r.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: n
        })
    },
    r.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }),
        Object.defineProperty(t, "__esModule", {
            value: !0
        })
    },
    r.t = function(t, e) {
        if (1 & e && (t = r(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var n = Object.create(null);
        if (r.r(n), Object.defineProperty(n, "default", {
            enumerable: !0,
            value: t
        }), 2 & e && "string" != typeof t) for (var i in t) r.d(n, i,
        function(e) {
            return t[e]
        }.bind(null, i));
        return n
    },
    r.n = function(t) {
        var e = t && t.__esModule ?
        function() {
            return t.
        default
        }:
        function() {
            return t
        };
        return r.d(e, "a", e),
        e
    },
    r.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    },
    r.p = "";
    var a = window.webpackJsonp = window.webpackJsonp || [],
    u = a.push.bind(a);
    a.push = e,
    a = a.slice();
    for (var l = 0; l < a.length; l++) e(a[l]);
    var c = u;
    s.push([15, 0]),
    n()
} ([,
function(t, e, n) {},
function(t, e, n) { (function(t) {
        var e; (e = t).fn.clicker_box = function(n) {
            var i = t.extend({
                ACTIVE: "active",
                ATR: "class",
                TARGET: !1,
                RANGE: [!1, !1],
                OBJ: !1,
                WIDTH: !1
            },
            n);
            function o() {
                var t, n;
                return i.WIDTH = e(window).width() + (t = e("<div>").css({
                    visibility: "hidden",
                    width: 100,
                    overflow: "scroll"
                }).appendTo("body"), n = e("<div>").css({
                    width: "100%"
                }).appendTo(t).outerWidth(), t.remove(), 100 - n),
                !1 === i.RANGE[1] || i.RANGE[0] <= i.WIDTH && i.RANGE[1] >= i.WIDTH
            }
            function s() {
                return "class" == i.ATR
            }
            e(this).on("click",
            function(t) {
                if (o()) {
                    t.preventDefault(),
                    r = e(this),
                    i.OBJ = !1 === i.TARGET ? r: e(i.TARGET);
                    var n = i.OBJ.attr(i.ATR);
                    void 0 !== n && n.search(i.ACTIVE) >= 0 ? s() ? i.OBJ.removeClass(i.ACTIVE) : i.OBJ.removeAttr(i.ATR, i.ACTIVE) : s() ? i.OBJ.addClass(i.ACTIVE) : i.OBJ.attr(i.ATR, i.ACTIVE)
                }
                var r
            })
        }
    }).call(this, n(0))
},
function(t, e) {
    t.exports = header = {
        btn__mobile__mainmenu_click: function() {
            var t = document.querySelector(".js__btn-mobile-mainmenu");
            t.addEventListener("click",
            function() {
                var e = document.querySelector(".body");
                t.classList.contains("js__btn-mobile-mainmenu--active") ? (t.classList.remove("js__btn-mobile-mainmenu--active"), e.classList.remove("mainmenu--opened")) : (t.classList.add("js__btn-mobile-mainmenu--active"), e.classList.contains("mainmenu--opened") || e.classList.add("mainmenu--opened"))
            })
        }
    }
},
,
function(t, e, n) {},
function(t, e, n) { (function(e) {
        t.exports = megamenu = {
            thresholdDesktop: 1200,
            windowsWidth: e(window).width(),
            gridGutter: 15,
            megaMenuShowData: function() {
                this.windowsWidth >= this.thresholdDesktop && e(".mega-menu-wrap:not(.onclick) .mega-menu-nav>.dropdown, .mega-menu-wrap:not(.onclick) .dropdown>.dropdown-menu>.dropdown").hover(function() {
                    e(this).addClass("show"),
                    e(this).find(">.dropdown-menu").addClass("show")
                },
                function() {
                    e(this).removeClass("show"),
                    e(this).find(">.dropdown-menu").removeClass("show")
                })
            },
            megamenuPosWidth_Wide: function() {
                if (e(".mega-menu-wrap .mega-menu--wide").length > 0 && this.windowsWidth > this.thresholdDesktop - 1) {
                    var t = e(".mega-menu--wide > .dropdown-menu"),
                    n = parseInt(t.closest(".dropdown").offset().left),
                    i = parseInt(e(".mega-menu-wrap").offset().left) - n;
                    t.css("left", i + "px"),
                    console.log("left = ", i),
                    e(window).resize(function() {
                        var n = parseInt(e(".mega-menu-wrap").offset().left),
                        i = parseInt(e(".mainheader-mainmenu-wrap").offset().left) - n;
                        t.css("left", i + "px"),
                        console.log("resize, left = ", i)
                    })
                }
            },
            megamenuPosWidth_Full: function() {
                if (e(".mega-menu-wrap .mega-menu--full").length > 0 && this.windowsWidth > this.thresholdDesktop - 1) {
                    var t = e(".mega-menu--full > .dropdown-menu"),
                    n = parseInt(e(".mega-menu-wrap").offset().left + this.gridGutter),
                    i = parseInt(e(".mainheader-mainmenu-wrap").offset().left) - n,
                    o = parseInt(e(".mainheader").width());
                    t.css("left", i + "px"),
                    t.css("width", o + "px"),
                    e(window).resize(function() {
                        var t = parseInt(e(".mega-menu-wrap").offset().left + this.gridGutter),
                        n = parseInt(e(".mainheader-mainmenu-wrap").offset().left) - t,
                        i = parseInt(e(".mainheader").width()),
                        o = e(".mega-menu--full > .dropdown-menu");
                        o.css("left", n + "px"),
                        o.css("width", i + "px")
                    })
                }
            }
        }
    }).call(this, n(0))
},
, , , , , , , ,
function(t, e, n) {
    "use strict";
    n.r(e),
    function(t, e) {
        n(1),
        n(5),
        n(2),
        n(6),
        n(3);
        function i(t) {
            return (i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
            function(t) {
                return typeof t
            }: function(t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol": typeof t
            })(t)
        }
        function o(t, e) {
            return ! e || "object" !== i(e) && "function" != typeof e ?
            function(t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            } (t) : e
        }
        function s(t) {
            return (s = Object.setPrototypeOf ? Object.getPrototypeOf: function(t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }
        function r(t, e) {
            if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
            t.prototype = Object.create(e && e.prototype, {
                constructor: {
                    value: t,
                    writable: !0,
                    configurable: !0
                }
            }),
            e && a(t, e)
        }
        function a(t, e) {
            return (a = Object.setPrototypeOf ||
            function(t, e) {
                return t.__proto__ = e,
                t
            })(t, e)
        }
        function u(t, e) {
            if (! (t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }
        function l(t, e) {
            for (var n = 0; n < e.length; n++) {
                var i = e[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value" in i && (i.writable = !0),
                Object.defineProperty(t, i.key, i)
            }
        }
        function c(t, e, n) {
            return e && l(t.prototype, e),
            n && l(t, n),
            t
        }
        var h = function() {
            function e(n, i, o) {
                u(this, e),
                this.$el = t(o),
                this.position = n,
                this.size = i,
                this.$el.css("position", "absolute"),
                this.updateCss()
            }
            return c(e, [{
                key: "updateCss",
                value: function() {
                    this.$el.css("left", this.position.x),
                    this.$el.css("top", this.position.y),
                    this.$el.css("width", this.size.width),
                    this.$el.css("height", this.size.height)
                }
            },
            {
                key: "collide",
                value: function(t) {
                    var e = t.position.x > this.position.x && t.position.x <= this.position.x + this.size.width,
                    n = t.position.y > this.position.y && t.position.y <= this.position.y + this.size.height;
                    return e && n
                }
            }]),
            e
        } (),
        f = new(function(t) {
            function e() {
                var t;
                return u(this, e),
                (t = o(this, s(e).call(this, {
                    x: 400,
                    y: 400
                },
                {
                    width: 15,
                    height: 15
                },
                ".ball"))).velocity = {
                    x: -7,
                    y: -10
                },
                t
            }
            return r(e, h),
            c(e, [{
                key: "update",
                value: function() {
                    this.position.x += this.velocity.x,
                    this.position.y += this.velocity.y,
                    this.updateCss(),
                    (this.position.x < 0 || this.position.x > 485) && (this.velocity.x = -this.velocity.x),
                    (this.position.y < 0 || this.position.y > 485) && (this.velocity.y = -this.velocity.y)
                }
            },
            {
                key: "init",
                value: function() {
                    this.position = {
                        x: 400,
                        y: 400
                    },
                    this.velocity = {
                        x: 5 + 10 * Math.random(),
                        y: -5 - 10 * Math.random()
                    },
                    this.update()
                }
            }]),
            e
        } ()),
        p = function(t) {
            function e(t, n) {
                return u(this, e),
                o(this, s(e).call(this, t, {
                    width: 100,
                    height: 15
                },
                n))
            }
            return r(e, h),
            c(e, [{
                key: "update",
                value: function() {
                    this.position.x < 0 && (this.position.x = 0),
                    this.position.x + this.size.width > 500 && (this.position.x = 500 - this.size.width),
                    this.updateCss()
                }
            }]),
            e
        } (),
        d = new p({
            x: 150,
            y: 30
        },
        ".b1"),
        m = new p({
            x: 250,
            y: 455
        },
        ".b2"),
        w = function() {
            function e() {
                u(this, e),
                this.timer = null,
                this.grade = 0,
                this.initControl(),
                this.control = {}
            }
            return c(e, [{
                key: "startGame",
                value: function() {
                    this.grade = 0,
                    f.init();
                    var e = 3,
                    n = this,
                    i = setInterval(function() {
                        t(".btn-start").text("READY..."),
                        t(".infoText").text(e),
                        --e < 0 && (clearInterval(i), t(".info").hide(), n.startGameMain())
                    },
                    1e3)
                }
            },
            {
                key: "startGameMain",
                value: function() {
                    var e = this;
                    this.timer = setInterval(function() {
                        d.collide(f) && (f.velocity.y = -f.velocity.y),
                        m.collide(f) && (f.velocity.y = -f.velocity.y, e.grade += 10),
                        f.position.y < 0 && e.endGame("Computer lose!"),
                        f.position.y > 485 && e.endGame("You lose!"),
                        e.control.ArrowLeft && (m.position.x -= 8),
                        e.control.ArrowRight && (m.position.x += 8),
                        d.position.x += f.position.x > d.position.x + d.size.width / 2 ? 8 : 0,
                        d.position.x += f.position.x < d.position.x + d.size.width / 2 ? -8 : 0,
                        d.update(),
                        m.update(),
                        f.update(),
                        t(".grade").text(e.grade)
                    },
                    30)
                }
            },
            {
                key: "initControl",
                value: function() {
                    var e = this;
                    t(window).keydown(function(t) {
                        e.control[t.key] = !0
                    }),
                    t(window).keyup(function(t) {
                        e.control[t.key] = !1
                    })
                }
            },
            {
                key: "endGame",
                value: function(e) {
                    clearInterval(this.timer),
                    t(".btn-start").text("START"),
                    t(".info").show(),
                    t(".infoText").html(e + "<br>Score: " + this.grade)
                }
            }]),
            e
        } (); !
        function(t) {
            t(document).ready(function() {
                header.btn__mobile__mainmenu_click(),
                t(".mainmenu-list-wrap .dropdown-toggle").clicker_box({
                    ACTIVE: "show",
                    ATR: "class",
                    TARGET: !1,
                    RANGE: [!1, 1199]
                }),
                megamenu.megaMenuShowData(),
                megamenu.megamenuPosWidth_Wide(),
                megamenu.megamenuPosWidth_Full(),
                window.game = new w
            })
        } (e)
    }.call(this, n(0), n(0))
}]);