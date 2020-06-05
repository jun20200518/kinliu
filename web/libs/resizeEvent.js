/*
* $(window).resize_object({
*     alwaysDo: {
*         action: function () {
*             console.log('run always do.');
*         }
*     },
*     desktop: {
*         action: function () {
*             console.log('should run desktop function');
*         }
*     },
*     pad: {
*         max_resolution: 768,
*         action: function () {
*             console.log('should run pad function');
*         }
*     },
*     phone: {
*         max_resolution: 480,
*         action: function () {
*             console.log('should run phone function');
*         }
*     }
* });
* */
var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
        if (!uniqueId) {
            uniqueId = "Don't call this twice without a uniqueId";
        }
        if (timers[uniqueId]) {
            clearTimeout (timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
    };
})();

(function ($) {
    $.fn.extend({
        resize_object: function (options) {
            var o = {
                window_width: 0,
                mode: {
                    alwaysDo: {
                        action: function () {
                            console.log('should run default always do function');
                        }
                    },
                    desktop: {
                        action: function () {
                            console.log('should run default desktop function');
                        }
                    },
                    pad: {
                        max_resolution: 1200,
                        action: function () {
                            console.log('should run default pad function');
                        }
                    },
                    phone: {
                        max_resolution: 480,
                        action: function () {
                            console.log('should run default phone function');
                        }
                    }
                }
            };
            $.extend( true, o.mode, options);
            this.initResizeEvent(o, new Date().valueOf());
            o = this.setWindowWidth(o);
            this.resizeFunction(o);
        },
        setWindowWidth: function (o) {
            //console.log('setWindowWidth', o);
            o.window_width = $(window).width() + this.getScrollBarWidth();
            return o;
        },
        getScrollBarWidth: function () {
            var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
                widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
            $outer.remove();
            //console.log('getScrollBarWidth', 100 - widthWithScroll);
            return 100 - widthWithScroll;
        },
        initResizeEvent: function (o, unique_id) {
            //console.log('run initResizeEvent');
            var THIS = this;
            $(window).resize(function () {
                waitForFinalEvent(function () {
                    //console.log('run waitForFinalEvent', o);
                    o = THIS.setWindowWidth(o);
                    THIS.resizeFunction(o);
                }, 600, unique_id);
            })
        },
        resizeFunction: function (o) {
            var THIS = this;
            //console.log('run resizeFunction');
            o.mode.alwaysDo.action();
            if (o.window_width <= o.mode.phone.max_resolution) {
                o.mode.phone.action();
            } else if (o.window_width <= o.mode.pad.max_resolution) {
                o.mode.pad.action();
            } else {
                o.mode.desktop.action();
            }
        }
    });
})(jQuery);
