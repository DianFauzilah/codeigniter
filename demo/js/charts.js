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
    }, o.p = "/", o(o.s = 43)
}({
    43: function(t, e, o) {
        t.exports = o(44)
    },
    44: function(t, e) {
        function o(t) {
            return (o = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                return typeof t
            } : function(t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }
        var a = function t(e, a) {
                for (var r in a) "object" != o(a[r]) ? e[r] = a[r] : t(e[r], a[r])
            },
            r = function(t) {
                var e = t.data("add"),
                    o = $(t.data("target")).data("chart");
                if (t.is(":checked")) {
                    ! function t(e, o) {
                        for (var a in o) Array.isArray(o[a]) ? o[a].forEach(function(t) {
                            e[a].push(t)
                        }) : t(e[a], o[a])
                    }(o, e)
                } else {
                    ! function t(e, o) {
                        for (var a in o) Array.isArray(o[a]) ? o[a].forEach(function(t) {
                            e[a].pop()
                        }) : t(e[a], o[a])
                    }(o, e)
                }
                o.update()
            },
            n = function(t) {
                var e = t.data("update"),
                    o = $(t.data("target")).data("chart");
                if (a(o, e), void 0 !== t.data("prefix") || void 0 !== t.data("suffix")) {
                    var r = t.data("prefix") ? t.data("prefix") : "",
                        n = t.data("suffix") ? t.data("suffix") : "";
                    void 0 !== o.options.scales && (o.options.scales.yAxes[0].ticks.callback = function(t) {
                        if (!(t % 10)) return r + t + n
                    }), o.options.tooltips.callbacks.label = function(t, e) {
                        var o = e.datasets[t.datasetIndex].label || "",
                            a = t.yLabel || e.datasets[0].data[t.index],
                            s = "";
                        return 1 < e.datasets.length && (s += '<span class="popover-body-label mr-auto">' + o + "</span>"), s + '<span class="popover-body-value">' + r + a + n + "</span>"
                    }
                }
                o.update()
            },
            s = {
                responsive: !0,
                maintainAspectRatio: !1,
                defaultColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[700] : settings.colors.gray[600],
                defaultFontColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[700] : settings.colors.gray[600],
                defaultFontFamily: settings.fonts.base,
                defaultFontSize: 13,
                layout: {
                    padding: 0
                },
                legend: {
                    display: !1,
                    position: "bottom",
                    labels: {
                        usePointStyle: !0,
                        padding: 16
                    }
                },
                elements: {
                    point: {
                        radius: 0,
                        backgroundColor: settings.colors.primary[700]
                    },
                    line: {
                        tension: .4,
                        borderWidth: 3,
                        borderColor: settings.colors.primary[700],
                        backgroundColor: settings.colors.transparent,
                        borderCapStyle: "rounded"
                    },
                    rectangle: {
                        backgroundColor: settings.colors.primary[700]
                    },
                    arc: {
                        backgroundColor: settings.colors.primary[700],
                        borderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white,
                        borderWidth: 4
                    }
                },
                tooltips: {
                    enabled: !1,
                    mode: "index",
                    intersect: !1,
                    custom: function(t) {
                        var e = $("#chart-tooltip");
                        if (e.length || (e = $('<div id="chart-tooltip" class="popover bs-popover-top" role="tooltip"></div>'), $("body").append(e)), 0 !== t.opacity) {
                            if (t.body) {
                                var o = t.title || [],
                                    a = t.body.map(function(t) {
                                        return t.lines
                                    }),
                                    r = "";
                                r += '<div class="arrow"></div>', o.forEach(function(t) {
                                    r += '<h3 class="popover-header text-center">' + t + "</h3>"
                                }), a.forEach(function(e, o) {
                                    var n = '<span class="popover-body-indicator" style="background-color: ' + t.labelColors[o].backgroundColor + '"></span>',
                                        s = 1 < a.length ? "justify-content-left" : "justify-content-center";
                                    r += '<div class="popover-body d-flex align-items-center ' + s + '">' + n + e + "</div>"
                                }), e.html(r)
                            }
                            var n = $(this._chart.canvas),
                                s = (n.outerWidth(), n.outerHeight(), n.offset().top),
                                i = n.offset().left,
                                l = e.outerWidth(),
                                c = e.outerHeight(),
                                d = s + t.caretY - c - 16,
                                u = i + t.caretX - l / 2;
                            e.css({
                                top: d + "px",
                                left: u + "px",
                                display: "block"
                            })
                        } else e.css("display", "none")
                    },
                    callbacks: {
                        label: function(t, e) {
                            var o = e.datasets[t.datasetIndex].label || "",
                                a = t.yLabel,
                                r = "";
                            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + o + "</span>"), r + '<span class="popover-body-value">' + a + "</span>"
                        }
                    }
                }
            },
            i = {
                cutoutPercentage: 83,
                tooltips: {
                    callbacks: {
                        title: function(t, e) {
                            return e.labels[t[0].index]
                        },
                        label: function(t, e) {
                            return "" + '<span class="popover-body-value">' + e.datasets[0].data[t.index] + "</span>"
                        }
                    }
                },
                legendCallback: function(t) {
                    var e = t.data,
                        o = "";
                    return e.labels.forEach(function(t, a) {
                        var r = e.datasets[0].backgroundColor[a];
                        o += '<span class="chart-legend-item">', o += '<i class="chart-legend-indicator" style="background-color: ' + r + '"></i>', o += t, o += "</span>"
                    }), o
                }
            },
            l = {
                settings: settings,
                init: function() {
                    a(Chart, {
                        defaults: {
                            global: s,
                            doughnut: i
                        }
                    }), Chart.scaleService.updateScaleDefaults("linear", {
                        gridLines: {
                            borderDash: [2],
                            borderDashOffset: [2],
                            color: "dark" == settings.charts.colorScheme ? settings.colors.gray[900] : settings.colors.gray[100],
                            drawBorder: !1,
                            drawTicks: !1,
                            lineWidth: 0,
                            zeroLineWidth: 0,
                            zeroLineColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[900] : settings.colors.gray[100],
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2]
                        },
                        ticks: {
                            beginAtZero: !0,
                            padding: 10,
                            callback: function(t) {
                                if (!(t % 10)) return t
                            }
                        }
                    }), Chart.scaleService.updateScaleDefaults("category", {
                        gridLines: {
                            drawBorder: !1,
                            drawOnChartArea: !1,
                            drawTicks: !1
                        },
                        ticks: {
                            padding: 20
                        },
                        maxBarThickness: 10
                    }), $('[data-toggle="chart"]').on({
                        change: function() {
                            var t = $(this);
                            t.is("[data-add]") && r(t)
                        },
                        click: function() {
                            var t = $(this);
                            t.is("[data-update]") && n(t)
                        }
                    })
                },
                add: r,
                update: n,
                create: function(t) {
                    var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "line",
                        o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                        a = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {},
                        r = $(t),
                        n = new Chart(r, {
                            type: e,
                            options: o,
                            data: a
                        });
                    r.data("chart", n), r.data("chart-legend") && (document.querySelector(r.data("chart-legend")).innerHTML = n.generateLegend())
                }
            };
        void 0 !== window && (window.Charts = l)
    }
});