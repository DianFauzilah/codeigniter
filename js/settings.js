! function(e) {
    var r = {};

    function t(n) {
        if (r[n]) return r[n].exports;
        var f = r[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(f.exports, f, f.exports, t), f.l = !0, f.exports
    }
    t.m = e, t.c = r, t.d = function(e, r, n) {
        t.o(e, r) || Object.defineProperty(e, r, {
            enumerable: !0,
            get: n
        })
    }, t.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, t.t = function(e, r) {
        if (1 & r && (e = t(e)), 8 & r) return e;
        if (4 & r && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (t.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & r && "string" != typeof e)
            for (var f in e) t.d(n, f, function(r) {
                return e[r]
            }.bind(null, f));
        return n
    }, t.n = function(e) {
        var r = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return t.d(r, "a", r), r
    }, t.o = function(e, r) {
        return Object.prototype.hasOwnProperty.call(e, r)
    }, t.p = "/", t(t.s = 67)
}({
    67: function(e, r, t) {
        e.exports = t(68)
    },
    68: function(e, r) {
        var t = function(e, r) {
                var t = parseInt(e.slice(1, 3), 16),
                    n = parseInt(e.slice(3, 5), 16),
                    f = parseInt(e.slice(5, 7), 16);
                return r ? "rgba(" + t + ", " + n + ", " + f + ", " + r + ")" : "rgb(" + t + ", " + n + ", " + f + ")"
            },
            n = {
                bodyBg: "#F7F8F9",
                border: "#efefef",
                gray: {
                    50: "#edeef0",
                    100: "#d0d6dc",
                    200: "#b2bac4",
                    300: "#939fad",
                    400: "#7c8a9b",
                    500: "#65778a",
                    600: "#586879",
                    700: "#485563",
                    800: "#39424d",
                    900: "#272e36"
                },
                primary: {
                    50: "#e4f3ff",
                    100: "#bddfff",
                    200: "#93ccff",
                    300: "#68b8ff",
                    400: "#49a8ff",
                    500: "#3099ff",
                    600: "#308AF3",
                    700: "#2d79df",
                    800: "#2b67cd",
                    900: "#2648ad"
                },
                success: {
                    50: "#edf9e6",
                    100: "#d1f0c2",
                    200: "#b2e599",
                    300: "#91db6e",
                    400: "#75d34a",
                    500: "#58ca1f",
                    600: "#47ba16",
                    700: "#2ba607",
                    800: "#009200",
                    900: "#006f00"
                },
                danger: {
                    50: "#feeaef",
                    100: "#fccad5",
                    200: "#ec949f",
                    300: "#e26979",
                    400: "#ee405a",
                    500: "#f52042",
                    600: "#e51240",
                    700: "#d3003a",
                    800: "#c60032",
                    900: "#b70026"
                },
                black: "#12263F",
                white: "#FFFFFF",
                transparent: "transparent",
                get: function(e) {
                    return e.split(".").reduce(function(e, r) {
                        return e[r]
                    }, this)
                }
            },
            f = {
                fonts: {
                    base: "Helvetica Neue"
                },
                colors: n,
                charts: {
                    colorScheme: "light",
                    colors: {
                        area: t(n.primary[100], .5)
                    }
                },
                hexToRGB: t
            };
        "undefined" != typeof window && (window.settings = f)
    }
});