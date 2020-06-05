!
function(e) {
    function t(t) {
        for (var l, m, v = t[0], r = t[1], o = t[2], b = 0, g = []; b < v.length; b++) m = v[b],
        Object.prototype.hasOwnProperty.call(i, m) && i[m] && g.push(i[m][0]),
        i[m] = 0;
        for (l in r) Object.prototype.hasOwnProperty.call(r, l) && (e[l] = r[l]);
        for (c && c(t); g.length;) g.shift()();
        return u.push.apply(u, o || []),
        a()
    }
    function a() {
        for (var e, t = 0; t < u.length; t++) {
            for (var a = u[t], l = !0, v = 1; v < a.length; v++) {
                var r = a[v];
                0 !== i[r] && (l = !1)
            }
            l && (u.splice(t--, 1), e = m(m.s = a[0]))
        }
        return e
    }
    var l = {},
    i = {
        2 : 0
    },
    u = [];
    function m(t) {
        if (l[t]) return l[t].exports;
        var a = l[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(a.exports, a, a.exports, m),
        a.l = !0,
        a.exports
    }
    m.m = e,
    m.c = l,
    m.d = function(e, t, a) {
        m.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: a
        })
    },
    m.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }),
        Object.defineProperty(e, "__esModule", {
            value: !0
        })
    },
    m.t = function(e, t) {
        if (1 & t && (e = m(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var a = Object.create(null);
        if (m.r(a), Object.defineProperty(a, "default", {
            enumerable: !0,
            value: e
        }), 2 & t && "string" != typeof e) for (var l in e) m.d(a, l,
        function(t) {
            return e[t]
        }.bind(null, l));
        return a
    },
    m.n = function(e) {
        var t = e && e.__esModule ?
        function() {
            return e.
        default
        }:
        function() {
            return e
        };
        return m.d(t, "a", t),
        t
    },
    m.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    },
    m.p = "";
    var v = window.webpackJsonp = window.webpackJsonp || [],
    r = v.push.bind(v);
    v.push = t,
    v = v.slice();
    for (var o = 0; o < v.length; o++) t(v[o]);
    var c = r;
    u.push([8, 0]),
    a()
} ([,
function(e, t, a) {},
function(e, t, a) { (function(e) {
        var t; (t = e).fn.clicker_box = function(a) {
            var l = e.extend({
                ACTIVE: "active",
                ATR: "class",
                TARGET: !1,
                RANGE: [!1, !1],
                OBJ: !1,
                WIDTH: !1
            },
            a);
            function i() {
                var e, a;
                return l.WIDTH = t(window).width() + (e = t("<div>").css({
                    visibility: "hidden",
                    width: 100,
                    overflow: "scroll"
                }).appendTo("body"), a = t("<div>").css({
                    width: "100%"
                }).appendTo(e).outerWidth(), e.remove(), 100 - a),
                !1 === l.RANGE[1] || l.RANGE[0] <= l.WIDTH && l.RANGE[1] >= l.WIDTH
            }
            function u() {
                return "class" == l.ATR
            }
            t(this).on("click",
            function(e) {
                if (i()) {
                    e.preventDefault(),
                    m = t(this),
                    l.OBJ = !1 === l.TARGET ? m: t(l.TARGET);
                    var a = l.OBJ.attr(l.ATR);
                    void 0 !== a && a.search(l.ACTIVE) >= 0 ? u() ? l.OBJ.removeClass(l.ACTIVE) : l.OBJ.removeAttr(l.ATR, l.ACTIVE) : u() ? l.OBJ.addClass(l.ACTIVE) : l.OBJ.attr(l.ATR, l.ACTIVE)
                }
                var m
            })
        }
    }).call(this, a(0))
},
function(e, t) {
    e.exports = header = {
        btn__mobile__mainmenu_click: function() {
            var e = document.querySelector(".js__btn-mobile-mainmenu");
            e.addEventListener("click",
            function() {
                var t = document.querySelector(".body");
                e.classList.contains("js__btn-mobile-mainmenu--active") ? (e.classList.remove("js__btn-mobile-mainmenu--active"), t.classList.remove("mainmenu--opened")) : (e.classList.add("js__btn-mobile-mainmenu--active"), t.classList.contains("mainmenu--opened") || t.classList.add("mainmenu--opened"))
            })
        }
    }
},
, , , ,
function(e, t, a) {
    "use strict";
    a.r(t),
    function(e) {
        a(1),
        a(9),
        a(2),
        a(3),
        a(10);
        var t, l = a(4),
        i = (a(11), a(7));
        a(13);
        function u(e, t, a) {
            e.resize(t, a)
        } (t = e)(document).ready(function() {
            global_obj.document_init(),
            t(".js-marquee").marquee({
                duration: 6e3,
                gap: 50,
                delayBeforeStart: 0,
                direction: "left",
                duplicated: !0
            });
            var e = new i.a(function(e, t) {
                var a = !0,
                l = !1,
                i = void 0;
                try {
                    for (var m, v = e[Symbol.iterator](); ! (a = (m = v.next()).done); a = !0) {
                        var r = m.value,
                        o = r.contentRect;
                        o.left,
                        o.top,
                        o.width,
                        o.height,
                        u(d, r.contentRect.height, r.contentRect.width)
                    }
                } catch(e) {
                    l = !0,
                    i = e
                } finally {
                    try {
                        a || null == v.
                        return || v.
                        return ()
                    } finally {
                        if (l) throw i
                    }
                }
            }),
            a = document.querySelector(".chart__wrap");
            e.observe(a);
            var l = new i.a(function(e, t) {
                var a = !0,
                l = !1,
                i = void 0;
                try {
                    for (var m, v = e[Symbol.iterator](); ! (a = (m = v.next()).done); a = !0) {
                        var r = m.value,
                        o = r.contentRect;
                        o.left,
                        o.top,
                        o.width,
                        o.height,
                        u(T, r.contentRect.height, r.contentRect.width)
                    }
                } catch(e) {
                    l = !0,
                    i = e
                } finally {
                    try {
                        a || null == v.
                        return || v.
                        return ()
                    } finally {
                        if (l) throw i
                    }
                }
            }),
            m = document.querySelector(".chart__indicator__wrap");
            l.observe(m),
            t(".body").addClass("pace-loaded"),
            t(".pace__logo__top").addClass("animated fadeInDown"),
            t(".pace__logo__down").addClass("animated fadeInUp"),
            t(".pace-progress").addClass("animated delay-1s")
            //t(".pace-progress").addClass("animated lightSpeedIn delay-1s")
        });
        var m, v = ["1M", "5M", "15M", "30M", "1H", "1D"],
        r = [{
            time: "2018-10-19",
            value: 26.19
        },
        {
            time: "2018-10-22",
            value: 25.87
        },
        {
            time: "2018-10-23",
            value: 25.83
        },
        {
            time: "2018-10-24",
            value: 25.78
        },
        {
            time: "2018-10-25",
            value: 25.82
        },
        {
            time: "2018-10-26",
            value: 25.81
        },
        {
            time: "2018-10-29",
            value: 25.82
        },
        {
            time: "2018-10-30",
            value: 25.71
        },
        {
            time: "2018-10-31",
            value: 25.82
        },
        {
            time: "2018-11-01",
            value: 25.72
        },
        {
            time: "2018-11-02",
            value: 25.74
        },
        {
            time: "2018-11-05",
            value: 25.81
        },
        {
            time: "2018-11-06",
            value: 25.75
        },
        {
            time: "2018-11-07",
            value: 25.73
        },
        {
            time: "2018-11-08",
            value: 25.75
        },
        {
            time: "2018-11-09",
            value: 25.75
        },
        {
            time: "2018-11-12",
            value: 25.76
        },
        {
            time: "2018-11-13",
            value: 25.8
        },
        {
            time: "2018-11-14",
            value: 25.77
        },
        {
            time: "2018-11-15",
            value: 25.75
        },
        {
            time: "2018-11-16",
            value: 25.75
        },
        {
            time: "2018-11-19",
            value: 25.75
        },
        {
            time: "2018-11-20",
            value: 25.72
        },
        {
            time: "2018-11-21",
            value: 25.78
        },
        {
            time: "2018-11-23",
            value: 25.72
        },
        {
            time: "2018-11-26",
            value: 25.78
        },
        {
            time: "2018-11-27",
            value: 25.85
        },
        {
            time: "2018-11-28",
            value: 25.85
        },
        {
            time: "2018-11-29",
            value: 25.55
        },
        {
            time: "2018-11-30",
            value: 25.41
        },
        {
            time: "2018-12-03",
            value: 25.41
        },
        {
            time: "2018-12-04",
            value: 25.42
        },
        {
            time: "2018-12-06",
            value: 25.33
        },
        {
            time: "2018-12-07",
            value: 25.39
        },
        {
            time: "2018-12-10",
            value: 25.32
        },
        {
            time: "2018-12-11",
            value: 25.48
        },
        {
            time: "2018-12-12",
            value: 25.39
        },
        {
            time: "2018-12-13",
            value: 25.45
        },
        {
            time: "2018-12-14",
            value: 25.52
        },
        {
            time: "2018-12-17",
            value: 25.38
        },
        {
            time: "2018-12-18",
            value: 25.36
        },
        {
            time: "2018-12-19",
            value: 25.65
        },
        {
            time: "2018-12-20",
            value: 25.7
        },
        {
            time: "2018-12-21",
            value: 25.66
        },
        {
            time: "2018-12-24",
            value: 25.66
        },
        {
            time: "2018-12-26",
            value: 25.65
        },
        {
            time: "2018-12-27",
            value: 25.66
        },
        {
            time: "2018-12-28",
            value: 25.68
        },
        {
            time: "2018-12-31",
            value: 25.77
        },
        {
            time: "2019-01-02",
            value: 25.72
        },
        {
            time: "2019-01-03",
            value: 25.69
        },
        {
            time: "2019-01-04",
            value: 25.71
        },
        {
            time: "2019-01-07",
            value: 25.72
        },
        {
            time: "2019-01-08",
            value: 25.72
        },
        {
            time: "2019-01-09",
            value: 25.66
        },
        {
            time: "2019-01-10",
            value: 25.85
        },
        {
            time: "2019-01-11",
            value: 25.92
        },
        {
            time: "2019-01-14",
            value: 25.94
        },
        {
            time: "2019-01-15",
            value: 25.95
        },
        {
            time: "2019-01-16",
            value: 26
        },
        {
            time: "2019-01-17",
            value: 25.99
        },
        {
            time: "2019-01-18",
            value: 25.6
        },
        {
            time: "2019-01-22",
            value: 25.81
        },
        {
            time: "2019-01-23",
            value: 25.7
        },
        {
            time: "2019-01-24",
            value: 25.74
        },
        {
            time: "2019-01-25",
            value: 25.8
        },
        {
            time: "2019-01-28",
            value: 25.83
        },
        {
            time: "2019-01-29",
            value: 25.7
        },
        {
            time: "2019-01-30",
            value: 25.78
        },
        {
            time: "2019-01-31",
            value: 25.35
        },
        {
            time: "2019-02-01",
            value: 25.6
        },
        {
            time: "2019-02-04",
            value: 25.65
        },
        {
            time: "2019-02-05",
            value: 25.73
        },
        {
            time: "2019-02-06",
            value: 25.71
        },
        {
            time: "2019-02-07",
            value: 25.71
        },
        {
            time: "2019-02-08",
            value: 25.72
        },
        {
            time: "2019-02-11",
            value: 25.76
        },
        {
            time: "2019-02-12",
            value: 25.84
        },
        {
            time: "2019-02-13",
            value: 25.85
        },
        {
            time: "2019-02-14",
            value: 25.87
        },
        {
            time: "2019-02-15",
            value: 25.89
        },
        {
            time: "2019-02-19",
            value: 25.9
        },
        {
            time: "2019-02-20",
            value: 25.92
        },
        {
            time: "2019-02-21",
            value: 25.96
        },
        {
            time: "2019-02-22",
            value: 26
        },
        {
            time: "2019-02-25",
            value: 25.93
        },
        {
            time: "2019-02-26",
            value: 25.92
        },
        {
            time: "2019-02-27",
            value: 25.67
        },
        {
            time: "2019-02-28",
            value: 25.79
        },
        {
            time: "2019-03-01",
            value: 25.86
        },
        {
            time: "2019-03-04",
            value: 25.94
        },
        {
            time: "2019-03-05",
            value: 26.02
        },
        {
            time: "2019-03-06",
            value: 25.95
        },
        {
            time: "2019-03-07",
            value: 25.89
        },
        {
            time: "2019-03-08",
            value: 25.94
        },
        {
            time: "2019-03-11",
            value: 25.91
        },
        {
            time: "2019-03-12",
            value: 25.92
        },
        {
            time: "2019-03-13",
            value: 26
        },
        {
            time: "2019-03-14",
            value: 26.05
        },
        {
            time: "2019-03-15",
            value: 26.11
        },
        {
            time: "2019-03-18",
            value: 26.1
        },
        {
            time: "2019-03-19",
            value: 25.98
        },
        {
            time: "2019-03-20",
            value: 26.11
        },
        {
            time: "2019-03-21",
            value: 26.12
        },
        {
            time: "2019-03-22",
            value: 25.88
        },
        {
            time: "2019-03-25",
            value: 25.85
        },
        {
            time: "2019-03-26",
            value: 25.72
        },
        {
            time: "2019-03-27",
            value: 25.73
        },
        {
            time: "2019-03-28",
            value: 25.8
        },
        {
            time: "2019-03-29",
            value: 25.77
        },
        {
            time: "2019-04-01",
            value: 26.06
        },
        {
            time: "2019-04-02",
            value: 25.93
        },
        {
            time: "2019-04-03",
            value: 25.95
        },
        {
            time: "2019-04-04",
            value: 26.06
        },
        {
            time: "2019-04-05",
            value: 26.16
        },
        {
            time: "2019-04-08",
            value: 26.12
        },
        {
            time: "2019-04-09",
            value: 26.07
        },
        {
            time: "2019-04-10",
            value: 26.13
        },
        {
            time: "2019-04-11",
            value: 26.04
        },
        {
            time: "2019-04-12",
            value: 26.04
        },
        {
            time: "2019-04-15",
            value: 26.05
        },
        {
            time: "2019-04-16",
            value: 26.01
        },
        {
            time: "2019-04-17",
            value: 26.09
        },
        {
            time: "2019-04-18",
            value: 26
        },
        {
            time: "2019-04-22",
            value: 26
        },
        {
            time: "2019-04-23",
            value: 26.06
        },
        {
            time: "2019-04-24",
            value: 26
        },
        {
            time: "2019-04-25",
            value: 25.81
        },
        {
            time: "2019-04-26",
            value: 25.88
        },
        {
            time: "2019-04-29",
            value: 25.91
        },
        {
            time: "2019-04-30",
            value: 25.9
        },
        {
            time: "2019-05-01",
            value: 26.02
        },
        {
            time: "2019-05-02",
            value: 25.97
        },
        {
            time: "2019-05-03",
            value: 26.02
        },
        {
            time: "2019-05-06",
            value: 26.03
        },
        {
            time: "2019-05-07",
            value: 26.04
        },
        {
            time: "2019-05-08",
            value: 26.05
        },
        {
            time: "2019-05-09",
            value: 26.05
        },
        {
            time: "2019-05-10",
            value: 26.08
        },
        {
            time: "2019-05-13",
            value: 26.05
        },
        {
            time: "2019-05-14",
            value: 26.01
        },
        {
            time: "2019-05-15",
            value: 26.03
        },
        {
            time: "2019-05-16",
            value: 26.14
        },
        {
            time: "2019-05-17",
            value: 26.09
        },
        {
            time: "2019-05-20",
            value: 26.01
        },
        {
            time: "2019-05-21",
            value: 26.12
        },
        {
            time: "2019-05-22",
            value: 26.15
        },
        {
            time: "2019-05-23",
            value: 26.18
        },
        {
            time: "2019-05-24",
            value: 26.16
        },
        {
            time: "2019-05-28",
            value: 26.23
        }],
        o = new Map([["1M", r], ["5M", [{
            time: "2016-07-18",
            value: 26.1
        },
        {
            time: "2016-07-25",
            value: 26.19
        },
        {
            time: "2016-08-01",
            value: 26.24
        },
        {
            time: "2016-08-08",
            value: 26.22
        },
        {
            time: "2016-08-15",
            value: 25.98
        },
        {
            time: "2016-08-22",
            value: 25.85
        },
        {
            time: "2016-08-29",
            value: 25.98
        },
        {
            time: "2016-09-05",
            value: 25.71
        },
        {
            time: "2016-09-12",
            value: 25.84
        },
        {
            time: "2016-09-19",
            value: 25.89
        },
        {
            time: "2016-09-26",
            value: 25.65
        },
        {
            time: "2016-10-03",
            value: 25.69
        },
        {
            time: "2016-10-10",
            value: 25.67
        },
        {
            time: "2016-10-17",
            value: 26.11
        },
        {
            time: "2016-10-24",
            value: 25.8
        },
        {
            time: "2016-10-31",
            value: 25.7
        },
        {
            time: "2016-11-07",
            value: 25.4
        },
        {
            time: "2016-11-14",
            value: 25.32
        },
        {
            time: "2016-11-21",
            value: 25.48
        },
        {
            time: "2016-11-28",
            value: 25.08
        },
        {
            time: "2016-12-05",
            value: 25.06
        },
        {
            time: "2016-12-12",
            value: 25.11
        },
        {
            time: "2016-12-19",
            value: 25.34
        },
        {
            time: "2016-12-26",
            value: 25.2
        },
        {
            time: "2017-01-02",
            value: 25.33
        },
        {
            time: "2017-01-09",
            value: 25.56
        },
        {
            time: "2017-01-16",
            value: 25.32
        },
        {
            time: "2017-01-23",
            value: 25.71
        },
        {
            time: "2017-01-30",
            value: 25.85
        },
        {
            time: "2017-02-06",
            value: 25.77
        },
        {
            time: "2017-02-13",
            value: 25.94
        },
        {
            time: "2017-02-20",
            value: 25.67
        },
        {
            time: "2017-02-27",
            value: 25.6
        },
        {
            time: "2017-03-06",
            value: 25.54
        },
        {
            time: "2017-03-13",
            value: 25.84
        },
        {
            time: "2017-03-20",
            value: 25.96
        },
        {
            time: "2017-03-27",
            value: 25.9
        },
        {
            time: "2017-04-03",
            value: 25.97
        },
        {
            time: "2017-04-10",
            value: 26
        },
        {
            time: "2017-04-17",
            value: 26.13
        },
        {
            time: "2017-04-24",
            value: 26.02
        },
        {
            time: "2017-05-01",
            value: 26.3
        },
        {
            time: "2017-05-08",
            value: 26.27
        },
        {
            time: "2017-05-15",
            value: 26.24
        },
        {
            time: "2017-05-22",
            value: 26.02
        },
        {
            time: "2017-05-29",
            value: 26.2
        },
        {
            time: "2017-06-05",
            value: 26.12
        },
        {
            time: "2017-06-12",
            value: 26.2
        },
        {
            time: "2017-06-19",
            value: 26.46
        },
        {
            time: "2017-06-26",
            value: 26.39
        },
        {
            time: "2017-07-03",
            value: 26.52
        },
        {
            time: "2017-07-10",
            value: 26.57
        },
        {
            time: "2017-07-17",
            value: 26.65
        },
        {
            time: "2017-07-24",
            value: 26.45
        },
        {
            time: "2017-07-31",
            value: 26.37
        },
        {
            time: "2017-08-07",
            value: 26.13
        },
        {
            time: "2017-08-14",
            value: 26.21
        },
        {
            time: "2017-08-21",
            value: 26.31
        },
        {
            time: "2017-08-28",
            value: 26.33
        },
        {
            time: "2017-09-04",
            value: 26.38
        },
        {
            time: "2017-09-11",
            value: 26.38
        },
        {
            time: "2017-09-18",
            value: 26.5
        },
        {
            time: "2017-09-25",
            value: 26.39
        },
        {
            time: "2017-10-02",
            value: 25.95
        },
        {
            time: "2017-10-09",
            value: 26.15
        },
        {
            time: "2017-10-16",
            value: 26.43
        },
        {
            time: "2017-10-23",
            value: 26.22
        },
        {
            time: "2017-10-30",
            value: 26.14
        },
        {
            time: "2017-11-06",
            value: 26.08
        },
        {
            time: "2017-11-13",
            value: 26.27
        },
        {
            time: "2017-11-20",
            value: 26.3
        },
        {
            time: "2017-11-27",
            value: 25.92
        },
        {
            time: "2017-12-04",
            value: 26.1
        },
        {
            time: "2017-12-11",
            value: 25.88
        },
        {
            time: "2017-12-18",
            value: 25.82
        },
        {
            time: "2017-12-25",
            value: 25.82
        },
        {
            time: "2018-01-01",
            value: 25.81
        },
        {
            time: "2018-01-08",
            value: 25.95
        },
        {
            time: "2018-01-15",
            value: 26.03
        },
        {
            time: "2018-01-22",
            value: 26.04
        },
        {
            time: "2018-01-29",
            value: 25.96
        },
        {
            time: "2018-02-05",
            value: 25.99
        },
        {
            time: "2018-02-12",
            value: 26
        },
        {
            time: "2018-02-19",
            value: 26.06
        },
        {
            time: "2018-02-26",
            value: 25.77
        },
        {
            time: "2018-03-05",
            value: 25.81
        },
        {
            time: "2018-03-12",
            value: 25.88
        },
        {
            time: "2018-03-19",
            value: 25.72
        },
        {
            time: "2018-03-26",
            value: 25.75
        },
        {
            time: "2018-04-02",
            value: 25.7
        },
        {
            time: "2018-04-09",
            value: 25.73
        },
        {
            time: "2018-04-16",
            value: 25.74
        },
        {
            time: "2018-04-23",
            value: 25.69
        },
        {
            time: "2018-04-30",
            value: 25.76
        },
        {
            time: "2018-05-07",
            value: 25.89
        },
        {
            time: "2018-05-14",
            value: 25.89
        },
        {
            time: "2018-05-21",
            value: 26
        },
        {
            time: "2018-05-28",
            value: 25.79
        },
        {
            time: "2018-06-04",
            value: 26.11
        },
        {
            time: "2018-06-11",
            value: 26.43
        },
        {
            time: "2018-06-18",
            value: 26.3
        },
        {
            time: "2018-06-25",
            value: 26.58
        },
        {
            time: "2018-07-02",
            value: 26.33
        },
        {
            time: "2018-07-09",
            value: 26.33
        },
        {
            time: "2018-07-16",
            value: 26.32
        },
        {
            time: "2018-07-23",
            value: 26.2
        },
        {
            time: "2018-07-30",
            value: 26.03
        },
        {
            time: "2018-08-06",
            value: 26.15
        },
        {
            time: "2018-08-13",
            value: 26.17
        },
        {
            time: "2018-08-20",
            value: 26.28
        },
        {
            time: "2018-08-27",
            value: 25.86
        },
        {
            time: "2018-09-03",
            value: 25.69
        },
        {
            time: "2018-09-10",
            value: 25.69
        },
        {
            time: "2018-09-17",
            value: 25.64
        },
        {
            time: "2018-09-24",
            value: 25.67
        },
        {
            time: "2018-10-01",
            value: 25.55
        },
        {
            time: "2018-10-08",
            value: 25.59
        },
        {
            time: "2018-10-15",
            value: 26.19
        },
        {
            time: "2018-10-22",
            value: 25.81
        },
        {
            time: "2018-10-29",
            value: 25.74
        },
        {
            time: "2018-11-05",
            value: 25.75
        },
        {
            time: "2018-11-12",
            value: 25.75
        },
        {
            time: "2018-11-19",
            value: 25.72
        },
        {
            time: "2018-11-26",
            value: 25.41
        },
        {
            time: "2018-12-03",
            value: 25.39
        },
        {
            time: "2018-12-10",
            value: 25.52
        },
        {
            time: "2018-12-17",
            value: 25.66
        },
        {
            time: "2018-12-24",
            value: 25.68
        },
        {
            time: "2018-12-31",
            value: 25.71
        },
        {
            time: "2019-01-07",
            value: 25.92
        },
        {
            time: "2019-01-14",
            value: 25.6
        },
        {
            time: "2019-01-21",
            value: 25.8
        },
        {
            time: "2019-01-28",
            value: 25.6
        },
        {
            time: "2019-02-04",
            value: 25.72
        },
        {
            time: "2019-02-11",
            value: 25.89
        },
        {
            time: "2019-02-18",
            value: 26
        },
        {
            time: "2019-02-25",
            value: 25.86
        },
        {
            time: "2019-03-04",
            value: 25.94
        },
        {
            time: "2019-03-11",
            value: 26.11
        },
        {
            time: "2019-03-18",
            value: 25.88
        },
        {
            time: "2019-03-25",
            value: 25.77
        },
        {
            time: "2019-04-01",
            value: 26.16
        },
        {
            time: "2019-04-08",
            value: 26.04
        },
        {
            time: "2019-04-15",
            value: 26
        },
        {
            time: "2019-04-22",
            value: 25.88
        },
        {
            time: "2019-04-29",
            value: 26.02
        },
        {
            time: "2019-05-06",
            value: 26.08
        },
        {
            time: "2019-05-13",
            value: 26.09
        },
        {
            time: "2019-05-20",
            value: 26.16
        },
        {
            time: "2019-05-27",
            value: 26.23
        }]], ["15M", [{
            time: "2006-12-01",
            value: 25.4
        },
        {
            time: "2007-01-01",
            value: 25.5
        },
        {
            time: "2007-02-01",
            value: 25.11
        },
        {
            time: "2007-03-01",
            value: 25.24
        },
        {
            time: "2007-04-02",
            value: 25.34
        },
        {
            time: "2007-05-01",
            value: 24.82
        },
        {
            time: "2007-06-01",
            value: 23.85
        },
        {
            time: "2007-07-02",
            value: 23.24
        },
        {
            time: "2007-08-01",
            value: 23.05
        },
        {
            time: "2007-09-03",
            value: 22.26
        },
        {
            time: "2007-10-01",
            value: 22.52
        },
        {
            time: "2007-11-01",
            value: 20.84
        },
        {
            time: "2007-12-03",
            value: 20.37
        },
        {
            time: "2008-01-01",
            value: 23.9
        },
        {
            time: "2008-02-01",
            value: 22.58
        },
        {
            time: "2008-03-03",
            value: 21.74
        },
        {
            time: "2008-04-01",
            value: 22.5
        },
        {
            time: "2008-05-01",
            value: 22.38
        },
        {
            time: "2008-06-02",
            value: 20.58
        },
        {
            time: "2008-07-01",
            value: 20.6
        },
        {
            time: "2008-08-01",
            value: 20.82
        },
        {
            time: "2008-09-01",
            value: 17.5
        },
        {
            time: "2008-10-01",
            value: 17.7
        },
        {
            time: "2008-11-03",
            value: 15.52
        },
        {
            time: "2008-12-01",
            value: 18.58
        },
        {
            time: "2009-01-01",
            value: 15.4
        },
        {
            time: "2009-02-02",
            value: 11.68
        },
        {
            time: "2009-03-02",
            value: 14.89
        },
        {
            time: "2009-04-01",
            value: 16.24
        },
        {
            time: "2009-05-01",
            value: 18.33
        },
        {
            time: "2009-06-01",
            value: 18.08
        },
        {
            time: "2009-07-01",
            value: 20.07
        },
        {
            time: "2009-08-03",
            value: 20.35
        },
        {
            time: "2009-09-01",
            value: 21.53
        },
        {
            time: "2009-10-01",
            value: 21.48
        },
        {
            time: "2009-11-02",
            value: 20.28
        },
        {
            time: "2009-12-01",
            value: 21.39
        },
        {
            time: "2010-01-01",
            value: 22
        },
        {
            time: "2010-02-01",
            value: 22.31
        },
        {
            time: "2010-03-01",
            value: 22.82
        },
        {
            time: "2010-04-01",
            value: 22.58
        },
        {
            time: "2010-05-03",
            value: 21.02
        },
        {
            time: "2010-06-01",
            value: 21.45
        },
        {
            time: "2010-07-01",
            value: 22.42
        },
        {
            time: "2010-08-02",
            value: 23.61
        },
        {
            time: "2010-09-01",
            value: 24.4
        },
        {
            time: "2010-10-01",
            value: 24.46
        },
        {
            time: "2010-11-01",
            value: 23.64
        },
        {
            time: "2010-12-01",
            value: 22.9
        },
        {
            time: "2011-01-03",
            value: 23.73
        },
        {
            time: "2011-02-01",
            value: 23.52
        },
        {
            time: "2011-03-01",
            value: 24.15
        },
        {
            time: "2011-04-01",
            value: 24.37
        },
        {
            time: "2011-05-02",
            value: 24.4
        },
        {
            time: "2011-06-01",
            value: 24.45
        },
        {
            time: "2011-07-01",
            value: 24.24
        },
        {
            time: "2011-08-01",
            value: 24
        },
        {
            time: "2011-09-01",
            value: 22.77
        },
        {
            time: "2011-10-03",
            value: 24.21
        },
        {
            time: "2011-11-01",
            value: 23.4
        },
        {
            time: "2011-12-01",
            value: 23.9
        },
        {
            time: "2012-01-02",
            value: 24.84
        },
        {
            time: "2012-02-01",
            value: 25.04
        },
        {
            time: "2012-03-01",
            value: 24.9
        },
        {
            time: "2012-04-02",
            value: 25.06
        },
        {
            time: "2012-05-01",
            value: 24.63
        },
        {
            time: "2012-06-01",
            value: 25.07
        },
        {
            time: "2012-07-02",
            value: 25.3
        },
        {
            time: "2012-08-01",
            value: 25.08
        },
        {
            time: "2012-09-03",
            value: 25.27
        },
        {
            time: "2012-10-01",
            value: 25.39
        },
        {
            time: "2012-11-01",
            value: 25.06
        },
        {
            time: "2012-12-03",
            value: 25.03
        },
        {
            time: "2013-01-01",
            value: 25.26
        },
        {
            time: "2013-02-01",
            value: 25.2
        },
        {
            time: "2013-03-01",
            value: 25.3
        },
        {
            time: "2013-04-01",
            value: 25.38
        },
        {
            time: "2013-05-01",
            value: 25.22
        },
        {
            time: "2013-06-03",
            value: 24.88
        },
        {
            time: "2013-07-01",
            value: 24.98
        },
        {
            time: "2013-08-01",
            value: 24.6
        },
        {
            time: "2013-09-02",
            value: 24.65
        },
        {
            time: "2013-10-01",
            value: 24.62
        },
        {
            time: "2013-11-01",
            value: 24.65
        },
        {
            time: "2013-12-02",
            value: 24.7
        },
        {
            time: "2014-01-01",
            value: 24.98
        },
        {
            time: "2014-02-03",
            value: 24.95
        },
        {
            time: "2014-03-03",
            value: 25.45
        },
        {
            time: "2014-04-01",
            value: 25.4
        },
        {
            time: "2014-05-01",
            value: 25.51
        },
        {
            time: "2014-06-02",
            value: 25.34
        },
        {
            time: "2014-07-01",
            value: 25.3
        },
        {
            time: "2014-08-01",
            value: 25.36
        },
        {
            time: "2014-09-01",
            value: 25.16
        },
        {
            time: "2014-10-01",
            value: 25.53
        },
        {
            time: "2014-11-03",
            value: 25.4
        },
        {
            time: "2014-12-01",
            value: 25.7
        },
        {
            time: "2015-01-01",
            value: 25.95
        },
        {
            time: "2015-02-02",
            value: 25.81
        },
        {
            time: "2015-03-02",
            value: 25.63
        },
        {
            time: "2015-04-01",
            value: 25.39
        },
        {
            time: "2015-05-01",
            value: 25.62
        },
        {
            time: "2015-06-01",
            value: 25.23
        },
        {
            time: "2015-07-01",
            value: 25.47
        },
        {
            time: "2015-08-03",
            value: 25.18
        },
        {
            time: "2015-09-01",
            value: 25.3
        },
        {
            time: "2015-10-01",
            value: 25.68
        },
        {
            time: "2015-11-02",
            value: 25.63
        },
        {
            time: "2015-12-01",
            value: 25.57
        },
        {
            time: "2016-01-01",
            value: 25.55
        },
        {
            time: "2016-02-01",
            value: 25.05
        },
        {
            time: "2016-03-01",
            value: 25.61
        },
        {
            time: "2016-04-01",
            value: 25.91
        },
        {
            time: "2016-05-02",
            value: 25.84
        },
        {
            time: "2016-06-01",
            value: 25.94
        },
        {
            time: "2016-07-01",
            value: 26.19
        },
        {
            time: "2016-08-01",
            value: 26.06
        },
        {
            time: "2016-09-01",
            value: 25.65
        },
        {
            time: "2016-10-03",
            value: 25.8
        },
        {
            time: "2016-11-01",
            value: 25.06
        },
        {
            time: "2016-12-01",
            value: 25.2
        },
        {
            time: "2017-01-02",
            value: 25.7
        },
        {
            time: "2017-02-01",
            value: 25.78
        },
        {
            time: "2017-03-01",
            value: 25.9
        },
        {
            time: "2017-04-03",
            value: 26.02
        },
        {
            time: "2017-05-01",
            value: 26.02
        },
        {
            time: "2017-06-01",
            value: 26.39
        },
        {
            time: "2017-07-03",
            value: 26.3
        },
        {
            time: "2017-08-01",
            value: 26.14
        },
        {
            time: "2017-09-01",
            value: 26.39
        },
        {
            time: "2017-10-02",
            value: 26.12
        },
        {
            time: "2017-11-01",
            value: 25.81
        },
        {
            time: "2017-12-01",
            value: 25.82
        },
        {
            time: "2018-01-01",
            value: 26.06
        },
        {
            time: "2018-02-01",
            value: 25.78
        },
        {
            time: "2018-03-01",
            value: 25.75
        },
        {
            time: "2018-04-02",
            value: 25.72
        },
        {
            time: "2018-05-01",
            value: 25.75
        },
        {
            time: "2018-06-01",
            value: 26.58
        },
        {
            time: "2018-07-02",
            value: 26.14
        },
        {
            time: "2018-08-01",
            value: 25.86
        },
        {
            time: "2018-09-03",
            value: 25.67
        },
        {
            time: "2018-10-01",
            value: 25.82
        },
        {
            time: "2018-11-01",
            value: 25.41
        },
        {
            time: "2018-12-03",
            value: 25.77
        },
        {
            time: "2019-01-01",
            value: 25.35
        },
        {
            time: "2019-02-01",
            value: 25.79
        },
        {
            time: "2019-03-01",
            value: 25.77
        },
        {
            time: "2019-04-01",
            value: 25.9
        },
        {
            time: "2019-05-01",
            value: 26.23
        }]], ["30M", [{
            time: "2006-01-02",
            value: 24.89
        },
        {
            time: "2007-01-01",
            value: 25.5
        },
        {
            time: "2008-01-01",
            value: 23.9
        },
        {
            time: "2009-01-01",
            value: 15.4
        },
        {
            time: "2010-01-01",
            value: 22
        },
        {
            time: "2011-01-03",
            value: 23.73
        },
        {
            time: "2012-01-02",
            value: 24.84
        },
        {
            time: "2013-01-01",
            value: 25.26
        },
        {
            time: "2014-01-01",
            value: 24.98
        },
        {
            time: "2015-01-01",
            value: 25.95
        },
        {
            time: "2016-01-01",
            value: 25.55
        },
        {
            time: "2017-01-02",
            value: 25.7
        },
        {
            time: "2018-01-01",
            value: 26.06
        },
        {
            time: "2019-01-01",
            value: 26.23
        }]], ["1H", [{
            time: "2015-10-01",
            value: 25.68
        },
        {
            time: "2015-11-02",
            value: 25.63
        },
        {
            time: "2015-12-01",
            value: 25.57
        },
        {
            time: "2016-01-01",
            value: 25.55
        },
        {
            time: "2016-02-01",
            value: 25.05
        },
        {
            time: "2016-03-01",
            value: 25.61
        },
        {
            time: "2016-04-01",
            value: 25.91
        },
        {
            time: "2016-05-02",
            value: 25.84
        },
        {
            time: "2016-06-01",
            value: 25.94
        },
        {
            time: "2016-07-01",
            value: 26.19
        },
        {
            time: "2016-08-01",
            value: 26.06
        },
        {
            time: "2016-09-01",
            value: 25.65
        },
        {
            time: "2016-10-03",
            value: 25.8
        },
        {
            time: "2016-11-01",
            value: 25.06
        },
        {
            time: "2016-12-01",
            value: 25.2
        },
        {
            time: "2017-01-02",
            value: 25.7
        }]], ["1D", [{
            time: "2006-01-02",
            value: 24.89
        },
        {
            time: "2007-01-01",
            value: 25.5
        },
        {
            time: "2008-01-01",
            value: 23.9
        },
        {
            time: "2009-01-01",
            value: 15.4
        },
        {
            time: "2010-01-01",
            value: 22
        },
        {
            time: "2011-01-03",
            value: 23.73
        },
        {
            time: "2012-01-02",
            value: 24.84
        },
        {
            time: "2013-01-01",
            value: 25.26
        },
        {
            time: "2014-01-01",
            value: 24.98
        },
        {
            time: "2015-01-01",
            value: 25.95
        },
        {
            time: "2016-01-01",
            value: 25.55
        },
        {
            time: "2017-01-02",
            value: 25.7
        },
        {
            time: "2018-01-01",
            value: 26.06
        },
        {
            time: "2019-01-01",
            value: 26.23
        }]]]),
        c = new Map([["1M", 1e3], ["5M", 1e3], ["15M", 1e3], ["30M", 1e3], ["1H", 1e3], ["1D", 1e3]]),
        b = "1M",
        g = r,
        n = "2018-10-19",
        s = 26.19,
        d = Object(l.a)(document.getElementById("chartDiv"), {
            layout: {
                backgroundColor: "#121212", //曲線圖背景顏色
                textColor: "#F3BA2F" //數字標籤
            },
            priceScale: {},
            grid: {
                horzLines: {
                    color: "#F3BA2F" //背景橫線條
                },
                vertLines: {
                    color: "#F3BA2F" //背景直線條
                }
            }
        }),
        h = function(e, t, a) {
            var l = document.getElementById("js-btn-chart-range-wrap");
            l.classList.add("range-switcher");
            var i = e.map(function(u) {
                var m = document.createElement("button");
                return m.innerText = u,
                m.classList.add("range-switcher__item"),
                m.classList.toggle("range-switcher__item--active", u === t),
                m.addEventListener("click",
                function() { !
                    function(l) {
                        if (l === t) return;
                        console.log("stop TimerNo: ", _),
                        clearTimeout(_),
                        i.forEach(function(t, a) {
                            t.classList.toggle("range-switcher__item--active", e[a] === l)
                        }),
                        b = t = l,
                        g = o.get(b),
                        y(w),
                        a(l, !1)
                    } (u)
                }),
                l.appendChild(m),
                m
            });
            return l
        } (v, v[0], S);
        document.getElementById("js-chart-control-wrap").appendChild(h);
        var p = null,
        f = [{
            date: {
                year: 2019,
                month: 8,
                day: 28
            },
            time: {
                hour: 8,
                minute: 1,
                second: 0
            },
            value: 26.2
        },
        {
            date: {
                year: 2019,
                month: 8,
                day: 29
            },
            time: {
                hour: 8,
                minute: 2,
                second: 0
            },
            value: 21.2
        },
        {
            date: {
                year: 2019,
                month: 8,
                day: 30
            },
            time: {
                hour: 8,
                minute: 3,
                second: 0
            },
            value: 23.2
        }],
        _ = 0,
        y = function(e) {
            _ = setTimeout(function() {
                n = g[g.length - 1].time,
                m = f[f.length - 1].date,
                n = f[f.length - 1].time,
                s = f[f.length - 1].value;
                var t = Math.random() < .5 ? -1 : 1,
                a = s + t * Math.random(),
                l = new Date;
                l.setYear(m.year),
                l.setMonth(m.month),
                l.setDate(m.day),
                l.setHours(n.hour),
                l.setMinutes(n.minute),
                l.setSeconds(0);
                var i, u = l.getTime() + 216e5;
                l.setTime(u),
                i = {
                    time: l.toISOString().slice(0, 10),
                    value: a
                },
                f.push({
                    date: {
                        year: l.getFullYear(),
                        month: l.getMonth(),
                        day: l.getDate()
                    },
                    time: {
                        hour: l.getHours(),
                        minute: l.getMinutes(),
                        second: l.getSeconds()
                    },
                    value: i.value
                }),
                p.update(i),
                e(e)
            },
            c.get(b))
        };
        function w(e) {
            y(w)
        }
        function S(e) {
            var t = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
            console.log("syncToInterval"),
            p && (d.removeSeries(p), p = null),
            (p = d.addAreaSeries({
                topColor: "rgba(243, 186, 47, 0.88)",
                bottomColor: "rgba(243, 186, 47, 0.1)",
                lineColor: "#F3BA2F",//曲線圖 上方實體粗線
                lineWidth: 2
            })).setData(o.get(e)),
            t && w()
        }
        var T = Object(l.a)(document.getElementById("chart__indicator"), {
            width: 600,
            height: 100,
            priceScale: {
                scaleMargins: {
                    top: 0,
                    bottom: 0
                },
                borderVisible: !1
            },
            layout: {
                backgroundColor: "#18233e",
                textColor: "#0d47a1"
            },
            grid: {
                vertLines: {
                    color: "rgba(42, 46, 57, 0)"
                },
                horzLines: {
                    color: "rgba(42, 46, 57, 0.6)"
                }
            },
            timeScale: {
                visible: !1
            },
            crosshair: {
                vertLine: {
                    visible: !1,
                    labelVisible: !1
                },
                horzLine: {
                    visible: !1,
                    labelVisible: !1
                }
            }
        }),
        L = T.addLineSeries({
            color: "#0EE9EC",
            lineWidth: 2,
            lastValueVisible: !1
        }),
        E = T.addLineSeries({
            color: "#FA2E42",
            lineWidth: 2,
            lastValueVisible: !1
        }),
        M = T.addHistogramSeries({
            color: "#26a69a",
            lineWidth: 2,
            priceFormat: {
                type: "volume"
            },
            base: 0,
            overlay: !0,
            scaleMargins: {
                top: 0,
                bottom: 0
            },
            timeScale: {
                visible: !1
            },
            crosshair: {
                horzLine: {
                    visible: !1
                },
                vertLine: {
                    visible: !1
                }
            },
            lastValueVisible: !1
        });
        L.setData([{
            time: "\t2019-05-24",
            value: 4.21931
        },
        {
            time: "\t2019-05-25",
            value: 4.22065
        },
        {
            time: "\t2019-05-26",
            value: 4.22273
        },
        {
            time: "\t2019-05-27",
            value: 4.21509
        },
        {
            time: "\t2019-05-28",
            value: 4.2198
        },
        {
            time: "\t2019-05-29",
            value: 4.2163
        },
        {
            time: "\t2019-05-30",
            value: 4.21224
        },
        {
            time: "\t2019-05-31",
            value: 4.2133
        },
        {
            time: "\t2019-06-01",
            value: 4.21886
        },
        {
            time: "\t2019-06-02",
            value: 4.22222
        },
        {
            time: "\t2019-06-03",
            value: 4.20748
        },
        {
            time: "\t2019-06-04",
            value: 4.20159
        },
        {
            time: "\t2019-06-05",
            value: 4.20377
        },
        {
            time: "\t2019-06-06",
            value: 4.20995
        },
        {
            time: "\t2019-06-07",
            value: 4.20849
        },
        {
            time: "\t2019-06-08",
            value: 4.20447
        },
        {
            time: "\t2019-06-09",
            value: 4.19417
        },
        {
            time: "\t2019-06-10",
            value: 4.19223
        },
        {
            time: "\t2019-06-11",
            value: 4.1868
        },
        {
            time: "\t2019-06-12",
            value: 4.19141
        },
        {
            time: "\t2019-06-13",
            value: 4.19353
        },
        {
            time: "\t2019-06-14",
            value: 4.18586
        },
        {
            time: "\t2019-06-15",
            value: 4.17698
        },
        {
            time: "\t2019-06-16",
            value: 4.17678
        },
        {
            time: "\t2019-06-17",
            value: 4.17229
        },
        {
            time: "\t2019-06-18",
            value: 4.17462
        },
        {
            time: "\t2019-06-19",
            value: 4.17424
        },
        {
            time: "\t2019-06-20",
            value: 4.18094
        },
        {
            time: "\t2019-06-21",
            value: 4.17955
        },
        {
            time: "\t2019-06-22",
            value: 4.17858
        },
        {
            time: "\t2019-06-23",
            value: 4.18482
        },
        {
            time: "\t2019-06-24",
            value: 4.17669
        },
        {
            time: "\t2019-06-25",
            value: 4.17472
        },
        {
            time: "\t2019-06-26",
            value: 4.16849
        },
        {
            time: "\t2019-06-27",
            value: 4.1696
        },
        {
            time: "\t2019-06-28",
            value: 4.16863
        },
        {
            time: "\t2019-06-29",
            value: 4.1691
        },
        {
            time: "\t2019-06-30",
            value: 4.17095
        },
        {
            time: "\t2019-07-01",
            value: 4.16548
        },
        {
            time: "\t2019-07-02",
            value: 4.15548
        },
        {
            time: "\t2019-07-03",
            value: 4.13548
        },
        {
            time: "\t2019-07-04",
            value: 4.10548
        },
        {
            time: "\t2019-07-05",
            value: 4.06548
        },
        {
            time: "\t2019-07-06",
            value: 4.05548
        },
        {
            time: "\t2019-07-07",
            value: 4.03548
        },
        {
            time: "\t2019-07-08",
            value: 4.00548
        },
        {
            time: "\t2019-07-09",
            value: 3.96548
        },
        {
            time: "\t2019-07-10",
            value: 3.91548
        },
        {
            time: "\t2019-07-11",
            value: 3.85548
        },
        {
            time: "\t2019-07-12",
            value: 3.78548
        },
        {
            time: "\t2019-07-13",
            value: 3.70548
        },
        {
            time: "\t2019-07-14",
            value: 3.61548
        },
        {
            time: "\t2019-07-15",
            value: 3.51548
        },
        {
            time: "\t2019-07-16",
            value: 3.40548
        },
        {
            time: "\t2019-07-17",
            value: 3.28548
        },
        {
            time: "\t2019-07-18",
            value: 3.15548
        },
        {
            time: "\t2019-07-19",
            value: 3.01548
        },
        {
            time: "\t2019-07-20",
            value: 2.86548
        },
        {
            time: "\t2019-07-21",
            value: 2.70548
        },
        {
            time: "\t2019-07-22",
            value: 2.53548
        },
        {
            time: "\t2019-07-23",
            value: 2.35548
        },
        {
            time: "\t2019-07-24",
            value: 2.16548
        },
        {
            time: "\t2019-07-25",
            value: 1.96548
        },
        {
            time: "\t2019-07-26",
            value: 1.95548
        },
        {
            time: "\t2019-07-27",
            value: 1.93548
        },
        {
            time: "\t2019-07-28",
            value: 1.90548
        },
        {
            time: "\t2019-07-29",
            value: 1.86548
        },
        {
            time: "\t2019-07-30",
            value: 1.85548
        },
        {
            time: "\t2019-07-31",
            value: 1.83548
        },
        {
            time: "\t2019-08-01",
            value: 1.80548
        },
        {
            time: "\t2019-08-02",
            value: 1.76548
        },
        {
            time: "\t2019-08-03",
            value: 1.71548
        },
        {
            time: "\t2019-08-04",
            value: 1.65548
        },
        {
            time: "\t2019-08-05",
            value: 1.58548
        },
        {
            time: "\t2019-08-06",
            value: 1.50548
        },
        {
            time: "\t2019-08-07",
            value: 1.41548
        },
        {
            time: "\t2019-08-08",
            value: 1.31548
        },
        {
            time: "\t2019-08-09",
            value: 1.20548
        },
        {
            time: "\t2019-08-10",
            value: 1.08548
        },
        {
            time: "\t2019-08-11",
            value: .95548
        },
        {
            time: "\t2019-08-12",
            value: .81548
        },
        {
            time: "\t2019-08-13",
            value: .66548
        },
        {
            time: "\t2019-08-14",
            value: .50548
        },
        {
            time: "\t2019-08-15",
            value: .33548
        },
        {
            time: "\t2019-08-16",
            value: .15548
        },
        {
            time: "\t2019-08-17",
            value: -.03452
        },
        {
            time: "\t2019-08-18",
            value: -.23452
        },
        {
            time: "\t2019-08-19",
            value: -.41452
        },
        {
            time: "\t2019-08-20",
            value: -.60452
        },
        {
            time: "\t2019-08-21",
            value: -.80452
        },
        {
            time: "\t2019-08-22",
            value: -.81452
        },
        {
            time: "\t2019-08-23",
            value: -.83452
        },
        {
            time: "\t2019-08-24",
            value: -.86452
        },
        {
            time: "\t2019-08-25",
            value: -.90452
        },
        {
            time: "\t2019-08-26",
            value: -.91452
        },
        {
            time: "\t2019-08-27",
            value: -.93452
        },
        {
            time: "\t2019-08-28",
            value: -.96452
        },
        {
            time: "\t2019-08-29",
            value: -1.00452
        },
        {
            time: "\t2019-08-30",
            value: -1.05452
        },
        {
            time: "\t2019-08-31",
            value: -1.11452
        },
        {
            time: "\t2019-09-01",
            value: -1.12452
        },
        {
            time: "\t2019-09-02",
            value: -1.14452
        },
        {
            time: "\t2019-09-03",
            value: -1.17452
        },
        {
            time: "\t2019-09-04",
            value: -1.21452
        },
        {
            time: "\t2019-09-05",
            value: -1.22452
        },
        {
            time: "\t2019-09-06",
            value: -1.24452
        },
        {
            time: "\t2019-09-07",
            value: -1.25452
        },
        {
            time: "\t2019-09-08",
            value: -1.27452
        },
        {
            time: "\t2019-09-09",
            value: -1.30452
        },
        {
            time: "\t2019-09-10",
            value: -1.34452
        },
        {
            time: "\t2019-09-11",
            value: -1.35452
        },
        {
            time: "\t2019-09-12",
            value: -1.37452
        },
        {
            time: "\t2019-09-13",
            value: -1.40452
        },
        {
            time: "\t2019-09-14",
            value: -1.41452
        },
        {
            time: "\t2019-09-15",
            value: -1.42452
        },
        {
            time: "\t2019-09-16",
            value: -1.43452
        },
        {
            time: "\t2019-09-17",
            value: -1.44452
        },
        {
            time: "\t2019-09-18",
            value: -1.45452
        },
        {
            time: "\t2019-09-19",
            value: -1.46452
        },
        {
            time: "\t2019-09-20",
            value: -1.47452
        },
        {
            time: "\t2019-09-21",
            value: -1.48452
        },
        {
            time: "\t2019-09-22",
            value: -1.50452
        },
        {
            time: "\t2019-09-23",
            value: -1.53452
        },
        {
            time: "\t2019-09-24",
            value: -1.54452
        },
        {
            time: "\t2019-09-25",
            value: -1.56452
        },
        {
            time: "\t2019-09-26",
            value: -1.59452
        },
        {
            time: "\t2019-09-27",
            value: -1.60452
        },
        {
            time: "\t2019-09-28",
            value: -1.61452
        },
        {
            time: "\t2019-09-29",
            value: -1.62452
        },
        {
            time: "\t2019-09-30",
            value: -1.63452
        },
        {
            time: "\t2019-10-01",
            value: -1.64452
        },
        {
            time: "\t2019-10-02",
            value: -1.65452
        },
        {
            time: "\t2019-10-03",
            value: -1.66452
        },
        {
            time: "\t2019-10-04",
            value: -1.67452
        },
        {
            time: "\t2019-10-05",
            value: -1.70452
        },
        {
            time: "\t2019-10-06",
            value: -1.71452
        },
        {
            time: "\t2019-10-07",
            value: -1.73452
        },
        {
            time: "\t2019-10-08",
            value: -1.76452
        },
        {
            time: "\t2019-10-09",
            value: -1.77452
        },
        {
            time: "\t2019-10-10",
            value: -1.78452
        },
        {
            time: "\t2019-10-11",
            value: -1.79452
        },
        {
            time: "\t2019-10-12",
            value: -1.85452
        },
        {
            time: "\t2019-10-13",
            value: -1.92452
        },
        {
            time: "\t2019-10-14",
            value: -2.00452
        },
        {
            time: "\t2019-10-15",
            value: -2.09452
        },
        {
            time: "\t2019-10-16",
            value: -2.19452
        },
        {
            time: "\t2019-10-17",
            value: -2.30452
        },
        {
            time: "\t2019-10-18",
            value: -2.42452
        },
        {
            time: "\t2019-10-19",
            value: -2.55452
        },
        {
            time: "\t2019-10-20",
            value: -2.69452
        },
        {
            time: "\t2019-10-21",
            value: -2.84452
        },
        {
            time: "\t2019-10-22",
            value: -3.00452
        },
        {
            time: "\t2019-10-23",
            value: -3.17452
        },
        {
            time: "\t2019-10-24",
            value: -3.35452
        },
        {
            time: "\t2019-10-25",
            value: -3.54452
        },
        {
            time: "\t2019-10-26",
            value: -3.74452
        },
        {
            time: "\t2019-10-27",
            value: -3.92452
        },
        {
            time: "\t2019-10-28",
            value: -4.11452
        },
        {
            time: "\t2019-10-29",
            value: -4.31452
        },
        {
            time: "\t2019-10-30",
            value: -4.32452
        },
        {
            time: "\t2019-10-31",
            value: -4.34452
        },
        {
            time: "\t2019-11-01",
            value: -4.37452
        },
        {
            time: "\t2019-11-02",
            value: -4.41452
        },
        {
            time: "\t2019-11-03",
            value: -4.42452
        },
        {
            time: "\t2019-11-04",
            value: -4.44452
        },
        {
            time: "\t2019-11-05",
            value: -4.47452
        },
        {
            time: "\t2019-11-06",
            value: -4.51452
        },
        {
            time: "\t2019-11-07",
            value: -4.56452
        },
        {
            time: "\t2019-11-08",
            value: -4.62452
        },
        {
            time: "\t2019-11-09",
            value: -4.63452
        },
        {
            time: "\t2019-11-10",
            value: -4.65452
        },
        {
            time: "\t2019-11-11",
            value: -4.66452
        },
        {
            time: "\t2019-11-12",
            value: -4.68452
        },
        {
            time: "\t2019-11-13",
            value: -4.38452
        },
        {
            time: "\t2019-11-14",
            value: -4.08452
        },
        {
            time: "\t2019-11-15",
            value: -3.58452
        },
        {
            time: "\t2019-11-16",
            value: -2.88452
        },
        {
            time: "\t2019-11-17",
            value: -2.18452
        },
        {
            time: "\t2019-11-18",
            value: -1.48452
        },
        {
            time: "\t2019-11-19",
            value: -.78452
        },
        {
            time: "\t2019-11-20",
            value: -.08452
        },
        {
            time: "\t2019-11-21",
            value: .01548
        },
        {
            time: "\t2019-11-22",
            value: .71548
        },
        {
            time: "\t2019-11-23",
            value: 1.41548
        },
        {
            time: "\t2019-11-24",
            value: 2.11548
        },
        {
            time: "\t2019-11-25",
            value: 2.21548
        },
        {
            time: "\t2019-11-26",
            value: 2.41548
        },
        {
            time: "\t2019-11-27",
            value: 3.11548
        },
        {
            time: "\t2019-11-28",
            value: 2.71548
        },
        {
            time: "\t2019-11-29",
            value: 2.31548
        },
        {
            time: "\t2019-11-30",
            value: 1.91548
        },
        {
            time: "\t2019-12-01",
            value: 1.51548
        },
        {
            time: "\t2019-12-02",
            value: 1.11548
        },
        {
            time: "\t2019-12-03",
            value: .31548
        },
        {
            time: "\t2019-12-04",
            value: -.48452
        },
        {
            time: "\t2019-12-05",
            value: -1.28452
        },
        {
            time: "\t2019-12-06",
            value: -2.08452
        },
        {
            time: "\t2019-12-07",
            value: -1.38452
        },
        {
            time: "\t2019-12-08",
            value: -.68452
        },
        {
            time: "\t2019-12-09",
            value: .01548
        },
        {
            time: "\t2019-12-10",
            value: .71548
        },
        {
            time: "\t2019-12-11",
            value: .81548
        },
        {
            time: "\t2019-12-12",
            value: 1.51548
        },
        {
            time: "\t2019-12-13",
            value: 1.81548
        },
        {
            time: "\t2019-12-14",
            value: 2.51548
        },
        {
            time: "\t2019-12-15",
            value: 3.21548
        },
        {
            time: "\t2019-12-16",
            value: 3.91548
        },
        {
            time: "\t2019-12-17",
            value: 3.92548
        },
        {
            time: "\t2019-12-18",
            value: 3.12548
        },
        {
            time: "\t2019-12-19",
            value: 2.32548
        },
        {
            time: "\t2019-12-20",
            value: 1.82548
        },
        {
            time: "\t2019-12-21",
            value: 1.02548
        },
        {
            time: "\t2019-12-22",
            value: .22548
        },
        {
            time: "\t2019-12-23",
            value: -.57452
        },
        {
            time: "\t2019-12-24",
            value: -1.37452
        },
        {
            time: "\t2019-12-25",
            value: -2.17452
        },
        {
            time: "\t2019-12-26",
            value: -2.02452
        },
        {
            time: "\t2019-12-27",
            value: -2.82452
        },
        {
            time: "\t2019-12-28",
            value: -2.72452
        },
        {
            time: "\t2019-12-29",
            value: -2.62452
        },
        {
            time: "\t2019-12-30",
            value: -2.47452
        },
        {
            time: "\t2019-12-31",
            value: -2.46452
        },
        {
            time: "\t2020-01-01",
            value: -1.96452
        },
        {
            time: "\t2020-01-02",
            value: -1.46452
        },
        {
            time: "\t2020-01-03",
            value: -.96452
        },
        {
            time: "\t2020-01-04",
            value: -.46452
        },
        {
            time: "\t2020-01-05",
            value: .13548
        },
        {
            time: "\t2020-01-06",
            value: .63548
        },
        {
            time: "\t2020-01-07",
            value: 1.23548
        },
        {
            time: "\t2020-01-08",
            value: 1.73548
        },
        {
            time: "\t2020-01-09",
            value: 2.23548
        },
        {
            time: "\t2020-01-10",
            value: 2.73548
        },
        {
            time: "\t2020-01-11",
            value: 3.33548
        },
        {
            time: "\t2020-01-12",
            value: 3.83548
        },
        {
            time: "\t2020-01-13",
            value: 4.33548
        },
        {
            time: "\t2020-01-14",
            value: 4.83548
        },
        {
            time: "\t2020-01-15",
            value: 4.03548
        },
        {
            time: "\t2020-01-16",
            value: 3.23548
        },
        {
            time: "\t2020-01-17",
            value: 2.43548
        },
        {
            time: "\t2020-01-18",
            value: 1.63548
        },
        {
            time: "\t2020-01-19",
            value: .83548
        },
        {
            time: "\t2020-01-20",
            value: .98548
        },
        {
            time: "\t2020-01-21",
            value: .18548
        },
        {
            time: "\t2020-01-22",
            value: .28548
        },
        {
            time: "\t2020-01-23",
            value: -.51452
        },
        {
            time: "\t2020-01-24",
            value: -1.31452
        },
        {
            time: "\t2020-01-25",
            value: -.81452
        },
        {
            time: "\t2020-01-26",
            value: -.11452
        },
        {
            time: "\t2020-01-27",
            value: .58548
        },
        {
            time: "\t2020-01-28",
            value: 1.28548
        },
        {
            time: "\t2020-01-29",
            value: 1.98548
        },
        {
            time: "\t2020-01-30",
            value: 2.68548
        },
        {
            time: "\t2020-01-31",
            value: 2.67548
        },
        {
            time: "\t2020-02-01",
            value: 2.66548
        },
        {
            time: "\t2020-02-02",
            value: 2.65548
        },
        {
            time: "\t2020-02-03",
            value: 2.64548
        },
        {
            time: "\t2020-02-04",
            value: 2.61548
        },
        {
            time: "\t2020-02-05",
            value: 2.60548
        },
        {
            time: "\t2020-02-06",
            value: 2.58548
        },
        {
            time: "\t2020-02-07",
            value: 2.55548
        },
        {
            time: "\t2020-02-08",
            value: 2.54548
        },
        {
            time: "\t2020-02-09",
            value: 2.53548
        },
        {
            time: "\t2020-02-10",
            value: 2.93548
        },
        {
            time: "\t2020-02-11",
            value: 3.33548
        },
        {
            time: "\t2020-02-12",
            value: 3.73548
        },
        {
            time: "\t2020-02-13",
            value: 4.13548
        },
        {
            time: "\t2020-02-14",
            value: 4.53548
        },
        {
            time: "\t2020-02-15",
            value: 4.93548
        },
        {
            time: "\t2020-02-16",
            value: 4.93548
        },
        {
            time: "\t2020-02-17",
            value: 4.63548
        },
        {
            time: "\t2020-02-18",
            value: 4.62548
        },
        {
            time: "\t2020-02-19",
            value: 4.32548
        },
        {
            time: "\t2020-02-20",
            value: 4.02548
        },
        {
            time: "\t2020-02-21",
            value: 4.01548
        },
        {
            time: "\t2020-02-22",
            value: 3.71548
        },
        {
            time: "\t2020-02-23",
            value: 3.68548
        },
        {
            time: "\t2020-02-24",
            value: 3.38548
        },
        {
            time: "\t2020-02-25",
            value: 3.36548
        },
        {
            time: "\t2020-02-26",
            value: 3.33548
        },
        {
            time: "\t2020-02-27",
            value: 3.32548
        },
        {
            time: "\t2020-02-28",
            value: 3.31548
        },
        {
            time: "\t2020-02-29",
            value: 3.29548
        },
        {
            time: "\t2020-03-01",
            value: 3.26548
        },
        {
            time: "\t2020-03-02",
            value: 3.22548
        },
        {
            time: "\t2020-03-03",
            value: 3.21548
        },
        {
            time: "\t2020-03-04",
            value: 3.19548
        },
        {
            time: "\t2020-03-05",
            value: 3.16548
        },
        {
            time: "\t2020-03-06",
            value: 3.12548
        },
        {
            time: "\t2020-03-07",
            value: 3.07548
        },
        {
            time: "\t2020-03-08",
            value: 3.01548
        },
        {
            time: "\t2020-03-09",
            value: 2.94548
        },
        {
            time: "\t2020-03-10",
            value: 2.86548
        },
        {
            time: "\t2020-03-11",
            value: 2.77548
        },
        {
            time: "\t2020-03-12",
            value: 2.67548
        },
        {
            time: "\t2020-03-13",
            value: 2.56548
        },
        {
            time: "\t2020-03-14",
            value: 2.44548
        },
        {
            time: "\t2020-03-15",
            value: 2.31548
        },
        {
            time: "\t2020-03-16",
            value: 2.17548
        },
        {
            time: "\t2020-03-17",
            value: 2.02548
        },
        {
            time: "\t2020-03-18",
            value: 1.86548
        },
        {
            time: "\t2020-03-19",
            value: 1.69548
        },
        {
            time: "\t2020-03-20",
            value: 1.51548
        },
        {
            time: "\t2020-03-21",
            value: 1.32548
        },
        {
            time: "\t2020-03-22",
            value: 1.12548
        },
        {
            time: "\t2020-03-23",
            value: 1.11548
        },
        {
            time: "\t2020-03-24",
            value: 1.09548
        },
        {
            time: "\t2020-03-25",
            value: 1.06548
        },
        {
            time: "\t2020-03-26",
            value: 1.02548
        },
        {
            time: "\t2020-03-27",
            value: 1.01548
        },
        {
            time: "\t2020-03-28",
            value: .99548
        },
        {
            time: "\t2020-03-29",
            value: .96548
        },
        {
            time: "\t2020-03-30",
            value: .92548
        },
        {
            time: "\t2020-03-31",
            value: .87548
        },
        {
            time: "\t2020-04-01",
            value: .81548
        },
        {
            time: "\t2020-04-02",
            value: .74548
        },
        {
            time: "\t2020-04-03",
            value: .66548
        },
        {
            time: "\t2020-04-04",
            value: .57548
        },
        {
            time: "\t2020-04-05",
            value: .47548
        },
        {
            time: "\t2020-04-06",
            value: .36548
        },
        {
            time: "\t2020-04-07",
            value: .24548
        },
        {
            time: "\t2020-04-08",
            value: .11548
        },
        {
            time: "\t2020-04-09",
            value: -.02452
        },
        {
            time: "\t2020-04-10",
            value: -.17452
        },
        {
            time: "\t2020-04-11",
            value: -.33452
        },
        {
            time: "\t2020-04-12",
            value: -.50452
        },
        {
            time: "\t2020-04-13",
            value: -.68452
        },
        {
            time: "\t2020-04-14",
            value: -.87452
        },
        {
            time: "\t2020-04-15",
            value: -1.07452
        },
        {
            time: "\t2020-04-16",
            value: -1.25452
        },
        {
            time: "\t2020-04-17",
            value: -1.44452
        },
        {
            time: "\t2020-04-18",
            value: -1.64452
        },
        {
            time: "\t2020-04-19",
            value: -1.65452
        },
        {
            time: "\t2020-04-20",
            value: -1.67452
        },
        {
            time: "\t2020-04-21",
            value: -1.70452
        },
        {
            time: "\t2020-04-22",
            value: -1.74452
        },
        {
            time: "\t2020-04-23",
            value: -1.75452
        },
        {
            time: "\t2020-04-24",
            value: -1.77452
        },
        {
            time: "\t2020-04-25",
            value: -1.80452
        },
        {
            time: "\t2020-04-26",
            value: -1.84452
        },
        {
            time: "\t2020-04-27",
            value: -1.89452
        },
        {
            time: "\t2020-04-28",
            value: -1.95452
        },
        {
            time: "\t2020-04-29",
            value: -1.96452
        },
        {
            time: "\t2020-04-30",
            value: -1.98452
        },
        {
            time: "\t2020-05-01",
            value: -2.01452
        },
        {
            time: "\t2020-05-02",
            value: -2.05452
        },
        {
            time: "\t2020-05-03",
            value: -2.06452
        },
        {
            time: "\t2020-05-04",
            value: -2.08452
        },
        {
            time: "\t2020-05-05",
            value: -2.09452
        },
        {
            time: "\t2020-05-06",
            value: -2.11452
        },
        {
            time: "\t2020-05-07",
            value: -2.14452
        },
        {
            time: "\t2020-05-08",
            value: -2.18452
        },
        {
            time: "\t2020-05-09",
            value: -2.19452
        },
        {
            time: "\t2020-05-10",
            value: -2.21452
        },
        {
            time: "\t2020-05-11",
            value: -2.24452
        },
        {
            time: "\t2020-05-12",
            value: -2.25452
        },
        {
            time: "\t2020-05-13",
            value: -2.26452
        },
        {
            time: "\t2020-05-14",
            value: -2.27452
        },
        {
            time: "\t2020-05-15",
            value: -2.28452
        },
        {
            time: "\t2020-05-16",
            value: -2.29452
        },
        {
            time: "\t2020-05-17",
            value: -2.30452
        },
        {
            time: "\t2020-05-18",
            value: -2.31452
        },
        {
            time: "\t2020-05-19",
            value: -2.32452
        },
        {
            time: "\t2020-05-20",
            value: -2.34452
        },
        {
            time: "\t2020-05-21",
            value: -2.37452
        },
        {
            time: "\t2020-05-22",
            value: -2.38452
        },
        {
            time: "\t2020-05-23",
            value: -2.40452
        },
        {
            time: "\t2020-05-24",
            value: -2.43452
        },
        {
            time: "\t2020-05-25",
            value: -2.44452
        },
        {
            time: "\t2020-05-26",
            value: -2.45452
        },
        {
            time: "\t2020-05-27",
            value: -2.46452
        },
        {
            time: "\t2020-05-28",
            value: -2.47452
        },
        {
            time: "\t2020-05-29",
            value: -2.48452
        },
        {
            time: "\t2020-05-30",
            value: -2.49452
        },
        {
            time: "\t2020-05-31",
            value: -2.50452
        },
        {
            time: "\t2020-06-01",
            value: -2.51452
        },
        {
            time: "\t2020-06-02",
            value: -2.54452
        },
        {
            time: "\t2020-06-03",
            value: -2.55452
        },
        {
            time: "\t2020-06-04",
            value: -2.57452
        },
        {
            time: "\t2020-06-05",
            value: -2.60452
        },
        {
            time: "\t2020-06-06",
            value: -2.61452
        },
        {
            time: "\t2020-06-07",
            value: -2.62452
        },
        {
            time: "\t2020-06-08",
            value: -2.63452
        },
        {
            time: "\t2020-06-09",
            value: -2.69452
        },
        {
            time: "\t2020-06-10",
            value: -2.76452
        },
        {
            time: "\t2020-06-11",
            value: -2.84452
        },
        {
            time: "\t2020-06-12",
            value: -2.93452
        },
        {
            time: "\t2020-06-13",
            value: -3.03452
        },
        {
            time: "\t2020-06-14",
            value: -3.14452
        },
        {
            time: "\t2020-06-15",
            value: -3.26452
        },
        {
            time: "\t2020-06-16",
            value: -3.39452
        },
        {
            time: "\t2020-06-17",
            value: -3.53452
        },
        {
            time: "\t2020-06-18",
            value: -3.68452
        },
        {
            time: "\t2020-06-19",
            value: -3.84452
        },
        {
            time: "\t2020-06-20",
            value: -4.01452
        },
        {
            time: "\t2020-06-21",
            value: -4.19452
        },
        {
            time: "\t2020-06-22",
            value: -4.38452
        },
        {
            time: "\t2020-06-23",
            value: -4.58452
        },
        {
            time: "\t2020-06-24",
            value: -4.76452
        },
        {
            time: "\t2020-06-25",
            value: -4.95452
        },
        {
            time: "\t2020-06-26",
            value: -5.15452
        },
        {
            time: "\t2020-06-27",
            value: -5.16452
        },
        {
            time: "\t2020-06-28",
            value: -5.18452
        },
        {
            time: "\t2020-06-29",
            value: -5.21452
        },
        {
            time: "\t2020-06-30",
            value: -5.25452
        },
        {
            time: "\t2020-07-01",
            value: -5.26452
        },
        {
            time: "\t2020-07-02",
            value: -5.28452
        },
        {
            time: "\t2020-07-03",
            value: -5.31452
        },
        {
            time: "\t2020-07-04",
            value: -5.35452
        },
        {
            time: "\t2020-07-05",
            value: -5.40452
        },
        {
            time: "\t2020-07-06",
            value: -5.46452
        },
        {
            time: "\t2020-07-07",
            value: -5.47452
        },
        {
            time: "\t2020-07-08",
            value: -5.49452
        },
        {
            time: "\t2020-07-09",
            value: -5.50452
        },
        {
            time: "\t2020-07-10",
            value: -5.52452
        },
        {
            time: "\t2020-07-11",
            value: -5.22452
        },
        {
            time: "\t2020-07-12",
            value: -4.92452
        },
        {
            time: "\t2020-07-13",
            value: -4.42452
        },
        {
            time: "\t2020-07-14",
            value: -3.72452
        },
        {
            time: "\t2020-07-15",
            value: -3.02452
        },
        {
            time: "\t2020-07-16",
            value: -2.32452
        },
        {
            time: "\t2020-07-17",
            value: -1.62452
        },
        {
            time: "\t2020-07-18",
            value: -.92452
        },
        {
            time: "\t2020-07-19",
            value: -.82452
        },
        {
            time: "\t2020-07-20",
            value: -.12452
        },
        {
            time: "\t2020-07-21",
            value: .57548
        },
        {
            time: "\t2020-07-22",
            value: 1.27548
        },
        {
            time: "\t2020-07-23",
            value: 1.37548
        },
        {
            time: "\t2020-07-24",
            value: 1.57548
        },
        {
            time: "\t2020-07-25",
            value: 2.27548
        },
        {
            time: "\t2020-07-26",
            value: 1.87548
        },
        {
            time: "\t2020-07-27",
            value: 1.47548
        },
        {
            time: "\t2020-07-28",
            value: 1.07548
        },
        {
            time: "\t2020-07-29",
            value: .67548
        },
        {
            time: "\t2020-07-30",
            value: .27548
        },
        {
            time: "\t2020-07-31",
            value: -.52452
        },
        {
            time: "\t2020-08-01",
            value: -1.32452
        },
        {
            time: "\t2020-08-02",
            value: -2.12452
        },
        {
            time: "\t2020-08-03",
            value: -2.92452
        },
        {
            time: "\t2020-08-04",
            value: -2.22452
        },
        {
            time: "\t2020-08-05",
            value: -1.52452
        },
        {
            time: "\t2020-08-06",
            value: -.82452
        },
        {
            time: "\t2020-08-07",
            value: -.12452
        },
        {
            time: "\t2020-08-08",
            value: -.02452
        },
        {
            time: "\t2020-08-09",
            value: .67548
        },
        {
            time: "\t2020-08-10",
            value: .97548
        },
        {
            time: "\t2020-08-11",
            value: 1.67548
        },
        {
            time: "\t2020-08-12",
            value: 2.37548
        },
        {
            time: "\t2020-08-13",
            value: 3.07548
        },
        {
            time: "\t2020-08-14",
            value: 3.08548
        },
        {
            time: "\t2020-08-15",
            value: 2.28548
        },
        {
            time: "\t2020-08-16",
            value: 1.48548
        },
        {
            time: "\t2020-08-17",
            value: .98548
        },
        {
            time: "\t2020-08-18",
            value: .18548
        },
        {
            time: "\t2020-08-19",
            value: -.61452
        },
        {
            time: "\t2020-08-20",
            value: -1.41452
        },
        {
            time: "\t2020-08-21",
            value: -2.21452
        },
        {
            time: "\t2020-08-22",
            value: -3.01452
        },
        {
            time: "\t2020-08-23",
            value: -2.86452
        },
        {
            time: "\t2020-08-24",
            value: -3.66452
        },
        {
            time: "\t2020-08-25",
            value: -3.56452
        },
        {
            time: "\t2020-08-26",
            value: -3.46452
        },
        {
            time: "\t2020-08-27",
            value: -3.31452
        },
        {
            time: "\t2020-08-28",
            value: -3.30452
        },
        {
            time: "\t2020-08-29",
            value: -2.80452
        },
        {
            time: "\t2020-08-30",
            value: -2.30452
        },
        {
            time: "\t2020-08-31",
            value: -1.80452
        },
        {
            time: "\t2020-09-01",
            value: -1.30452
        },
        {
            time: "\t2020-09-02",
            value: -.70452
        },
        {
            time: "\t2020-09-03",
            value: -.20452
        },
        {
            time: "\t2020-09-04",
            value: .39548
        },
        {
            time: "\t2020-09-05",
            value: .89548
        },
        {
            time: "\t2020-09-06",
            value: 1.39548
        },
        {
            time: "\t2020-09-07",
            value: 1.89548
        },
        {
            time: "\t2020-09-08",
            value: 2.49548
        },
        {
            time: "\t2020-09-09",
            value: 2.99548
        },
        {
            time: "\t2020-09-10",
            value: 3.49548
        },
        {
            time: "\t2020-09-11",
            value: 3.99548
        },
        {
            time: "\t2020-09-12",
            value: 3.19548
        },
        {
            time: "\t2020-09-13",
            value: 2.39548
        },
        {
            time: "\t2020-09-14",
            value: 1.59548
        },
        {
            time: "\t2020-09-15",
            value: .79548
        },
        {
            time: "\t2020-09-16",
            value: -.00452
        },
        {
            time: "\t2020-09-17",
            value: .14548
        },
        {
            time: "\t2020-09-18",
            value: -.65452
        },
        {
            time: "\t2020-09-19",
            value: -.55452
        },
        {
            time: "\t2020-09-20",
            value: -1.35452
        },
        {
            time: "\t2020-09-21",
            value: -2.15452
        },
        {
            time: "\t2020-09-22",
            value: -1.65452
        },
        {
            time: "\t2020-09-23",
            value: -.95452
        },
        {
            time: "\t2020-09-24",
            value: -.25452
        },
        {
            time: "\t2020-09-25",
            value: .44548
        },
        {
            time: "\t2020-09-26",
            value: 1.14548
        },
        {
            time: "\t2020-09-27",
            value: 1.84548
        },
        {
            time: "\t2020-09-28",
            value: 1.83548
        },
        {
            time: "\t2020-09-29",
            value: 1.82548
        },
        {
            time: "\t2020-09-30",
            value: 1.81548
        },
        {
            time: "\t2020-10-01",
            value: 1.80548
        },
        {
            time: "\t2020-10-02",
            value: 1.77548
        },
        {
            time: "\t2020-10-03",
            value: 1.76548
        },
        {
            time: "\t2020-10-04",
            value: 1.74548
        },
        {
            time: "\t2020-10-05",
            value: 1.71548
        },
        {
            time: "\t2020-10-06",
            value: 1.70548
        },
        {
            time: "\t2020-10-07",
            value: 1.69548
        },
        {
            time: "\t2020-10-08",
            value: 2.09548
        },
        {
            time: "\t2020-10-09",
            value: 2.49548
        },
        {
            time: "\t2020-10-10",
            value: 2.89548
        },
        {
            time: "\t2020-10-11",
            value: 3.29548
        },
        {
            time: "\t2020-10-12",
            value: 3.69548
        },
        {
            time: "\t2020-10-13",
            value: 4.09548
        },
        {
            time: "\t2020-10-14",
            value: 4.09548
        },
        {
            time: "\t2020-10-15",
            value: 3.79548
        },
        {
            time: "\t2020-10-16",
            value: 3.78548
        },
        {
            time: "\t2020-10-17",
            value: 3.48548
        },
        {
            time: "\t2020-10-18",
            value: 3.18548
        },
        {
            time: "\t2020-10-19",
            value: 3.17548
        },
        {
            time: "\t2020-10-20",
            value: 2.87548
        },
        {
            time: "\t2020-10-21",
            value: 2.84548
        },
        {
            time: "\t2020-10-22",
            value: 2.54548
        },
        {
            time: "\t2020-10-23",
            value: 2.52548
        },
        {
            time: "\t2020-10-24",
            value: 2.49548
        },
        {
            time: "\t2020-10-25",
            value: 2.48548
        },
        {
            time: "\t2020-10-26",
            value: 2.47548
        },
        {
            time: "\t2020-10-27",
            value: 2.45548
        },
        {
            time: "\t2020-10-28",
            value: 2.42548
        },
        {
            time: "\t2020-10-29",
            value: 2.38548
        },
        {
            time: "\t2020-10-30",
            value: 2.37548
        },
        {
            time: "\t2020-10-31",
            value: 2.35548
        },
        {
            time: "\t2020-11-01",
            value: 2.32548
        },
        {
            time: "\t2020-11-02",
            value: 2.28548
        },
        {
            time: "\t2020-11-03",
            value: 2.23548
        },
        {
            time: "\t2020-11-04",
            value: 2.17548
        },
        {
            time: "\t2020-11-05",
            value: 2.10548
        },
        {
            time: "\t2020-11-06",
            value: 2.02548
        },
        {
            time: "\t2020-11-07",
            value: 1.93548
        },
        {
            time: "\t2020-11-08",
            value: 1.83548
        },
        {
            time: "\t2020-11-09",
            value: 1.72548
        },
        {
            time: "\t2020-11-10",
            value: 1.60548
        },
        {
            time: "\t2020-11-11",
            value: 1.47548
        },
        {
            time: "\t2020-11-12",
            value: 1.33548
        },
        {
            time: "\t2020-11-13",
            value: 1.18548
        },
        {
            time: "\t2020-11-14",
            value: 1.02548
        },
        {
            time: "\t2020-11-15",
            value: .85548
        },
        {
            time: "\t2020-11-16",
            value: .67548
        },
        {
            time: "\t2020-11-17",
            value: .48548
        },
        {
            time: "\t2020-11-18",
            value: .28548
        },
        {
            time: "\t2020-11-19",
            value: .27548
        },
        {
            time: "\t2020-11-20",
            value: .25548
        },
        {
            time: "\t2020-11-21",
            value: .22548
        },
        {
            time: "\t2020-11-22",
            value: .18548
        },
        {
            time: "\t2020-11-23",
            value: .17548
        },
        {
            time: "\t2020-11-24",
            value: .15548
        },
        {
            time: "\t2020-11-25",
            value: .12548
        },
        {
            time: "\t2020-11-26",
            value: .08548
        },
        {
            time: "\t2020-11-27",
            value: .03548
        },
        {
            time: "\t2020-11-28",
            value: -.02452
        },
        {
            time: "\t2020-11-29",
            value: -.09452
        },
        {
            time: "\t2020-11-30",
            value: -.17452
        },
        {
            time: "\t2020-12-01",
            value: -.26452
        },
        {
            time: "\t2020-12-02",
            value: -.36452
        },
        {
            time: "\t2020-12-03",
            value: -.47452
        },
        {
            time: "\t2020-12-04",
            value: -.59452
        },
        {
            time: "\t2020-12-05",
            value: -.72452
        },
        {
            time: "\t2020-12-06",
            value: -.86452
        },
        {
            time: "\t2020-12-07",
            value: -1.01452
        },
        {
            time: "\t2020-12-08",
            value: -1.17452
        },
        {
            time: "\t2020-12-09",
            value: -1.34452
        },
        {
            time: "\t2020-12-10",
            value: -1.52452
        },
        {
            time: "\t2020-12-11",
            value: -1.71452
        },
        {
            time: "\t2020-12-12",
            value: -1.91452
        },
        {
            time: "\t2020-12-13",
            value: -2.09452
        },
        {
            time: "\t2020-12-14",
            value: -2.28452
        },
        {
            time: "\t2020-12-15",
            value: -2.48452
        },
        {
            time: "\t2020-12-16",
            value: -2.49452
        },
        {
            time: "\t2020-12-17",
            value: -2.51452
        },
        {
            time: "\t2020-12-18",
            value: -2.54452
        },
        {
            time: "\t2020-12-19",
            value: -2.58452
        },
        {
            time: "\t2020-12-20",
            value: -2.59452
        },
        {
            time: "\t2020-12-21",
            value: -2.61452
        },
        {
            time: "\t2020-12-22",
            value: -2.64452
        },
        {
            time: "\t2020-12-23",
            value: -2.68452
        },
        {
            time: "\t2020-12-24",
            value: -2.73452
        },
        {
            time: "\t2020-12-25",
            value: -2.79452
        },
        {
            time: "\t2020-12-26",
            value: -2.80452
        },
        {
            time: "\t2020-12-27",
            value: -2.82452
        },
        {
            time: "\t2020-12-28",
            value: -2.85452
        },
        {
            time: "\t2020-12-29",
            value: -2.89452
        },
        {
            time: "\t2020-12-30",
            value: -2.90452
        },
        {
            time: "\t2020-12-31",
            value: -2.92452
        },
        {
            time: "\t2021-01-01",
            value: -2.93452
        },
        {
            time: "\t2021-01-02",
            value: -2.95452
        },
        {
            time: "\t2021-01-03",
            value: -2.98452
        },
        {
            time: "\t2021-01-04",
            value: -3.02452
        },
        {
            time: "\t2021-01-05",
            value: -3.03452
        },
        {
            time: "\t2021-01-06",
            value: -3.05452
        },
        {
            time: "\t2021-01-07",
            value: -3.08452
        },
        {
            time: "\t2021-01-08",
            value: -3.09452
        },
        {
            time: "\t2021-01-09",
            value: -3.10452
        },
        {
            time: "\t2021-01-10",
            value: -3.11452
        },
        {
            time: "\t2021-01-11",
            value: -3.12452
        },
        {
            time: "\t2021-01-12",
            value: -3.13452
        },
        {
            time: "\t2021-01-13",
            value: -3.14452
        },
        {
            time: "\t2021-01-14",
            value: -3.15452
        },
        {
            time: "\t2021-01-15",
            value: -3.16452
        },
        {
            time: "\t2021-01-16",
            value: -3.18452
        },
        {
            time: "\t2021-01-17",
            value: -3.21452
        },
        {
            time: "\t2021-01-18",
            value: -3.22452
        },
        {
            time: "\t2021-01-19",
            value: -3.24452
        },
        {
            time: "\t2021-01-20",
            value: -3.27452
        },
        {
            time: "\t2021-01-21",
            value: -3.28452
        },
        {
            time: "\t2021-01-22",
            value: -3.29452
        },
        {
            time: "\t2021-01-23",
            value: -3.30452
        },
        {
            time: "\t2021-01-24",
            value: -3.31452
        },
        {
            time: "\t2021-01-25",
            value: -3.32452
        },
        {
            time: "\t2021-01-26",
            value: -3.33452
        },
        {
            time: "\t2021-01-27",
            value: -3.34452
        },
        {
            time: "\t2021-01-28",
            value: -3.35452
        },
        {
            time: "\t2021-01-29",
            value: -3.38452
        },
        {
            time: "\t2021-01-30",
            value: -3.39452
        },
        {
            time: "\t2021-01-31",
            value: -3.41452
        },
        {
            time: "\t2021-02-01",
            value: -3.44452
        },
        {
            time: "\t2021-02-02",
            value: -3.45452
        },
        {
            time: "\t2021-02-03",
            value: -3.46452
        },
        {
            time: "\t2021-02-04",
            value: -3.47452
        },
        {
            time: "\t2021-02-05",
            value: -3.53452
        },
        {
            time: "\t2021-02-06",
            value: -3.60452
        },
        {
            time: "\t2021-02-07",
            value: -3.68452
        },
        {
            time: "\t2021-02-08",
            value: -3.77452
        },
        {
            time: "\t2021-02-09",
            value: -3.87452
        },
        {
            time: "\t2021-02-10",
            value: -3.98452
        },
        {
            time: "\t2021-02-11",
            value: -4.10452
        },
        {
            time: "\t2021-02-12",
            value: -4.23452
        },
        {
            time: "\t2021-02-13",
            value: -4.37452
        },
        {
            time: "\t2021-02-14",
            value: -4.52452
        },
        {
            time: "\t2021-02-15",
            value: -4.68452
        },
        {
            time: "\t2021-02-16",
            value: -4.85452
        },
        {
            time: "\t2021-02-17",
            value: -5.03452
        },
        {
            time: "\t2021-02-18",
            value: -5.22452
        },
        {
            time: "\t2021-02-19",
            value: -5.42452
        },
        {
            time: "\t2021-02-20",
            value: -5.60452
        },
        {
            time: "\t2021-02-21",
            value: -5.79452
        },
        {
            time: "\t2021-02-22",
            value: -5.99452
        },
        {
            time: "\t2021-02-23",
            value: -6.00452
        },
        {
            time: "\t2021-02-24",
            value: -6.02452
        },
        {
            time: "\t2021-02-25",
            value: -6.05452
        },
        {
            time: "\t2021-02-26",
            value: -6.09452
        },
        {
            time: "\t2021-02-27",
            value: -6.10452
        },
        {
            time: "\t2021-02-28",
            value: -6.12452
        },
        {
            time: "\t2021-03-01",
            value: -6.15452
        },
        {
            time: "\t2021-03-02",
            value: -6.19452
        },
        {
            time: "\t2021-03-03",
            value: -6.24452
        },
        {
            time: "\t2021-03-04",
            value: -6.30452
        },
        {
            time: "\t2021-03-05",
            value: -6.31452
        },
        {
            time: "\t2021-03-06",
            value: -6.33452
        },
        {
            time: "\t2021-03-07",
            value: -6.34452
        },
        {
            time: "\t2021-03-08",
            value: -6.36452
        },
        {
            time: "\t2021-03-09",
            value: -6.06452
        },
        {
            time: "\t2021-03-10",
            value: -5.76452
        },
        {
            time: "\t2021-03-11",
            value: -5.26452
        },
        {
            time: "\t2021-03-12",
            value: -4.56452
        },
        {
            time: "\t2021-03-13",
            value: -3.86452
        },
        {
            time: "\t2021-03-14",
            value: -3.16452
        },
        {
            time: "\t2021-03-15",
            value: -2.46452
        },
        {
            time: "\t2021-03-16",
            value: -1.76452
        },
        {
            time: "\t2021-03-17",
            value: -1.66452
        },
        {
            time: "\t2021-03-18",
            value: -.96452
        },
        {
            time: "\t2021-03-19",
            value: -.26452
        },
        {
            time: "\t2021-03-20",
            value: .43548
        },
        {
            time: "\t2021-03-21",
            value: .53548
        },
        {
            time: "\t2021-03-22",
            value: .73548
        },
        {
            time: "\t2021-03-23",
            value: 1.43548
        },
        {
            time: "\t2021-03-24",
            value: 1.03548
        },
        {
            time: "\t2021-03-25",
            value: .63548
        },
        {
            time: "\t2021-03-26",
            value: .23548
        },
        {
            time: "\t2021-03-27",
            value: -.16452
        },
        {
            time: "\t2021-03-28",
            value: -.56452
        },
        {
            time: "\t2021-03-29",
            value: -1.36452
        },
        {
            time: "\t2021-03-30",
            value: -2.16452
        },
        {
            time: "\t2021-03-31",
            value: -2.96452
        },
        {
            time: "\t2021-04-01",
            value: -3.76452
        },
        {
            time: "\t2021-04-02",
            value: -3.06452
        },
        {
            time: "\t2021-04-03",
            value: -2.36452
        },
        {
            time: "\t2021-04-04",
            value: -1.66452
        },
        {
            time: "\t2021-04-05",
            value: -.96452
        },
        {
            time: "\t2021-04-06",
            value: -.86452
        },
        {
            time: "\t2021-04-07",
            value: -.16452
        },
        {
            time: "\t2021-04-08",
            value: .13548
        },
        {
            time: "\t2021-04-09",
            value: .83548
        },
        {
            time: "\t2021-04-10",
            value: 1.53548
        },
        {
            time: "\t2021-04-11",
            value: 2.23548
        },
        {
            time: "\t2021-04-12",
            value: 2.24548
        },
        {
            time: "\t2021-04-13",
            value: 1.44548
        },
        {
            time: "\t2021-04-14",
            value: .64548
        },
        {
            time: "\t2021-04-15",
            value: .14548
        },
        {
            time: "\t2021-04-16",
            value: -.65452
        },
        {
            time: "\t2021-04-17",
            value: -1.45452
        },
        {
            time: "\t2021-04-18",
            value: -2.25452
        },
        {
            time: "\t2021-04-19",
            value: -3.05452
        },
        {
            time: "\t2021-04-20",
            value: -3.85452
        },
        {
            time: "\t2021-04-21",
            value: -3.70452
        },
        {
            time: "\t2021-04-22",
            value: -4.50452
        },
        {
            time: "\t2021-04-23",
            value: -4.40452
        },
        {
            time: "\t2021-04-24",
            value: -4.30452
        },
        {
            time: "\t2021-04-25",
            value: -4.15452
        },
        {
            time: "\t2021-04-26",
            value: -4.14452
        },
        {
            time: "\t2021-04-27",
            value: -3.64452
        },
        {
            time: "\t2021-04-28",
            value: -3.14452
        },
        {
            time: "\t2021-04-29",
            value: -2.64452
        },
        {
            time: "\t2021-04-30",
            value: -2.14452
        },
        {
            time: "\t2021-05-01",
            value: -1.54452
        },
        {
            time: "\t2021-05-02",
            value: -1.04452
        },
        {
            time: "\t2021-05-03",
            value: -.44452
        },
        {
            time: "\t2021-05-04",
            value: .05548
        },
        {
            time: "\t2021-05-05",
            value: .55548
        },
        {
            time: "\t2021-05-06",
            value: 1.05548
        },
        {
            time: "\t2021-05-07",
            value: 1.65548
        },
        {
            time: "\t2021-05-08",
            value: 2.15548
        },
        {
            time: "\t2021-05-09",
            value: 2.65548
        },
        {
            time: "\t2021-05-10",
            value: 3.15548
        },
        {
            time: "\t2021-05-11",
            value: 2.35548
        },
        {
            time: "\t2021-05-12",
            value: 1.55548
        },
        {
            time: "\t2021-05-13",
            value: .75548
        },
        {
            time: "\t2021-05-14",
            value: -.04452
        },
        {
            time: "\t2021-05-15",
            value: -.84452
        },
        {
            time: "\t2021-05-16",
            value: -.69452
        },
        {
            time: "\t2021-05-17",
            value: -1.49452
        },
        {
            time: "\t2021-05-18",
            value: -1.39452
        },
        {
            time: "\t2021-05-19",
            value: -2.19452
        },
        {
            time: "\t2021-05-20",
            value: -2.99452
        },
        {
            time: "\t2021-05-21",
            value: -2.49452
        },
        {
            time: "\t2021-05-22",
            value: -1.79452
        },
        {
            time: "\t2021-05-23",
            value: -1.09452
        },
        {
            time: "\t2021-05-24",
            value: -.39452
        },
        {
            time: "\t2021-05-25",
            value: .30548
        },
        {
            time: "\t2021-05-26",
            value: 1.00548
        },
        {
            time: "\t2021-05-27",
            value: .99548
        },
        {
            time: "\t2021-05-28",
            value: .98548
        },
        {
            time: "\t2021-05-29",
            value: .97548
        },
        {
            time: "\t2021-05-30",
            value: .96548
        },
        {
            time: "\t2021-05-31",
            value: .93548
        },
        {
            time: "\t2021-06-01",
            value: .92548
        },
        {
            time: "\t2021-06-02",
            value: .90548
        },
        {
            time: "\t2021-06-03",
            value: .87548
        },
        {
            time: "\t2021-06-04",
            value: .86548
        },
        {
            time: "\t2021-06-05",
            value: .85548
        },
        {
            time: "\t2021-06-06",
            value: 1.25548
        },
        {
            time: "\t2021-06-07",
            value: 1.65548
        },
        {
            time: "\t2021-06-08",
            value: 2.05548
        },
        {
            time: "\t2021-06-09",
            value: 2.45548
        },
        {
            time: "\t2021-06-10",
            value: 2.85548
        },
        {
            time: "\t2021-06-11",
            value: 3.25548
        },
        {
            time: "\t2021-06-12",
            value: 3.25548
        },
        {
            time: "\t2021-06-13",
            value: 2.95548
        },
        {
            time: "\t2021-06-14",
            value: 2.94548
        },
        {
            time: "\t2021-06-15",
            value: 2.64548
        },
        {
            time: "\t2021-06-16",
            value: 2.34548
        },
        {
            time: "\t2021-06-17",
            value: 2.33548
        },
        {
            time: "\t2021-06-18",
            value: 2.03548
        },
        {
            time: "\t2021-06-19",
            value: 2.00548
        },
        {
            time: "\t2021-06-20",
            value: 1.70548
        },
        {
            time: "\t2021-06-21",
            value: 1.68548
        },
        {
            time: "\t2021-06-22",
            value: 1.65548
        },
        {
            time: "\t2021-06-23",
            value: 1.64548
        },
        {
            time: "\t2021-06-24",
            value: 1.63548
        },
        {
            time: "\t2021-06-25",
            value: 1.61548
        },
        {
            time: "\t2021-06-26",
            value: 1.58548
        },
        {
            time: "\t2021-06-27",
            value: 1.54548
        },
        {
            time: "\t2021-06-28",
            value: 1.53548
        },
        {
            time: "\t2021-06-29",
            value: 1.51548
        },
        {
            time: "\t2021-06-30",
            value: 1.48548
        },
        {
            time: "\t2021-07-01",
            value: 1.44548
        },
        {
            time: "\t2021-07-02",
            value: 1.39548
        },
        {
            time: "\t2021-07-03",
            value: 1.33548
        },
        {
            time: "\t2021-07-04",
            value: 1.26548
        },
        {
            time: "\t2021-07-05",
            value: 1.18548
        },
        {
            time: "\t2021-07-06",
            value: 1.09548
        },
        {
            time: "\t2021-07-07",
            value: .99548
        },
        {
            time: "\t2021-07-08",
            value: .88548
        },
        {
            time: "\t2021-07-09",
            value: .76548
        },
        {
            time: "\t2021-07-10",
            value: .63548
        },
        {
            time: "\t2021-07-11",
            value: .49548
        },
        {
            time: "\t2021-07-12",
            value: .34548
        },
        {
            time: "\t2021-07-13",
            value: .18548
        },
        {
            time: "\t2021-07-14",
            value: .01548
        },
        {
            time: "\t2021-07-15",
            value: -.16452
        },
        {
            time: "\t2021-07-16",
            value: -.35452
        },
        {
            time: "\t2021-07-17",
            value: -.55452
        },
        {
            time: "\t2021-07-18",
            value: -.56452
        },
        {
            time: "\t2021-07-19",
            value: -.58452
        },
        {
            time: "\t2021-07-20",
            value: -.61452
        },
        {
            time: "\t2021-07-21",
            value: -.65452
        },
        {
            time: "\t2021-07-22",
            value: -.66452
        },
        {
            time: "\t2021-07-23",
            value: -.68452
        },
        {
            time: "\t2021-07-24",
            value: -.71452
        },
        {
            time: "\t2021-07-25",
            value: -.75452
        },
        {
            time: "\t2021-07-26",
            value: -.80452
        },
        {
            time: "\t2021-07-27",
            value: -.86452
        },
        {
            time: "\t2021-07-28",
            value: -.93452
        },
        {
            time: "\t2021-07-29",
            value: -1.01452
        },
        {
            time: "\t2021-07-30",
            value: -1.10452
        },
        {
            time: "\t2021-07-31",
            value: -1.20452
        },
        {
            time: "\t2021-08-01",
            value: -1.31452
        },
        {
            time: "\t2021-08-02",
            value: -1.43452
        },
        {
            time: "\t2021-08-03",
            value: -1.56452
        },
        {
            time: "\t2021-08-04",
            value: -1.70452
        },
        {
            time: "\t2021-08-05",
            value: -1.85452
        },
        {
            time: "\t2021-08-06",
            value: -2.01452
        },
        {
            time: "\t2021-08-07",
            value: -2.18452
        },
        {
            time: "\t2021-08-08",
            value: -2.36452
        },
        {
            time: "\t2021-08-09",
            value: -2.55452
        },
        {
            time: "\t2021-08-10",
            value: -2.75452
        },
        {
            time: "\t2021-08-11",
            value: -2.93452
        },
        {
            time: "\t2021-08-12",
            value: -3.12452
        },
        {
            time: "\t2021-08-13",
            value: -3.32452
        },
        {
            time: "\t2021-08-14",
            value: -3.33452
        },
        {
            time: "\t2021-08-15",
            value: -3.35452
        },
        {
            time: "\t2021-08-16",
            value: -3.38452
        },
        {
            time: "\t2021-08-17",
            value: -3.42452
        },
        {
            time: "\t2021-08-18",
            value: -3.43452
        },
        {
            time: "\t2021-08-19",
            value: -3.45452
        },
        {
            time: "\t2021-08-20",
            value: -3.48452
        },
        {
            time: "\t2021-08-21",
            value: -3.52452
        },
        {
            time: "\t2021-08-22",
            value: -3.57452
        },
        {
            time: "\t2021-08-23",
            value: -3.63452
        },
        {
            time: "\t2021-08-24",
            value: -3.64452
        },
        {
            time: "\t2021-08-25",
            value: -3.66452
        },
        {
            time: "\t2021-08-26",
            value: -3.69452
        },
        {
            time: "\t2021-08-27",
            value: -3.73452
        },
        {
            time: "\t2021-08-28",
            value: -3.74452
        },
        {
            time: "\t2021-08-29",
            value: -3.76452
        },
        {
            time: "\t2021-08-30",
            value: -3.77452
        },
        {
            time: "\t2021-08-31",
            value: -3.79452
        },
        {
            time: "\t2021-09-01",
            value: -3.82452
        },
        {
            time: "\t2021-09-02",
            value: -3.86452
        },
        {
            time: "\t2021-09-03",
            value: -3.87452
        },
        {
            time: "\t2021-09-04",
            value: -3.89452
        },
        {
            time: "\t2021-09-05",
            value: -3.92452
        },
        {
            time: "\t2021-09-06",
            value: -3.93452
        },
        {
            time: "\t2021-09-07",
            value: -3.94452
        },
        {
            time: "\t2021-09-08",
            value: -3.95452
        },
        {
            time: "\t2021-09-09",
            value: -3.96452
        },
        {
            time: "\t2021-09-10",
            value: -3.97452
        },
        {
            time: "\t2021-09-11",
            value: -3.98452
        },
        {
            time: "\t2021-09-12",
            value: -3.99452
        },
        {
            time: "\t2021-09-13",
            value: -4.00452
        },
        {
            time: "\t2021-09-14",
            value: -4.02452
        },
        {
            time: "\t2021-09-15",
            value: -4.05452
        },
        {
            time: "\t2021-09-16",
            value: -4.06452
        },
        {
            time: "\t2021-09-17",
            value: -4.08452
        },
        {
            time: "\t2021-09-18",
            value: -4.11452
        },
        {
            time: "\t2021-09-19",
            value: -4.12452
        },
        {
            time: "\t2021-09-20",
            value: -4.13452
        },
        {
            time: "\t2021-09-21",
            value: -4.14452
        },
        {
            time: "\t2021-09-22",
            value: -4.15452
        },
        {
            time: "\t2021-09-23",
            value: -4.16452
        },
        {
            time: "\t2021-09-24",
            value: -4.17452
        },
        {
            time: "\t2021-09-25",
            value: -4.18452
        },
        {
            time: "\t2021-09-26",
            value: -4.19452
        },
        {
            time: "\t2021-09-27",
            value: -4.22452
        },
        {
            time: "\t2021-09-28",
            value: -4.23452
        },
        {
            time: "\t2021-09-29",
            value: -4.25452
        },
        {
            time: "\t2021-09-30",
            value: -4.28452
        },
        {
            time: "\t2021-10-01",
            value: -4.29452
        },
        {
            time: "\t2021-10-02",
            value: -4.30452
        },
        {
            time: "\t2021-10-03",
            value: -4.31452
        },
        {
            time: "\t2021-10-04",
            value: -4.37452
        },
        {
            time: "\t2021-10-05",
            value: -4.44452
        },
        {
            time: "\t2021-10-06",
            value: -4.52452
        },
        {
            time: "\t2021-10-07",
            value: -4.61452
        },
        {
            time: "\t2021-10-08",
            value: -4.71452
        },
        {
            time: "\t2021-10-09",
            value: -4.82452
        },
        {
            time: "\t2021-10-10",
            value: -4.94452
        },
        {
            time: "\t2021-10-11",
            value: -5.07452
        },
        {
            time: "\t2021-10-12",
            value: -5.21452
        },
        {
            time: "\t2021-10-13",
            value: -5.36452
        },
        {
            time: "\t2021-10-14",
            value: -5.52452
        },
        {
            time: "\t2021-10-15",
            value: -5.69452
        },
        {
            time: "\t2021-10-16",
            value: -5.87452
        },
        {
            time: "\t2021-10-17",
            value: -6.06452
        },
        {
            time: "\t2021-10-18",
            value: -6.26452
        },
        {
            time: "\t2021-10-19",
            value: -6.44452
        },
        {
            time: "\t2021-10-20",
            value: -6.63452
        },
        {
            time: "\t2021-10-21",
            value: -6.83452
        },
        {
            time: "\t2021-10-22",
            value: -6.84452
        },
        {
            time: "\t2021-10-23",
            value: -6.86452
        },
        {
            time: "\t2021-10-24",
            value: -6.89452
        },
        {
            time: "\t2021-10-25",
            value: -6.93452
        },
        {
            time: "\t2021-10-26",
            value: -6.94452
        },
        {
            time: "\t2021-10-27",
            value: -6.96452
        },
        {
            time: "\t2021-10-28",
            value: -6.99452
        },
        {
            time: "\t2021-10-29",
            value: -7.03452
        },
        {
            time: "\t2021-10-30",
            value: -7.08452
        },
        {
            time: "\t2021-10-31",
            value: -7.14452
        },
        {
            time: "\t2021-11-01",
            value: -7.15452
        },
        {
            time: "\t2021-11-02",
            value: -7.17452
        },
        {
            time: "\t2021-11-03",
            value: -7.18452
        },
        {
            time: "\t2021-11-04",
            value: -7.20452
        },
        {
            time: "\t2021-11-05",
            value: -6.90452
        },
        {
            time: "\t2021-11-06",
            value: -6.60452
        },
        {
            time: "\t2021-11-07",
            value: -6.10452
        },
        {
            time: "\t2021-11-08",
            value: -5.40452
        },
        {
            time: "\t2021-11-09",
            value: -4.70452
        },
        {
            time: "\t2021-11-10",
            value: -4.00452
        },
        {
            time: "\t2021-11-11",
            value: -3.30452
        },
        {
            time: "\t2021-11-12",
            value: -2.60452
        },
        {
            time: "\t2021-11-13",
            value: -2.50452
        },
        {
            time: "\t2021-11-14",
            value: -1.80452
        },
        {
            time: "\t2021-11-15",
            value: -1.10452
        },
        {
            time: "\t2021-11-16",
            value: -.40452
        },
        {
            time: "\t2021-11-17",
            value: -.30452
        },
        {
            time: "\t2021-11-18",
            value: -.10452
        },
        {
            time: "\t2021-11-19",
            value: .59548
        },
        {
            time: "\t2021-11-20",
            value: .19548
        },
        {
            time: "\t2021-11-21",
            value: -.20452
        },
        {
            time: "\t2021-11-22",
            value: -.60452
        },
        {
            time: "\t2021-11-23",
            value: -1.00452
        },
        {
            time: "\t2021-11-24",
            value: -1.40452
        },
        {
            time: "\t2021-11-25",
            value: -2.20452
        },
        {
            time: "\t2021-11-26",
            value: -3.00452
        },
        {
            time: "\t2021-11-27",
            value: -3.80452
        },
        {
            time: "\t2021-11-28",
            value: -4.60452
        },
        {
            time: "\t2021-11-29",
            value: -3.90452
        },
        {
            time: "\t2021-11-30",
            value: -3.20452
        },
        {
            time: "\t2021-12-01",
            value: -2.50452
        },
        {
            time: "\t2021-12-02",
            value: -1.80452
        },
        {
            time: "\t2021-12-03",
            value: -1.70452
        },
        {
            time: "\t2021-12-04",
            value: -1.00452
        },
        {
            time: "\t2021-12-05",
            value: -.70452
        },
        {
            time: "\t2021-12-06",
            value: -.00452
        },
        {
            time: "\t2021-12-07",
            value: .69548
        },
        {
            time: "\t2021-12-08",
            value: 1.39548
        },
        {
            time: "\t2021-12-09",
            value: 1.40548
        },
        {
            time: "\t2021-12-10",
            value: .60548
        },
        {
            time: "\t2021-12-11",
            value: -.19452
        },
        {
            time: "\t2021-12-12",
            value: -.69452
        },
        {
            time: "\t2021-12-13",
            value: -1.49452
        },
        {
            time: "\t2021-12-14",
            value: -2.29452
        },
        {
            time: "\t2021-12-15",
            value: -3.09452
        },
        {
            time: "\t2021-12-16",
            value: -3.89452
        },
        {
            time: "\t2021-12-17",
            value: -4.69452
        },
        {
            time: "\t2021-12-18",
            value: -4.54452
        },
        {
            time: "\t2021-12-19",
            value: -5.34452
        },
        {
            time: "\t2021-12-20",
            value: -5.24452
        },
        {
            time: "\t2021-12-21",
            value: -5.14452
        },
        {
            time: "\t2021-12-22",
            value: -4.99452
        },
        {
            time: "\t2021-12-23",
            value: -4.98452
        },
        {
            time: "\t2021-12-24",
            value: -4.48452
        },
        {
            time: "\t2021-12-25",
            value: -3.98452
        },
        {
            time: "\t2021-12-26",
            value: -3.48452
        },
        {
            time: "\t2021-12-27",
            value: -2.98452
        },
        {
            time: "\t2021-12-28",
            value: -2.38452
        },
        {
            time: "\t2021-12-29",
            value: -1.88452
        },
        {
            time: "\t2021-12-30",
            value: -1.28452
        },
        {
            time: "\t2021-12-31",
            value: -.78452
        },
        {
            time: "\t2022-01-01",
            value: -.28452
        },
        {
            time: "\t2022-01-02",
            value: .21548
        },
        {
            time: "\t2022-01-03",
            value: .81548
        },
        {
            time: "\t2022-01-04",
            value: 1.31548
        },
        {
            time: "\t2022-01-05",
            value: 1.81548
        },
        {
            time: "\t2022-01-06",
            value: 2.31548
        },
        {
            time: "\t2022-01-07",
            value: 1.51548
        },
        {
            time: "\t2022-01-08",
            value: .71548
        },
        {
            time: "\t2022-01-09",
            value: -.08452
        },
        {
            time: "\t2022-01-10",
            value: -.88452
        },
        {
            time: "\t2022-01-11",
            value: -1.68452
        },
        {
            time: "\t2022-01-12",
            value: -1.53452
        },
        {
            time: "\t2022-01-13",
            value: -2.33452
        },
        {
            time: "\t2022-01-14",
            value: -2.23452
        },
        {
            time: "\t2022-01-15",
            value: -3.03452
        },
        {
            time: "\t2022-01-16",
            value: -3.83452
        },
        {
            time: "\t2022-01-17",
            value: -3.33452
        },
        {
            time: "\t2022-01-18",
            value: -2.63452
        },
        {
            time: "\t2022-01-19",
            value: -1.93452
        },
        {
            time: "\t2022-01-20",
            value: -1.23452
        },
        {
            time: "\t2022-01-21",
            value: -.53452
        },
        {
            time: "\t2022-01-22",
            value: .16548
        },
        {
            time: "\t2022-01-23",
            value: .15548
        },
        {
            time: "\t2022-01-24",
            value: .14548
        },
        {
            time: "\t2022-01-25",
            value: .13548
        },
        {
            time: "\t2022-01-26",
            value: .12548
        },
        {
            time: "\t2022-01-27",
            value: .09548
        },
        {
            time: "\t2022-01-28",
            value: .08548
        },
        {
            time: "\t2022-01-29",
            value: .06548
        },
        {
            time: "\t2022-01-30",
            value: .03548
        },
        {
            time: "\t2022-01-31",
            value: .02548
        },
        {
            time: "\t2022-02-01",
            value: .01548
        },
        {
            time: "\t2022-02-02",
            value: .41548
        },
        {
            time: "\t2022-02-03",
            value: .81548
        },
        {
            time: "\t2022-02-04",
            value: 1.21548
        },
        {
            time: "\t2022-02-05",
            value: 1.61548
        },
        {
            time: "\t2022-02-06",
            value: 2.01548
        },
        {
            time: "\t2022-02-07",
            value: 2.41548
        },
        {
            time: "\t2022-02-08",
            value: 2.41548
        },
        {
            time: "\t2022-02-09",
            value: 2.11548
        },
        {
            time: "\t2022-02-10",
            value: 2.10548
        },
        {
            time: "\t2022-02-11",
            value: 1.80548
        },
        {
            time: "\t2022-02-12",
            value: 1.50548
        },
        {
            time: "\t2022-02-13",
            value: 1.49548
        },
        {
            time: "\t2022-02-14",
            value: 1.19548
        },
        {
            time: "\t2022-02-15",
            value: 1.16548
        },
        {
            time: "\t2022-02-16",
            value: .86548
        },
        {
            time: "\t2022-02-17",
            value: .84548
        },
        {
            time: "\t2022-02-18",
            value: .81548
        },
        {
            time: "\t2022-02-19",
            value: .80548
        }]),
        E.setData([{
            time: "\t2019-05-24",
            value: -4.21931
        },
        {
            time: "\t2019-05-25",
            value: -4.22065
        },
        {
            time: "\t2019-05-26",
            value: -4.22273
        },
        {
            time: "\t2019-05-27",
            value: -4.21509
        },
        {
            time: "\t2019-05-28",
            value: -4.2198
        },
        {
            time: "\t2019-05-29",
            value: -4.2163
        },
        {
            time: "\t2019-05-30",
            value: -4.21224
        },
        {
            time: "\t2019-05-31",
            value: -4.2133
        },
        {
            time: "\t2019-06-01",
            value: -4.21886
        },
        {
            time: "\t2019-06-02",
            value: -4.22222
        },
        {
            time: "\t2019-06-03",
            value: -4.20748
        },
        {
            time: "\t2019-06-04",
            value: -4.20159
        },
        {
            time: "\t2019-06-05",
            value: -4.20377
        },
        {
            time: "\t2019-06-06",
            value: -4.20995
        },
        {
            time: "\t2019-06-07",
            value: -4.20849
        },
        {
            time: "\t2019-06-08",
            value: -4.20447
        },
        {
            time: "\t2019-06-09",
            value: -4.19417
        },
        {
            time: "\t2019-06-10",
            value: -4.19223
        },
        {
            time: "\t2019-06-11",
            value: -4.1868
        },
        {
            time: "\t2019-06-12",
            value: -4.19141
        },
        {
            time: "\t2019-06-13",
            value: -4.19353
        },
        {
            time: "\t2019-06-14",
            value: -4.18586
        },
        {
            time: "\t2019-06-15",
            value: -4.17698
        },
        {
            time: "\t2019-06-16",
            value: -4.17678
        },
        {
            time: "\t2019-06-17",
            value: -4.17229
        },
        {
            time: "\t2019-06-18",
            value: -4.17462
        },
        {
            time: "\t2019-06-19",
            value: -4.17424
        },
        {
            time: "\t2019-06-20",
            value: -4.18094
        },
        {
            time: "\t2019-06-21",
            value: -4.17955
        },
        {
            time: "\t2019-06-22",
            value: -4.17858
        },
        {
            time: "\t2019-06-23",
            value: -4.18482
        },
        {
            time: "\t2019-06-24",
            value: -4.17669
        },
        {
            time: "\t2019-06-25",
            value: -4.17472
        },
        {
            time: "\t2019-06-26",
            value: -4.16849
        },
        {
            time: "\t2019-06-27",
            value: -4.1696
        },
        {
            time: "\t2019-06-28",
            value: -4.16863
        },
        {
            time: "\t2019-06-29",
            value: -4.1691
        },
        {
            time: "\t2019-06-30",
            value: -4.17095
        },
        {
            time: "\t2019-07-01",
            value: -4.16548
        },
        {
            time: "\t2019-07-02",
            value: -4.15548
        },
        {
            time: "\t2019-07-03",
            value: -4.13548
        },
        {
            time: "\t2019-07-04",
            value: -4.10548
        },
        {
            time: "\t2019-07-05",
            value: -4.06548
        },
        {
            time: "\t2019-07-06",
            value: -4.05548
        },
        {
            time: "\t2019-07-07",
            value: -4.03548
        },
        {
            time: "\t2019-07-08",
            value: -4.00548
        },
        {
            time: "\t2019-07-09",
            value: -3.96548
        },
        {
            time: "\t2019-07-10",
            value: -3.91548
        },
        {
            time: "\t2019-07-11",
            value: -3.85548
        },
        {
            time: "\t2019-07-12",
            value: -3.78548
        },
        {
            time: "\t2019-07-13",
            value: -3.70548
        },
        {
            time: "\t2019-07-14",
            value: -3.61548
        },
        {
            time: "\t2019-07-15",
            value: -3.51548
        },
        {
            time: "\t2019-07-16",
            value: -3.40548
        },
        {
            time: "\t2019-07-17",
            value: -3.28548
        },
        {
            time: "\t2019-07-18",
            value: -3.15548
        },
        {
            time: "\t2019-07-19",
            value: -3.01548
        },
        {
            time: "\t2019-07-20",
            value: -2.86548
        },
        {
            time: "\t2019-07-21",
            value: -2.70548
        },
        {
            time: "\t2019-07-22",
            value: -2.53548
        },
        {
            time: "\t2019-07-23",
            value: -2.35548
        },
        {
            time: "\t2019-07-24",
            value: -2.16548
        },
        {
            time: "\t2019-07-25",
            value: -1.96548
        },
        {
            time: "\t2019-07-26",
            value: -1.95548
        },
        {
            time: "\t2019-07-27",
            value: -1.93548
        },
        {
            time: "\t2019-07-28",
            value: -1.90548
        },
        {
            time: "\t2019-07-29",
            value: -1.86548
        },
        {
            time: "\t2019-07-30",
            value: -1.85548
        },
        {
            time: "\t2019-07-31",
            value: -1.83548
        },
        {
            time: "\t2019-08-01",
            value: -1.80548
        },
        {
            time: "\t2019-08-02",
            value: -1.76548
        },
        {
            time: "\t2019-08-03",
            value: -1.71548
        },
        {
            time: "\t2019-08-04",
            value: -1.65548
        },
        {
            time: "\t2019-08-05",
            value: -1.58548
        },
        {
            time: "\t2019-08-06",
            value: -1.50548
        },
        {
            time: "\t2019-08-07",
            value: -1.41548
        },
        {
            time: "\t2019-08-08",
            value: -1.31548
        },
        {
            time: "\t2019-08-09",
            value: -1.20548
        },
        {
            time: "\t2019-08-10",
            value: -1.08548
        },
        {
            time: "\t2019-08-11",
            value: -.95548
        },
        {
            time: "\t2019-08-12",
            value: -.81548
        },
        {
            time: "\t2019-08-13",
            value: -.66548
        },
        {
            time: "\t2019-08-14",
            value: -.50548
        },
        {
            time: "\t2019-08-15",
            value: -.33548
        },
        {
            time: "\t2019-08-16",
            value: -.15548
        },
        {
            time: "\t2019-08-17",
            value: .03452
        },
        {
            time: "\t2019-08-18",
            value: .23452
        },
        {
            time: "\t2019-08-19",
            value: .41452
        },
        {
            time: "\t2019-08-20",
            value: .60452
        },
        {
            time: "\t2019-08-21",
            value: .80452
        },
        {
            time: "\t2019-08-22",
            value: .81452
        },
        {
            time: "\t2019-08-23",
            value: .83452
        },
        {
            time: "\t2019-08-24",
            value: .86452
        },
        {
            time: "\t2019-08-25",
            value: .90452
        },
        {
            time: "\t2019-08-26",
            value: .91452
        },
        {
            time: "\t2019-08-27",
            value: .93452
        },
        {
            time: "\t2019-08-28",
            value: .96452
        },
        {
            time: "\t2019-08-29",
            value: 1.00452
        },
        {
            time: "\t2019-08-30",
            value: 1.05452
        },
        {
            time: "\t2019-08-31",
            value: 1.11452
        },
        {
            time: "\t2019-09-01",
            value: 1.12452
        },
        {
            time: "\t2019-09-02",
            value: 1.14452
        },
        {
            time: "\t2019-09-03",
            value: 1.17452
        },
        {
            time: "\t2019-09-04",
            value: 1.21452
        },
        {
            time: "\t2019-09-05",
            value: 1.22452
        },
        {
            time: "\t2019-09-06",
            value: 1.24452
        },
        {
            time: "\t2019-09-07",
            value: 1.25452
        },
        {
            time: "\t2019-09-08",
            value: 1.27452
        },
        {
            time: "\t2019-09-09",
            value: 1.30452
        },
        {
            time: "\t2019-09-10",
            value: 1.34452
        },
        {
            time: "\t2019-09-11",
            value: 1.35452
        },
        {
            time: "\t2019-09-12",
            value: 1.37452
        },
        {
            time: "\t2019-09-13",
            value: 1.40452
        },
        {
            time: "\t2019-09-14",
            value: 1.41452
        },
        {
            time: "\t2019-09-15",
            value: 1.42452
        },
        {
            time: "\t2019-09-16",
            value: 1.43452
        },
        {
            time: "\t2019-09-17",
            value: 1.44452
        },
        {
            time: "\t2019-09-18",
            value: 1.45452
        },
        {
            time: "\t2019-09-19",
            value: 1.46452
        },
        {
            time: "\t2019-09-20",
            value: 1.47452
        },
        {
            time: "\t2019-09-21",
            value: 1.48452
        },
        {
            time: "\t2019-09-22",
            value: 1.50452
        },
        {
            time: "\t2019-09-23",
            value: 1.53452
        },
        {
            time: "\t2019-09-24",
            value: 1.54452
        },
        {
            time: "\t2019-09-25",
            value: 1.56452
        },
        {
            time: "\t2019-09-26",
            value: 1.59452
        },
        {
            time: "\t2019-09-27",
            value: 1.60452
        },
        {
            time: "\t2019-09-28",
            value: 1.61452
        },
        {
            time: "\t2019-09-29",
            value: 1.62452
        },
        {
            time: "\t2019-09-30",
            value: 1.63452
        },
        {
            time: "\t2019-10-01",
            value: 1.64452
        },
        {
            time: "\t2019-10-02",
            value: 1.65452
        },
        {
            time: "\t2019-10-03",
            value: 1.66452
        },
        {
            time: "\t2019-10-04",
            value: 1.67452
        },
        {
            time: "\t2019-10-05",
            value: 1.70452
        },
        {
            time: "\t2019-10-06",
            value: 1.71452
        },
        {
            time: "\t2019-10-07",
            value: 1.73452
        },
        {
            time: "\t2019-10-08",
            value: 1.76452
        },
        {
            time: "\t2019-10-09",
            value: 1.77452
        },
        {
            time: "\t2019-10-10",
            value: 1.78452
        },
        {
            time: "\t2019-10-11",
            value: 1.79452
        },
        {
            time: "\t2019-10-12",
            value: 1.85452
        },
        {
            time: "\t2019-10-13",
            value: 1.92452
        },
        {
            time: "\t2019-10-14",
            value: 2.00452
        },
        {
            time: "\t2019-10-15",
            value: 2.09452
        },
        {
            time: "\t2019-10-16",
            value: 2.19452
        },
        {
            time: "\t2019-10-17",
            value: 2.30452
        },
        {
            time: "\t2019-10-18",
            value: 2.42452
        },
        {
            time: "\t2019-10-19",
            value: 2.55452
        },
        {
            time: "\t2019-10-20",
            value: 2.69452
        },
        {
            time: "\t2019-10-21",
            value: 2.84452
        },
        {
            time: "\t2019-10-22",
            value: 3.00452
        },
        {
            time: "\t2019-10-23",
            value: 3.17452
        },
        {
            time: "\t2019-10-24",
            value: 3.35452
        },
        {
            time: "\t2019-10-25",
            value: 3.54452
        },
        {
            time: "\t2019-10-26",
            value: 3.74452
        },
        {
            time: "\t2019-10-27",
            value: 3.92452
        },
        {
            time: "\t2019-10-28",
            value: 4.11452
        },
        {
            time: "\t2019-10-29",
            value: 4.31452
        },
        {
            time: "\t2019-10-30",
            value: 4.32452
        },
        {
            time: "\t2019-10-31",
            value: 4.34452
        },
        {
            time: "\t2019-11-01",
            value: 4.37452
        },
        {
            time: "\t2019-11-02",
            value: 4.41452
        },
        {
            time: "\t2019-11-03",
            value: 4.42452
        },
        {
            time: "\t2019-11-04",
            value: 4.44452
        },
        {
            time: "\t2019-11-05",
            value: 4.47452
        },
        {
            time: "\t2019-11-06",
            value: 4.51452
        },
        {
            time: "\t2019-11-07",
            value: 4.56452
        },
        {
            time: "\t2019-11-08",
            value: 4.62452
        },
        {
            time: "\t2019-11-09",
            value: 4.63452
        },
        {
            time: "\t2019-11-10",
            value: 4.65452
        },
        {
            time: "\t2019-11-11",
            value: 4.66452
        },
        {
            time: "\t2019-11-12",
            value: 4.68452
        },
        {
            time: "\t2019-11-13",
            value: 4.38452
        },
        {
            time: "\t2019-11-14",
            value: 4.08452
        },
        {
            time: "\t2019-11-15",
            value: 3.58452
        },
        {
            time: "\t2019-11-16",
            value: 2.88452
        },
        {
            time: "\t2019-11-17",
            value: 2.18452
        },
        {
            time: "\t2019-11-18",
            value: 1.48452
        },
        {
            time: "\t2019-11-19",
            value: .78452
        },
        {
            time: "\t2019-11-20",
            value: .08452
        },
        {
            time: "\t2019-11-21",
            value: -.01548
        },
        {
            time: "\t2019-11-22",
            value: -.71548
        },
        {
            time: "\t2019-11-23",
            value: -1.41548
        },
        {
            time: "\t2019-11-24",
            value: -2.11548
        },
        {
            time: "\t2019-11-25",
            value: -2.21548
        },
        {
            time: "\t2019-11-26",
            value: -2.41548
        },
        {
            time: "\t2019-11-27",
            value: -3.11548
        },
        {
            time: "\t2019-11-28",
            value: -2.71548
        },
        {
            time: "\t2019-11-29",
            value: -2.31548
        },
        {
            time: "\t2019-11-30",
            value: -1.91548
        },
        {
            time: "\t2019-12-01",
            value: -1.51548
        },
        {
            time: "\t2019-12-02",
            value: -1.11548
        },
        {
            time: "\t2019-12-03",
            value: -.31548
        },
        {
            time: "\t2019-12-04",
            value: .48452
        },
        {
            time: "\t2019-12-05",
            value: 1.28452
        },
        {
            time: "\t2019-12-06",
            value: 2.08452
        },
        {
            time: "\t2019-12-07",
            value: 1.38452
        },
        {
            time: "\t2019-12-08",
            value: .68452
        },
        {
            time: "\t2019-12-09",
            value: -.01548
        },
        {
            time: "\t2019-12-10",
            value: -.71548
        },
        {
            time: "\t2019-12-11",
            value: -.81548
        },
        {
            time: "\t2019-12-12",
            value: -1.51548
        },
        {
            time: "\t2019-12-13",
            value: -1.81548
        },
        {
            time: "\t2019-12-14",
            value: -2.51548
        },
        {
            time: "\t2019-12-15",
            value: -3.21548
        },
        {
            time: "\t2019-12-16",
            value: -3.91548
        },
        {
            time: "\t2019-12-17",
            value: -3.92548
        },
        {
            time: "\t2019-12-18",
            value: -3.12548
        },
        {
            time: "\t2019-12-19",
            value: -2.32548
        },
        {
            time: "\t2019-12-20",
            value: -1.82548
        },
        {
            time: "\t2019-12-21",
            value: -1.02548
        },
        {
            time: "\t2019-12-22",
            value: -.22548
        },
        {
            time: "\t2019-12-23",
            value: .57452
        },
        {
            time: "\t2019-12-24",
            value: 1.37452
        },
        {
            time: "\t2019-12-25",
            value: 2.17452
        },
        {
            time: "\t2019-12-26",
            value: 2.02452
        },
        {
            time: "\t2019-12-27",
            value: 2.82452
        },
        {
            time: "\t2019-12-28",
            value: 2.72452
        },
        {
            time: "\t2019-12-29",
            value: 2.62452
        },
        {
            time: "\t2019-12-30",
            value: 2.47452
        },
        {
            time: "\t2019-12-31",
            value: 2.46452
        },
        {
            time: "\t2020-01-01",
            value: 1.96452
        },
        {
            time: "\t2020-01-02",
            value: 1.46452
        },
        {
            time: "\t2020-01-03",
            value: .96452
        },
        {
            time: "\t2020-01-04",
            value: .46452
        },
        {
            time: "\t2020-01-05",
            value: -.13548
        },
        {
            time: "\t2020-01-06",
            value: -.63548
        },
        {
            time: "\t2020-01-07",
            value: -1.23548
        },
        {
            time: "\t2020-01-08",
            value: -1.73548
        },
        {
            time: "\t2020-01-09",
            value: -2.23548
        },
        {
            time: "\t2020-01-10",
            value: -2.73548
        },
        {
            time: "\t2020-01-11",
            value: -3.33548
        },
        {
            time: "\t2020-01-12",
            value: -3.83548
        },
        {
            time: "\t2020-01-13",
            value: -4.33548
        },
        {
            time: "\t2020-01-14",
            value: -4.83548
        },
        {
            time: "\t2020-01-15",
            value: -4.03548
        },
        {
            time: "\t2020-01-16",
            value: -3.23548
        },
        {
            time: "\t2020-01-17",
            value: -2.43548
        },
        {
            time: "\t2020-01-18",
            value: -1.63548
        },
        {
            time: "\t2020-01-19",
            value: -.83548
        },
        {
            time: "\t2020-01-20",
            value: -.98548
        },
        {
            time: "\t2020-01-21",
            value: -.18548
        },
        {
            time: "\t2020-01-22",
            value: -.28548
        },
        {
            time: "\t2020-01-23",
            value: .51452
        },
        {
            time: "\t2020-01-24",
            value: 1.31452
        },
        {
            time: "\t2020-01-25",
            value: .81452
        },
        {
            time: "\t2020-01-26",
            value: .11452
        },
        {
            time: "\t2020-01-27",
            value: -.58548
        },
        {
            time: "\t2020-01-28",
            value: -1.28548
        },
        {
            time: "\t2020-01-29",
            value: -1.98548
        },
        {
            time: "\t2020-01-30",
            value: -2.68548
        },
        {
            time: "\t2020-01-31",
            value: -2.67548
        },
        {
            time: "\t2020-02-01",
            value: -2.66548
        },
        {
            time: "\t2020-02-02",
            value: -2.65548
        },
        {
            time: "\t2020-02-03",
            value: -2.64548
        },
        {
            time: "\t2020-02-04",
            value: -2.61548
        },
        {
            time: "\t2020-02-05",
            value: -2.60548
        },
        {
            time: "\t2020-02-06",
            value: -2.58548
        },
        {
            time: "\t2020-02-07",
            value: -2.55548
        },
        {
            time: "\t2020-02-08",
            value: -2.54548
        },
        {
            time: "\t2020-02-09",
            value: -2.53548
        },
        {
            time: "\t2020-02-10",
            value: -2.93548
        },
        {
            time: "\t2020-02-11",
            value: -3.33548
        },
        {
            time: "\t2020-02-12",
            value: -3.73548
        },
        {
            time: "\t2020-02-13",
            value: -4.13548
        },
        {
            time: "\t2020-02-14",
            value: -4.53548
        },
        {
            time: "\t2020-02-15",
            value: -4.93548
        },
        {
            time: "\t2020-02-16",
            value: -4.93548
        },
        {
            time: "\t2020-02-17",
            value: -4.63548
        },
        {
            time: "\t2020-02-18",
            value: -4.62548
        },
        {
            time: "\t2020-02-19",
            value: -4.32548
        },
        {
            time: "\t2020-02-20",
            value: -4.02548
        },
        {
            time: "\t2020-02-21",
            value: -4.01548
        },
        {
            time: "\t2020-02-22",
            value: -3.71548
        },
        {
            time: "\t2020-02-23",
            value: -3.68548
        },
        {
            time: "\t2020-02-24",
            value: -3.38548
        },
        {
            time: "\t2020-02-25",
            value: -3.36548
        },
        {
            time: "\t2020-02-26",
            value: -3.33548
        },
        {
            time: "\t2020-02-27",
            value: -3.32548
        },
        {
            time: "\t2020-02-28",
            value: -3.31548
        },
        {
            time: "\t2020-02-29",
            value: -3.29548
        },
        {
            time: "\t2020-03-01",
            value: -3.26548
        },
        {
            time: "\t2020-03-02",
            value: -3.22548
        },
        {
            time: "\t2020-03-03",
            value: -3.21548
        },
        {
            time: "\t2020-03-04",
            value: -3.19548
        },
        {
            time: "\t2020-03-05",
            value: -3.16548
        },
        {
            time: "\t2020-03-06",
            value: -3.12548
        },
        {
            time: "\t2020-03-07",
            value: -3.07548
        },
        {
            time: "\t2020-03-08",
            value: -3.01548
        },
        {
            time: "\t2020-03-09",
            value: -2.94548
        },
        {
            time: "\t2020-03-10",
            value: -2.86548
        },
        {
            time: "\t2020-03-11",
            value: -2.77548
        },
        {
            time: "\t2020-03-12",
            value: -2.67548
        },
        {
            time: "\t2020-03-13",
            value: -2.56548
        },
        {
            time: "\t2020-03-14",
            value: -2.44548
        },
        {
            time: "\t2020-03-15",
            value: -2.31548
        },
        {
            time: "\t2020-03-16",
            value: -2.17548
        },
        {
            time: "\t2020-03-17",
            value: -2.02548
        },
        {
            time: "\t2020-03-18",
            value: -1.86548
        },
        {
            time: "\t2020-03-19",
            value: -1.69548
        },
        {
            time: "\t2020-03-20",
            value: -1.51548
        },
        {
            time: "\t2020-03-21",
            value: -1.32548
        },
        {
            time: "\t2020-03-22",
            value: -1.12548
        },
        {
            time: "\t2020-03-23",
            value: -1.11548
        },
        {
            time: "\t2020-03-24",
            value: -1.09548
        },
        {
            time: "\t2020-03-25",
            value: -1.06548
        },
        {
            time: "\t2020-03-26",
            value: -1.02548
        },
        {
            time: "\t2020-03-27",
            value: -1.01548
        },
        {
            time: "\t2020-03-28",
            value: -.99548
        },
        {
            time: "\t2020-03-29",
            value: -.96548
        },
        {
            time: "\t2020-03-30",
            value: -.92548
        },
        {
            time: "\t2020-03-31",
            value: -.87548
        },
        {
            time: "\t2020-04-01",
            value: -.81548
        },
        {
            time: "\t2020-04-02",
            value: -.74548
        },
        {
            time: "\t2020-04-03",
            value: -.66548
        },
        {
            time: "\t2020-04-04",
            value: -.57548
        },
        {
            time: "\t2020-04-05",
            value: -.47548
        },
        {
            time: "\t2020-04-06",
            value: -.36548
        },
        {
            time: "\t2020-04-07",
            value: -.24548
        },
        {
            time: "\t2020-04-08",
            value: -.11548
        },
        {
            time: "\t2020-04-09",
            value: .02452
        },
        {
            time: "\t2020-04-10",
            value: .17452
        },
        {
            time: "\t2020-04-11",
            value: .33452
        },
        {
            time: "\t2020-04-12",
            value: .50452
        },
        {
            time: "\t2020-04-13",
            value: .68452
        },
        {
            time: "\t2020-04-14",
            value: .87452
        },
        {
            time: "\t2020-04-15",
            value: 1.07452
        },
        {
            time: "\t2020-04-16",
            value: 1.25452
        },
        {
            time: "\t2020-04-17",
            value: 1.44452
        },
        {
            time: "\t2020-04-18",
            value: 1.64452
        },
        {
            time: "\t2020-04-19",
            value: 1.65452
        },
        {
            time: "\t2020-04-20",
            value: 1.67452
        },
        {
            time: "\t2020-04-21",
            value: 1.70452
        },
        {
            time: "\t2020-04-22",
            value: 1.74452
        },
        {
            time: "\t2020-04-23",
            value: 1.75452
        },
        {
            time: "\t2020-04-24",
            value: 1.77452
        },
        {
            time: "\t2020-04-25",
            value: 1.80452
        },
        {
            time: "\t2020-04-26",
            value: 1.84452
        },
        {
            time: "\t2020-04-27",
            value: 1.89452
        },
        {
            time: "\t2020-04-28",
            value: 1.95452
        },
        {
            time: "\t2020-04-29",
            value: 1.96452
        },
        {
            time: "\t2020-04-30",
            value: 1.98452
        },
        {
            time: "\t2020-05-01",
            value: 2.01452
        },
        {
            time: "\t2020-05-02",
            value: 2.05452
        },
        {
            time: "\t2020-05-03",
            value: 2.06452
        },
        {
            time: "\t2020-05-04",
            value: 2.08452
        },
        {
            time: "\t2020-05-05",
            value: 2.09452
        },
        {
            time: "\t2020-05-06",
            value: 2.11452
        },
        {
            time: "\t2020-05-07",
            value: 2.14452
        },
        {
            time: "\t2020-05-08",
            value: 2.18452
        },
        {
            time: "\t2020-05-09",
            value: 2.19452
        },
        {
            time: "\t2020-05-10",
            value: 2.21452
        },
        {
            time: "\t2020-05-11",
            value: 2.24452
        },
        {
            time: "\t2020-05-12",
            value: 2.25452
        },
        {
            time: "\t2020-05-13",
            value: 2.26452
        },
        {
            time: "\t2020-05-14",
            value: 2.27452
        },
        {
            time: "\t2020-05-15",
            value: 2.28452
        },
        {
            time: "\t2020-05-16",
            value: 2.29452
        },
        {
            time: "\t2020-05-17",
            value: 2.30452
        },
        {
            time: "\t2020-05-18",
            value: 2.31452
        },
        {
            time: "\t2020-05-19",
            value: 2.32452
        },
        {
            time: "\t2020-05-20",
            value: 2.34452
        },
        {
            time: "\t2020-05-21",
            value: 2.37452
        },
        {
            time: "\t2020-05-22",
            value: 2.38452
        },
        {
            time: "\t2020-05-23",
            value: 2.40452
        },
        {
            time: "\t2020-05-24",
            value: 2.43452
        },
        {
            time: "\t2020-05-25",
            value: 2.44452
        },
        {
            time: "\t2020-05-26",
            value: 2.45452
        },
        {
            time: "\t2020-05-27",
            value: 2.46452
        },
        {
            time: "\t2020-05-28",
            value: 2.47452
        },
        {
            time: "\t2020-05-29",
            value: 2.48452
        },
        {
            time: "\t2020-05-30",
            value: 2.49452
        },
        {
            time: "\t2020-05-31",
            value: 2.50452
        },
        {
            time: "\t2020-06-01",
            value: 2.51452
        },
        {
            time: "\t2020-06-02",
            value: 2.54452
        },
        {
            time: "\t2020-06-03",
            value: 2.55452
        },
        {
            time: "\t2020-06-04",
            value: 2.57452
        },
        {
            time: "\t2020-06-05",
            value: 2.60452
        },
        {
            time: "\t2020-06-06",
            value: 2.61452
        },
        {
            time: "\t2020-06-07",
            value: 2.62452
        },
        {
            time: "\t2020-06-08",
            value: 2.63452
        },
        {
            time: "\t2020-06-09",
            value: 2.69452
        },
        {
            time: "\t2020-06-10",
            value: 2.76452
        },
        {
            time: "\t2020-06-11",
            value: 2.84452
        },
        {
            time: "\t2020-06-12",
            value: 2.93452
        },
        {
            time: "\t2020-06-13",
            value: 3.03452
        },
        {
            time: "\t2020-06-14",
            value: 3.14452
        },
        {
            time: "\t2020-06-15",
            value: 3.26452
        },
        {
            time: "\t2020-06-16",
            value: 3.39452
        },
        {
            time: "\t2020-06-17",
            value: 3.53452
        },
        {
            time: "\t2020-06-18",
            value: 3.68452
        },
        {
            time: "\t2020-06-19",
            value: 3.84452
        },
        {
            time: "\t2020-06-20",
            value: 4.01452
        },
        {
            time: "\t2020-06-21",
            value: 4.19452
        },
        {
            time: "\t2020-06-22",
            value: 4.38452
        },
        {
            time: "\t2020-06-23",
            value: 4.58452
        },
        {
            time: "\t2020-06-24",
            value: 4.76452
        },
        {
            time: "\t2020-06-25",
            value: 4.95452
        },
        {
            time: "\t2020-06-26",
            value: 5.15452
        },
        {
            time: "\t2020-06-27",
            value: 5.16452
        },
        {
            time: "\t2020-06-28",
            value: 5.18452
        },
        {
            time: "\t2020-06-29",
            value: 5.21452
        },
        {
            time: "\t2020-06-30",
            value: 5.25452
        },
        {
            time: "\t2020-07-01",
            value: 5.26452
        },
        {
            time: "\t2020-07-02",
            value: 5.28452
        },
        {
            time: "\t2020-07-03",
            value: 5.31452
        },
        {
            time: "\t2020-07-04",
            value: 5.35452
        },
        {
            time: "\t2020-07-05",
            value: 5.40452
        },
        {
            time: "\t2020-07-06",
            value: 5.46452
        },
        {
            time: "\t2020-07-07",
            value: 5.47452
        },
        {
            time: "\t2020-07-08",
            value: 5.49452
        },
        {
            time: "\t2020-07-09",
            value: 5.50452
        },
        {
            time: "\t2020-07-10",
            value: 5.52452
        },
        {
            time: "\t2020-07-11",
            value: 5.22452
        },
        {
            time: "\t2020-07-12",
            value: 4.92452
        },
        {
            time: "\t2020-07-13",
            value: 4.42452
        },
        {
            time: "\t2020-07-14",
            value: 3.72452
        },
        {
            time: "\t2020-07-15",
            value: 3.02452
        },
        {
            time: "\t2020-07-16",
            value: 2.32452
        },
        {
            time: "\t2020-07-17",
            value: 1.62452
        },
        {
            time: "\t2020-07-18",
            value: .92452
        },
        {
            time: "\t2020-07-19",
            value: .82452
        },
        {
            time: "\t2020-07-20",
            value: .12452
        },
        {
            time: "\t2020-07-21",
            value: -.57548
        },
        {
            time: "\t2020-07-22",
            value: -1.27548
        },
        {
            time: "\t2020-07-23",
            value: -1.37548
        },
        {
            time: "\t2020-07-24",
            value: -1.57548
        },
        {
            time: "\t2020-07-25",
            value: -2.27548
        },
        {
            time: "\t2020-07-26",
            value: -1.87548
        },
        {
            time: "\t2020-07-27",
            value: -1.47548
        },
        {
            time: "\t2020-07-28",
            value: -1.07548
        },
        {
            time: "\t2020-07-29",
            value: -.67548
        },
        {
            time: "\t2020-07-30",
            value: -.27548
        },
        {
            time: "\t2020-07-31",
            value: .52452
        },
        {
            time: "\t2020-08-01",
            value: 1.32452
        },
        {
            time: "\t2020-08-02",
            value: 2.12452
        },
        {
            time: "\t2020-08-03",
            value: 2.92452
        },
        {
            time: "\t2020-08-04",
            value: 2.22452
        },
        {
            time: "\t2020-08-05",
            value: 1.52452
        },
        {
            time: "\t2020-08-06",
            value: .82452
        },
        {
            time: "\t2020-08-07",
            value: .12452
        },
        {
            time: "\t2020-08-08",
            value: .02452
        },
        {
            time: "\t2020-08-09",
            value: -.67548
        },
        {
            time: "\t2020-08-10",
            value: -.97548
        },
        {
            time: "\t2020-08-11",
            value: -1.67548
        },
        {
            time: "\t2020-08-12",
            value: -2.37548
        },
        {
            time: "\t2020-08-13",
            value: -3.07548
        },
        {
            time: "\t2020-08-14",
            value: -3.08548
        },
        {
            time: "\t2020-08-15",
            value: -2.28548
        },
        {
            time: "\t2020-08-16",
            value: -1.48548
        },
        {
            time: "\t2020-08-17",
            value: -.98548
        },
        {
            time: "\t2020-08-18",
            value: -.18548
        },
        {
            time: "\t2020-08-19",
            value: .61452
        },
        {
            time: "\t2020-08-20",
            value: 1.41452
        },
        {
            time: "\t2020-08-21",
            value: 2.21452
        },
        {
            time: "\t2020-08-22",
            value: 3.01452
        },
        {
            time: "\t2020-08-23",
            value: 2.86452
        },
        {
            time: "\t2020-08-24",
            value: 3.66452
        },
        {
            time: "\t2020-08-25",
            value: 3.56452
        },
        {
            time: "\t2020-08-26",
            value: 3.46452
        },
        {
            time: "\t2020-08-27",
            value: 3.31452
        },
        {
            time: "\t2020-08-28",
            value: 3.30452
        },
        {
            time: "\t2020-08-29",
            value: 2.80452
        },
        {
            time: "\t2020-08-30",
            value: 2.30452
        },
        {
            time: "\t2020-08-31",
            value: 1.80452
        },
        {
            time: "\t2020-09-01",
            value: 1.30452
        },
        {
            time: "\t2020-09-02",
            value: .70452
        },
        {
            time: "\t2020-09-03",
            value: .20452
        },
        {
            time: "\t2020-09-04",
            value: -.39548
        },
        {
            time: "\t2020-09-05",
            value: -.89548
        },
        {
            time: "\t2020-09-06",
            value: -1.39548
        },
        {
            time: "\t2020-09-07",
            value: -1.89548
        },
        {
            time: "\t2020-09-08",
            value: -2.49548
        },
        {
            time: "\t2020-09-09",
            value: -2.99548
        },
        {
            time: "\t2020-09-10",
            value: -3.49548
        },
        {
            time: "\t2020-09-11",
            value: -3.99548
        },
        {
            time: "\t2020-09-12",
            value: -3.19548
        },
        {
            time: "\t2020-09-13",
            value: -2.39548
        },
        {
            time: "\t2020-09-14",
            value: -1.59548
        },
        {
            time: "\t2020-09-15",
            value: -.79548
        },
        {
            time: "\t2020-09-16",
            value: .00452
        },
        {
            time: "\t2020-09-17",
            value: -.14548
        },
        {
            time: "\t2020-09-18",
            value: .65452
        },
        {
            time: "\t2020-09-19",
            value: .55452
        },
        {
            time: "\t2020-09-20",
            value: 1.35452
        },
        {
            time: "\t2020-09-21",
            value: 2.15452
        },
        {
            time: "\t2020-09-22",
            value: 1.65452
        },
        {
            time: "\t2020-09-23",
            value: .95452
        },
        {
            time: "\t2020-09-24",
            value: .25452
        },
        {
            time: "\t2020-09-25",
            value: -.44548
        },
        {
            time: "\t2020-09-26",
            value: -1.14548
        },
        {
            time: "\t2020-09-27",
            value: -1.84548
        },
        {
            time: "\t2020-09-28",
            value: -1.83548
        },
        {
            time: "\t2020-09-29",
            value: -1.82548
        },
        {
            time: "\t2020-09-30",
            value: -1.81548
        },
        {
            time: "\t2020-10-01",
            value: -1.80548
        },
        {
            time: "\t2020-10-02",
            value: -1.77548
        },
        {
            time: "\t2020-10-03",
            value: -1.76548
        },
        {
            time: "\t2020-10-04",
            value: -1.74548
        },
        {
            time: "\t2020-10-05",
            value: -1.71548
        },
        {
            time: "\t2020-10-06",
            value: -1.70548
        },
        {
            time: "\t2020-10-07",
            value: -1.69548
        },
        {
            time: "\t2020-10-08",
            value: -2.09548
        },
        {
            time: "\t2020-10-09",
            value: -2.49548
        },
        {
            time: "\t2020-10-10",
            value: -2.89548
        },
        {
            time: "\t2020-10-11",
            value: -3.29548
        },
        {
            time: "\t2020-10-12",
            value: -3.69548
        },
        {
            time: "\t2020-10-13",
            value: -4.09548
        },
        {
            time: "\t2020-10-14",
            value: -4.09548
        },
        {
            time: "\t2020-10-15",
            value: -3.79548
        },
        {
            time: "\t2020-10-16",
            value: -3.78548
        },
        {
            time: "\t2020-10-17",
            value: -3.48548
        },
        {
            time: "\t2020-10-18",
            value: -3.18548
        },
        {
            time: "\t2020-10-19",
            value: -3.17548
        },
        {
            time: "\t2020-10-20",
            value: -2.87548
        },
        {
            time: "\t2020-10-21",
            value: -2.84548
        },
        {
            time: "\t2020-10-22",
            value: -2.54548
        },
        {
            time: "\t2020-10-23",
            value: -2.52548
        },
        {
            time: "\t2020-10-24",
            value: -2.49548
        },
        {
            time: "\t2020-10-25",
            value: -2.48548
        },
        {
            time: "\t2020-10-26",
            value: -2.47548
        },
        {
            time: "\t2020-10-27",
            value: -2.45548
        },
        {
            time: "\t2020-10-28",
            value: -2.42548
        },
        {
            time: "\t2020-10-29",
            value: -2.38548
        },
        {
            time: "\t2020-10-30",
            value: -2.37548
        },
        {
            time: "\t2020-10-31",
            value: -2.35548
        },
        {
            time: "\t2020-11-01",
            value: -2.32548
        },
        {
            time: "\t2020-11-02",
            value: -2.28548
        },
        {
            time: "\t2020-11-03",
            value: -2.23548
        },
        {
            time: "\t2020-11-04",
            value: -2.17548
        },
        {
            time: "\t2020-11-05",
            value: -2.10548
        },
        {
            time: "\t2020-11-06",
            value: -2.02548
        },
        {
            time: "\t2020-11-07",
            value: -1.93548
        },
        {
            time: "\t2020-11-08",
            value: -1.83548
        },
        {
            time: "\t2020-11-09",
            value: -1.72548
        },
        {
            time: "\t2020-11-10",
            value: -1.60548
        },
        {
            time: "\t2020-11-11",
            value: -1.47548
        },
        {
            time: "\t2020-11-12",
            value: -1.33548
        },
        {
            time: "\t2020-11-13",
            value: -1.18548
        },
        {
            time: "\t2020-11-14",
            value: -1.02548
        },
        {
            time: "\t2020-11-15",
            value: -.85548
        },
        {
            time: "\t2020-11-16",
            value: -.67548
        },
        {
            time: "\t2020-11-17",
            value: -.48548
        },
        {
            time: "\t2020-11-18",
            value: -.28548
        },
        {
            time: "\t2020-11-19",
            value: -.27548
        },
        {
            time: "\t2020-11-20",
            value: -.25548
        },
        {
            time: "\t2020-11-21",
            value: -.22548
        },
        {
            time: "\t2020-11-22",
            value: -.18548
        },
        {
            time: "\t2020-11-23",
            value: -.17548
        },
        {
            time: "\t2020-11-24",
            value: -.15548
        },
        {
            time: "\t2020-11-25",
            value: -.12548
        },
        {
            time: "\t2020-11-26",
            value: -.08548
        },
        {
            time: "\t2020-11-27",
            value: -.03548
        },
        {
            time: "\t2020-11-28",
            value: .02452
        },
        {
            time: "\t2020-11-29",
            value: .09452
        },
        {
            time: "\t2020-11-30",
            value: .17452
        },
        {
            time: "\t2020-12-01",
            value: .26452
        },
        {
            time: "\t2020-12-02",
            value: .36452
        },
        {
            time: "\t2020-12-03",
            value: .47452
        },
        {
            time: "\t2020-12-04",
            value: .59452
        },
        {
            time: "\t2020-12-05",
            value: .72452
        },
        {
            time: "\t2020-12-06",
            value: .86452
        },
        {
            time: "\t2020-12-07",
            value: 1.01452
        },
        {
            time: "\t2020-12-08",
            value: 1.17452
        },
        {
            time: "\t2020-12-09",
            value: 1.34452
        },
        {
            time: "\t2020-12-10",
            value: 1.52452
        },
        {
            time: "\t2020-12-11",
            value: 1.71452
        },
        {
            time: "\t2020-12-12",
            value: 1.91452
        },
        {
            time: "\t2020-12-13",
            value: 2.09452
        },
        {
            time: "\t2020-12-14",
            value: 2.28452
        },
        {
            time: "\t2020-12-15",
            value: 2.48452
        },
        {
            time: "\t2020-12-16",
            value: 2.49452
        },
        {
            time: "\t2020-12-17",
            value: 2.51452
        },
        {
            time: "\t2020-12-18",
            value: 2.54452
        },
        {
            time: "\t2020-12-19",
            value: 2.58452
        },
        {
            time: "\t2020-12-20",
            value: 2.59452
        },
        {
            time: "\t2020-12-21",
            value: 2.61452
        },
        {
            time: "\t2020-12-22",
            value: 2.64452
        },
        {
            time: "\t2020-12-23",
            value: 2.68452
        },
        {
            time: "\t2020-12-24",
            value: 2.73452
        },
        {
            time: "\t2020-12-25",
            value: 2.79452
        },
        {
            time: "\t2020-12-26",
            value: 2.80452
        },
        {
            time: "\t2020-12-27",
            value: 2.82452
        },
        {
            time: "\t2020-12-28",
            value: 2.85452
        },
        {
            time: "\t2020-12-29",
            value: 2.89452
        },
        {
            time: "\t2020-12-30",
            value: 2.90452
        },
        {
            time: "\t2020-12-31",
            value: 2.92452
        },
        {
            time: "\t2021-01-01",
            value: 2.93452
        },
        {
            time: "\t2021-01-02",
            value: 2.95452
        },
        {
            time: "\t2021-01-03",
            value: 2.98452
        },
        {
            time: "\t2021-01-04",
            value: 3.02452
        },
        {
            time: "\t2021-01-05",
            value: 3.03452
        },
        {
            time: "\t2021-01-06",
            value: 3.05452
        },
        {
            time: "\t2021-01-07",
            value: 3.08452
        },
        {
            time: "\t2021-01-08",
            value: 3.09452
        },
        {
            time: "\t2021-01-09",
            value: 3.10452
        },
        {
            time: "\t2021-01-10",
            value: 3.11452
        },
        {
            time: "\t2021-01-11",
            value: 3.12452
        },
        {
            time: "\t2021-01-12",
            value: 3.13452
        },
        {
            time: "\t2021-01-13",
            value: 3.14452
        },
        {
            time: "\t2021-01-14",
            value: 3.15452
        },
        {
            time: "\t2021-01-15",
            value: 3.16452
        },
        {
            time: "\t2021-01-16",
            value: 3.18452
        },
        {
            time: "\t2021-01-17",
            value: 3.21452
        },
        {
            time: "\t2021-01-18",
            value: 3.22452
        },
        {
            time: "\t2021-01-19",
            value: 3.24452
        },
        {
            time: "\t2021-01-20",
            value: 3.27452
        },
        {
            time: "\t2021-01-21",
            value: 3.28452
        },
        {
            time: "\t2021-01-22",
            value: 3.29452
        },
        {
            time: "\t2021-01-23",
            value: 3.30452
        },
        {
            time: "\t2021-01-24",
            value: 3.31452
        },
        {
            time: "\t2021-01-25",
            value: 3.32452
        },
        {
            time: "\t2021-01-26",
            value: 3.33452
        },
        {
            time: "\t2021-01-27",
            value: 3.34452
        },
        {
            time: "\t2021-01-28",
            value: 3.35452
        },
        {
            time: "\t2021-01-29",
            value: 3.38452
        },
        {
            time: "\t2021-01-30",
            value: 3.39452
        },
        {
            time: "\t2021-01-31",
            value: 3.41452
        },
        {
            time: "\t2021-02-01",
            value: 3.44452
        },
        {
            time: "\t2021-02-02",
            value: 3.45452
        },
        {
            time: "\t2021-02-03",
            value: 3.46452
        },
        {
            time: "\t2021-02-04",
            value: 3.47452
        },
        {
            time: "\t2021-02-05",
            value: 3.53452
        },
        {
            time: "\t2021-02-06",
            value: 3.60452
        },
        {
            time: "\t2021-02-07",
            value: 3.68452
        },
        {
            time: "\t2021-02-08",
            value: 3.77452
        },
        {
            time: "\t2021-02-09",
            value: 3.87452
        },
        {
            time: "\t2021-02-10",
            value: 3.98452
        },
        {
            time: "\t2021-02-11",
            value: 4.10452
        },
        {
            time: "\t2021-02-12",
            value: 4.23452
        },
        {
            time: "\t2021-02-13",
            value: 4.37452
        },
        {
            time: "\t2021-02-14",
            value: 4.52452
        },
        {
            time: "\t2021-02-15",
            value: 4.68452
        },
        {
            time: "\t2021-02-16",
            value: 4.85452
        },
        {
            time: "\t2021-02-17",
            value: 5.03452
        },
        {
            time: "\t2021-02-18",
            value: 5.22452
        },
        {
            time: "\t2021-02-19",
            value: 5.42452
        },
        {
            time: "\t2021-02-20",
            value: 5.60452
        },
        {
            time: "\t2021-02-21",
            value: 5.79452
        },
        {
            time: "\t2021-02-22",
            value: 5.99452
        },
        {
            time: "\t2021-02-23",
            value: 6.00452
        },
        {
            time: "\t2021-02-24",
            value: 6.02452
        },
        {
            time: "\t2021-02-25",
            value: 6.05452
        },
        {
            time: "\t2021-02-26",
            value: 6.09452
        },
        {
            time: "\t2021-02-27",
            value: 6.10452
        },
        {
            time: "\t2021-02-28",
            value: 6.12452
        },
        {
            time: "\t2021-03-01",
            value: 6.15452
        },
        {
            time: "\t2021-03-02",
            value: 6.19452
        },
        {
            time: "\t2021-03-03",
            value: 6.24452
        },
        {
            time: "\t2021-03-04",
            value: 6.30452
        },
        {
            time: "\t2021-03-05",
            value: 6.31452
        },
        {
            time: "\t2021-03-06",
            value: 6.33452
        },
        {
            time: "\t2021-03-07",
            value: 6.34452
        },
        {
            time: "\t2021-03-08",
            value: 6.36452
        },
        {
            time: "\t2021-03-09",
            value: 6.06452
        },
        {
            time: "\t2021-03-10",
            value: 5.76452
        },
        {
            time: "\t2021-03-11",
            value: 5.26452
        },
        {
            time: "\t2021-03-12",
            value: 4.56452
        },
        {
            time: "\t2021-03-13",
            value: 3.86452
        },
        {
            time: "\t2021-03-14",
            value: 3.16452
        },
        {
            time: "\t2021-03-15",
            value: 2.46452
        },
        {
            time: "\t2021-03-16",
            value: 1.76452
        },
        {
            time: "\t2021-03-17",
            value: 1.66452
        },
        {
            time: "\t2021-03-18",
            value: .96452
        },
        {
            time: "\t2021-03-19",
            value: .26452
        },
        {
            time: "\t2021-03-20",
            value: -.43548
        },
        {
            time: "\t2021-03-21",
            value: -.53548
        },
        {
            time: "\t2021-03-22",
            value: -.73548
        },
        {
            time: "\t2021-03-23",
            value: -1.43548
        },
        {
            time: "\t2021-03-24",
            value: -1.03548
        },
        {
            time: "\t2021-03-25",
            value: -.63548
        },
        {
            time: "\t2021-03-26",
            value: -.23548
        },
        {
            time: "\t2021-03-27",
            value: .16452
        },
        {
            time: "\t2021-03-28",
            value: .56452
        },
        {
            time: "\t2021-03-29",
            value: 1.36452
        },
        {
            time: "\t2021-03-30",
            value: 2.16452
        },
        {
            time: "\t2021-03-31",
            value: 2.96452
        },
        {
            time: "\t2021-04-01",
            value: 3.76452
        },
        {
            time: "\t2021-04-02",
            value: 3.06452
        },
        {
            time: "\t2021-04-03",
            value: 2.36452
        },
        {
            time: "\t2021-04-04",
            value: 1.66452
        },
        {
            time: "\t2021-04-05",
            value: .96452
        },
        {
            time: "\t2021-04-06",
            value: .86452
        },
        {
            time: "\t2021-04-07",
            value: .16452
        },
        {
            time: "\t2021-04-08",
            value: -.13548
        },
        {
            time: "\t2021-04-09",
            value: -.83548
        },
        {
            time: "\t2021-04-10",
            value: -1.53548
        },
        {
            time: "\t2021-04-11",
            value: -2.23548
        },
        {
            time: "\t2021-04-12",
            value: -2.24548
        },
        {
            time: "\t2021-04-13",
            value: -1.44548
        },
        {
            time: "\t2021-04-14",
            value: -.64548
        },
        {
            time: "\t2021-04-15",
            value: -.14548
        },
        {
            time: "\t2021-04-16",
            value: .65452
        },
        {
            time: "\t2021-04-17",
            value: 1.45452
        },
        {
            time: "\t2021-04-18",
            value: 2.25452
        },
        {
            time: "\t2021-04-19",
            value: 3.05452
        },
        {
            time: "\t2021-04-20",
            value: 3.85452
        },
        {
            time: "\t2021-04-21",
            value: 3.70452
        },
        {
            time: "\t2021-04-22",
            value: 4.50452
        },
        {
            time: "\t2021-04-23",
            value: 4.40452
        },
        {
            time: "\t2021-04-24",
            value: 4.30452
        },
        {
            time: "\t2021-04-25",
            value: 4.15452
        },
        {
            time: "\t2021-04-26",
            value: 4.14452
        },
        {
            time: "\t2021-04-27",
            value: 3.64452
        },
        {
            time: "\t2021-04-28",
            value: 3.14452
        },
        {
            time: "\t2021-04-29",
            value: 2.64452
        },
        {
            time: "\t2021-04-30",
            value: 2.14452
        },
        {
            time: "\t2021-05-01",
            value: 1.54452
        },
        {
            time: "\t2021-05-02",
            value: 1.04452
        },
        {
            time: "\t2021-05-03",
            value: .44452
        },
        {
            time: "\t2021-05-04",
            value: -.05548
        },
        {
            time: "\t2021-05-05",
            value: -.55548
        },
        {
            time: "\t2021-05-06",
            value: -1.05548
        },
        {
            time: "\t2021-05-07",
            value: -1.65548
        },
        {
            time: "\t2021-05-08",
            value: -2.15548
        },
        {
            time: "\t2021-05-09",
            value: -2.65548
        },
        {
            time: "\t2021-05-10",
            value: -3.15548
        },
        {
            time: "\t2021-05-11",
            value: -2.35548
        },
        {
            time: "\t2021-05-12",
            value: -1.55548
        },
        {
            time: "\t2021-05-13",
            value: -.75548
        },
        {
            time: "\t2021-05-14",
            value: .04452
        },
        {
            time: "\t2021-05-15",
            value: .84452
        },
        {
            time: "\t2021-05-16",
            value: .69452
        },
        {
            time: "\t2021-05-17",
            value: 1.49452
        },
        {
            time: "\t2021-05-18",
            value: 1.39452
        },
        {
            time: "\t2021-05-19",
            value: 2.19452
        },
        {
            time: "\t2021-05-20",
            value: 2.99452
        },
        {
            time: "\t2021-05-21",
            value: 2.49452
        },
        {
            time: "\t2021-05-22",
            value: 1.79452
        },
        {
            time: "\t2021-05-23",
            value: 1.09452
        },
        {
            time: "\t2021-05-24",
            value: .39452
        },
        {
            time: "\t2021-05-25",
            value: -.30548
        },
        {
            time: "\t2021-05-26",
            value: -1.00548
        },
        {
            time: "\t2021-05-27",
            value: -.99548
        },
        {
            time: "\t2021-05-28",
            value: -.98548
        },
        {
            time: "\t2021-05-29",
            value: -.97548
        },
        {
            time: "\t2021-05-30",
            value: -.96548
        },
        {
            time: "\t2021-05-31",
            value: -.93548
        },
        {
            time: "\t2021-06-01",
            value: -.92548
        },
        {
            time: "\t2021-06-02",
            value: -.90548
        },
        {
            time: "\t2021-06-03",
            value: -.87548
        },
        {
            time: "\t2021-06-04",
            value: -.86548
        },
        {
            time: "\t2021-06-05",
            value: -.85548
        },
        {
            time: "\t2021-06-06",
            value: -1.25548
        },
        {
            time: "\t2021-06-07",
            value: -1.65548
        },
        {
            time: "\t2021-06-08",
            value: -2.05548
        },
        {
            time: "\t2021-06-09",
            value: -2.45548
        },
        {
            time: "\t2021-06-10",
            value: -2.85548
        },
        {
            time: "\t2021-06-11",
            value: -3.25548
        },
        {
            time: "\t2021-06-12",
            value: -3.25548
        },
        {
            time: "\t2021-06-13",
            value: -2.95548
        },
        {
            time: "\t2021-06-14",
            value: -2.94548
        },
        {
            time: "\t2021-06-15",
            value: -2.64548
        },
        {
            time: "\t2021-06-16",
            value: -2.34548
        },
        {
            time: "\t2021-06-17",
            value: -2.33548
        },
        {
            time: "\t2021-06-18",
            value: -2.03548
        },
        {
            time: "\t2021-06-19",
            value: -2.00548
        },
        {
            time: "\t2021-06-20",
            value: -1.70548
        },
        {
            time: "\t2021-06-21",
            value: -1.68548
        },
        {
            time: "\t2021-06-22",
            value: -1.65548
        },
        {
            time: "\t2021-06-23",
            value: -1.64548
        },
        {
            time: "\t2021-06-24",
            value: -1.63548
        },
        {
            time: "\t2021-06-25",
            value: -1.61548
        },
        {
            time: "\t2021-06-26",
            value: -1.58548
        },
        {
            time: "\t2021-06-27",
            value: -1.54548
        },
        {
            time: "\t2021-06-28",
            value: -1.53548
        },
        {
            time: "\t2021-06-29",
            value: -1.51548
        },
        {
            time: "\t2021-06-30",
            value: -1.48548
        },
        {
            time: "\t2021-07-01",
            value: -1.44548
        },
        {
            time: "\t2021-07-02",
            value: -1.39548
        },
        {
            time: "\t2021-07-03",
            value: -1.33548
        },
        {
            time: "\t2021-07-04",
            value: -1.26548
        },
        {
            time: "\t2021-07-05",
            value: -1.18548
        },
        {
            time: "\t2021-07-06",
            value: -1.09548
        },
        {
            time: "\t2021-07-07",
            value: -.99548
        },
        {
            time: "\t2021-07-08",
            value: -.88548
        },
        {
            time: "\t2021-07-09",
            value: -.76548
        },
        {
            time: "\t2021-07-10",
            value: -.63548
        },
        {
            time: "\t2021-07-11",
            value: -.49548
        },
        {
            time: "\t2021-07-12",
            value: -.34548
        },
        {
            time: "\t2021-07-13",
            value: -.18548
        },
        {
            time: "\t2021-07-14",
            value: -.01548
        },
        {
            time: "\t2021-07-15",
            value: .16452
        },
        {
            time: "\t2021-07-16",
            value: .35452
        },
        {
            time: "\t2021-07-17",
            value: .55452
        },
        {
            time: "\t2021-07-18",
            value: .56452
        },
        {
            time: "\t2021-07-19",
            value: .58452
        },
        {
            time: "\t2021-07-20",
            value: .61452
        },
        {
            time: "\t2021-07-21",
            value: .65452
        },
        {
            time: "\t2021-07-22",
            value: .66452
        },
        {
            time: "\t2021-07-23",
            value: .68452
        },
        {
            time: "\t2021-07-24",
            value: .71452
        },
        {
            time: "\t2021-07-25",
            value: .75452
        },
        {
            time: "\t2021-07-26",
            value: .80452
        },
        {
            time: "\t2021-07-27",
            value: .86452
        },
        {
            time: "\t2021-07-28",
            value: .93452
        },
        {
            time: "\t2021-07-29",
            value: 1.01452
        },
        {
            time: "\t2021-07-30",
            value: 1.10452
        },
        {
            time: "\t2021-07-31",
            value: 1.20452
        },
        {
            time: "\t2021-08-01",
            value: 1.31452
        },
        {
            time: "\t2021-08-02",
            value: 1.43452
        },
        {
            time: "\t2021-08-03",
            value: 1.56452
        },
        {
            time: "\t2021-08-04",
            value: 1.70452
        },
        {
            time: "\t2021-08-05",
            value: 1.85452
        },
        {
            time: "\t2021-08-06",
            value: 2.01452
        },
        {
            time: "\t2021-08-07",
            value: 2.18452
        },
        {
            time: "\t2021-08-08",
            value: 2.36452
        },
        {
            time: "\t2021-08-09",
            value: 2.55452
        },
        {
            time: "\t2021-08-10",
            value: 2.75452
        },
        {
            time: "\t2021-08-11",
            value: 2.93452
        },
        {
            time: "\t2021-08-12",
            value: 3.12452
        },
        {
            time: "\t2021-08-13",
            value: 3.32452
        },
        {
            time: "\t2021-08-14",
            value: 3.33452
        },
        {
            time: "\t2021-08-15",
            value: 3.35452
        },
        {
            time: "\t2021-08-16",
            value: 3.38452
        },
        {
            time: "\t2021-08-17",
            value: 3.42452
        },
        {
            time: "\t2021-08-18",
            value: 3.43452
        },
        {
            time: "\t2021-08-19",
            value: 3.45452
        },
        {
            time: "\t2021-08-20",
            value: 3.48452
        },
        {
            time: "\t2021-08-21",
            value: 3.52452
        },
        {
            time: "\t2021-08-22",
            value: 3.57452
        },
        {
            time: "\t2021-08-23",
            value: 3.63452
        },
        {
            time: "\t2021-08-24",
            value: 3.64452
        },
        {
            time: "\t2021-08-25",
            value: 3.66452
        },
        {
            time: "\t2021-08-26",
            value: 3.69452
        },
        {
            time: "\t2021-08-27",
            value: 3.73452
        },
        {
            time: "\t2021-08-28",
            value: 3.74452
        },
        {
            time: "\t2021-08-29",
            value: 3.76452
        },
        {
            time: "\t2021-08-30",
            value: 3.77452
        },
        {
            time: "\t2021-08-31",
            value: 3.79452
        },
        {
            time: "\t2021-09-01",
            value: 3.82452
        },
        {
            time: "\t2021-09-02",
            value: 3.86452
        },
        {
            time: "\t2021-09-03",
            value: 3.87452
        },
        {
            time: "\t2021-09-04",
            value: 3.89452
        },
        {
            time: "\t2021-09-05",
            value: 3.92452
        },
        {
            time: "\t2021-09-06",
            value: 3.93452
        },
        {
            time: "\t2021-09-07",
            value: 3.94452
        },
        {
            time: "\t2021-09-08",
            value: 3.95452
        },
        {
            time: "\t2021-09-09",
            value: 3.96452
        },
        {
            time: "\t2021-09-10",
            value: 3.97452
        },
        {
            time: "\t2021-09-11",
            value: 3.98452
        },
        {
            time: "\t2021-09-12",
            value: 3.99452
        },
        {
            time: "\t2021-09-13",
            value: 4.00452
        },
        {
            time: "\t2021-09-14",
            value: 4.02452
        },
        {
            time: "\t2021-09-15",
            value: 4.05452
        },
        {
            time: "\t2021-09-16",
            value: 4.06452
        },
        {
            time: "\t2021-09-17",
            value: 4.08452
        },
        {
            time: "\t2021-09-18",
            value: 4.11452
        },
        {
            time: "\t2021-09-19",
            value: 4.12452
        },
        {
            time: "\t2021-09-20",
            value: 4.13452
        },
        {
            time: "\t2021-09-21",
            value: 4.14452
        },
        {
            time: "\t2021-09-22",
            value: 4.15452
        },
        {
            time: "\t2021-09-23",
            value: 4.16452
        },
        {
            time: "\t2021-09-24",
            value: 4.17452
        },
        {
            time: "\t2021-09-25",
            value: 4.18452
        },
        {
            time: "\t2021-09-26",
            value: 4.19452
        },
        {
            time: "\t2021-09-27",
            value: 4.22452
        },
        {
            time: "\t2021-09-28",
            value: 4.23452
        },
        {
            time: "\t2021-09-29",
            value: 4.25452
        },
        {
            time: "\t2021-09-30",
            value: 4.28452
        },
        {
            time: "\t2021-10-01",
            value: 4.29452
        },
        {
            time: "\t2021-10-02",
            value: 4.30452
        },
        {
            time: "\t2021-10-03",
            value: 4.31452
        },
        {
            time: "\t2021-10-04",
            value: 4.37452
        },
        {
            time: "\t2021-10-05",
            value: 4.44452
        },
        {
            time: "\t2021-10-06",
            value: 4.52452
        },
        {
            time: "\t2021-10-07",
            value: 4.61452
        },
        {
            time: "\t2021-10-08",
            value: 4.71452
        },
        {
            time: "\t2021-10-09",
            value: 4.82452
        },
        {
            time: "\t2021-10-10",
            value: 4.94452
        },
        {
            time: "\t2021-10-11",
            value: 5.07452
        },
        {
            time: "\t2021-10-12",
            value: 5.21452
        },
        {
            time: "\t2021-10-13",
            value: 5.36452
        },
        {
            time: "\t2021-10-14",
            value: 5.52452
        },
        {
            time: "\t2021-10-15",
            value: 5.69452
        },
        {
            time: "\t2021-10-16",
            value: 5.87452
        },
        {
            time: "\t2021-10-17",
            value: 6.06452
        },
        {
            time: "\t2021-10-18",
            value: 6.26452
        },
        {
            time: "\t2021-10-19",
            value: 6.44452
        },
        {
            time: "\t2021-10-20",
            value: 6.63452
        },
        {
            time: "\t2021-10-21",
            value: 6.83452
        },
        {
            time: "\t2021-10-22",
            value: 6.84452
        },
        {
            time: "\t2021-10-23",
            value: 6.86452
        },
        {
            time: "\t2021-10-24",
            value: 6.89452
        },
        {
            time: "\t2021-10-25",
            value: 6.93452
        },
        {
            time: "\t2021-10-26",
            value: 6.94452
        },
        {
            time: "\t2021-10-27",
            value: 6.96452
        },
        {
            time: "\t2021-10-28",
            value: 6.99452
        },
        {
            time: "\t2021-10-29",
            value: 7.03452
        },
        {
            time: "\t2021-10-30",
            value: 7.08452
        },
        {
            time: "\t2021-10-31",
            value: 7.14452
        },
        {
            time: "\t2021-11-01",
            value: 7.15452
        },
        {
            time: "\t2021-11-02",
            value: 7.17452
        },
        {
            time: "\t2021-11-03",
            value: 7.18452
        },
        {
            time: "\t2021-11-04",
            value: 7.20452
        },
        {
            time: "\t2021-11-05",
            value: 6.90452
        },
        {
            time: "\t2021-11-06",
            value: 6.60452
        },
        {
            time: "\t2021-11-07",
            value: 6.10452
        },
        {
            time: "\t2021-11-08",
            value: 5.40452
        },
        {
            time: "\t2021-11-09",
            value: 4.70452
        },
        {
            time: "\t2021-11-10",
            value: 4.00452
        },
        {
            time: "\t2021-11-11",
            value: 3.30452
        },
        {
            time: "\t2021-11-12",
            value: 2.60452
        },
        {
            time: "\t2021-11-13",
            value: 2.50452
        },
        {
            time: "\t2021-11-14",
            value: 1.80452
        },
        {
            time: "\t2021-11-15",
            value: 1.10452
        },
        {
            time: "\t2021-11-16",
            value: .40452
        },
        {
            time: "\t2021-11-17",
            value: .30452
        },
        {
            time: "\t2021-11-18",
            value: .10452
        },
        {
            time: "\t2021-11-19",
            value: -.59548
        },
        {
            time: "\t2021-11-20",
            value: -.19548
        },
        {
            time: "\t2021-11-21",
            value: .20452
        },
        {
            time: "\t2021-11-22",
            value: .60452
        },
        {
            time: "\t2021-11-23",
            value: 1.00452
        },
        {
            time: "\t2021-11-24",
            value: 1.40452
        },
        {
            time: "\t2021-11-25",
            value: 2.20452
        },
        {
            time: "\t2021-11-26",
            value: 3.00452
        },
        {
            time: "\t2021-11-27",
            value: 3.80452
        },
        {
            time: "\t2021-11-28",
            value: 4.60452
        },
        {
            time: "\t2021-11-29",
            value: 3.90452
        },
        {
            time: "\t2021-11-30",
            value: 3.20452
        },
        {
            time: "\t2021-12-01",
            value: 2.50452
        },
        {
            time: "\t2021-12-02",
            value: 1.80452
        },
        {
            time: "\t2021-12-03",
            value: 1.70452
        },
        {
            time: "\t2021-12-04",
            value: 1.00452
        },
        {
            time: "\t2021-12-05",
            value: .70452
        },
        {
            time: "\t2021-12-06",
            value: .00452
        },
        {
            time: "\t2021-12-07",
            value: -.69548
        },
        {
            time: "\t2021-12-08",
            value: -1.39548
        },
        {
            time: "\t2021-12-09",
            value: -1.40548
        },
        {
            time: "\t2021-12-10",
            value: -.60548
        },
        {
            time: "\t2021-12-11",
            value: .19452
        },
        {
            time: "\t2021-12-12",
            value: .69452
        },
        {
            time: "\t2021-12-13",
            value: 1.49452
        },
        {
            time: "\t2021-12-14",
            value: 2.29452
        },
        {
            time: "\t2021-12-15",
            value: 3.09452
        },
        {
            time: "\t2021-12-16",
            value: 3.89452
        },
        {
            time: "\t2021-12-17",
            value: 4.69452
        },
        {
            time: "\t2021-12-18",
            value: 4.54452
        },
        {
            time: "\t2021-12-19",
            value: 5.34452
        },
        {
            time: "\t2021-12-20",
            value: 5.24452
        },
        {
            time: "\t2021-12-21",
            value: 5.14452
        },
        {
            time: "\t2021-12-22",
            value: 4.99452
        },
        {
            time: "\t2021-12-23",
            value: 4.98452
        },
        {
            time: "\t2021-12-24",
            value: 4.48452
        },
        {
            time: "\t2021-12-25",
            value: 3.98452
        },
        {
            time: "\t2021-12-26",
            value: 3.48452
        },
        {
            time: "\t2021-12-27",
            value: 2.98452
        },
        {
            time: "\t2021-12-28",
            value: 2.38452
        },
        {
            time: "\t2021-12-29",
            value: 1.88452
        },
        {
            time: "\t2021-12-30",
            value: 1.28452
        },
        {
            time: "\t2021-12-31",
            value: .78452
        },
        {
            time: "\t2022-01-01",
            value: .28452
        },
        {
            time: "\t2022-01-02",
            value: -.21548
        },
        {
            time: "\t2022-01-03",
            value: -.81548
        },
        {
            time: "\t2022-01-04",
            value: -1.31548
        },
        {
            time: "\t2022-01-05",
            value: -1.81548
        },
        {
            time: "\t2022-01-06",
            value: -2.31548
        },
        {
            time: "\t2022-01-07",
            value: -1.51548
        },
        {
            time: "\t2022-01-08",
            value: -.71548
        },
        {
            time: "\t2022-01-09",
            value: .08452
        },
        {
            time: "\t2022-01-10",
            value: .88452
        },
        {
            time: "\t2022-01-11",
            value: 1.68452
        },
        {
            time: "\t2022-01-12",
            value: 1.53452
        },
        {
            time: "\t2022-01-13",
            value: 2.33452
        },
        {
            time: "\t2022-01-14",
            value: 2.23452
        },
        {
            time: "\t2022-01-15",
            value: 3.03452
        },
        {
            time: "\t2022-01-16",
            value: 3.83452
        },
        {
            time: "\t2022-01-17",
            value: 3.33452
        },
        {
            time: "\t2022-01-18",
            value: 2.63452
        },
        {
            time: "\t2022-01-19",
            value: 1.93452
        },
        {
            time: "\t2022-01-20",
            value: 1.23452
        },
        {
            time: "\t2022-01-21",
            value: .53452
        },
        {
            time: "\t2022-01-22",
            value: -.16548
        },
        {
            time: "\t2022-01-23",
            value: -.15548
        },
        {
            time: "\t2022-01-24",
            value: -.14548
        },
        {
            time: "\t2022-01-25",
            value: -.13548
        },
        {
            time: "\t2022-01-26",
            value: -.12548
        },
        {
            time: "\t2022-01-27",
            value: -.09548
        },
        {
            time: "\t2022-01-28",
            value: -.08548
        },
        {
            time: "\t2022-01-29",
            value: -.06548
        },
        {
            time: "\t2022-01-30",
            value: -.03548
        },
        {
            time: "\t2022-01-31",
            value: -.02548
        },
        {
            time: "\t2022-02-01",
            value: -.01548
        },
        {
            time: "\t2022-02-02",
            value: -.41548
        },
        {
            time: "\t2022-02-03",
            value: -.81548
        },
        {
            time: "\t2022-02-04",
            value: -1.21548
        },
        {
            time: "\t2022-02-05",
            value: -1.61548
        },
        {
            time: "\t2022-02-06",
            value: -2.01548
        },
        {
            time: "\t2022-02-07",
            value: -2.41548
        },
        {
            time: "\t2022-02-08",
            value: -2.41548
        },
        {
            time: "\t2022-02-09",
            value: -2.11548
        },
        {
            time: "\t2022-02-10",
            value: -2.10548
        },
        {
            time: "\t2022-02-11",
            value: -1.80548
        },
        {
            time: "\t2022-02-12",
            value: -1.50548
        },
        {
            time: "\t2022-02-13",
            value: -1.49548
        },
        {
            time: "\t2022-02-14",
            value: -1.19548
        },
        {
            time: "\t2022-02-15",
            value: -1.16548
        },
        {
            time: "\t2022-02-16",
            value: -.86548
        },
        {
            time: "\t2022-02-17",
            value: -.84548
        },
        {
            time: "\t2022-02-18",
            value: -.81548
        },
        {
            time: "\t2022-02-19",
            value: -.80548
        }]),
        M.setData([{
            time: "\t2019-05-24",
            value: -4.21931,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-05-25",
            value: -4.22065,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-05-26",
            value: -4.22273,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-05-27",
            value: -4.21509,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-05-28",
            value: -4.2198,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-05-29",
            value: -4.2163,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-05-30",
            value: -4.21224,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-05-31",
            value: -4.2133,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-01",
            value: -4.21886,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-02",
            value: -4.22222,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-03",
            value: -4.20748,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-04",
            value: -4.20159,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-05",
            value: -4.20377,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-06",
            value: -4.20995,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-07",
            value: -4.20849,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-08",
            value: -4.20447,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-09",
            value: -4.19417,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-10",
            value: -4.19223,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-11",
            value: -4.1868,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-12",
            value: -4.19141,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-13",
            value: -4.19353,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-14",
            value: -4.18586,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-15",
            value: -4.17698,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-16",
            value: -4.17678,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-17",
            value: -4.17229,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-18",
            value: -4.17462,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-19",
            value: -4.17424,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-20",
            value: -4.18094,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-21",
            value: -4.17955,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-22",
            value: -4.17858,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-23",
            value: -4.18482,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-24",
            value: -4.17669,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-25",
            value: -4.17472,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-26",
            value: -4.16849,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-27",
            value: -4.1696,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-28",
            value: -4.16863,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-29",
            value: -4.1691,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-06-30",
            value: -4.17095,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-01",
            value: -4.16548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-02",
            value: -4.15548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-03",
            value: -4.13548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-04",
            value: -4.10548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-05",
            value: -4.06548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-06",
            value: -4.05548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-07",
            value: -4.03548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-08",
            value: -4.00548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-09",
            value: -3.96548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-10",
            value: -3.91548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-11",
            value: -3.85548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-12",
            value: -3.78548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-13",
            value: -3.70548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-14",
            value: -3.61548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-15",
            value: -3.51548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-16",
            value: -3.40548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-17",
            value: -3.28548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-18",
            value: -3.15548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-19",
            value: -3.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-20",
            value: -2.86548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-21",
            value: -2.70548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-22",
            value: -2.53548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-23",
            value: -2.35548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-24",
            value: -2.16548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-25",
            value: -1.96548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-26",
            value: -1.95548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-27",
            value: -1.93548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-28",
            value: -1.90548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-29",
            value: -1.86548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-30",
            value: -1.85548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-07-31",
            value: -1.83548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-01",
            value: -1.80548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-02",
            value: -1.76548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-03",
            value: -1.71548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-04",
            value: -1.65548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-05",
            value: -1.58548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-06",
            value: -1.50548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-07",
            value: -1.41548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-08",
            value: -1.31548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-09",
            value: -1.20548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-10",
            value: -1.08548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-11",
            value: -.95548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-12",
            value: -.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-13",
            value: -.66548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-14",
            value: -.50548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-15",
            value: -.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-16",
            value: -.15548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-17",
            value: .03452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-18",
            value: .23452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-19",
            value: .41452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-20",
            value: .60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-21",
            value: .80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-22",
            value: .81452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-23",
            value: .83452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-24",
            value: .86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-25",
            value: .90452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-26",
            value: .91452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-27",
            value: .93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-28",
            value: .96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-29",
            value: 1.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-30",
            value: 1.05452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-08-31",
            value: 1.11452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-01",
            value: 1.12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-02",
            value: 1.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-03",
            value: 1.17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-04",
            value: 1.21452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-05",
            value: 1.22452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-06",
            value: 1.24452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-07",
            value: 1.25452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-08",
            value: 1.27452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-09",
            value: 1.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-10",
            value: 1.34452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-11",
            value: 1.35452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-12",
            value: 1.37452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-13",
            value: 1.40452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-14",
            value: 1.41452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-15",
            value: 1.42452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-16",
            value: 1.43452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-17",
            value: 1.44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-18",
            value: 1.45452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-19",
            value: 1.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-20",
            value: 1.47452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-21",
            value: 1.48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-22",
            value: 1.50452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-23",
            value: 1.53452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-24",
            value: 1.54452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-25",
            value: 1.56452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-26",
            value: 1.59452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-27",
            value: 1.60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-28",
            value: 1.61452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-29",
            value: 1.62452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-09-30",
            value: 1.63452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-01",
            value: 1.64452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-02",
            value: 1.65452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-03",
            value: 1.66452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-04",
            value: 1.67452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-05",
            value: 1.70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-06",
            value: 1.71452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-07",
            value: 1.73452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-08",
            value: 1.76452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-09",
            value: 1.77452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-10",
            value: 1.78452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-11",
            value: 1.79452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-12",
            value: 1.85452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-13",
            value: 1.92452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-14",
            value: 2.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-15",
            value: 2.09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-16",
            value: 2.19452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-17",
            value: 2.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-18",
            value: 2.42452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-19",
            value: 2.55452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-20",
            value: 2.69452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-21",
            value: 2.84452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-22",
            value: 3.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-23",
            value: 3.17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-24",
            value: 3.35452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-25",
            value: 3.54452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-26",
            value: 3.74452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-27",
            value: 3.92452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-28",
            value: 4.11452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-29",
            value: 4.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-30",
            value: 4.32452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-10-31",
            value: 4.34452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-01",
            value: 4.37452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-02",
            value: 4.41452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-03",
            value: 4.42452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-04",
            value: 4.44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-05",
            value: 4.47452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-06",
            value: 4.51452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-07",
            value: 4.56452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-08",
            value: 4.62452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-09",
            value: 4.63452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-10",
            value: 4.65452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-11",
            value: 4.66452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-12",
            value: 4.68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-13",
            value: 4.38452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-14",
            value: 4.08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-15",
            value: 3.58452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-16",
            value: 2.88452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-17",
            value: 2.18452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-18",
            value: 1.48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-19",
            value: .78452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-20",
            value: .08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-21",
            value: -.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-22",
            value: -.71548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-23",
            value: -1.41548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-24",
            value: -2.11548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-25",
            value: -2.21548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-26",
            value: -2.41548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-27",
            value: -3.11548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-28",
            value: -2.71548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-29",
            value: -2.31548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-11-30",
            value: -1.91548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-01",
            value: -1.51548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-02",
            value: -1.11548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-03",
            value: -.31548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-04",
            value: .48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-05",
            value: 1.28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-06",
            value: 2.08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-07",
            value: 1.38452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-08",
            value: .68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-09",
            value: -.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-10",
            value: -.71548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-11",
            value: -.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-12",
            value: -1.51548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-13",
            value: -1.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-14",
            value: -2.51548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-15",
            value: -3.21548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-16",
            value: -3.91548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-17",
            value: -3.92548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-18",
            value: -3.12548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-19",
            value: -2.32548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-20",
            value: -1.82548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-21",
            value: -1.02548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-22",
            value: -.22548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-23",
            value: .57452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-24",
            value: 1.37452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-25",
            value: 2.17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-26",
            value: 2.02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-27",
            value: 2.82452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-28",
            value: 2.72452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-29",
            value: 2.62452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-30",
            value: 2.47452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2019-12-31",
            value: 2.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-01",
            value: 1.96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-02",
            value: 1.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-03",
            value: .96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-04",
            value: .46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-05",
            value: -.13548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-06",
            value: -.63548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-07",
            value: -1.23548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-08",
            value: -1.73548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-09",
            value: -2.23548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-10",
            value: -2.73548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-11",
            value: -3.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-12",
            value: -3.83548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-13",
            value: -4.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-14",
            value: -4.83548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-15",
            value: -4.03548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-16",
            value: -3.23548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-17",
            value: -2.43548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-18",
            value: -1.63548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-19",
            value: -.83548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-20",
            value: -.98548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-21",
            value: -.18548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-22",
            value: -.28548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-23",
            value: .51452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-24",
            value: 1.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-25",
            value: .81452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-26",
            value: .11452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-27",
            value: -.58548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-28",
            value: -1.28548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-29",
            value: -1.98548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-30",
            value: -2.68548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-01-31",
            value: -2.67548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-01",
            value: -2.66548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-02",
            value: -2.65548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-03",
            value: -2.64548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-04",
            value: -2.61548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-05",
            value: -2.60548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-06",
            value: -2.58548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-07",
            value: -2.55548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-08",
            value: -2.54548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-09",
            value: -2.53548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-10",
            value: -2.93548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-11",
            value: -3.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-12",
            value: -3.73548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-13",
            value: -4.13548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-14",
            value: -4.53548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-15",
            value: -4.93548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-16",
            value: -4.93548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-17",
            value: -4.63548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-18",
            value: -4.62548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-19",
            value: -4.32548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-20",
            value: -4.02548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-21",
            value: -4.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-22",
            value: -3.71548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-23",
            value: -3.68548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-24",
            value: -3.38548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-25",
            value: -3.36548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-26",
            value: -3.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-27",
            value: -3.32548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-28",
            value: -3.31548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-02-29",
            value: -3.29548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-01",
            value: -3.26548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-02",
            value: -3.22548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-03",
            value: -3.21548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-04",
            value: -3.19548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-05",
            value: -3.16548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-06",
            value: -3.12548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-07",
            value: -3.07548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-08",
            value: -3.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-09",
            value: -2.94548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-10",
            value: -2.86548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-11",
            value: -2.77548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-12",
            value: -2.67548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-13",
            value: -2.56548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-14",
            value: -2.44548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-15",
            value: -2.31548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-16",
            value: -2.17548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-17",
            value: -2.02548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-18",
            value: -1.86548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-19",
            value: -1.69548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-20",
            value: -1.51548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-21",
            value: -1.32548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-22",
            value: -1.12548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-23",
            value: -1.11548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-24",
            value: -1.09548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-25",
            value: -1.06548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-26",
            value: -1.02548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-27",
            value: -1.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-28",
            value: -.99548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-29",
            value: -.96548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-30",
            value: -.92548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-03-31",
            value: -.87548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-01",
            value: -.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-02",
            value: -.74548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-03",
            value: -.66548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-04",
            value: -.57548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-05",
            value: -.47548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-06",
            value: -.36548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-07",
            value: -.24548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-08",
            value: -.11548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-09",
            value: .02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-10",
            value: .17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-11",
            value: .33452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-12",
            value: .50452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-13",
            value: .68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-14",
            value: .87452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-15",
            value: 1.07452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-16",
            value: 1.25452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-17",
            value: 1.44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-18",
            value: 1.64452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-19",
            value: 1.65452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-20",
            value: 1.67452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-21",
            value: 1.70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-22",
            value: 1.74452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-23",
            value: 1.75452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-24",
            value: 1.77452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-25",
            value: 1.80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-26",
            value: 1.84452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-27",
            value: 1.89452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-28",
            value: 1.95452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-29",
            value: 1.96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-04-30",
            value: 1.98452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-01",
            value: 2.01452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-02",
            value: 2.05452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-03",
            value: 2.06452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-04",
            value: 2.08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-05",
            value: 2.09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-06",
            value: 2.11452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-07",
            value: 2.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-08",
            value: 2.18452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-09",
            value: 2.19452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-10",
            value: 2.21452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-11",
            value: 2.24452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-12",
            value: 2.25452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-13",
            value: 2.26452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-14",
            value: 2.27452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-15",
            value: 2.28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-16",
            value: 2.29452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-17",
            value: 2.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-18",
            value: 2.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-19",
            value: 2.32452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-20",
            value: 2.34452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-21",
            value: 2.37452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-22",
            value: 2.38452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-23",
            value: 2.40452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-24",
            value: 2.43452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-25",
            value: 2.44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-26",
            value: 2.45452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-27",
            value: 2.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-28",
            value: 2.47452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-29",
            value: 2.48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-30",
            value: 2.49452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-05-31",
            value: 2.50452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-01",
            value: 2.51452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-02",
            value: 2.54452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-03",
            value: 2.55452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-04",
            value: 2.57452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-05",
            value: 2.60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-06",
            value: 2.61452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-07",
            value: 2.62452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-08",
            value: 2.63452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-09",
            value: 2.69452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-10",
            value: 2.76452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-11",
            value: 2.84452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-12",
            value: 2.93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-13",
            value: 3.03452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-14",
            value: 3.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-15",
            value: 3.26452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-16",
            value: 3.39452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-17",
            value: 3.53452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-18",
            value: 3.68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-19",
            value: 3.84452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-20",
            value: 4.01452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-21",
            value: 4.19452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-22",
            value: 4.38452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-23",
            value: 4.58452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-24",
            value: 4.76452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-25",
            value: 4.95452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-26",
            value: 5.15452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-27",
            value: 5.16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-28",
            value: 5.18452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-29",
            value: 5.21452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-06-30",
            value: 5.25452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-01",
            value: 5.26452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-02",
            value: 5.28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-03",
            value: 5.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-04",
            value: 5.35452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-05",
            value: 5.40452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-06",
            value: 5.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-07",
            value: 5.47452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-08",
            value: 5.49452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-09",
            value: 5.50452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-10",
            value: 5.52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-11",
            value: 5.22452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-12",
            value: 4.92452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-13",
            value: 4.42452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-14",
            value: 3.72452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-15",
            value: 3.02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-16",
            value: 2.32452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-17",
            value: 1.62452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-18",
            value: .92452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-19",
            value: .82452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-20",
            value: .12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-21",
            value: -.57548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-22",
            value: -1.27548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-23",
            value: -1.37548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-24",
            value: -1.57548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-25",
            value: -2.27548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-26",
            value: -1.87548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-27",
            value: -1.47548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-28",
            value: -1.07548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-29",
            value: -.67548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-30",
            value: -.27548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-07-31",
            value: .52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-01",
            value: 1.32452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-02",
            value: 2.12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-03",
            value: 2.92452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-04",
            value: 2.22452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-05",
            value: 1.52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-06",
            value: .82452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-07",
            value: .12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-08",
            value: .02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-09",
            value: -.67548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-10",
            value: -.97548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-11",
            value: -1.67548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-12",
            value: -2.37548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-13",
            value: -3.07548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-14",
            value: -3.08548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-15",
            value: -2.28548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-16",
            value: -1.48548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-17",
            value: -.98548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-18",
            value: -.18548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-19",
            value: .61452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-20",
            value: 1.41452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-21",
            value: 2.21452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-22",
            value: 3.01452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-23",
            value: 2.86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-24",
            value: 3.66452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-25",
            value: 3.56452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-26",
            value: 3.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-27",
            value: 3.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-28",
            value: 3.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-29",
            value: 2.80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-30",
            value: 2.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-08-31",
            value: 1.80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-01",
            value: 1.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-02",
            value: .70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-03",
            value: .20452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-04",
            value: -.39548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-05",
            value: -.89548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-06",
            value: -1.39548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-07",
            value: -1.89548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-08",
            value: -2.49548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-09",
            value: -2.99548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-10",
            value: -3.49548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-11",
            value: -3.99548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-12",
            value: -3.19548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-13",
            value: -2.39548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-14",
            value: -1.59548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-15",
            value: -.79548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-16",
            value: .00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-17",
            value: -.14548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-18",
            value: .65452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-19",
            value: .55452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-20",
            value: 1.35452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-21",
            value: 2.15452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-22",
            value: 1.65452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-23",
            value: .95452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-24",
            value: .25452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-25",
            value: -.44548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-26",
            value: -1.14548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-27",
            value: -1.84548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-28",
            value: -1.83548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-29",
            value: -1.82548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-09-30",
            value: -1.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-01",
            value: -1.80548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-02",
            value: -1.77548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-03",
            value: -1.76548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-04",
            value: -1.74548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-05",
            value: -1.71548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-06",
            value: -1.70548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-07",
            value: -1.69548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-08",
            value: -2.09548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-09",
            value: -2.49548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-10",
            value: -2.89548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-11",
            value: -3.29548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-12",
            value: -3.69548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-13",
            value: -4.09548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-14",
            value: -4.09548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-15",
            value: -3.79548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-16",
            value: -3.78548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-17",
            value: -3.48548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-18",
            value: -3.18548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-19",
            value: -3.17548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-20",
            value: -2.87548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-21",
            value: -2.84548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-22",
            value: -2.54548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-23",
            value: -2.52548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-24",
            value: -2.49548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-25",
            value: -2.48548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-26",
            value: -2.47548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-27",
            value: -2.45548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-28",
            value: -2.42548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-29",
            value: -2.38548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-30",
            value: -2.37548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-10-31",
            value: -2.35548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-01",
            value: -2.32548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-02",
            value: -2.28548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-03",
            value: -2.23548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-04",
            value: -2.17548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-05",
            value: -2.10548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-06",
            value: -2.02548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-07",
            value: -1.93548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-08",
            value: -1.83548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-09",
            value: -1.72548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-10",
            value: -1.60548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-11",
            value: -1.47548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-12",
            value: -1.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-13",
            value: -1.18548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-14",
            value: -1.02548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-15",
            value: -.85548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-16",
            value: -.67548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-17",
            value: -.48548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-18",
            value: -.28548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-19",
            value: -.27548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-20",
            value: -.25548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-21",
            value: -.22548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-22",
            value: -.18548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-23",
            value: -.17548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-24",
            value: -.15548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-25",
            value: -.12548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-26",
            value: -.08548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-27",
            value: -.03548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-28",
            value: .02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-29",
            value: .09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-11-30",
            value: .17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-01",
            value: .26452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-02",
            value: .36452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-03",
            value: .47452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-04",
            value: .59452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-05",
            value: .72452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-06",
            value: .86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-07",
            value: 1.01452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-08",
            value: 1.17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-09",
            value: 1.34452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-10",
            value: 1.52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-11",
            value: 1.71452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-12",
            value: 1.91452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-13",
            value: 2.09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-14",
            value: 2.28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-15",
            value: 2.48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-16",
            value: 2.49452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-17",
            value: 2.51452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-18",
            value: 2.54452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-19",
            value: 2.58452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-20",
            value: 2.59452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-21",
            value: 2.61452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-22",
            value: 2.64452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-23",
            value: 2.68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-24",
            value: 2.73452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-25",
            value: 2.79452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-26",
            value: 2.80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-27",
            value: 2.82452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-28",
            value: 2.85452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-29",
            value: 2.89452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-30",
            value: 2.90452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2020-12-31",
            value: 2.92452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-01",
            value: 2.93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-02",
            value: 2.95452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-03",
            value: 2.98452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-04",
            value: 3.02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-05",
            value: 3.03452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-06",
            value: 3.05452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-07",
            value: 3.08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-08",
            value: 3.09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-09",
            value: 3.10452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-10",
            value: 3.11452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-11",
            value: 3.12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-12",
            value: 3.13452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-13",
            value: 3.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-14",
            value: 3.15452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-15",
            value: 3.16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-16",
            value: 3.18452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-17",
            value: 3.21452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-18",
            value: 3.22452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-19",
            value: 3.24452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-20",
            value: 3.27452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-21",
            value: 3.28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-22",
            value: 3.29452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-23",
            value: 3.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-24",
            value: 3.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-25",
            value: 3.32452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-26",
            value: 3.33452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-27",
            value: 3.34452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-28",
            value: 3.35452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-29",
            value: 3.38452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-30",
            value: 3.39452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-01-31",
            value: 3.41452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-01",
            value: 3.44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-02",
            value: 3.45452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-03",
            value: 3.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-04",
            value: 3.47452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-05",
            value: 3.53452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-06",
            value: 3.60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-07",
            value: 3.68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-08",
            value: 3.77452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-09",
            value: 3.87452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-10",
            value: 3.98452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-11",
            value: 4.10452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-12",
            value: 4.23452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-13",
            value: 4.37452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-14",
            value: 4.52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-15",
            value: 4.68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-16",
            value: 4.85452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-17",
            value: 5.03452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-18",
            value: 5.22452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-19",
            value: 5.42452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-20",
            value: 5.60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-21",
            value: 5.79452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-22",
            value: 5.99452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-23",
            value: 6.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-24",
            value: 6.02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-25",
            value: 6.05452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-26",
            value: 6.09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-27",
            value: 6.10452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-02-28",
            value: 6.12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-01",
            value: 6.15452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-02",
            value: 6.19452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-03",
            value: 6.24452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-04",
            value: 6.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-05",
            value: 6.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-06",
            value: 6.33452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-07",
            value: 6.34452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-08",
            value: 6.36452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-09",
            value: 6.06452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-10",
            value: 5.76452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-11",
            value: 5.26452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-12",
            value: 4.56452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-13",
            value: 3.86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-14",
            value: 3.16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-15",
            value: 2.46452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-16",
            value: 1.76452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-17",
            value: 1.66452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-18",
            value: .96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-19",
            value: .26452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-20",
            value: -.43548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-21",
            value: -.53548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-22",
            value: -.73548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-23",
            value: -1.43548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-24",
            value: -1.03548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-25",
            value: -.63548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-26",
            value: -.23548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-27",
            value: .16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-28",
            value: .56452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-29",
            value: 1.36452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-30",
            value: 2.16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-03-31",
            value: 2.96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-01",
            value: 3.76452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-02",
            value: 3.06452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-03",
            value: 2.36452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-04",
            value: 1.66452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-05",
            value: .96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-06",
            value: .86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-07",
            value: .16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-08",
            value: -.13548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-09",
            value: -.83548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-10",
            value: -1.53548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-11",
            value: -2.23548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-12",
            value: -2.24548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-13",
            value: -1.44548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-14",
            value: -.64548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-15",
            value: -.14548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-16",
            value: .65452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-17",
            value: 1.45452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-18",
            value: 2.25452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-19",
            value: 3.05452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-20",
            value: 3.85452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-21",
            value: 3.70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-22",
            value: 4.50452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-23",
            value: 4.40452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-24",
            value: 4.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-25",
            value: 4.15452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-26",
            value: 4.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-27",
            value: 3.64452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-28",
            value: 3.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-29",
            value: 2.64452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-04-30",
            value: 2.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-01",
            value: 1.54452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-02",
            value: 1.04452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-03",
            value: .44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-04",
            value: -.05548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-05",
            value: -.55548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-06",
            value: -1.05548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-07",
            value: -1.65548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-08",
            value: -2.15548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-09",
            value: -2.65548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-10",
            value: -3.15548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-11",
            value: -2.35548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-12",
            value: -1.55548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-13",
            value: -.75548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-14",
            value: .04452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-15",
            value: .84452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-16",
            value: .69452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-17",
            value: 1.49452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-18",
            value: 1.39452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-19",
            value: 2.19452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-20",
            value: 2.99452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-21",
            value: 2.49452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-22",
            value: 1.79452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-23",
            value: 1.09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-24",
            value: .39452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-25",
            value: -.30548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-26",
            value: -1.00548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-27",
            value: -.99548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-28",
            value: -.98548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-29",
            value: -.97548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-30",
            value: -.96548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-05-31",
            value: -.93548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-01",
            value: -.92548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-02",
            value: -.90548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-03",
            value: -.87548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-04",
            value: -.86548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-05",
            value: -.85548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-06",
            value: -1.25548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-07",
            value: -1.65548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-08",
            value: -2.05548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-09",
            value: -2.45548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-10",
            value: -2.85548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-11",
            value: -3.25548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-12",
            value: -3.25548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-13",
            value: -2.95548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-14",
            value: -2.94548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-15",
            value: -2.64548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-16",
            value: -2.34548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-17",
            value: -2.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-18",
            value: -2.03548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-19",
            value: -2.00548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-20",
            value: -1.70548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-21",
            value: -1.68548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-22",
            value: -1.65548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-23",
            value: -1.64548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-24",
            value: -1.63548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-25",
            value: -1.61548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-26",
            value: -1.58548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-27",
            value: -1.54548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-28",
            value: -1.53548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-29",
            value: -1.51548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-06-30",
            value: -1.48548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-01",
            value: -1.44548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-02",
            value: -1.39548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-03",
            value: -1.33548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-04",
            value: -1.26548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-05",
            value: -1.18548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-06",
            value: -1.09548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-07",
            value: -.99548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-08",
            value: -.88548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-09",
            value: -.76548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-10",
            value: -.63548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-11",
            value: -.49548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-12",
            value: -.34548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-13",
            value: -.18548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-14",
            value: -.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-15",
            value: .16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-16",
            value: .35452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-17",
            value: .55452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-18",
            value: .56452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-19",
            value: .58452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-20",
            value: .61452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-21",
            value: .65452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-22",
            value: .66452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-23",
            value: .68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-24",
            value: .71452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-25",
            value: .75452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-26",
            value: .80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-27",
            value: .86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-28",
            value: .93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-29",
            value: 1.01452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-30",
            value: 1.10452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-07-31",
            value: 1.20452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-01",
            value: 1.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-02",
            value: 1.43452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-03",
            value: 1.56452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-04",
            value: 1.70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-05",
            value: 1.85452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-06",
            value: 2.01452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-07",
            value: 2.18452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-08",
            value: 2.36452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-09",
            value: 2.55452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-10",
            value: 2.75452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-11",
            value: 2.93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-12",
            value: 3.12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-13",
            value: 3.32452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-14",
            value: 3.33452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-15",
            value: 3.35452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-16",
            value: 3.38452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-17",
            value: 3.42452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-18",
            value: 3.43452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-19",
            value: 3.45452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-20",
            value: 3.48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-21",
            value: 3.52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-22",
            value: 3.57452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-23",
            value: 3.63452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-24",
            value: 3.64452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-25",
            value: 3.66452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-26",
            value: 3.69452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-27",
            value: 3.73452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-28",
            value: 3.74452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-29",
            value: 3.76452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-30",
            value: 3.77452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-08-31",
            value: 3.79452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-01",
            value: 3.82452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-02",
            value: 3.86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-03",
            value: 3.87452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-04",
            value: 3.89452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-05",
            value: 3.92452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-06",
            value: 3.93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-07",
            value: 3.94452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-08",
            value: 3.95452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-09",
            value: 3.96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-10",
            value: 3.97452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-11",
            value: 3.98452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-12",
            value: 3.99452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-13",
            value: 4.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-14",
            value: 4.02452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-15",
            value: 4.05452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-16",
            value: 4.06452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-17",
            value: 4.08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-18",
            value: 4.11452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-19",
            value: 4.12452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-20",
            value: 4.13452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-21",
            value: 4.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-22",
            value: 4.15452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-23",
            value: 4.16452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-24",
            value: 4.17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-25",
            value: 4.18452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-26",
            value: 4.19452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-27",
            value: 4.22452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-28",
            value: 4.23452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-29",
            value: 4.25452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-09-30",
            value: 4.28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-01",
            value: 4.29452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-02",
            value: 4.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-03",
            value: 4.31452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-04",
            value: 4.37452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-05",
            value: 4.44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-06",
            value: 4.52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-07",
            value: 4.61452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-08",
            value: 4.71452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-09",
            value: 4.82452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-10",
            value: 4.94452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-11",
            value: 5.07452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-12",
            value: 5.21452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-13",
            value: 5.36452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-14",
            value: 5.52452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-15",
            value: 5.69452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-16",
            value: 5.87452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-17",
            value: 6.06452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-18",
            value: 6.26452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-19",
            value: 6.44452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-20",
            value: 6.63452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-21",
            value: 6.83452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-22",
            value: 6.84452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-23",
            value: 6.86452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-24",
            value: 6.89452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-25",
            value: 6.93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-26",
            value: 6.94452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-27",
            value: 6.96452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-28",
            value: 6.99452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-29",
            value: 7.03452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-30",
            value: 7.08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-10-31",
            value: 7.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-01",
            value: 7.15452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-02",
            value: 7.17452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-03",
            value: 7.18452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-04",
            value: 7.20452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-05",
            value: 6.90452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-06",
            value: 6.60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-07",
            value: 6.10452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-08",
            value: 5.40452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-09",
            value: 4.70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-10",
            value: 4.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-11",
            value: 3.30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-12",
            value: 2.60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-13",
            value: 2.50452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-14",
            value: 1.80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-15",
            value: 1.10452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-16",
            value: .40452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-17",
            value: .30452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-18",
            value: .10452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-19",
            value: -.59548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-20",
            value: -.19548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-21",
            value: .20452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-22",
            value: .60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-23",
            value: 1.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-24",
            value: 1.40452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-25",
            value: 2.20452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-26",
            value: 3.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-27",
            value: 3.80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-28",
            value: 4.60452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-29",
            value: 3.90452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-11-30",
            value: 3.20452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-01",
            value: 2.50452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-02",
            value: 1.80452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-03",
            value: 1.70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-04",
            value: 1.00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-05",
            value: .70452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-06",
            value: .00452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-07",
            value: -.69548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-08",
            value: -1.39548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-09",
            value: -1.40548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-10",
            value: -.60548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-11",
            value: .19452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-12",
            value: .69452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-13",
            value: 1.49452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-14",
            value: 2.29452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-15",
            value: 3.09452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-16",
            value: 3.89452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-17",
            value: 4.69452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-18",
            value: 4.54452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-19",
            value: 5.34452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-20",
            value: 5.24452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-21",
            value: 5.14452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-22",
            value: 4.99452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-23",
            value: 4.98452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-24",
            value: 4.48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-25",
            value: 3.98452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-26",
            value: 3.48452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-27",
            value: 2.98452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-28",
            value: 2.38452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-29",
            value: 1.88452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-30",
            value: 1.28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2021-12-31",
            value: .78452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-01",
            value: .28452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-02",
            value: -.21548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-03",
            value: -.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-04",
            value: -1.31548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-05",
            value: -1.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-06",
            value: -2.31548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-07",
            value: -1.51548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-08",
            value: -.71548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-09",
            value: .08452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-10",
            value: .88452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-11",
            value: 1.68452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-12",
            value: 1.53452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-13",
            value: 2.33452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-14",
            value: 2.23452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-15",
            value: 3.03452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-16",
            value: 3.83452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-17",
            value: 3.33452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-18",
            value: 2.63452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-19",
            value: 1.93452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-20",
            value: 1.23452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-21",
            value: .53452,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-22",
            value: -.16548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-23",
            value: -.15548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-24",
            value: -.14548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-25",
            value: -.13548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-26",
            value: -.12548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-27",
            value: -.09548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-28",
            value: -.08548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-29",
            value: -.06548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-30",
            value: -.03548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-01-31",
            value: -.02548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-01",
            value: -.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-02",
            value: -.41548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-03",
            value: -.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-04",
            value: -1.21548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-05",
            value: -1.61548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-06",
            value: -2.01548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-07",
            value: -2.41548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-08",
            value: -2.41548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-09",
            value: -2.11548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-10",
            value: -2.10548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-11",
            value: -1.80548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-12",
            value: -1.50548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-13",
            value: -1.49548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-14",
            value: -1.19548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-15",
            value: -1.16548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-16",
            value: -.86548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-17",
            value: -.84548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-18",
            value: -.81548,
            color: "rgba(32, 198, 98, .95)"
        },
        {
            time: "\t2022-02-19",
            value: -.80548,
            color: "rgba(32, 198, 98, .95)"
        }]),
        window.addEventListener("load",
        function() {
            d.applyOptions({
                timeScale: {
                    timeVisible: !1,
                    secondsVisible: !1
                }
            }),
            S(v[0]),
            setTimeout(function() {
                e(".pace").addClass("animated fadeOutUp delay-1s")
            },
            1500)
        })
    }.call(this, a(0))
},
function(e, t, a) {},
,
function(e, t) {
    e.exports = global_obj = {
        pcwidth: 1200,
        widthWindow: null,
        bodyElement: null,
        btnSidebarTrigger: null,
        btnSidemenuTrigger: null,
        sidebarBtns: null,
        document_init: function() {
            var e = this;
            this.widthWindow = window.innerWidth,
            this.bodyElement = document.querySelector(".body"),
            this.btnSidebarTrigger = document.querySelector(".js__btn-sidebar-trigger"),
            this.btnSidemenuTrigger = document.querySelector(".js__btn-sidemenu-trigger"),
            this.sidebarBtns = document.querySelectorAll(".sidebar__buttons .button"),
            this.widthWindow >= this.pcwidth && (this.add_class(this.btnSidebarTrigger, "btn-sidebar-trigger--open"), this.open_side_elements()),
            this.widthWindow < this.pcwidth && (this.remove_class(this.btnSidebarTrigger, "btn-sidebar-trigger--open"), this.clean_side_elements()),
            window.onresize = function() {
                e.sidebar_resize()
            },
            null != this.btnSidebarTrigger && this.btnSidebarTrigger.addEventListener("click",
            function() {
                e.btnSidebarTrigger.classList.contains("btn-sidebar-trigger--open") ? (e.remove_class(e.btnSidebarTrigger, "btn-sidebar-trigger--open"), e.remove_class(e.bodyElement, "sidebar--opened")) : (e.add_class(e.btnSidebarTrigger, "btn-sidebar-trigger--open"), e.add_class(e.bodyElement, "sidebar--opened"))
            }),
            null != this.btnSidemenuTrigger && this.btnSidemenuTrigger.addEventListener("click",
            function() {
                e.btnSidemenuTrigger.classList.contains("btn-sidemenu-trigger--open") ? (e.remove_class(e.btnSidemenuTrigger, "btn-sidemenu-trigger--open"), e.remove_class(e.bodyElement, "sidemenu--opened")) : (e.add_class(e.btnSidemenuTrigger, "btn-sidemenu-trigger--open"), e.add_class(e.bodyElement, "sidemenu--opened"))
            }),
            null != this.sidebarBtns && this.sidebar_transation_btns_init();
            var t = document.querySelectorAll(".transaction__progress__bar"),
            a = document.querySelectorAll(".counter .second");
            null != a && a.forEach(function(t) {
                e.countdown(t, t.textContent)
            }),
            null != t && t.forEach(function(t, a) {
                var l = t.dataset.total;
                e.progress_move(t, l)
            })
        },
        sidebar_resize: function() {
            this.bodyElement.offsetWidth >= this.pcwidth && (this.add_class(this.btnSidebarTrigger, "btn-sidebar-trigger--open"), this.open_side_elements()),
            this.bodyElement.offsetWidth < this.pcwidth && (this.remove_class(this.btnSidebarTrigger, "btn-sidebar-trigger--open"), this.clean_side_elements())
        },
        sidebar_transation_btns_init: function() {
            var e = this;
            if (null != this.sidebarBtns) for (var t = function(t) {
                e.sidebarBtns[t].addEventListener("click",
                function() {
                    if (!e.sidebarBtns[t].classList.contains("button--active")) {
                        for (var a = 0; a < e.sidebarBtns.length; a++) e.remove_class(e.sidebarBtns[a], "button--active");
                        e.add_class(e.sidebarBtns[t], "button--active");
                        for (var l = e.sidebarBtns[t].dataset.listname, i = document.querySelectorAll(".transaction__list__wrap"), u = 0; u < i.length; u++) i[u].classList.contains(l) ? e.remove_class(i[u], "d-none") : e.add_class(i[u], "d-none")
                    }
                })
            },
            a = 0; a < this.sidebarBtns.length; a++) t(a)
        },
        add_class: function(e, t) {
            e.classList.contains(t) || e.classList.add(t)
        },
        remove_class: function(e, t) {
            e.classList.contains(t) && e.classList.remove(t)
        },
        open_side_elements: function() {
            var e = document.querySelector(".body");
            e.classList.contains("sidebar--opened") || this.add_class(e, "sidebar--opened"),
            e.classList.contains("sidemenu--opened") || this.add_class(e, "sidemenu--opened")
        },
        clean_side_elements: function() {
            var e = document.querySelector(".body");
            e.classList.contains("sidebar--opened") && e.classList.remove("sidebar--opened"),
            e.classList.contains("sidemenu--opened") && e.classList.remove("sidemenu--opened")
        },
        countdown: function(e, t) {
            var a, l = t;
            a = setInterval(function() {
                e.innerHTML = l + " ",
                (l -= 1) <= 0 && (clearInterval(a), e.innerHTML = " ")
            },
            1e3)
        },
        progress_move: function(e, t) {
            console.log(e, t);
            var a = 1,
            l = 40;
            t > 60 && (l = 50);
            var i = setInterval(function() {
                a >= 100 ? clearInterval(i) : (a += 100 / (t * l), e.style.width = a + "%")
            },
            1e3 / l)
        }
    }
}]);