jQuery(document).ready(function (a) {
    calendario_trigger_call();
    full_calendar_trigger_call();
    dragablaeElementSet()
});
var transEndEventNames, transEndEventName;
var $wrapper, $calendar, cal, $month, $year;
function calendario_trigger_call() {
    transEndEventNames = {
        WebkitTransition: "webkitTransitionEnd",
        MozTransition: "transitionend",
        OTransition: "oTransitionEnd",
        msTransition: "MSTransitionEnd",
        transition: "transitionend"
    }, transEndEventName = transEndEventNames[Modernizr.prefixed("transition")], $wrapper = $("#custom-inner"), $calendar = $("#calendar"), cal = $calendar.calendario({
        onDayClick: function (c, b, a) {
            if (b.length > 0) {
                showEvents(b, a)
            }
        }, caldata: codropsEvents, displayWeekAbbr: true
    }), $month = $("#custom-month").html(cal.getMonthName()), $year = $("#custom-year").html(cal.getYear());
    $("#custom-next").on("click", function () {
        cal.gotoNextMonth(updateMonthYear)
    });
    $("#custom-prev").on("click", function () {
        cal.gotoPreviousMonth(updateMonthYear)
    })
}
function updateMonthYear() {
    $month.html(cal.getMonthName());
    $year.html(cal.getYear())
}
function showEvents(b, a) {
    hideEvents();
    var e = $('<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + a.monthname + " " + a.day + ", " + a.year + "</h4></div>"), c = $('<span class="custom-content-close"></span>').on("click", hideEvents);
    e.append(b.html(), c).insertAfter($wrapper);
    setTimeout(function () {
        e.css("top", "0%")
    }, 25)
}
function hideEvents() {
    var a = $("#custom-content-reveal");
    if (a.length > 0) {
        a.css("top", "100%");
        Modernizr.csstransitions ? a.on(transEndEventName, function () {
            $(this).remove()
        }) : a.remove()
    }
}
var date = new Date();
var d = date.getDate();
var m = date.getMonth();
var y = date.getFullYear();
var $trash = $("#trash");
var full_calendar;
function full_calendar_trigger_call() {
    full_calendar = $("#full-calendar").fullCalendar({
        header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaWeek,agendaDay"
        },
        selectable: true,
        selectHelper: true,
        select: function (c, a, b) {
            bootbox.prompt("Event name?", function (e) {
                if (e === null) {
                } else {
                    full_calendar.fullCalendar("renderEvent", {title: e, start: c, end: a, allDay: b}, true)
                }
                full_calendar.fullCalendar("unselect")
            })
        },
        editable: true,
        events: [{title: "All Day Event", start: new Date(y, m, 1)}, {
            title: "Long Event",
            start: new Date(y, m, d - 5),
            end: new Date(y, m, d - 2)
        }, {id: 999, title: "Repeating Event", start: new Date(y, m, d - 3, 16, 0), allDay: false}, {
            id: 999,
            title: "Repeating Event",
            start: new Date(y, m, d + 4, 16, 0),
            allDay: false
        }, {title: "Meeting", start: new Date(y, m, d, 10, 30), allDay: false}, {
            title: "Lunch",
            start: new Date(y, m, d, 12, 0),
            end: new Date(y, m, d, 14, 0),
            allDay: false
        }, {
            title: "Birthday Party",
            start: new Date(y, m, d + 1, 19, 0),
            end: new Date(y, m, d + 1, 22, 30),
            allDay: false
        }, {title: "Click for Google", start: new Date(y, m, 28), end: new Date(y, m, 29), url: "http://google.com/"}],
        droppable: true,
        drop: function (c, e) {
            var b = $(this).data("eventObject");
            var a = $.extend({}, b);
            a.start = c;
            a.allDay = e;
            $("#full-calendar").fullCalendar("renderEvent", a, true);
            if ($("#drop-remove").is(":checked")) {
                $(this).remove()
            }
        },
        eventDragStart: eventDragStart,
        loading: function (a) {
            if (a) {
                $("#loading").show()
            } else {
                $("#loading").hide()
            }
        }
    });
    full_calendar_control()
}
function full_calendar_control() {
    $("button.addEvent").click(function () {
        bootbox.prompt("Draggable Event name?", function (b) {
            if (b != null && b != "") {
                var a = "<div class='external-event'>" + b + "</div>";
                $("div.eventList").append(a);
                dragablaeElementSet()
            }
        })
    });
    $trash.droppable({
        drop: function (a, b) {
            $(b.draggable).remove();
            $("#trash").removeClass("active")
        }
    })
}
function eventDragStart(c, b, e, a) {
}
function dragablaeElementSet() {
    $("#external-events div.external-event").each(function () {
        var a = {title: $.trim($(this).text())};
        $(this).data("eventObject", a);
        $(this).draggable({zIndex: 999, revert: true, revertDuration: 0, start: startDraging, stop: stopDraging})
    })
}
function startDraging() {
    $("#trash").addClass("active")
}
function stopDraging() {
    $("#trash").removeClass("active")
};