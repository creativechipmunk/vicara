<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Contact Us</title>
<meta content="Contact Us" property="og:title">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="css/vicara.a53a362fc.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/new_animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<script src="js/animate.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/webfont.js"></script><script type="text/javascript">WebFont.load({
  google: {
    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Raleway:100,200,300,regular,500,600,700,800,900"]
  }
});</script><script src="js/modernizr-2.7.1.js" type="text/javascript"></script>

<style>
.thanks_interest{ font-size:28px; font-weight:600; text-align:center; color:#000;  padding:150px 0;}
</style>



</head>
<body>
<div class="cntct pg wrapper">
  <div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400"><a class="logo w-nav-brand wow fadeInLeft" href="index.php"></a>
    <nav class="nav-menu w-nav-menu wow fadeInRight" role="navigation"><a class="nav-link w-nav-link" href="about-us.php">About Us</a><a class="nav-link w-nav-link" href="our-services.php">Our Services</a><a class="nav-link w-nav-link" href="our-team.php">Our&nbsp;Team</a><a class="nav-link w-nav-link" href="projects.php">Projects</a><a class="nav-link w-nav-link" href="carrer.php">Careers</a><a class="nav-link w-nav-link" href="contact-us.php">Contact Us</a><a class="lang nav-link w-nav-link" href="german/home.php">Deutsch</a></nav>
    <div class="w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
  </div>
  <div data-ix="onload-reveal">
    <div class="big_text pg wow fadeInUp">Thank You</div>
  </div>
</div>
<div class="contact section">
  
  <div class="thanks_interest">Thank you for contacting us, we will get back to you soon!<br/><a href="index.php" style="padding-top:20px; display:inline-block;"><img src="images/57cfcb2bbbb6417f0c421776_logo.png" /></a></div>
 
  
  
  
  
  
  
  
</div>
<div class="footer mb section">
  <div class="shell wow fadeInUp">
      <div class="w-clearfix">
	  <div class="footercontent text1_01 text1_001">
	  
	  <img class="logofooter" src="images/57cfcb2bbbb6417f0c421776_logo.png">
	  </div>
	  
	  
        <div class="footercontent ls text1_02 text1_001">
        <h4 class="footer-heading">Headquarters</h4>
          <p class="footer-p">Vicara Infotech Group AG<br>
            Trottenstrasse 62<br>
            8037 Zurich<br>
            Switzerland<br>
            +41 43 366 80 22
            </p>
        </div>
        <div class="footercontent text1_03 text1_001">
          <h4 class="footer-heading">Zurich Office</h4>
          <p class="footer-p">Vicara Infotech Group AG<br>
            Trottenstrasse 62<br>
            8037 Zurich<br>
            Switzerland<br>
            +41 43 366 80 22</p>
        </div>
        <div class="footercontent text1_04">
         <h4 class="footer-heading">Pune Office</h4>
          <p class="footer-p">Vicara Infotech Private Limited<br>
            807 East Court<br>
            Phoenix Market City<br>
            Pune, India<br>
            +91 020 668 90 746</p>
        </div>
      </div>
    </div>
</div>
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/vicara.a72d2ad93.js" type="text/javascript"></script> 
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]--><script type="text/javascript"> /*!
 * parallax.js v1.4.2 (http://pixelcog.github.io/parallax.js/)
 * @copyright 2016 PixelCog, Inc.
 * @license MIT (https://github.com/pixelcog/parallax.js/blob/master/LICENSE)
 */

;(function ( $, window, document, undefined ) {

  // Polyfill for requestAnimationFrame
  // via: https://gist.github.com/paulirish/1579671

  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
        || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function(callback) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); },
          timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };

    if (!window.cancelAnimationFrame)
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
  }());


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

    if (this.positionX != undefined) positions[0] = this.positionX.toLowerCase();
    if (this.positionY != undefined) positions[1] = this.positionY.toLowerCase();

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
      this.positionX + (isNaN(this.positionX)? '' : 'px') + ' ' +
      this.positionY + (isNaN(this.positionY)? '' : 'px');

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

    this.$mirror = $('<div />').prependTo('body');

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

    this.$slider.addClass('parallax-slider').one('load', function() {
      if (!self.naturalHeight || !self.naturalWidth) {
        self.naturalHeight = this.naturalHeight || this.height || 1;
        self.naturalWidth  = this.naturalWidth  || this.width  || 1;
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

  };


  // Parallax Instance Methods

  $.extend(Parallax.prototype, {
    speed:    0.2,
    bleed:    0,
    zIndex:   -100,
    iosFix:   true,
    androidFix: true,
    position: 'center',
    overScrollFix: false,

    refresh: function() {
      this.boxWidth        = this.$element.outerWidth();
      this.boxHeight       = this.$element.outerHeight() + this.bleed * 2;
      this.boxOffsetTop    = this.$element.offset().top - this.bleed;
      this.boxOffsetLeft   = this.$element.offset().left;
      this.boxOffsetBottom = this.boxOffsetTop + this.boxHeight;

      var winHeight = Parallax.winHeight;
      var docHeight = Parallax.docHeight;
      var maxOffset = Math.min(this.boxOffsetTop, docHeight - winHeight);
      var minOffset = Math.max(this.boxOffsetTop + this.boxHeight - winHeight, 0);
      var imageHeightMin = this.boxHeight + (maxOffset - minOffset) * (1 - this.speed) | 0;
      var imageOffsetMin = (this.boxOffsetTop - maxOffset) * (1 - this.speed) | 0;

      if (imageHeightMin * this.aspectRatio >= this.boxWidth) {
        this.imageWidth    = imageHeightMin * this.aspectRatio | 0;
        this.imageHeight   = imageHeightMin;
        this.offsetBaseTop = imageOffsetMin;

        var margin = this.imageWidth - this.boxWidth;

        if (this.positionX == 'left') {
          this.offsetLeft = 0;
        } else if (this.positionX == 'right') {
          this.offsetLeft = - margin;
        } else if (!isNaN(this.positionX)) {
          this.offsetLeft = Math.max(this.positionX, - margin);
        } else {
          this.offsetLeft = - margin / 2 | 0;
        }
      } else {
        this.imageWidth    = this.boxWidth;
        this.imageHeight   = this.boxWidth / this.aspectRatio | 0;
        this.offsetLeft    = 0;

        var margin = this.imageHeight - imageHeightMin;

        if (this.positionY == 'top') {
          this.offsetBaseTop = imageOffsetMin;
        } else if (this.positionY == 'bottom') {
          this.offsetBaseTop = imageOffsetMin - margin;
        } else if (!isNaN(this.positionY)) {
          this.offsetBaseTop = imageOffsetMin + Math.max(this.positionY, - margin);
        } else {
          this.offsetBaseTop = imageOffsetMin - margin / 2 | 0;
        }
      }
    },

    render: function() {
      var scrollTop    = Parallax.scrollTop;
      var scrollLeft   = Parallax.scrollLeft;
      var overScroll   = this.overScrollFix ? Parallax.overScroll : 0;
      var scrollBottom = scrollTop + Parallax.winHeight;

      if (this.boxOffsetBottom > scrollTop && this.boxOffsetTop <= scrollBottom) {
        this.visibility = 'visible';
        this.mirrorTop = this.boxOffsetTop  - scrollTop;
        this.mirrorLeft = this.boxOffsetLeft - scrollLeft;
        this.offsetTop = this.offsetBaseTop - this.mirrorTop * (1 - this.speed);
      } else {
        this.visibility = 'hidden';
      }

      this.$mirror.css({
        transform: 'translate3d(0px, 0px, 0px)',
        visibility: this.visibility,
        top: this.mirrorTop - overScroll,
        left: this.mirrorLeft,
        height: this.boxHeight,
        width: this.boxWidth
      });

      this.$slider.css({
        transform: 'translate3d(0px, 0px, 0px)',
        position: 'absolute',
        top: this.offsetTop,
        left: this.offsetLeft,
        height: this.imageHeight,
        width: this.imageWidth,
        maxWidth: 'none'
      });
    }
  });


  // Parallax Static Methods

  $.extend(Parallax, {
    scrollTop:    0,
    scrollLeft:   0,
    winHeight:    0,
    winWidth:     0,
    docHeight:    1 << 30,
    docWidth:     1 << 30,
    sliders:      [],
    isReady:      false,
    isFresh:      false,
    isBusy:       false,

    setup: function() {
      if (this.isReady) return;

      var $doc = $(document), $win = $(window);

      var loadDimensions = function() {
        Parallax.winHeight = $win.height();
        Parallax.winWidth  = $win.width();
        Parallax.docHeight = $doc.height();
        Parallax.docWidth  = $doc.width();
      };

      var loadScrollPosition = function() {
        var winScrollTop  = $win.scrollTop();
        var scrollTopMax  = Parallax.docHeight - Parallax.winHeight;
        var scrollLeftMax = Parallax.docWidth  - Parallax.winWidth;
        Parallax.scrollTop  = Math.max(0, Math.min(scrollTopMax,  winScrollTop));
        Parallax.scrollLeft = Math.max(0, Math.min(scrollLeftMax, $win.scrollLeft()));
        Parallax.overScroll = Math.max(winScrollTop - scrollTopMax, Math.min(winScrollTop, 0));
      };

      $win.on('resize.px.parallax load.px.parallax', function() {
          loadDimensions();
          Parallax.isFresh = false;
          Parallax.requestRender();
        })
        .on('scroll.px.parallax load.px.parallax', function() {
          loadScrollPosition();
          Parallax.requestRender();
        });

      loadDimensions();
      loadScrollPosition();

      this.isReady = true;
    },

    configure: function(options) {
      if (typeof options == 'object') {
        delete options.refresh;
        delete options.render;
        $.extend(this.prototype, options);
      }
    },

    refresh: function() {
      $.each(this.sliders, function(){ this.refresh() });
      this.isFresh = true;
    },

    render: function() {
      this.isFresh || this.refresh();
      $.each(this.sliders, function(){ this.render() });
    },

    requestRender: function() {
      var self = this;

      if (!this.isBusy) {
        this.isBusy = true;
        window.requestAnimationFrame(function() {
          self.render();
          self.isBusy = false;
        });
      }
    },
    destroy: function(el){
      var i,
          parallaxElement = $(el).data('px.parallax');
      parallaxElement.$mirror.remove();
      for(i=0; i < this.sliders.length; i+=1){
        if(this.sliders[i] == parallaxElement){
          this.sliders.splice(i, 1);
        }
      }
      $(el).data('px.parallax', false);
      if(this.sliders.length === 0){
        $(window).off('scroll.px.parallax resize.px.parallax load.px.parallax');
        this.isReady = false;
        Parallax.isSetup = false;
      }
    }
  });


  // Parallax Plugin Definition

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var options = typeof option == 'object' && option;

      if (this == window || this == document || $this.is('body')) {
        Parallax.configure(options);
      }
      else if (!$this.data('px.parallax')) {
        options = $.extend({}, $this.data(), options);
        $this.data('px.parallax', new Parallax(this, options));
      }
      else if (typeof option == 'object')
      {
        $.extend($this.data('px.parallax'), options);
      }
      if (typeof option == 'string') {
        if(option == 'destroy'){
            Parallax['destroy'](this);
        }else{
          Parallax[option]();
        }
      }
    })
  };

  var old = $.fn.parallax;

  $.fn.parallax             = Plugin;
  $.fn.parallax.Constructor = Parallax;


  // Parallax No Conflict

  $.fn.parallax.noConflict = function () {
    $.fn.parallax = old;
    return this;
  };


  // Parallax Data-API

  $(document).on('ready.px.parallax.data-api', function () {
    $('[data-parallax="scroll"]').parallax();
  });

}(jQuery, window, document));</script>
</body>

</html>
