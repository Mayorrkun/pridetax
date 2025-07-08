import $ from 'jquery';

export default function initParallax() {
    // Polyfill for requestAnimationFrame
    (function () {
        var lastTime = 0;
        var vendors = ['ms', 'moz', 'webkit', 'o'];
        for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
            window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
        }

        if (!window.requestAnimationFrame)
            window.requestAnimationFrame = function (callback) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                var id = window.setTimeout(function () { callback(currTime + timeToCall); },
                    timeToCall);
                lastTime = currTime + timeToCall;
                return id;
            };

        if (!window.cancelAnimationFrame)
            window.cancelAnimationFrame = function (id) {
                clearTimeout(id);
            };
    })();



    // Parallax Constructor
    function Parallax(element, options) {
        var self = this;

        if (typeof options == 'object') {
            delete options.refresh;
            delete options.render;
            $.extend(this, options);
        }

        this.$element = $(element);

        if (!this.imageSrc && this.$element.is('img')) {
            this.imageSrc = this.$element.attr('src');
        }

        var positions = (this.position + '').toLowerCase().match(/\S+/g) || [];

        if (positions.length < 1) {
            positions.push('center');
        }
        if (positions.length == 1) {
            positions.push(positions[0]);
        }

        if (positions[0] == 'top' || positions[0] == 'bottom' || positions[1] == 'left' || positions[1] == 'right') {
            positions = [positions[1], positions[0]];
        }

        if (this.positionX !== undefined) positions[0] = this.positionX.toLowerCase();
        if (this.positionY !== undefined) positions[1] = this.positionY.toLowerCase();

        self.positionX = positions[0];
        self.positionY = positions[1];

        if (this.positionX != 'left' && this.positionX != 'right') {
            if (isNaN(parseInt(this.positionX))) {
                this.positionX = 'center';
            } else {
                this.positionX = parseInt(this.positionX);
            }
        }

        if (this.positionY != 'top' && this.positionY != 'bottom') {
            if (isNaN(parseInt(this.positionY))) {
                this.positionY = 'center';
            } else {
                this.positionY = parseInt(this.positionY);
            }
        }

        this.position =
            this.positionX + (isNaN(this.positionX) ? '' : 'px') + ' ' +
            this.positionY + (isNaN(this.positionY) ? '' : 'px');

        if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
            if (this.imageSrc && this.iosFix && !this.$element.is('img')) {
                this.$element.css({
                    backgroundImage: 'url(' + this.imageSrc + ')',
                    backgroundSize: 'cover',
                    backgroundPosition: this.position
                });
            }
            return this;
        }

        if (navigator.userAgent.match(/(Android)/)) {
            if (this.imageSrc && this.androidFix && !this.$element.is('img')) {
                this.$element.css({
                    backgroundImage: 'url(' + this.imageSrc + ')',
                    backgroundSize: 'cover',
                    backgroundPosition: this.position
                });
            }
            return this;
        }

        this.$mirror = $('<div />').prependTo(this.mirrorContainer);

        var slider = this.$element.find('>.parallax-slider');
        var sliderExisted = false;

        if (slider.length == 0)
            this.$slider = $('<img />').prependTo(this.$mirror);
        else {
            this.$slider = slider.prependTo(this.$mirror)
            sliderExisted = true;
        }

        this.$mirror.addClass('parallax-mirror').css({
            visibility: 'hidden',
            zIndex: this.zIndex,
            position: 'fixed',
            top: 0,
            left: 0,
            overflow: 'hidden'
        });

        this.$slider.addClass('parallax-slider').one('load', function () {
            if (!self.naturalHeight || !self.naturalWidth) {
                self.naturalHeight = this.naturalHeight || this.height || 1;
                self.naturalWidth = this.naturalWidth || this.width || 1;
            }
            self.aspectRatio = self.naturalWidth / self.naturalHeight;

            Parallax.isSetup || Parallax.setup();
            Parallax.sliders.push(self);
            Parallax.isFresh = false;
            Parallax.requestRender();
        });

        if (!sliderExisted)
            this.$slider[0].src = this.imageSrc;

        if (this.naturalHeight && this.naturalWidth || this.$slider[0].complete || slider.length > 0) {
            this.$slider.trigger('load');
        }

    }

    // Parallax Static Methods
    $.extend(Parallax, {
        scrollTop: 0,
        scrollLeft: 0,
        winHeight: 0,
        winWidth: 0,
        docHeight: 1 << 30,
        docWidth: 1 << 30,
        sliders: [],
        isReady: false,
        isFresh: false,
        isBusy: false,

        setup: function () {
            if (this.isReady) return;

            var self = this;

            var $doc = $(document), $win = $(window);

            var loadDimensions = function () {
                Parallax.winHeight = $win.height();
                Parallax.winWidth = $win.width();
                Parallax.docHeight = $doc.height();
                Parallax.docWidth = $doc.width();
            };

            var loadScrollPosition = function () {
                var winScrollTop = $win.scrollTop();
                var scrollTopMax = Parallax.docHeight - Parallax.winHeight;
                var scrollLeftMax = Parallax.docWidth - Parallax.winWidth;
                Parallax.scrollTop = Math.max(0, Math.min(scrollTopMax, winScrollTop));
                Parallax.scrollLeft = Math.max(0, Math.min(scrollLeftMax, $win.scrollLeft()));
                Parallax.overScroll = Math.max(winScrollTop - scrollTopMax, Math.min(winScrollTop, 0));
            };

            $win.on('resize.px.parallax load.px.parallax', function () {
                loadDimensions();
                self.refresh();
                Parallax.isFresh = false;
                Parallax.requestRender();
            })
                .on('scroll.px.parallax load.px.parallax', function () {
                    loadScrollPosition();
                    Parallax.requestRender();
                });

            loadDimensions();
            loadScrollPosition();

            this.isReady = true;

            var lastPosition = -1;

            function frameLoop() {
                if (lastPosition == window.pageYOffset) {   // Avoid overcalculations
                    window.requestAnimationFrame(frameLoop);
                    return false;
                } else lastPosition = window.pageYOffset;

                self.render();
                window.requestAnimationFrame(frameLoop);
            }

            frameLoop();
        },

        refresh: function () {
            $.each(this.sliders, function () { this.refresh(); });
            this.isFresh = true;
        },

        render: function () {
            this.isFresh || this.refresh();
            $.each(this.sliders, function () { this.render(); });
        },

        requestRender: function () {
            var self = this;
            self.render();
            self.isFresh = false;
        }
    });

    // Initialize all sliders
    $(function () {
        Parallax.setup();
    });

    return this;
}
