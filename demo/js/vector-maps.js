! function(t) {
    var e = {};

    function o(a) {
        if (e[a]) return e[a].exports;
        var r = e[a] = {
            i: a,
            l: !1,
            exports: {}
        };
        return t[a].call(r.exports, r, r.exports, o), r.l = !0, r.exports
    }
    o.m = t, o.c = e, o.d = function(t, e, a) {
        o.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: a
        })
    }, o.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, o.t = function(t, e) {
        if (1 & e && (t = o(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var a = Object.create(null);
        if (o.r(a), Object.defineProperty(a, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var r in t) o.d(a, r, function(e) {
                return t[e]
            }.bind(null, r));
        return a
    }, o.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return o.d(e, "a", e), e
    }, o.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, o.p = "/", o(o.s = 65)
}({
    65: function(t, e, o) {
        t.exports = o(66)
    },
    66: function(t, e) {
        ! function() {
            "use strict";

            function t() {
                $('[data-toggle="vector-map"]').each(function() {
                    var t = $(this),
                        e = t.data().mapObject;
                    e.resizeContainer();
                    var o = t.data("vector-map-focus");
                    o && e.setFocus(o)
                })
            }
            JQVMap.prototype.resizeContainer = function() {
                this.width = this.container.width(), this.height = this.container.height(), this.resize(), this.canvas.setSize(this.width, this.height), this.applyTransform(), this.positionPins()
            }, JQVMap.prototype.setFocus = function(t) {
                var e = this,
                    o = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                "string" == typeof t && (t = [t]);
                var a, r, i = this;
                t.forEach(function(t) {
                    var o = $("#" + e.getCountryId(t))[0].getBBox();
                    void 0 === a ? a = o : (r = {
                        x: Math.min(a.x, o.x),
                        y: Math.min(a.y, o.y),
                        width: Math.max(a.x + a.width, o.x + o.width) - Math.min(a.x, o.x),
                        height: Math.max(a.y + a.height, o.y + o.height) - Math.min(a.y, o.y)
                    }, a = r)
                });
                var s = Math.min(this.width / a.width, this.height / a.height);
                s > this.zoomMaxStep * this.baseScale ? s = this.zoomMaxStep * this.baseScale : s < this.baseScale && (s = this.baseScale);
                var n = s / this.scale;
                this.zoomCurStep = this.zoomCurStep * Math.round(n);
                var c = a.x * s,
                    h = a.y * s,
                    l = a.width / 2,
                    u = (h - a.height / 2) / s * -1,
                    d = (c - l) / s * -1 + this.defaultWidth * (this.width / (this.defaultWidth * s)) / 2,
                    p = u + this.defaultHeight * (this.height / (this.defaultHeight * s)) / 2,
                    m = Math.abs(Math.round(60 * (s - this.scale) / Math.max(s, this.scale))) || 30;
                if (o) {
                    var f, v, g, y, b, S, M = 0;
                    f = this.scale, v = (s - f) / m, g = this.transX * this.scale, b = this.transY * this.scale, y = (d * s - g) / m, S = (p * s - b) / m, requestAnimationFrame(function t() {
                        M += 1, i.scale = f + v * M, i.transX = (g + y * M) / i.scale, i.transY = (b + S * M) / i.scale, i.applyTransform(), i.positionPins(), M < m && requestAnimationFrame(t)
                    })
                } else this.transX = d, this.transY = p, this.setScale(s), this.positionPins()
            }, $('[data-toggle="vector-map"]').each(function() {
                var t = $(this),
                    e = t.data("vector-map-values") && maps[t.data("vector-map-values")] || {},
                    o = {};
                try {
                    for (var a in o = t.data("vector-map-pins")) o.hasOwnProperty(a) && (o[a] = o[a].replace(/[<>]/g, function(t) {
                        switch (t) {
                            case "<":
                                return "<";
                            case ">":
                                return ">"
                        }
                    }))
                } catch (t) {}
                var r = {
                        map: t.data("vector-map-map"),
                        zoomOnScroll: void 0 !== t.data("vector-map-zoom-on-scroll") && t.data("vector-map-zoom-on-scroll"),
                        enableZoom: void 0 !== t.data("vector-map-enable-zoom") && t.data("vector-map-enable-zoom"),
                        showTooltip: void 0 === t.data("vector-map-show-tooltip") || t.data("vector-map-show-tooltip"),
                        focusOnSelect: void 0 !== t.data("vector-map-focus-on-select") && t.data("vector-map-focus-on-select"),
                        backgroundColor: void 0 !== t.data("vector-map-background-color") ? t.data("vector-map-background-color") : "transparent",
                        values: e,
                        color: settings.colors.gray[50],
                        selectedColor: settings.colors.primary[300],
                        hoverColor: settings.colors.primary[100],
                        scaleColors: [settings.colors.primary[50], settings.colors.primary[500]],
                        borderWidth: 1,
                        borderColor: "#ffffff",
                        borderOpacity: 1,
                        normalizeFunction: "polynomial",
                        colors: {},
                        pins: o,
                        pinMode: "content",
                        onLabelShow: function(t, o, a) {
                            o.html(o.html() + " - " + e[a])
                        },
                        onRegionSelect: function(t, e, o) {
                            r.focusOnSelect && n.setFocus(e)
                        }
                    },
                    i = t.data("vector-map-values-colors");
                if (i)
                    for (var a in e)
                        if (e.hasOwnProperty(a) && void 0 !== i[e[a]]) {
                            var s = i[e[a]];
                            r.colors[a] = settings.colors.get(s) || s
                        } t.vectorMap(r);
                var n = $(this).data().mapObject;
                Object.keys(r.colors) && n.setColors(r.colors);
                var c = t.data("vector-map-scale"),
                    h = t.data("vector-map-focus");
                c ? (n.setScale(c), n.positionPins()) : h && n.setFocus(h)
            }), $("[data-toggle=vector-map-focus]").on("click", function(t) {
                t.preventDefault();
                var e = $(this),
                    o = $(e.data("target"));
                if (o) {
                    var a = o.data().mapObject,
                        r = e.data("focus"),
                        i = e.data("animate");
                    r && a.setFocus(r, i)
                }
            });
            var e = document.querySelector(".mdk-drawer");
            e && e.addEventListener("mdk-drawer-change", function() {
                return requestAnimationFrame(t)
            })
        }()
    }
});