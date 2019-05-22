! function(e) {
    var n = {};

    function t(a) {
        if (n[a]) return n[a].exports;
        var o = n[a] = {
            i: a,
            l: !1,
            exports: {}
        };
        return e[a].call(o.exports, o, o.exports, t), o.l = !0, o.exports
    }
    t.m = e, t.c = n, t.d = function(e, n, a) {
        t.o(e, n) || Object.defineProperty(e, n, {
            enumerable: !0,
            get: a
        })
    }, t.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, t.t = function(e, n) {
        if (1 & n && (e = t(e)), 8 & n) return e;
        if (4 & n && "object" == typeof e && e && e.__esModule) return e;
        var a = Object.create(null);
        if (t.r(a), Object.defineProperty(a, "default", {
                enumerable: !0,
                value: e
            }), 2 & n && "string" != typeof e)
            for (var o in e) t.d(a, o, function(n) {
                return e[n]
            }.bind(null, o));
        return a
    }, t.n = function(e) {
        var n = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return t.d(n, "a", n), n
    }, t.o = function(e, n) {
        return Object.prototype.hasOwnProperty.call(e, n)
    }, t.p = "/", t(t.s = 53)
}({
    53: function(e, n, t) {
        e.exports = t(54)
    },
    54: function(e, n) {
        ! function() {
            "use strict";
            var e = new Date,
                n = (e.getDate(), e.getMonth(), e.getFullYear(), new Date($.now())),
                t = [{
                    title: "Hey!",
                    start: new Date($.now() + 158e6),
                    className: "bg-warning"
                }, {
                    title: "See John Deo",
                    start: n,
                    end: n,
                    className: "bg-success"
                }, {
                    title: "Meet John Deo",
                    start: new Date($.now() + 168e6),
                    className: "bg-info"
                }, {
                    title: "Buy a Theme",
                    start: new Date($.now() + 338e6),
                    className: "bg-primary"
                }];
            $('[data-toggle="fullcalendar"]').each(function() {
                var e = $(this),
                    n = {
                        themeSystem: "bootstrap4",
                        closeButton: void 0 !== e.data("toastr-close-button") && e.data("toastr-close-button"),
                        slotDuration: "00:15:00",
                        minTime: "08:00:00",
                        maxTime: "19:00:00",
                        defaultView: "month",
                        handleWindowResize: !0,
                        height: $(window).height() - 200,
                        header: {
                            left: "prev,next today",
                            center: "title",
                            right: "month,agendaWeek,agendaDay"
                        },
                        events: t,
                        editable: !0,
                        droppable: !0,
                        eventLimit: !0,
                        selectable: !0,
                        drop: function(n) {
                            ! function(e, n, t) {
                                var a = e.data("eventObject"),
                                    o = e.data("class"),
                                    l = $.extend({}, a);
                                l.start = n, o && (l.className = [o]), t.fullCalendar("renderEvent", l, !0), $("#drop-remove").is(":checked") && e.remove()
                            }($(this), n, e)
                        },
                        select: function(n, t, o) {
                            ! function(e, n, t, o) {
                                var l = $(a);
                                l.modal({
                                    backdrop: "static"
                                });
                                var i = $('<form>\n      <div class="row">\n        <div class="col-12">\n          <div class="form-group">\n            <label class="control-label">Event Name</label>\n            <input class="form-control" placeholder="Insert Event Name" type="text" name="title" />\n          </div>\n        </div>\n        <div class="col-12">\n          <div class="form-group">\n            <label class="control-label">Category</label>\n            <select class="form-control custom-select" name="category">\n              <option value="bg-danger">Danger</option>\n              <option value="bg-success">Success</option>\n              <option value="bg-primary">Primary</option>\n              <option value="bg-info">Info</option>\n              <option value="bg-dark">Dark</option>\n              <option value="bg-warning">Warning</option>\n            </select>\n          </div>\n        </div>\n      </div>\n    </form>');
                                l.find(".delete-event").hide().end().find(".save-event").show().end().find(".modal-body").empty().prepend(i).end().find(".save-event").unbind("click").click(function() {
                                    i.submit()
                                }), l.find("form").on("submit", function(t) {
                                    t.preventDefault();
                                    var a = i.find('input[name="title"]').val(),
                                        r = (i.find('input[name="beginning"]').val(), i.find('input[name="ending"]').val(), i.find('select[name="category"] option:checked').val());
                                    if (null !== a && 0 != a.length) return o.fullCalendar("renderEvent", {
                                        title: a,
                                        start: e,
                                        end: n,
                                        allDay: !1,
                                        className: r
                                    }, !0), l.modal("hide");
                                    alert("You have to give a title to your event")
                                }), o.fullCalendar("unselect")
                            }(n, t, 0, e)
                        },
                        eventClick: function(n, t, o) {
                            ! function(e, n, t, o) {
                                var l = $(a),
                                    i = $('<form>\n      <label>Change event name</label>\n      <div class="input-group m-b-15">\n        <input class="form-control" type="text" value="'.concat(e.title, '" />\n        <span class="input-group-append">\n          <button type="submit" class="btn btn-success">\n            <i class="material-icons mr-2">check</i> Save\n          </button>\n        </span>\n      </div>\n    </form>'));
                                l.modal("show"), l.find(".delete-event").show().end().find(".save-event").hide().end().find(".modal-body").empty().prepend(i).end().find(".delete-event").unbind("click").click(function() {
                                    o.fullCalendar("removeEvents", function(n) {
                                        return n._id == e._id
                                    }), l.modal("hide")
                                }), l.find("form").on("submit", function(n) {
                                    n.preventDefault(), e.title = i.find("input[type=text]").val(), o.fullCalendar("updateEvent", e), l.modal("hide")
                                })
                            }(n, 0, 0, e)
                        }
                    };
                e.fullCalendar(n)
            });
            var a = "#event-modal",
                o = $("#add-category form"),
                l = function() {
                    $("#external-events div.external-event").each(function() {
                        $(this).data("eventObject") || ($(this).data("eventObject", {
                            title: $.trim($(this).find(".external-event__title").text())
                        }), $(this).draggable({
                            zIndex: 999,
                            revert: !0,
                            revertDuration: 0
                        }))
                    })
                };
            l(), $(".save-category").on("click", function() {
                var e = o.find('input[name="category-name"]').val(),
                    n = o.find('select[name="category-color"]').val();
                null !== e && 0 != e.length && ($("#external-events").append('\n        <div class="external-event bg-'.concat(n, '" data-class="bg-').concat(n, '">\n          <i class="mr-2 material-icons">drag_handle</i>\n          <span class="external-event__title">').concat(e, "</span>\n        </div>\n      ")), l())
            })
        }()
    }
});