! function(e) {
    var t = {};

    function r(n) {
        if (t[n]) return t[n].exports;
        var o = t[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(o.exports, o, o.exports, r), o.l = !0, o.exports
    }
    r.m = e, r.c = t, r.d = function(e, t, n) {
        r.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, r.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, r.t = function(e, t) {
        if (1 & t && (e = r(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (r.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var o in e) r.d(n, o, function(t) {
                return e[t]
            }.bind(null, o));
        return n
    }, r.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return r.d(t, "a", t), t
    }, r.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, r.p = "/", r(r.s = 41)
}({
    41: function(e, t, r) {
        e.exports = r(42)
    },
    42: function(e, t) {
        Chart.elements.RoundedTopRectangle = Chart.elements.Rectangle.extend({
            draw: function() {
                var e, t, r, n, o, a, i, l = this._chart.ctx,
                    u = this._view,
                    d = u.borderWidth;
                if (u.horizontal ? (e = u.base, t = u.x, r = u.y - u.height / 2, n = u.y + u.height / 2, o = t > e ? 1 : -1, a = 1, i = u.borderSkipped || "left") : (e = u.x - u.width / 2, t = u.x + u.width / 2, r = u.y, o = 1, a = (n = u.base) > r ? 1 : -1, i = u.borderSkipped || "bottom"), d) {
                    var c = Math.min(Math.abs(e - t), Math.abs(r - n)),
                        f = (d = d > c ? c : d) / 2,
                        s = e + ("left" !== i ? f * o : 0),
                        h = t + ("right" !== i ? -f * o : 0),
                        b = r + ("top" !== i ? f * a : 0),
                        p = n + ("bottom" !== i ? -f * a : 0);
                    s !== h && (r = b, n = p), b !== p && (e = s, t = h)
                }
                var y = Math.abs(e - t),
                    g = r,
                    v = (r = g + y * (this._chart.config.options.barRoundness || .5) * .5) - g;
                l.beginPath(), l.fillStyle = u.backgroundColor, l.strokeStyle = u.borderColor, l.lineWidth = d,
                    function(e, t, r, n, o, a) {
                        e.beginPath(), e.moveTo(t + a, r), e.lineTo(t + n - a, r), e.quadraticCurveTo(t + n, r, t + n, r + a), e.lineTo(t + n, r + o), e.lineTo(t, r + o), e.lineTo(t, r + a), e.quadraticCurveTo(t, r, t + a, r), e.closePath()
                    }(l, e, r - v + 1, y, n - g, v), l.fill(), d && l.stroke(), r = g
            }
        }), Chart.defaults.roundedBar = Chart.helpers.clone(Chart.defaults.bar), Chart.controllers.roundedBar = Chart.controllers.bar.extend({
            dataElementType: Chart.elements.RoundedTopRectangle
        })
    }
});