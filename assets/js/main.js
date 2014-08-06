;
(function() {

    // Menu settings
    $('#menuToggle, .menu-close').on('click', function() {
        $('#menuToggle').toggleClass('active');
        $('body').toggleClass('body-push-toleft');
        $('#theMenu').toggleClass('menu-open');
    });


})(jQuery)

(function(e, t, n, r) {
    function o(t, n) {
        this.$element = e(t);
        this.settings = e.extend({}, s, n);
        this.init()
    }
    var i = "floatlabel",
        s = {
            slideInput: true,
            labelStartTop: "20px",
            labelEndTop: "10px",
            transitionDuration: .3,
            transitionEasing: "ease-in-out",
            labelClass: "",
            typeMatches: /text|password|email|number|search|url/
        };
    o.prototype = {
        init: function() {
            var e = this;
            var n = {
                "-webkit-transition": "all " + this.settings.transitionDuration + "s " + this.settings.transitionEasing,
                "-moz-transition": "all " + this.settings.transitionDuration + "s " + this.settings.transitionEasing,
                "-o-transition": "all " + this.settings.transitionDuration + "s " + this.settings.transitionEasing,
                "-ms-transition": "all " + this.settings.transitionDuration + "s " + this.settings.transitionEasing,
                transition: "all " + this.settings.transitionDuration + "s " + this.settings.transitionEasing
            };
            if (this.$element.prop("tagName").toUpperCase() !== "INPUT") {
                return
            }
            if (!this.settings.typeMatches.test(this.$element.attr("type"))) {
                return
            }
            var r = this.$element.attr("id");
            if (!r) {
                r = Math.floor(Math.random() * 100) + 1;
                this.$element.attr("id", r)
            }
            var i = this.$element.attr("placeholder");
            var s = this.$element.data("label");
            var o = this.$element.data("class");
            if (!o) {
                o = ""
            }
            if (!i || i === "") {
                i = "You forgot to add placeholder attribute!"
            }
            if (!s || s === "") {
                s = i
            }
            this.inputPaddingTop = parseFloat(this.$element.css("padding-top")) + 10;
            this.$element.wrap('<div class="floatlabel-wrapper" style="position:relative"></div>');
            this.$element.before('<label for="' + r + '" class="label-floatlabel ' + this.settings.labelClass + " " + o + '">' + s + "</label>");
            this.$label = this.$element.prev("label");
            this.$label.css({
                position: "absolute",
                top: this.settings.labelStartTop,
                left: this.$element.css("padding-left"),
                display: "none",
                "-moz-opacity": "0",
                "-khtml-opacity": "0",
                "-webkit-opacity": "0",
                opacity: "0"
            });
            if (!this.settings.slideInput) {
                this.$element.css({
                    "padding-top": this.inputPaddingTop
                })
            }
            this.$element.on("keyup blur change", function(t) {
                e.checkValue(t)
            });
            t.setTimeout(function() {
                e.$label.css(n);
                e.$element.css(n)
            }, 100);
            this.checkValue()
        },
        checkValue: function(e) {
            if (e) {
                var t = e.keyCode || e.which;
                if (t === 9) {
                    return
                }
            }
            var n = this.$element.data("flout");
            if (this.$element.val() !== "") {
                this.$element.data("flout", "1")
            }
            if (this.$element.val() === "") {
                this.$element.data("flout", "0")
            }
            if (this.$element.data("flout") === "1" && n !== "1") {
                this.showLabel()
            }
            if (this.$element.data("flout") === "0" && n !== "0") {
                this.hideLabel()
            }
        },
        showLabel: function() {
            var e = this;
            e.$label.css({
                display: "block"
            });
            t.setTimeout(function() {
                e.$label.css({
                    top: e.settings.labelEndTop,
                    "-moz-opacity": "1",
                    "-khtml-opacity": "1",
                    "-webkit-opacity": "1",
                    opacity: "1"
                });
                if (e.settings.slideInput) {
                    e.$element.css({
                        "padding-top": e.inputPaddingTop
                    })
                }
            }, 50)
        },
        hideLabel: function() {
            var e = this;
            e.$label.css({
                top: e.settings.labelStartTop,
                "-moz-opacity": "0",
                "-khtml-opacity": "0",
                "-webkit-opacity": "0",
                opacity: "0"
            });
            if (e.settings.slideInput) {
                e.$element.css({
                    "padding-top": parseFloat(e.inputPaddingTop) - 10
                })
            }
            t.setTimeout(function() {
                e.$label.css({
                    display: "none"
                })
            }, e.settings.transitionDuration * 1e3)
        }
    };
    e.fn[i] = function(t) {
        return this.each(function() {
            if (!e.data(this, "plugin_" + i)) {
                e.data(this, "plugin_" + i, new o(this, t))
            }
        })
    }
})(jQuery, window, document)

$(document).ready(function() {
    //Floatlabel
    $('input').floatlabel();
    $('a, button').click(function(e) {
        e.preventDefault();
    });
});