( function( $ ) {

    "use strict";

    /****** Change variables value as per your need ******/
    var menuBreakPoint  = 991;
    var sliderBreakPoint= 991; // It will effect when you have used attribute "data-thumb-slider-md-direction" OR "data-slider-md-direction"
    var mobileAnimation = false;
        
    /****** Don't change variables value ******/
    var lastScroll      = 0,
        simpleDropdown  = 0,
        linkDropdown    = 0,
        isotopeObjs     = [],
        swiperObjs      = [],
        wow             = '';

    /****** Check for browser OS ******/
    var isMobile    = false,
        isiPhoneiPad= false,
        isSafari   = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        isMobile = true;
    }

    if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        isiPhoneiPad = true;
    }

    /****** jQuery Appear ******/
    $( '.image-back-offset-shadow, .vertical-counter, .counter, .progress-bar, .pie-chart-style-01, .pie-chart-style-02' ).each( function() {
        $( this ).appear().trigger( 'resize' );
    });

    megaMenuOnResize();
    animateCounters();
    fullScreenHeight();
    SetResizeContent();
    setOverLayerPosition();
    setBottomOverLayerPosition( 2000 );
    initScrollNavigate();
    stickyFooter();

    /****** Swiper slider using params ******/
    setupSwiper();
    destroySwiperLoop()

    /****** Fit videos ******/
    $( '.fit-videos' ).fitVids();

    /* hamberger menu custom scrollbar */
    $( '[data-scroll-options]' ).each( function() {
        var _this           = $( this );
        var scrollOptions   = _this.attr( 'data-scroll-options' ) || '{ "theme": "dark" }';
        if ( typeof ( scrollOptions ) !== 'undefined' && scrollOptions !== null ) {
            scrollOptions = $.parseJSON( scrollOptions );
            _this.mCustomScrollbar( scrollOptions );
        }
    });

    /****** Video player in background ******/
    $( document ).on( 'click', '.html-video-play', function () {
        var $videoBg = $( this ).parents( 'section' ).find( '.video-bg' );
        if ( $( this ).is( '[playing]' ) === false ) {
            $videoBg.trigger( 'play' );
            $( this ).attr( 'playing', 'true' );
        } else {
            $videoBg.trigger( 'pause' );
            $( this ).removeAttr( 'playing' );
        }
    });

    /****** Range slider for price filter ******/
    if ( $( '.price-filter' ).length > 0 ) {
        $( '.price-filter' ).slider({
            range: true,
            animate: true,
            min: 0,
            max: 4000,
            step: 1,
            values: [1, 3999],
            slide: function ( event, ui ) {
                $( '.price-amount' ).val( '$' + ui.values[ 0 ] + ' - $' + ui.values[ 1 ] );
                $( document.body ).trigger( 'price_slider_change', [ ui.values[0], ui.values[1] ] );
            }
        });
        $( '.price-amount' ).val( '$' + $( '.price-filter' ).slider( 'values', 0 ) +
                ' - $' + $( '.price-filter' ).slider( 'values', 1 ) );
    }

    /****** Back Image shadow on jQuery appear ******/
    if ( $( '.image-back-offset-shadow' ).length > 0 ) {
        $( document ).on( 'appear', '.image-back-offset-shadow', function (e) {
            $( '.image-back-offset-shadow' ).addClass( 'active' );
        });
    }

    /****** Vertical counter ******/
    $( '.vertical-counter' ).each( function () {
        var _this           = $( this ),
            counterValue    = _this.attr( 'data-to' ),
            individualValue = counterValue.toString().split( '' ),
            valueLength     = counterValue.length;
        //adding the div.vertical-counter-number in div.counter multiple(valueLength) times 
        for ( var i = 0; i < valueLength; i++ ) {
            _this.append( '<span class="vertical-counter-number"><ul><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul></span>' );
        }
        //adding the individual data-to in each div.vertical-counter-number
        _this.find( '.vertical-counter-number' ).each( function ( index ) {
            $( this ).attr( 'data-to', individualValue[ index ] );
        });
    });

    /****** Vertical counter on jQuery appear ******/
    if ( $( '.vertical-counter' ).length > 0 ) {
        $( document ).on( 'appear', '.vertical-counter', function (e) {
            if ( $( window ).scrollTop() + getWindowHeight() >= $( '.vertical-counter' ).offset().top ) {
                $( this ).find( '.vertical-counter-number' ).each( function () {
                    var _this       = $( this ),
                        value       = _this.attr( 'data-to' ),
                        divHeight   = _this.find( 'li' ).height();
                    _this.height( divHeight );
                    if ( value <= 9 ) {
                        _this.find( 'ul' ).css({ 'transform': 'translateY(-' + value * 10 + '%)' });
                    }
                });
            }
        });
    }

    /****** Counter number reset on jQuery appear ******/
    if ( $( '.counter' ).length > 0 ) {
        $( document ).on( 'appear', '.counter', function (e) {
            var _this = $( this );
            if ( ! _this.hasClass( 'appear' ) ) {
                var options = _this.data( 'countToOptions' ) || {};
                _this.countTo( options );
                _this.addClass( 'appear' );
            }
        });
    }

    /****** progress bar on jQuery appear ******/
    if ( $( '.progress-bar' ).length > 0 ) {
        $( document ).on( 'appear', '.progress-bar', function (e) {
            if ( ! $( this ).hasClass( 'appear' ) ) {
                $( this ).addClass( 'appear' );
                var total = $( this ).attr( 'aria-valuenow' ),
                    delay = 300;
                $( this ).animate({ 'width': total + '%' }, {
                    duration: delay,
                    easing: "swing",
                    progress: function( animation, progress, msRemaining ) {
                        var counter = parseInt( total * progress );
                        $( this ).find( 'span' ).html( counter + '%' );
                    }
                });
            }
        });
    }

    /****** Pie charts style 01 on jQuery appear ******/
    if ( $( '.pie-chart-style-01' ).length > 0 ) {
        var color1, color2;
        $( document.body ).on( 'appear', '.pie-chart-style-01', function (e) {
            $( '.pie-chart-style-01' ).easyPieChart({
                trackColor: '#232323',
                scaleColor: "",
                lineCap: 'round',
                lineWidth: 10,
                size: 180,
                barColor: function () {
                    color1 = $( this.el ).attr( 'data-start-color' ) || $( this.el ).attr( 'data-bar-color' ) || "#000";
                    color2 = $( this.el ).attr( 'data-end-color' ) || $( this.el ).attr( 'data-bar-color' ) || "#000";
                    var ctx = this.renderer.getCtx();
                    var canvas = this.renderer.getCanvas();
                    var gradient = ctx.createLinearGradient( 0, 0, canvas.width, 270 );
                    gradient.addColorStop( 0.2, color1 );
                    gradient.addColorStop( 0, color2 );
                    return gradient;
                },
                animate: {
                    duration: 2000,
                    enabled: true
                },
                onStep: function (from, to, percent) {
                    $( this.el ).find( '.percent' ).text( Math.round( percent ) + '%' );
                }
            });
        });
    }

    /****** Pie charts style 02 on jQuery appear ******/
    if ( $( '.pie-chart-style-02' ).length > 0 ) {
        var color1, color2;
        $( document.body ).on( 'appear', '.pie-chart-style-02', function (e) {
            $( '.pie-chart-style-02' ).easyPieChart({
                trackColor: '#232323',
                scaleColor: "",
                lineCap: 'round',
                lineWidth: 10,
                size: 140,
                barColor: function () {
                    color1 = $( this.el ).attr( 'data-start-color' ) || $( this.el ).attr( 'data-bar-color' ) || "#000";
                    color2 = $( this.el ).attr( 'data-end-color' ) || $( this.el ).attr( 'data-bar-color' ) || "#000";
                    var ctx = this.renderer.getCtx();
                    var canvas = this.renderer.getCanvas();
                    var gradient = ctx.createLinearGradient( 0, 0, canvas.width, 270 );
                    gradient.addColorStop( 0.2, color1 );
                    gradient.addColorStop( 0, color2 );
                    return gradient;
                },
                animate: {
                    duration: 2000,
                    enabled: true
                },
                onStep: function (from, to, percent) {
                    $( this.el ).find( '.percent' ).text( Math.round( percent ) + "%" );
                }
            });
        });
    }

    /****** Plus quntity in single product page ******/
    $( document ).on( 'click', '.qty-plus', function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var fieldName = $( this ).attr( 'data-field' );
        // Get its current value
        var currentVal = parseInt( $( this ).closest( '.quantity' ).find( 'input[name=' + fieldName + ']' ).val() );
        // If is not undefined
        if( ! isNaN( currentVal ) ) {
            // Increment
            $( this ).closest( '.quantity' ).find( 'input[name= ' + fieldName + ']' ).val( currentVal + 1 );
        } else {
            // Otherwise put a 0 there
            $( this ).closest( '.quantity' ).find( 'input[name=' + fieldName + ']' ).val( 0 );
        }
        // Trigger change value
        $( this ).closest( '.quantity' ).find( '.input-text' ).trigger( 'change' );
    });

    /****** Minus quntity in single product page ******/
    $( document ).on( 'click', '.qty-minus', function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var fieldName = $( this ).attr( 'data-field' );
        // Get its current value
        var currentVal = parseInt( $( this ).closest( '.quantity' ).find( 'input[name= ' + fieldName + ']' ).val() );
        // If it isn't undefined or its greater than 0
        if( ! isNaN( currentVal ) && currentVal > 0 ) {
            // Decrement one
            $( this ).closest( '.quantity' ).find( 'input[name=' + fieldName + ']' ).val( currentVal - 1 );
        } else {
            // Otherwise put a 0 there
            $( this ).closest( '.quantity' ).find( 'input[name=' + fieldName + ']' ).val( 0 );
        }
        // Trigger change value
        $( this ).closest( '.quantity' ).find( '.input-text' ).trigger( 'change' );
    });

    /****** Initialise tooltip *****/
    if( $( '[data-toggle="tooltip"]' ).length > 0 ) {
        $( '[data-toggle="tooltip"]' ).tooltip();
    }

    /****** Tilt effect using params ******/
    if ( $( '.tilt-box' ).length > 0 && ! isMobile ) {
        $( '.tilt-box' ).each( function () {
            var _this       = $( this ),
                tiltOptions = _this.attr( 'data-tilt-options' ) || '{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }';
            if ( typeof ( tiltOptions ) !== 'undefined' && tiltOptions !== null ) {
                tiltOptions = $.parseJSON( tiltOptions );
                _this.tilt( tiltOptions );
            }
        });
    }

    /****** Justified Gallery ******/
    if ( $( '.justified-gallery' ).length > 0 ) {
        $( '.justified-gallery' ).each( function () {
            var _this           = $( this ),
                justifiedOptions= _this.attr( 'data-justified-options' ) || '{ "rowHeight": 500, "maxRowHeight": false, "captions": true, "margins": 15, "waitThumbnailsLoad": true }';
            if ( typeof ( justifiedOptions ) !== 'undefined' && justifiedOptions !== null ) {
                _this.imagesLoaded( function () {
                    justifiedOptions = $.parseJSON( justifiedOptions );
                    _this.justifiedGallery( justifiedOptions );
                });
            }
        });
    }

    /****** Justified Gallery Tooltip at cursor position ******/
    if( ! isMobile ) {
        $( document ).on( 'mousemove', '.jg-entry', function (e) {
            var imageWidth      = $( this ).width();
            var captionWidth    = $( this ).find( '.jg-caption' ).width();
            var value           = $( this ).find( '.caption' ).html();
            var parentOffset    = $( this ).offset();
            var relX = e.pageX - parentOffset.left + 20;
            var relY = e.pageY - parentOffset.top;
            if ( relX + captionWidth + 30 > imageWidth ) {
                relX = relX - captionWidth - 65;
            }
            $( this ).css( 'overflow', 'visible' );
            $( this ).find( '.jg-caption' ).html( value ).show().css({ left: relX + 'px', right: 'auto', top: relY + 'px', bottom: 'auto' });
        });
        $( document ).on( 'mouseleave', '.jg-entry', function (e) {
            $( this ).css( 'overflow', ' ' );
            $( this ).find( '.jg-caption' ).hide().css({ left: ' ', right: ' ', top: ' ', bottom: ' ' });
        });
    }

    /****** Accordion using active/inactive icon params ******/
    $( '.accordion-event' ).each( function() {
        var _this               = $( this ),
            activeIconClass     = _this.attr( 'data-active-icon' ) || '',
            inactiveIconClass   = _this.attr( 'data-inactive-icon' ) || '';
        $( '.collapse', this ).on( 'show.bs.collapse', function () {
            var id = $( this ).attr( 'id' );
            $( 'a[href="#' + id + '"]' ).closest( '.panel-heading' ).addClass( 'active-accordion' );
            $( 'a[href="#' + id + '"] .panel-title i' ).addClass( activeIconClass ).removeClass( inactiveIconClass );
        }).on( 'hide.bs.collapse', function () {
            var id = $( this ).attr( 'id' );
            $( 'a[href="#' + id + '"]' ).closest( '.panel-heading' ).removeClass( 'active-accordion' );
            $( 'a[href="#' + id + '"] .panel-title i' ).addClass( inactiveIconClass ).removeClass( activeIconClass );
        });
    });

    /****** Accordion on checkout ******/
    $( '.checkout-accordion label input' ).on( 'click', function (e) {
        $( this ).parent().find( 'a' ).trigger( 'click' );
    });

    /****** Change on Bootstrap tab ******/
    $( 'a[data-toggle="tab"]' ).on( 'shown.bs.tab', function (e) {
        // Hide Accordion on tab change event
        $( '.tab-content .accordion-event' ).each( function() {
            $( '.collapse', this ).collapse( 'hide' );
        });
        // Reset isotope on tab change event
        resetIsotopeLayoutLoop( isotopeObjs, true );
    });

    /****** Countdown timer ******/
    $( '.countdown' ).each( function() {
        var _this = $( this );
        _this.countdown( _this.attr( "data-enddate" ) ).on( 'update.countdown', function ( event ) {
            _this.html( event.strftime( '' + '<div class="countdown-container"><div class="countdown-box first"><div class="number">%-D</div><span>Day%!d</span></div>' + '<div class="countdown-box"><div class="number">%H</div><span>Hours</span></div>' + '<div class="countdown-box"><div class="number">%M</div><span>Minutes</span></div>' + '<div class="countdown-box last"><div class="number">%S</div><span>Seconds</span></div></div>' ) );
        });
    });

    /****** Wow animation ******/
    if( $( '.wow' ).length > 0 ) {
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animate__animated',
            offset: 30,
            mobile: mobileAnimation,
            live: true
        });
        $( document ).imagesLoaded( function () {
            wow.init();
        });
    }

    /****** Portfolio isotope & filter ******/
    $( '.portfolio-wrapper' ).each( function() {
        var _this = $( this );
        if( ! _this.find( '.wow' ).length > 0 ) {
            _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
        }
        _this.imagesLoaded( function () {
            if( ! _this.find( '.wow' ).length > 0 ) {
                _this.find( '.grid-item' ).css( 'visibility', '' );
            } else if( ! isMobile ) {
                _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
            }
            _this.removeClass( 'grid-loading' );
            _this.isotope({
                layoutMode: 'masonry',
                itemSelector: '.grid-item',
                percentPosition: true,
                stagger: 0,
                masonry: {
                    columnWidth: '.grid-sizer',
                }
            });
            isotopeObjs.push( _this );
        });
    });
    $( document ).on( 'click', '.portfolio-filter > li > a', function () {
        var _this           = $( this ),
            parentSectionObj= _this.parents( 'section' );
        parentSectionObj.find( '.portfolio-filter > li' ).removeClass( 'active' );
        _this.parent().addClass( 'active' );
        var selector        = _this.attr( 'data-filter' ),
            portfolioFilter = parentSectionObj.find( '.portfolio-wrapper' );
        // Remove animation
        removeWowAnimation( portfolioFilter );
        // Isotope filter
        portfolioFilter.isotope({ filter: selector });
        return false;
    });

    /****** Blog isotope & filter ******/
    $( '.blog-wrapper' ).each( function() {
        var _this = $( this );
        if( ! _this.find( '.wow' ).length > 0 ) {
            _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
        }
        _this.imagesLoaded( function () {
            if( ! _this.find( '.wow' ).length > 0 ) {
                _this.find( '.grid-item' ).css( 'visibility', '' );
            } else if( ! isMobile ) {
                _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
            }
            _this.removeClass( 'grid-loading' );
            _this.isotope({
                layoutMode: 'masonry',
                itemSelector: '.grid-item',
                percentPosition: true,
                stagger: 0,
                masonry: {
                    columnWidth: '.grid-sizer',
                }
            });
            isotopeObjs.push( _this );
        });
    });
    $( document ).on( 'click', '.blog-filter > li > a', function () {
        var _this           = $( this ),
            parentSectionObj= _this.parents( 'section' );
        parentSectionObj.find( '.blog-filter > li' ).removeClass( 'active' );
        _this.parent().addClass( 'active' );
        var selector    = _this.attr( 'data-filter' ),
            blogFilter  = parentSectionObj.find( '.blog-wrapper' );
        // Remove animation
        removeWowAnimation( blogFilter );
        // Isotope filter
        blogFilter.isotope({ filter: selector });
        return false;
    });

    /****** Shop isotope & filter ******/
    $( '.shop-wrapper' ).each( function() {
        var _this = $( this );
        if( ! _this.find( '.wow' ).length > 0 ) {
            _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
        }
        _this.imagesLoaded( function () {
            if( ! _this.find( '.wow' ).length > 0 ) {
                _this.find( '.grid-item' ).css( 'visibility', '' );
            } else if( ! isMobile ) {
                _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
            }
            _this.removeClass( 'grid-loading' );
            _this.isotope({
                layoutMode: 'masonry',
                itemSelector: '.grid-item',
                percentPosition: true,
                stagger: 0,
                masonry: {
                    columnWidth: '.grid-sizer',
                }
            });
            isotopeObjs.push( _this );
        });
    });
    $( document ).on( 'click', '.shop-filter > li > a', function () {
        var _this           = $( this ),
            parentSectionObj= _this.parents( 'section' );
        parentSectionObj.find( '.shop-filter > li' ).removeClass( 'active' );
        _this.parent().addClass( 'active' );
        var selector    = _this.attr( 'data-filter' ),
            shopFilter  = parentSectionObj.find( '.shop-wrapper' );
        // Remove animation
        removeWowAnimation( shopFilter );
        // Isotope filter
        shopFilter.isotope({ filter: selector });
        return false;
    });

    /****** Instagram feed ******/
    $( '.instafeed-wrapper' ).each( function() {
        var token = 'IGQVJWMkx2V2lkclhNVWhoUUk0c2JvQXVtU0VIaFhuLXhzaXNDVTFTVV9kSzRVQU5DUkFmeDRCQjdqRUx4OGtaaDZAzTDZAqaE5PNDQ2bEpsOVNqYWlSZAzNTMU9NN2FwTkRyNVlDX0wyeG1WOTE3U1E5bQZDZD',
            _this = $( this ),
            token = _this.attr( 'data-token' ) || token,
            total = _this.attr( 'data-total' ) || '6', // how much photos do you want to get
            slider= _this.attr( 'data-slider-options' ),
            _html = _this.html(),
            outputHTML = '';
        if ( typeof ( slider ) !== 'undefined' && slider !== null ) {
            _this.html( '' );
        }
        $.ajax({
            url: 'https://graph.instagram.com/me/media?fields=id,media_type,media_url,timestamp,permalink,comments_count,like_count&access_token=' + token,
            type: 'GET',
            success: function ( response ) {
                outputHTML += _this.find( '.grid-item' ).length > 0 ? '<li class="grid-sizer"></li>' : '';
                for ( var x in response.data ) {
                    if ( x < parseInt( total ) ) {
                        if ( response.data[x]['media_type'] == 'IMAGE' ) {
                            var link    = response.data[x]['permalink'] || '',
                                image   = response.data[x]['media_url'] || '',
                                likes   = response.data[x]['like_count'] || '',
                                comments= response.data[x]['comments_count'] || '',
                                output  = _html;

                                output  = output.replace( ' href="#"', '' );
                                output  = output.replace( ' src="#"', '' );
                                output  = output.replace( 'data-href', 'href' );
                                output  = output.replace( 'data-src', 'src' );
                                output  = output.replace( '{{link}}', link );
                                output  = output.replace( '{{image}}', image );
                                output  = output.replace( '{{likes}}', likes );
                                output  = output.replace( '{{comments}}', comments );
                            outputHTML += output;
                        }
                    }
                }
                _this.html( outputHTML );
                if ( typeof ( slider ) !== 'undefined' && slider !== null ) {
                    // Apply swiper
                    var sliderOptions   = $.parseJSON( slider );
                    var swiperObj       = _this.parent( '.swiper-container' );
                    new Swiper( swiperObj, sliderOptions );
                } else {
                    // Apply isotope
                    if( ! _this.find( '.wow' ).length > 0 ) {
                        _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
                    }
                    _this.imagesLoaded(function () {
                        if( ! _this.find( '.wow' ).length > 0 ) {
                            _this.find( '.grid-item' ).css( 'visibility', '' );
                        } else if( ! isMobile ) {
                            _this.find( '.grid-item' ).css( 'visibility', 'hidden' );
                        }
                        _this.removeClass( 'grid-loading' );
                        _this.isotope({
                            layoutMode: 'masonry',
                            itemSelector: '.grid-item',
                            percentPosition: true,
                            stagger: 0,
                            masonry: {
                                columnWidth: '.grid-sizer',
                            }
                        });
                        isotopeObjs.push( _this );
                    });
                }
            },
            error: function (data) {
                var output = '<div class="col-12"><span class=text-center>No Images Found</span></div>';
                _this.append( output );
            }
        });
    });

    /****** Interactive portfolio ******/
    if ( $( '.fullscreen-hover-list .hover-list-item' ).length > 0 ) {
        var interactiveEventName = isMobile ? 'click' : 'mouseover';
        $( document ).on( interactiveEventName, '.fullscreen-hover-list .hover-list-item a', function (e) {
            if( ! $( this ).parent().hasClass( 'active' ) ) {
                $( '.fullscreen-hover-list .hover-list-item' ).removeClass( 'active' );
                $( this ).parent().addClass( 'active' );
                return false;
            }
        });
    }

    /****** Colorful portfolio ******/
    if ( $( '.portfolio-colorful' ).length > 0 ) {
        var gridItemCount   = $( '.portfolio-colorful' ).find( '.grid-item' ).length,
            colorList       = $( '.portfolio-colorful' ).attr( 'data-backgroundcolor' ) || '#2e94eb',
            colorOpacity    = $( '.portfolio-colorful' ).attr( 'data-opacity' ) || 1,
            colorArray      = colorList.split( ',' ),
            colorCount      = colorArray.length;
        for ( var gridCount = 0; gridCount < gridItemCount; gridCount++ ) {
            var color   = colorArray[gridCount];
            var rgbaCol = 'rgba(' + parseInt( color.slice(-6, -4), 16 ) + ',' + parseInt( color.slice(-4, -2), 16 ) + ',' + parseInt( color.slice(-2), 16 ) + ',' + colorOpacity + ')';
            $( '.portfolio-colorful' ).find( '.portfolio-hover:eq(' + gridCount + ')' ).css('background-color', rgbaCol );
            if ( colorCount < gridItemCount ) {
                colorArray.push( colorArray[gridCount] );
            }
        }
    }

    /****** Colorful page title ******/
    if ( $( '.page-title-colorful' ).length > 0 ) {
        var colorList = $( '.page-title-colorful' ).attr('data-backgroundcolor') || '#2e94eb', colorArray = colorList.split( ',' ), colorArray = colorList.split( ',' ), colorCount = colorArray.length, i = 1, colorCode;
        $( '.page-title-colorful' ).css({ 'background-color': colorArray[0] });
        setInterval( function () {
            colorCode = colorArray[i];
            $( '.page-title-colorful' ).css({ 'background-color': colorCode });
            i++;
            if ( i === colorCount ) {
                i = 0;
            }
        }, 5000 );
    }

    /******* Search popup open *******/
    $( document ).on( 'click', '.search-form-icon', function (e) {
        e.preventDefault();
        if ( $( this ).parents( '.top-bar' ).length > 0 ) {
            $( 'body' ).addClass( 'show-search-popup-mini-header' );
        }
        $( '.search-form-wrapper' ).addClass( 'active-form' );
        $( 'body' ).addClass( 'show-search-popup' );
    });

    /******* Search popup close *******/
    $( document ).on( 'click', '.search-close', function (e) {
        e.preventDefault();
        $( '.search-form-wrapper' ).removeClass( 'active-form' );
        if ( $( this ).parents( '.top-bar' ).length > 0 ) {
            $( 'body' ).removeClass( 'show-search-popup-mini-header' );
        }
        $( 'body' ).removeClass( 'show-search-popup' );
    });

    /****** Search validation ******/
    $( document ).on( 'click', '.search-button', function() {
        var error = true;
        var formObj = $( this ).parents( 'form' );
        formObj.find( 'input[type=text]' ).each( function ( index ) {
            var _this       = $( this ),
                searchVal   = _this.val();
            if ( searchVal === null || searchVal === '' ) {
                formObj.find( 'input:eq(' + index + ')' ).addClass( 'search-error' );
                error = false;
            } else {
                formObj.find( 'input:eq(' + index + ')' ).removeClass( 'search-error' );
            }
        });
        return error;
    });

    /******* Hamburger menu open *******/
    $( document ).on( 'click', '.header-push-button .push-button', function () {
        $( 'body' ).toggleClass( 'show-menu' );
        $( 'body' ).toggleClass( 'hamburger-show-menu' );
    });

    /******* Hamburger / Side menu close *******/
    $( document ).on( 'click', '.close-menu', function () {
        if ( ! flag ) {
            flag = true;
            setTimeout( function () {
                flag = false;
            }, 500 );
            $( 'body' ).removeClass( 'show-menu' ).removeClass( 'left-classic-mobile-menu' );
            $( '.sub-menu-item').collapse( 'hide' );
            $( '.menu-list-item.open' ).removeClass( 'show' );
        }
    });

    /******* Side menu close on outside area *******/
    $( document ).on( 'touchstart click', '.show-menu', function (e) {
        if( ! ( $( e.target ).hasClass( 'push-button' ) || $( e.target ).closest( '.push-button' ).length || $( e.target ).closest( '.push-menu' ).length || $( e.target ).closest( '.hamburger-menu' ).length ) ) {
            $( '.close-menu' ).trigger( 'click' );
        }
    });

    /******* Side menu open *******/
    $( document ).on( 'click', '.side-menu-button', function () {
        $( 'body' ).toggleClass( 'show-menu' );
        // For Left Classic menu in Mobile
        if ( ( $( '.left-sidebar-wrapper' ).length > 0 ) && getWindowWidth() <= menuBreakPoint ) {
            $( 'body' ).toggleClass( 'left-classic-mobile-menu' );
        }
        $( '.sub-menu-item').collapse( 'hide' );
        $( '.menu-list-item.open' ).removeClass( 'show' );
    });

    /******* Close on escape key *******/
    $( document ).on( 'keydown', function (e) {
        if ( e.keyCode === 27 ) {
            
            // Close side menu
            $( '.close-menu' ).trigger( 'click' );

            $( window ).trigger( 'closemenu' );
        }
    });

    /****** Scroll to top *****/
    $( document ).on( 'click', '.scroll-top-arrow', function () {
        $( 'html, body' ).animate({ scrollTop: 0 }, 800 );
        return false;
    });

    /****** Smooth scroll ******/
    var scrollAnimationTime = 1200, scrollAnimation = 'easeInOutExpo';
    $( 'a.scrollto' ).bind( 'click.smoothscroll', function ( event ) {
        event.preventDefault();
        var target = this.hash;
        if ( $( target ).length !== 0 ) {
            $( 'html, body' ).stop()
                .animate({
                    'scrollTop': $(target).offset().top
                }, scrollAnimationTime, scrollAnimation, function () {
                    window.location.hash = target;
                });
        }
    });

    /****** Inner link ******/
    if ( $( '.navbar-reverse-scroll' ).length > 0 ) {
        $('.inner-link').smoothScroll({
            speed: 900,
            offset: 0,
            beforeScroll: function() { $( '.navbar-collapse.collapse' ).collapse( 'hide' ); }
        });
    } else {
        $( '.inner-link' ).smoothScroll({
            speed: 900,
            offset: -59,
            beforeScroll: function() { $( '.navbar-collapse.collapse' ).collapse( 'hide' ); }
        });
    }

    /****** Section link ******/
    $( '.section-link' ).smoothScroll({
        speed: 900,
        offset: 1,
            beforeScroll: function() { $( '.navbar-collapse.collapse' ).collapse( 'hide' ); }
    });

    /****** Subscribe popup on page load ******/
    if ( $( '#subscribe-popup' ).length > 0 ) {
        var delaySecond = 1,
            expireDays  = 30,
            cookieName  = 'litho-promo-popup';
        if( getCookie( cookieName ) != 'shown' ) {
            setTimeout( function () {
                $.magnificPopup.open({
                    showCloseBtn: false,
                    items: {
                        src: '#subscribe-popup'
                    },
                    type: 'inline',
                    mainClass: 'my-mfp-zoom-in',
                    callbacks: {
                        close: function() {
                            if( $( '#newsletter-off' ).is( ':checked' ) ) {
                                setCookie( cookieName, 'shown', expireDays );
                            }
                        }
                    }
                });
            }, ( delaySecond * 1000 ) );
        }
    }

    /****** Coming soon notify me form popup ******/
    $( '.notify-form-button' ).magnificPopup({
        mainClass: 'mfp-notify',
        closeOnBgClick: true,
        preloader: false,
        fixedContentPos: false,
        removalDelay: 100,
        closeBtnInside: false,
        callbacks: {
            open: function () {
                setTimeout( function () {
                    $( '.notify-input' ).focus();
                }, 100 );
                $( '#notify_form' ).parent().addClass( 'notify-popup' );
                $( '#notify_form' ).parents( 'body' ).addClass( 'show-notify-popup' );
            },
            close: function () {
                $('body').removeClass( 'show-notify-popup' );
            }
        }
    });

    /****** Lightbox gallery ******/
    $( '.lightbox-gallery' ).magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-fade',
        fixedContentPos: true,
        closeBtnInside: false,
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        }
    });

    /* Group light box gallery image */
    var lightboxgallerygroups = {};
    $( '.lightbox-group-gallery-item' ).each(function () {
        var id = $( this ).attr( 'data-group' );
        if ( ! lightboxgallerygroups[id] ) {
            lightboxgallerygroups[id] = [];
        }
        lightboxgallerygroups[id].push( this );
    });
    $.each( lightboxgallerygroups, function () {
        $( this ).magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            gallery: {enabled: true}
        });
    });

    /****** Lightbox portfolio gallery ******/
    $( '.lightbox-portfolio' ).magnificPopup({
        delegate: '.gallery-link',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-fade',
        fixedContentPos: true,
        closeBtnInside: false,
        closeOnContentClick: true,
        gallery: {
            enabled: true,
            navigateByImgClick: false,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        }
    });

    /****** Single image lightbox - zoom animation ******/
    $( '.single-image-lightbox' ).magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        fixedContentPos: true,
        closeBtnInside: false,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    /****** Zoom gallery ******/
    $( '.zoom-gallery' ).magnificPopup({
        delegate: 'a',
        type: 'image',
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        fixedContentPos: true,
        closeBtnInside: false,
        image: {
            verticalFit: true,
            titleSrc: function ( item ) {
                return item.el.attr( 'title' );
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function ( element ) {
                return element.find( 'img' );
            }
        }
    });

    /****** Modal popup ******/
    $( '.modal-popup' ).magnificPopup({
        type: 'inline',
        preloader: false,
        // modal: true,
        blackbg: true
    });

    /****** Modal popup close ******/
    $( document ).on( 'click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    /****** Modal popup - zoom animation ******/
    $( '.popup-with-zoom-anim' ).magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        blackbg: true,
        mainClass: 'my-mfp-zoom-in'
    });

    /****** Modal popup - move animation ******/
    $( '.popup-with-move-anim' ).magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        blackbg: true,
        mainClass: 'my-mfp-slide-bottom'
    });

    /****** Popup with form ******/
    $( '.popup-with-form' ).magnificPopup({
        type: 'inline',
        preloader: false,
        closeBtnInside: false,
        fixedContentPos: true,
        focus: '#name',
        callbacks: {
            beforeOpen: function () {
                if ( getWindowWidth() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });

    /****** Video magnific popup ******/
    $( '.popup-youtube, .popup-vimeo' ).magnificPopup({
        disableOn: 767,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,
        closeBtnInside: false
    });

    /****** Google map magnific popup ******/
    $( '.popup-googlemap' ).magnificPopup({
        disableOn: 0,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,
        closeBtnInside: false
    });

    /****** Ajax magnific popup ******/
    $( '.ajax-popup' ).magnificPopup({
        type: 'ajax',
        alignTop: true,
        fixedContentPos: true,
        closeBtnInside: false,
        overflowY: 'scroll', // as we know that popup content is tall we set scroll overflow by default to avoid jump
        callbacks: {
            open: function () {
                $( '.navbar .collapse' ).removeClass( 'show' );
                $( '.navbar a.dropdown-toggle' ).addClass( 'collapsed' );
            }
        }
    });

    /****** Contact form validation on submit ******/
    $( document ).on( 'click', '.submit', function() {
        var error       = false,
            captchaFlag = false,
            _this       = $( this ),
            formObj     = _this.parents( 'form' ),
            emailFormat = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
            telFormat   = /[0-9 -()+]+$/,
            actionURL   = formObj.attr( 'action' ),
            resultsObj  = formObj.find( '.form-results' ),
            grecaptchav3= _this.attr( 'data-sitekey' ) || '',
            redirectVal = formObj.find( '[name="redirect"]' ).val();
        formObj.find( '.required' ).removeClass( 'error' );
        formObj.find( '.required' ).each( function() {
            var __this   = $( this ),
                fieldVal= __this.val();
            if( fieldVal == '' || fieldVal == undefined ) {
                error = true;
                __this.addClass( 'error' );
            } else if( __this.attr( 'type' ) == 'email' && ! emailFormat.test( fieldVal ) ) { 
                error = true;
                __this.addClass( 'error' );
            } else if( __this.attr( 'type' ) == 'tel' && ! telFormat.test( fieldVal ) ) { 
                error = true;
                __this.addClass( 'error' );
            }
        });
        var termsObj = formObj.find( '.terms-condition' );
        if ( termsObj.length > 0 ) {
            if ( ! termsObj.is( ':checked' ) ) {
                error = true;
                termsObj.addClass( 'error' );
            }
        }
        // Google reCaptcha Verify
        if ( typeof ( grecaptcha ) !== 'undefined' && grecaptcha !== null ) {
            if( formObj.find( '.g-recaptcha' ).length > 0 ) { // For Version 2
                var gResponse = grecaptcha.getResponse();
                if ( ! ( gResponse.length ) ) {
                    error = true;
                    formObj.find( '.g-recaptcha' ).addClass( 'error' );
                }
            } else if( grecaptchav3 != '' && grecaptchav3 != undefined ) { // For Version 3
                captchaFlag = true;
                formObj.find( 'input[name=action],input[name=g-recaptcha-response]' ).remove();
                grecaptcha.ready(function() {
                    grecaptcha.execute( grecaptchav3, { action: 'subscribe_newsletter' } ).then( function( token ) {
                        formObj.prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                        formObj.prepend('<input type="hidden" name="action" value="subscribe_newsletter">');

                        if( ! error ) {
                            submitAJAXForm( _this );
                        }
                    });
                });
            }
        }
        if( ! error && ! captchaFlag ) { // Check no errors && no google reCaptcha V3
            submitAJAXForm( _this );
        }
        return false;
    });

    /****** Contact form validation on blur ******/
    $( document ).on( 'blur', '.required', function() {
        var emailFormat = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
            telFormat   = /[0-9 -()+]+$/,
            fieldVal    = $( this ).val();
        if( fieldVal == '' || fieldVal == undefined ) {
            $( this ).addClass( 'error' );
        } else if( $( this ).attr( 'type' ) == 'email' && ! emailFormat.test( fieldVal ) ) {
            $( this ).addClass( 'error' );
        } else if( $( this ).attr( 'type' ) == 'tel' && ! telFormat.test( fieldVal ) ) {
            $( this ).addClass( 'error' );
        } else {
            $( this ).removeClass( 'error' );
        }
    });

    /****** Validate terms and conditions in form ******/
    $( document ).on( 'click', '.terms-condition', function() {
        var termsObj =  $( this );
        if ( ! termsObj.is( ':checked' ) ) {
            termsObj.addClass( 'error' );
        } else {
            termsObj.removeClass( 'error' );
        }
    });

    /****** Active class to current menu for only html ******/
    var pgurl = window.location.href.substr( window.location.href.lastIndexOf( '/' ) + 1 );
    var $hash = window.location.hash.substring( 1 );
    if ( $hash ) {
        $hash = '#' + $hash;
        pgurl = pgurl.replace( $hash, '' );
    } else {
        pgurl = pgurl.replace( '#', '' );
    }
    $( '.navbar-nav li a, .menu-list a' ).each( function () {
        var _this = $( this ),
            aHref = _this.attr( 'href' );
        if ( aHref === pgurl || aHref === pgurl + '.html' ) {
            _this.addClass( 'active' );
            _this.parent().addClass( 'active' );
            _this.parents( 'li.dropdown' ).addClass( 'active' );
            _this.parents( 'li.menu-list-item' ).addClass( 'active' );
        }
    });

    /****** Mobile menu modern style ******/
    var mobileStyle = $( 'body' ).attr( 'data-mobile-nav-style' );
    if ( ( mobileStyle == 'modern' || mobileStyle == 'full-screen-menu' ) && ! $( '.navbar-' + mobileStyle + '-inner').length ) {

        if ( ! $( '.box-layout' ).length > 0 && mobileStyle == 'modern' ) {
            $( 'section, footer' ).wrapAll( '<div class="page-layout"></div>' );
        } else {
            $( 'section' ).wrapAll( '<div class="page-layout"></div>' );
        }
        var targetButtonClone = $( '.navbar .navbar-toggler' ).clone( true ).addClass( 'navbar-toggler-clone' ).insertAfter( '.page-layout' );
        var targetNavClone = $( '.navbar .navbar-collapse' ).clone( true ).addClass( 'navbar-collapse-clone' ).attr( 'id', 'navbarNav-clone' ).insertAfter( '.page-layout' );
        $( '.navbar-toggler-clone, .navbar-collapse-clone' ).wrapAll( '<div class="navbar-' + mobileStyle + '-inner"></div>' );
        $( '.navbar-toggler').attr('data-target', '#navbarNav-clone' ).attr( 'aria-controls', '#navbarNav-clone' );
        $( '.navbar-' + mobileStyle + '-inner' ).find( '.dropdown-toggle' ).addClass( 'dropdown-toggle-clone' );
        if ( $( '.navbar-collapse-clone' ).length > 0) {
            var scrollOptions   = $( '.navbar-collapse-clone' ).attr( 'data-scroll-options' ) || '{ "theme": "light" }';
            if ( typeof ( scrollOptions ) !== 'undefined' && scrollOptions !== null ) {
                scrollOptions = $.parseJSON( scrollOptions );
                $( '.navbar-collapse-clone' ).mCustomScrollbar( scrollOptions );
            }
        }
        if ( mobileStyle == 'modern' ) {
            $( '<div class="navbar-show-modern-bg"></div>' ).insertAfter( '.page-layout' );
        }
    }

    /****** Hide collaps on outside click ******/
    $( document ).on( 'touchstart click', 'body', function (e) {
        if ( ! $( e.target ).closest( '.navbar-nav' ).length ) {
            if( ! $( e.target ).closest( '.header-language' ).length ) {
                // Close language menu
                $( '.header-language' ).trigger( 'mouseleave' );
                $( '.header-language' ).removeClass( 'show' );
                $( '.header-language' ).children( '.dropdown-menu' ).removeClass( 'show' );
            }
            if( ! $( e.target ).closest( '.header-cart-icon' ).length ) {
                // Close cart
                $( '.header-cart-icon' ).trigger( 'mouseleave' );
                $( '.header-cart-icon' ).removeClass( 'show' );
                $( '.header-cart-icon' ).children( '.dropdown-menu' ).removeClass( 'show' );
            }
            // Close all dropdown
            $( '.navbar-nav .dropdown' ).each( function () {
                var _this = $( this );
                _this.trigger( 'mouseleave' );
                _this.removeClass( 'show' );
                _this.children( '.dropdown-menu' ).removeClass( 'show' );
            });
            // Close classic menu
            $( '[data-mobile-nav-style="classic"] .navbar-collapse' ).collapse( 'hide' );
            // Close theme demos
            if( ! $( e.target ).closest( '.theme-demos' ).length && $( '.theme-demos' ).hasClass( 'active' ) ) {
                $( '.theme-demos' ).removeClass( 'active' );
                $( 'body' ).removeClass( 'overflow-hidden' );
            }
        } else if( $( e.target ).parents( '.show-menu' ).length ) {
            // Close side menu
            $( '.close-menu' ).trigger( 'click' );
        } else if( $( e.target ).parents( 'body' ).find( '.header-language.open' ).length ) {
            // Close language menu
            $( '.header-language' ).trigger( 'mouseleave' );
            $( '.header-language' ).removeClass( 'show' );
            $( '.header-language' ).children( '.dropdown-menu' ).removeClass( 'show' );
        } else if( $( e.target ).parents( 'body' ).find( '.header-cart-icon.open' ).length ) {
            // Close cart
            $( '.header-cart-icon' ).trigger( 'mouseleave' );
            $( '.header-cart-icon' ).removeClass( 'show' );
            $( '.header-cart-icon' ).children( '.dropdown-menu' ).removeClass( 'show' );
        }
        if ( ! $( e.target ).parents( 'header' ) && isMobile ) {
            $( '.header-language, .header-cart-icon' ).each( function () {
                var _this = $( this );
                _this.trigger( 'mouseleave' );
                _this.removeClass( 'show' );
                _this.children( '.dropdown-menu' ).removeClass( 'show' );
            });
        }
        if ( $( e.target ).closest( '.search-form-wrapper' ).length === 0 || $( e.target ).is( '.form-wrapper' ) ) {
            $( '.search-form-wrapper' ).removeClass( 'active-form' );
            $( 'body' ).removeClass( 'show-search-popup' );
        }
    });

    /****** Bootstrap dropdown toggle ******/
    if ( $( '.navbar-modern-inner' ).length > 0 ) {
        $( '.dropdown-toggle-clone' ).dropdown();
    } else {
        $( '.dropdown-toggle' ).dropdown();
    }

    /****** Navbar collapse classic menu event ******/
    $( '[data-mobile-nav-style="classic"] .navbar-collapse.collapse' ).on( 'show.bs.collapse', function () {
        if ( ! $( 'body' ).hasClass( 'navbar-collapse-show' ) ) {
            $( 'body' ).addClass( 'navbar-collapse-show' );
        }
    }).on( 'hide.bs.collapse', function () {
        if ( $( 'body' ).hasClass( 'navbar-collapse-show' ) ) {
            $( 'body' ).removeClass( 'navbar-collapse-show' );
        }
    });

    /****** Navbar collapse modern & full screen event ******/
    $( '.navbar-collapse-clone' ).on( 'show.bs.collapse', function () {
        if ( ! $( 'body' ).hasClass( 'navbar-collapse-show' ) ) {
            $( 'body' ).addClass( 'navbar-collapse-show' );
            $( 'html' ).addClass( 'overflow-hidden' );
            if ( $( 'body' ).attr( 'data-mobile-nav-bg-color' ) && $( '.navbar-modern-inner' ).length > 0 ) {
                var bgColor = $( 'body' ).attr( 'data-mobile-nav-bg-color' );
                $( '.navbar-show-modern-bg' ).css( 'background', bgColor );
            }
            if ( $( 'body' ).attr( 'data-mobile-nav-bg-color' ) && $( '.navbar-full-screen-menu-inner' ).length > 0 ) {
                var bgColor = $( 'body' ).attr( 'data-mobile-nav-bg-color' );
                $( '.navbar-full-screen-menu-inner' ).css( 'background', bgColor );
            }
        } else {
            if ( $('.navbar-modern-inner' ).length > 0 ) {
                setTimeout(function () {
                    $( '.navbar-show-modern-bg' ).css( 'background', '' );
                }, 600);
            }
            if ( $( '.navbar-full-screen-menu-inner' ).length > 0 ) {
                setTimeout(function () {
                    $( '.navbar-full-screen-menu-inner' ).css( 'background', '' );
                }, 600);
            }
        }
        var headerHeight = getTopSpaceHeaderHeight();
        var windowHeight = getWindowHeight();
        if ( $( '.navbar-modern-inner' ).length > 0 || $( '.navbar-full-screen-menu-inner' ).length > 0 ) {
            $( this ).css( 'max-height', windowHeight );
        } else {
            $( this ).css( 'max-height', ( windowHeight - headerHeight ) );
        }
    }).on( 'hide.bs.collapse', function () {
        if ( $( 'body' ).hasClass( 'navbar-collapse-show' ) ) {
            $( 'body' ).removeClass( 'navbar-collapse-show' );
            $( 'html' ).removeClass( 'overflow-hidden' );
        }
    });

    /****** Hamburger menu animation with collapse ******/
    $( '.menu-toggle' ).each( function ( index ) {
        var _this   = $( this );
        _this.attr({ 'data-toggle': 'collapse', 'data-target': '#sub-menu-' + index });
        _this.parent().find( '.sub-menu-item' ).attr( 'id', 'sub-menu-' + index ).addClass( 'collapse' );
    });
    $( '.sub-menu-item' ).each( function () {
        $( this ).collapse( 'hide' );
    });

    /****** Sticky left menu ******/
    if ( $( '.left-sidebar-wrapper').length > 0 ) {
        $( '.left-sidebar-wrapper .left-sidebar-nav' ).stick_in_parent({
            recalc: 1,
            bottoming: false
        });
    }
    $( document ).on( 'click', '.menu-list > .menu-list-item > .menu-toggle', function () {
        $( '.sub-menu-item' ).each( function () {
            $( this ).collapse( 'hide' );
        });
        $( '.left-sidebar-wrapper .left-sidebar-nav' ).parents( 'body' ).addClass( 'left-classic-mobile-menu' );
        setTimeout( function () {
            $( '.left-sidebar-wrapper' ).trigger( 'sticky_kit:recalc' );
        }, 500 );
    });
    $( document ).on( 'click', '.sub-menu-item > .menu-list-item > .menu-toggle', function (e) {
        e.preventDefault();
        var _parent = $( this ).parent().find( '.sub-menu-item' );
        var _parentAttr = $( this ).attr( 'data-target' );
        $( this ).parent().parent( '.sub-menu-item' ).find( '.sub-menu-item' ).each( function () {
            var _this   = $( this ),
                attr    = _this.parent().find( '.menu-toggle' ).attr( 'data-target' );
            if ( attr != _parentAttr ) {
                _this.collapse( 'hide' );
            }
        });
        $( '.left-sidebar-wrapper .left-sidebar-nav' ).parents( 'body' ).addClass( 'left-classic-mobile-menu' );
        setTimeout( function () {
            $( '.left-sidebar-wrapper' ).trigger( 'sticky_kit:recalc' );
        }, 500);
    });

    /******* Sidebar nav open *******/
    $( document ).on( 'click', '#mobileToggleSidenav', function (e) {
        e.preventDefault();
        $( this ).closest( 'nav' ).toggleClass( 'sidemenu-open' );
    });

    /******* Navbar toggle *******/
    var flag = false;
    $( document ).on( 'click', '.navbar-toggle', function () {
        if ( getWindowWidth() > menuBreakPoint ) {
            if ( ! flag ) {
                flag = true;
                setTimeout( function () {
                    flag = false;
                }, 500 );
                $( 'body' ).addClass( 'show-menu' );
            } else {
                if ( ! $( '.navbar-collapse' ).has( e.target ).is( '.navbar-collapse' ) && $( '.navbar-collapse ul' ).hasClass( 'show' ) ) {
                    $( '.navbar-collapse' ).find( 'a.dropdown-toggle' ).addClass( 'collapsed' );
                    $( '.navbar-collapse' ).find( 'ul.dropdown-menu' ).removeClass( 'show' );
                    $( '.navbar-collapse a.dropdown-toggle' ).removeClass( 'active' );
                }
            }
        }
    });

    /****** Open menu on hover ******/
    $( '.dropdown' ).on( 'mouseenter touchstart', function( e ) {

        var _this = $( this );
            _this.siblings( '.dropdown' ).removeClass( 'open' );
            _this.parents( '.navbar-nav' ).siblings( '.navbar-nav' ).find( '.dropdown' ).removeClass( 'open' );
            _this.addClass( 'open' );
            _this.siblings( '.dropdown' ).removeClass( 'open' );
        if ( getWindowWidth() > menuBreakPoint ) {
            menuPosition( _this );
            if( $( e.target ).siblings( '.dropdown-menu' ).length ) {
                e.preventDefault();
            }
        }

    }).on( 'mouseleave', function( e ) {

        var _this = $( this );
        _this.removeClass( 'menu-left' );
        _this.removeClass( 'open' );
    });
    
    /****** GDPR policy ******/
    var gdprExpireDays  = 30;
    var gdprCookieName  = 'litho-gdpr-policy';
    // var gdprHTML = '<div class="gdpr-wrapper"><div class="gdpr-container bg-extra-dark-gray text-center"><div class="gdpr-content alt-font text-medium text-white"> Our site uses cookies. By continuing to our site you are agreeing to our cookie <a href="privacy.html" target="_blank" class="text-decoration-line-bottom text-white">privacy policy</a></div> <a href="javascript:void(0);" class="btn btn-fancy btn-very-small btn-white gdpr-policy-button">Got it</a></div></div>';
    // if( getCookie( gdprCookieName ) != 'shown' ) {
    //     $( 'body' ).append( gdprHTML );
    // }
    $( document ).on( 'click', '.gdpr-policy-button', function() {
        $( '.gdpr-wrapper' ).fadeOut().remove();
        setCookie( gdprCookieName, 'shown', gdprExpireDays );
    });

    /****** Theme demo panel ******/
    // var themeDemoHTML = '<div class="theme-demos"><div class="all-demo"><a href="javascript:void(0);"><i class="feather icon-feather-x align-middle"></i><div class="theme-wrapper"><div><i class="feather icon-feather-layers align-middle"></i><span>37+</span> demos</div></div></a></div><div class="buy-theme sm-display-none"><a href="https://themeforest.net/user/themezaa/portfolio" target="_blank"><i class="feather icon-feather-shopping-bag align-middle"></i><div class="theme-wrapper"><div><i class="feather icon-feather-shopping-bag align-middle"></i>Buy now</div></div></a></div> <section class="d-flex align-items-center justify-content-center"><div class="demos-wrapper d-flex align-items-center w-100" data-scroll-options=\'{ "theme": "dark" }\'><div class="w-100"><div class="col-12 text-center margin-1-rem-bottom"> <span class="alt-font font-weight-600 text-extra-medium text-gradient-sky-blue-dark-pink text-uppercase letter-spacing-minus-1-half d-inline-block margin-5px-bottom">Truly multipurpose</span><h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1px padding-twenty-lr margin-25px-bottom">37+ Unique demos</h5></div><ul class="portfolio-switch-image portfolio-wrapper grid grid-3col gutter-extra-large text-center"><li class="grid-sizer"></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-startup.html" target="_blank"> <img src="images/litho-demo-startup.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-startup.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Startup</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-yoga-meditation.html" target="_blank"> <img src="images/litho-demo-yoga-meditation.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-yoga-meditation.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Yoga Meditation</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-restaurant.html" target="_blank"> <img src="images/litho-demo-restaurant.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-restaurant.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Restaurant</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-corporate.html" target="_blank"> <img src="images/litho-demo-corporate.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-corporate.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Corporate</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-architecture.html" target="_blank"> <img src="images/litho-demo-architecture.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-architecture.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Architecture</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-design-agency.html" target="_blank"> <img src="images/litho-demo-design-agency.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-design-agency.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Design Agency</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-marketing-agency.html" target="_blank"> <img src="images/litho-demo-marketing-agency.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-marketing-agency.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Marketing Agency</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-freelancer.html" target="_blank"> <img src="images/litho-demo-freelancer.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-freelancer.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Freelancer</a></div></div></li><li class="grid-item"><div class="portfolio-box"><div class="portfolio-image border-radius-4px box-shadow-double-large"> <a href="home-travel-agency.html" target="_blank"> <img src="images/litho-demo-travel-agency.jpg" alt="" /> </a></div><div class="portfolio-caption padding-15px-top"> <a href="home-travel-agency.html" target="_blank" class="alt-font text-small text-extra-dark-gray text-extra-dark-gray-hover font-weight-500 d-inline-block">Travel Agency</a></div></div></li></ul><div class="col-12 text-center clearfix"> <a href="index.html" class="btn btn-large btn-dark-gray d-table d-lg-inline-block margin-40px-top btn-fancy" target="_blank">View all 37+ demos</a></div></div></div> </section></div>';
    // $( 'body:not( .landing )' ).append( themeDemoHTML );
    $( document ).on( 'click', '.all-demo', function() {
        var themeDemosObj = $( this ).parents( '.theme-demos' );
        if( ! themeDemosObj.hasClass( 'active' ) ) {
            themeDemosObj.addClass( 'active' );
            $( 'body' ).addClass( 'overflow-hidden' );
            var themeDemosScrollObj = themeDemosObj.find( '.demos-wrapper' );
            var scrollOptions       = themeDemosScrollObj.attr( 'data-scroll-options' ) || '{ "theme": "dark" }';
            if ( typeof ( scrollOptions ) !== 'undefined' && scrollOptions !== null ) {
                scrollOptions = $.parseJSON( scrollOptions );
                themeDemosScrollObj.mCustomScrollbar( scrollOptions );
            }
        } else {
            themeDemosObj.removeClass( 'active' );
            $( 'body' ).removeClass( 'overflow-hidden' );
        }
    });

    /****** Window load ******/
    $( window ).on( 'load', function () {

        /****** Parallax ******/
        setParallax();
            
        /****** Non retina image code ******/
        $( "img:not([data-at2x])" ).each( function() {
            $( this ).attr( 'data-no-retina', '' );
        });

        /****** Page loader ******/
        if( $( '.page-loader' ).length > 0 ) {
            $( '.page-loader' ).fadeOut();
        }

        /****** Reset isotope loop ******/
        resetIsotopeLayoutLoop( isotopeObjs, false );

        /****** Reset swiper loop ******/
        resetSwiperLoop();

        /****** Sticky footer ******/
        stickyFooter();

        /***** Revolution slider navigation effect *****/
        RevolutionArrowEffect();

        /***** Top overlap section position *****/
        setOverLayerPosition();

        /****** Bottom overlap section position ******/
        setBottomOverLayerPosition();
    });

    /****** Window resize ******/
    $( window ).resize( function () {

        fullScreenHeight();
        destroySwiperLoop();
        resetSwiperLoop();
        stickyFooter();

        /****** Bootstrap dropdown toggle ******/
        if ( $( '.navbar-modern-inner' ).length > 0 ) {
            $( '.dropdown-toggle-clone' ).dropdown();
        } else {
            $( '.dropdown-toggle' ).dropdown();
        }

        setTimeout( function () {
            resetIsotopeLayoutLoop( isotopeObjs, true );
        }, 300 );

        setTimeout( function () {
            SetResizeContent();
            setOverLayerPosition();
            setBottomOverLayerPosition( 100 );
            initScrollNavigate();
        }, 500 );

    }); // End resize event

    /****** Window orientationchange ******/
    $( window ).on( 'orientationchange', function(e) {
        
        // Close side menu
        $( '.close-menu' ).trigger( 'click' );

        $( window ).trigger( 'closemenu' );
    });

    /****** Closemenu ******/
    $( window ).on( 'closemenu', function(e) {

        // Close all dropdown
        $( '.dropdown' ).each( function () {
            var _this = $( this );
            _this.trigger( 'mouseleave' );
            _this.removeClass( 'show' );
            _this.children( '.dropdown-menu' ).removeClass( 'show' );
        });

        // Close all menu
        if ( $( '.navbar-collapse' ).hasClass( 'show') ) {
            $( '.navbar-collapse' ).removeClass( 'show' );
        }
        if ( $( 'body' ).hasClass( 'navbar-collapse-show') ) {
            $( 'body' ).removeClass( 'navbar-collapse-show');
            $( 'html' ).removeClass( 'overflow-hidden' );
        }

        // Close popup
        $( '.search-close' ).trigger( 'click' );

        // Close theme demos
        if( $( '.theme-demos' ).hasClass( 'active' ) ) {
            $( '.all-demo' ).trigger( 'click' );
        }
    });

    /****** Window scroll ******/
    $( window ).on( 'scroll', initScrollNavigate );

    /****** Window scroll function ******/
    function initScrollNavigate() {

        var scrollPos = $( window ).scrollTop();

        /****** One page navigation ******/
        var menuLinks = $( '.navbar-nav li a' );
        menuLinks.each( function () {
            var _this   = $( this );
            var hasPos  = _this.attr( 'href' ).indexOf( '#' );
            if( hasPos > -1 ) {
                var res = _this.attr( 'href' ).substring( hasPos );
                if ( res != '' && res != '#' && $( res ).length > 0 ) {
                    var refElement = $( _this.attr( 'href' ) );
                    if ( refElement.position().top <= ( scrollPos + 60 ) && refElement.position().top + refElement.height() > ( scrollPos + 60 ) ) {
                        menuLinks.removeClass( 'active' );
                        _this.addClass( 'active' );
                    }
                    if ( scrollPos < 1 ) {
                        _this.removeClass( 'active' );
                    }
                }
            }
        });

        /****** Sticky nav Start ******/
        var navHeight = 0,
            miniHeaderHeight = 0;
        if ( $( 'nav' ).length > 0 ) {
            navHeight = $( 'nav' ).outerHeight();
        }
        if ( $( '.top-bar' ).length > 0 ) {
            miniHeaderHeight = $( '.top-bar' ).outerHeight();
        }
        var headerHeight = navHeight + miniHeaderHeight;
        if ( ! $( 'header' ).hasClass( 'no-sticky' ) ) {
            if ( scrollPos >= headerHeight ) {
                $( 'header' ).addClass( 'sticky' );
                if ( ! $( '.header-with-topbar .top-bar' ).is( ':hidden' ) ) {
                    $( '.header-with-topbar .top-bar' ).css({ 'top': '-' + ( miniHeaderHeight ) + 'px' });
                    $( '.header-with-topbar .fixed-top' ).css({ 'top': '0px' });
                }
            } else if ( scrollPos <= headerHeight ) {
                $( '.header-with-topbar .top-bar').css({ 'top': '0px' });
                $( '.header-with-topbar .fixed-top').css({ 'top': ( miniHeaderHeight ) + 'px' });
                $( 'header').removeClass( 'sticky' );
                if ( ! $( 'header' ).hasClass( 'sticky' ) ) {
                    setTimeout( function () {
                        setPageTitleSpace();
                    }, 200 );
                }
            }
        }

        /****** Header appear on scroll up ******/
        if ( $( 'nav.header-always-fixed-scroll' ).length <= 0 ) {
            var st = scrollPos;
            if ( st > lastScroll ) {
                st = st - 1;
                $( '.sticky' ).removeClass( 'header-appear' );
                $( '.dropdown.on' ).removeClass( 'on' ).removeClass( 'show' ).find( '.dropdown-menu' ).fadeOut( 100 );
            } else {
                $('.sticky').addClass('header-appear');
            }
            lastScroll = st;
            if ( lastScroll <= navHeight ) {
                $( 'header' ).removeClass( 'header-appear' );
            }
        }

        /****** Hide side menu on scroll ******/
        if( scrollPos >= 200 && getWindowWidth() > menuBreakPoint ) {

            // Close all menu
            if ( $( '.navbar-collapse' ).hasClass( 'show') ) {
                $( '.navbar-collapse' ).removeClass( 'show' );
            }
            if ( $( 'body' ).hasClass( 'navbar-collapse-show') ) {
                $( 'body' ).removeClass( 'navbar-collapse-show');
                $( 'html' ).removeClass( 'overflow-hidden' );
            }
        }

        /****** Scroll to top ******/
        if ( scrollPos > 150 ) {
            $( '.scroll-top-arrow' ).fadeIn( '300' );
            if( ! $( '.show-theme-demos' ).length && getWindowWidth() > 1199 ) {
                $( '.theme-demos' ).fadeIn( '300' );
            }
        } else {
            $( '.scroll-top-arrow' ).fadeOut( '300' );
        }
    }

    /****** Check formatted number ******/
    function pad( d ) {
        return ( d < 10 ) ? '0' + d.toString() : d.toString();
    }

    /****** Check IE ******/
    function isIE() {
        var ua = window.navigator.userAgent,
            msie = ua.indexOf( 'MSIE ' );
        if ( msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./) ) {
            return true;
        } else {
            return false;
        }
        return false;
    }

    /****** Get window width ******/
    function getWindowWidth() {
        return $( window ).width();
    }

    /****** Get window height ******/
    function getWindowHeight() {
        return $( window ).height();
    }

    /****** Setup swiper slider ******/
    function setupSwiper() {

        /****** Swiper slider using params ******/
        $( '.swiper-container:not( .instafeed-wrapper )' ).each( function () {
            var _this           = $( this ),
                sliderOptions   = _this.attr( 'data-slider-options' );
            if ( typeof ( sliderOptions ) !== 'undefined' && sliderOptions !== null ) {

                sliderOptions = $.parseJSON( sliderOptions );

                /* If user have provided "data-slider-md-direction" attribute then below code will execute */
                var mdDirection = _this.attr( 'data-slider-md-direction' );
                if( mdDirection != '' && mdDirection != undefined ) {

                    var direction   = ( sliderOptions['direction'] != '' && sliderOptions['direction'] != undefined ) ? sliderOptions['direction'] : mdDirection;
                    sliderOptions['on'] = {
                                            init: function() {
                                                if( getWindowWidth() <= sliderBreakPoint ) {
                                                    this.changeDirection( mdDirection );
                                                } else {
                                                    this.changeDirection( direction );
                                                }
                                                this.update();
                                            },
                                            resize: function () {
                                                if( getWindowWidth() <= sliderBreakPoint ) {
                                                    this.changeDirection( mdDirection );
                                                } else {
                                                    this.changeDirection( direction );
                                                }
                                                this.update();
                                            }
                                        };
                }

                /* If user have provided "data-thumb-slider-md-direction" attribute then below code will execute */
                if( sliderOptions['thumbs'] != '' && sliderOptions['thumbs'] != undefined ) {

                    var mdThumbDirection = _this.attr( 'data-thumb-slider-md-direction' );
                    if( mdThumbDirection != '' && mdThumbDirection != undefined ) {

                        var thumbDirection   = ( sliderOptions['thumbs']['swiper']['direction'] != '' && sliderOptions['thumbs']['swiper']['direction'] != undefined ) ? sliderOptions['thumbs']['swiper']['direction'] : mdThumbDirection;
                        sliderOptions['thumbs']['swiper']['on'] = {
                                                init: function() {
                                                    if( getWindowWidth() <= sliderBreakPoint ) {
                                                        this.changeDirection( mdThumbDirection );
                                                    } else {
                                                        this.changeDirection( thumbDirection );
                                                    }
                                                    this.update();
                                                },
                                                resize: function () {
                                                    if( getWindowWidth() <= sliderBreakPoint ) {
                                                        this.changeDirection( mdThumbDirection );
                                                    } else {
                                                        this.changeDirection( thumbDirection );
                                                    }
                                                    this.update();
                                                },
                                                click: function() {
                                                    /* Product thumbs automatic next / previous on click slide */
                                                    if( this.activeIndex == this.clickedIndex ) {
                                                        this.slidePrev();
                                                    } else {
                                                        this.slideNext();
                                                    }
                                                }
                                            };
                    }
                }

                /* If user have provided "data-slider-number-pagination" attribute then below code will execute */
                var numberPagination = _this.attr( 'data-slider-number-pagination' );
                if( numberPagination != '' && numberPagination != undefined ) {

                    sliderOptions['on']['slideChange'] = function () {
                        if( $( '.swiper-pagination-current' ).length > 0 ) {
                            $( '.swiper-pagination-current' ).html( pad( this.realIndex + 1, 2 ) );
                        }
                        if( $( '.swiper-pagination-total' ).length > 0 ) {
                            $( '.swiper-pagination-total' ).html( pad( this.slides.length - 2, 2 ) );
                        }
                    };
                }

                /* If user have provided "data-slide-change-on-click" attribute then below code will execute */
                var changeOnClick = _this.attr( 'data-slide-change-on-click' );
                if( changeOnClick != '' && changeOnClick != undefined ) {

                    sliderOptions['on'] = {
                                            click: function() {
                                                if ( this.activeIndex > this.clickedIndex ) {
                                                    this.slidePrev();
                                                } else if ( this.activeIndex < this.clickedIndex ) {
                                                    this.slideNext();
                                                }
                                            }
                                        };
                }                

                /* If user have provided "data-thumbs" attribute then below code will execute */
                var dataThumbs = _this.attr( 'data-thumbs' );
                if( dataThumbs != '' && dataThumbs != undefined ) {
                    dataThumbs = $.parseJSON( dataThumbs );
                    if ( typeof ( dataThumbs ) !== 'undefined' && dataThumbs !== null ) {
                        sliderOptions['pagination']['renderBullet'] = function ( index, className ) {
                            return '<span class="' + className + '" style="background-image: url( ' + dataThumbs[index] + ' )"></span>';
                        }
                    }
                }

                var swiperObj = new Swiper( _this, sliderOptions );
                swiperObjs.push( swiperObj );
            }
        });
    }

    /****** Destroy swiper loop ******/
    function destroySwiperLoop() {
        for( var i=0; i < swiperObjs.length; i++ ) {
            var swiperObj   = swiperObjs[i],
                destroyWidth= swiperObj.$el.attr( 'data-slider-destroy' );
            // If user have provided "data-slider-destroy" attribute then below code will execute
            if( destroyWidth != '' && destroyWidth != undefined ) {
                if ( getWindowWidth() <= destroyWidth ) {
                    swiperObj.destroy( false, true ); // Destroy swiper
                } else if( swiperObj.destroyed ) {
                    swiperObjs.splice(i, 1);
                    setupSwiper(); // Initialize swiper again
                }
            }
        };
    }

    /****** Reset swiper loop ******/
    function resetSwiperLoop() {
        setTimeout( function() {
            for( var i=0; i < swiperObjs.length; i++ ) {
                var swiperObj = swiperObjs[i];
                swiperObj.update();
            }
        }, 500 );
    }

    /****** Remove wow animation ******/
    function removeWowAnimation( gridObj ) {
        gridObj.find( '.grid-item' ).removeClass( 'animate__animated' ).css( 'visibility', '' ); // avoid problem to filter after sorting
        if( $( '.wow' ).length > 0 ) {
            gridObj.find( '.grid-item' ).each( function () {
                var _this = $( this );
                // remove perticular element from WOW array when you don't want animation on element after DOM lead
                wow.removeBox( this );
                _this.css( '-webkit-animation', 'none' );
                _this.css( '-moz-animation', 'none' );
                _this.css( '-ms-animation', 'none' );
                _this.css( 'animation', 'none' );
            });
        }
    }

    /****** Reset isotope loop ******/
    function resetIsotopeLayoutLoop( isotopeObjs, removeAnimation ) {
        for( var i=0; i < isotopeObjs.length; i++ ) {
            if( removeAnimation ) {
                removeWowAnimation( isotopeObjs[i] );
            }
            if( isotopeObjs[i].data( 'isotope' ) ) {
                isotopeObjs[i].isotope( 'layout' );
            }
        };
    }

    /****** Top overlap section position ******/
    function setOverLayerPosition() {
        if ( ( $( '.overlap-section' ).length > 0 || $( '.overlap-section-one-fourth' ).length > 0 || $( '.overlap-section-three-fourth' ).length > 0 ) && getWindowWidth() >= 768 ) {
            $( '.overlap-section, .overlap-section-one-fourth, .overlap-section-three-fourth' ).each( function () {
                var _this = $( this );
                setTimeout( function() {
                    _this.imagesLoaded( function() {
                        var closestSectionObj   = _this.closest( 'section' ),
                            sectionPaddingTop   = parseInt( closestSectionObj.css( 'padding-top' ) ),
                            areaHeight          = _this.find( '*' ).outerHeight(),
                            overlayTop          = areaHeight + sectionPaddingTop;
                        if ( _this.hasClass('overlap-section-one-fourth' ) ) {
                            overlayTop    = ( areaHeight / 4 ) - overlayTop;
                        } else if ( _this.hasClass( 'overlap-section-three-fourth' ) ) {
                            overlayTop    = ( ( areaHeight * 3 ) / 4 ) - overlayTop;
                        } else {
                            overlayTop    = ( areaHeight / 2 ) - overlayTop;
                        }
                        _this.css( 'margin-top', overlayTop );
                        var parentSectionObj= closestSectionObj.prev( 'section.overlap-height' ),
                            overlapGap      = parentSectionObj.find( '.overlap-gap-section' );
                        parentSectionObj.imagesLoaded( function () {
                            if ( overlapGap.length > 0 ) {
                                var gapSectionHeight = overlapGap.outerHeight() + ( Math.abs( overlayTop ) - sectionPaddingTop );
                                overlapGap.parents( 'section.overlap-height' ).height( gapSectionHeight );
                            }
                        });
                    });
                }, 10 );
            });
        } else {
            $( '.overlap-height' ).height( '' );
            $( '.overlap-section, .overlap-section-one-fourth, .overlap-section-three-fourth' ).css( 'margin-top', '' );
        }
    }

    /****** Bottom overlap section position ******/
    function setBottomOverLayerPosition( delay ) {
        if ( ( $( '.overlap-section-bottom' ).length > 0 ) && getWindowWidth() >= 768 ) {
            $( '.overlap-section-bottom' ).each( function () {
                var _this   = $( this ),
                    timeOut = ( _this.find( '.instafeed-wrapper' ).length > 0 ) ? delay : 10;
                setTimeout( function() {
                    _this.imagesLoaded( function() {
                        var areaHeight      = _this.outerHeight(),
                            overlayerMargin = ( ( areaHeight / 2 ) - areaHeight );
                        _this.parents( 'section' ).next( '.overlap-gap-section-bottom' ).css( 'margin-top', overlayerMargin );
                        _this.parents( 'section' ).next( '.overlap-gap-section-bottom' ).css( 'padding-top', areaHeight );
                    });
                }, timeOut );
            });
        } else {
            $( '.overlap-gap-section-bottom' ).css( 'margin-top', '' );
            $( '.overlap-gap-section-bottom' ).css( 'padding-top', '' );
        }
    }

    /****** Counter ******/
    function animateCounters() {
        $( '.counter' ).each( function ( options ) {
            var _this = $( this );
            options = $.extend( {}, options || {}, _this.data( 'countToOptions' ) || {} );
            _this.countTo( options );
        });
    }

    /****** Set parallax ******/
    function setParallax() {
        if( ! isIE() ) {
            $( '[data-parallax-background-ratio]' ).each( function() {
                var ratio = $( this ).attr( 'data-parallax-background-ratio' ) || 0.5;
                $( this ).parallax( '50%', ratio );
            });
            $( '[data-parallax-layout-ratio]' ).each( function() {
                var ratio = $( this ).attr( 'data-parallax-layout-ratio' ) || 1;
                $( this ).parallaxImg( ratio );
            });
        }
    }

    /****** Set vertical counter height******/
    function verticalCounterHeight() {
        $( '.vertical-counter' ).each( function () {
            var _this       = $( this ),
                fontSize    = _this.css( 'font-size' );
            _this.css( 'height', fontSize );
            _this.find( '.vertical-counter-number' ).each( function () {
                var __this      = $( this ),
                    divHeight   = __this.find( 'li' ).height();
                __this.height( divHeight );
            });
        });
    }

    /****** Get top space header height ******/
    function getTopSpaceHeaderHeight() {
        var topSpaceHeaderHeight = 0;
        if ( $( 'header nav.navbar' ).length > 0 ) { // Standard header
            topSpaceHeaderHeight = topSpaceHeaderHeight + $( 'header nav.navbar' ).outerHeight();
        }
        if ( $( '.top-bar' ).length > 0 ) { // Top bar
            topSpaceHeaderHeight = topSpaceHeaderHeight + $( '.top-bar' ).outerHeight();
        }
        if ( $( '.sidebar-nav-action' ).length > 0 && getWindowWidth() <= menuBreakPoint ) { // Left modern
            topSpaceHeaderHeight = topSpaceHeaderHeight + $( '.sidebar-nav-action' ).outerHeight();
        }
        if ( $( '.side-menu-header' ).length > 0 && getWindowWidth() <= menuBreakPoint ) { // Left classic
            topSpaceHeaderHeight = topSpaceHeaderHeight + $( '.side-menu-header' ).outerHeight();
        }
        return topSpaceHeaderHeight;
    }

    /****** Page title space ******/
    function setPageTitleSpace() {
        var topSpaceHeaderHeight = getTopSpaceHeaderHeight();
        if ( ! $( '.navbar' ).hasClass( 'no-sticky' ) && ( $( '.navbar' ).hasClass( 'top-space' ) || $( '.navbar' ).hasClass( 'mobile-top-space' ) ) ) {
            $( 'body' ).css( 'padding-top', topSpaceHeaderHeight + 'px' );
        } else {
            $( 'body' ).css( 'padding-top', '' );
        }
        if ( $( '.mobileoff-fullscreen-top-space' ).length >= 0 && getWindowWidth() > 1023 ) {
            $( '.mobileoff-fullscreen-top-space' ).css( 'height', getWindowHeight() - topSpaceHeaderHeight + 'px' );
        }
        if ( $( '.fullscreen-top-space' ).length >= 0 ) {
            $( '.fullscreen-top-space' ).css( 'height', getWindowHeight() - topSpaceHeaderHeight + 'px' );
        }
        if ( $( '.sidebar-nav-action' ).length > 0 || $( '.side-menu-header' ).length > 0 ) {
            if ( getWindowWidth() <= menuBreakPoint ) {
                $( 'body' ).css( 'padding-top', topSpaceHeaderHeight + 'px' );
            } else {
                $( 'body' ).css( 'padding-top', '' );
            }
        }
    }

    /****** Full screen ******/
    function fullScreenHeight() {
        var fullScreenObj   = $( '.full-screen' ),
            minHeight       = getWindowHeight(),
            topSpaceHeaderHeight = getTopSpaceHeaderHeight();
        if ( getWindowWidth() <= menuBreakPoint ) {
            $( 'header nav.navbar' ).addClass( 'mobile-top-space' );
            $( '.sidebar-nav-action' ).addClass( 'mobile-top-space' );
            $( '.side-menu-header' ).addClass( 'mobile-top-space' );
        } else {
            $( 'header nav.navbar' ).removeClass( 'mobile-top-space' );
            $( '.sidebar-nav-action' ).removeClass( 'mobile-top-space' );
            $( '.side-menu-header' ).removeClass( 'mobile-top-space' );
        }
        fullScreenObj.parents( 'section' ).imagesLoaded( function () {
            if ( $( 'section:first.full-screen, section:first .full-screen' ).length > 0 && ( $( '.top-space' ).length > 0 || $( '.mobile-top-space' ).length > 0 ) ) {
                $( 'section:first.full-screen, section:first .full-screen' ).css( 'height', minHeight - topSpaceHeaderHeight );
            } else if( $( 'header nav.navbar' ).hasClass( 'top-space' ) || $( 'header nav.navbar' ).hasClass( 'mobile-top-space' ) ) {
                minHeight = minHeight - $( 'header nav.navbar' ).outerHeight();
                fullScreenObj.css( 'height', minHeight );
            } else {
                fullScreenObj.css( 'height', minHeight );
            }
        });
    }

    /****** Mega menu resize ******/
    function megaMenuOnResize() {
        // Based on container / container-fluid width megamenu will open under parent menu as a center
        $( 'nav.navbar li.dropdown.megamenu' ).on( 'touchstart mouseenter click', function (e) {
            var windowWidth = getWindowWidth();
            if ( windowWidth > menuBreakPoint ) {
                var dropdownMenuObj = $( this ).children( '.dropdown-menu' );
                dropdownMenuObj.css({ 'left': '' });
                var menuSpacing         = 30,
                    dropdownMenuPadding = parseInt( dropdownMenuObj.css( 'padding-left' ) ),
                    linkPosition        = ( $( this ).position() ).left,
                    linkWidth           = $( this ).outerWidth(),
                    wrapperPosition     = ( $( '.navbar-collapse' ).offset() ).left,
                    dropdownWidth       = dropdownMenuObj.outerWidth();
                var actualLeftPosition = ( ( linkPosition + ( linkWidth / 2 ) ) - ( dropdownWidth / 2 ) );
                var afterReducewrapperPosition = ( windowWidth - wrapperPosition );
                if ( ( actualLeftPosition + wrapperPosition ) < 0 ) {
                    actualLeftPosition = -( wrapperPosition ) + menuSpacing;
                } else if ( ( actualLeftPosition + dropdownWidth ) > afterReducewrapperPosition ) {
                    actualLeftPosition = ( afterReducewrapperPosition - dropdownWidth ) - menuSpacing;
                }
                dropdownMenuObj.css({ 'left': actualLeftPosition + 'px' });
            } else {
                $( this ).children( '.dropdown-menu' ).css({ right: '', left: '' });
            }
        });
    }

    /****** Menu position ******/
    function menuPosition( element ) {
        var windowWidth     = getWindowWidth();
        if ( element.hasClass( 'simple-dropdown' ) ) {
            simpleDropdown  = element;
            linkDropdown    = element.find( 'a.nav-link' );
            var menuSpacing     = 30,
                menuLeftPosition= element.offset().left,
                menuWidth       = element.children( '.dropdown-menu' ).outerWidth(),
                menuDropdownCSS = ( windowWidth - menuSpacing ) - ( menuLeftPosition + menuWidth );
            if( menuDropdownCSS < 0 ) {
                element.children( '.dropdown-menu' ).css( 'left', menuDropdownCSS );
            }
        }
        if ( element.parent().hasClass( 'dropdown-menu' ) && element.parents( '.simple-dropdown' ) ) {
            var dropdownWidth   = 0,
                maxValueInArray = 0,
                lastValue       = 0,
                multiDepth      = 0;
            dropdownWidth = element.outerWidth() - linkDropdown.outerWidth();
            element.find( '.dropdown-menu' ).each( function () {
                var arr = [];
                if ( element.find( 'li' ).hasClass( 'dropdown' ) ) {
                    dropdownWidth = dropdownWidth + element.outerWidth();
                    element.find( 'li.dropdown' ).each( function () {
                        var dropdownMenu = element.closest( '.dropdown-menu' );
                        arr.push( dropdownMenu.outerWidth() );
                    });
                    maxValueInArray = lastValue + Math.max.apply( Math, arr );
                    lastValue       = maxValueInArray;
                    dropdownWidth   = dropdownWidth + maxValueInArray;
                    multiDepth      = multiDepth + 1;
                } else if ( multiDepth < 1 ) {
                    dropdownWidth = dropdownWidth + element.outerWidth();
                }
            });
            var menuRightPosition = windowWidth - ( simpleDropdown.offset().left + simpleDropdown.outerWidth() );
            if ( dropdownWidth > menuRightPosition ) {
                if( element.find( '.dropdown-menu' ).length > 0 ) {
                    var menuTopPosition = element.position().top,
                        submenuObj      = element.find( '.dropdown-menu' ),
                        submenuHeight   = submenuObj.outerHeight(),
                        totalHeight     = menuTopPosition + submenuHeight + getTopSpaceHeaderHeight(),
                        windowHeight    = getWindowHeight();
                    if( totalHeight > windowHeight ) {
                        submenuObj.css( 'top', '-' + ( totalHeight - windowHeight ) + 'px' );
                    }
                }
                element.addClass( 'menu-left' );
            }
        }
    }

    /****** Sticky footer ******/
    function stickyFooter() {
        if( $( '.footer-sticky' ).length > 0 ) {
            $( '.footer-sticky' ).imagesLoaded( function () {
                var footerHeight = $( '.footer-sticky' ).outerHeight();
                $( '.main-content' ).css({ 'margin-bottom': footerHeight });
            });
        }
        if( $( '.box-layout' ).length > 0 && $( '.footer-sticky' ).length > 0 ) {
            var boxLayoutObj    = $( '.box-layout' ),
                boxLayoutwidth  = boxLayoutObj.width();
            boxLayoutObj.find( '.footer-sticky' ).css({ 'margin': '0 auto', 'width': boxLayoutwidth, 'max-width': boxLayoutwidth });
        }
    }

    /* Get cookie function */
    function getCookie( cname ) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent( document.cookie );
        var ca = decodedCookie.split( ';' );
        for( var i = 0; i <ca.length; i++ ) {
            var c = ca[i];
            while ( c.charAt(0) == ' ' ) {
                c = c.substring( 1 );
            }
            if ( c.indexOf( name ) == 0 ) {
                return c.substring( name.length, c.length );
            }
        }
        return "";
    }

    /* Set cookie function */
    function setCookie( cname, cvalue, exdays ) {
        var d = new Date();
        d.setTime( d.getTime() + ( exdays*24*60*60*1000 ) );
        var expires = ( exdays != 0 && exdays != '' ) ? d.toUTCString() : 0;
        document.cookie = cname + "=" + cvalue + ";expires=" + expires + ";path=/";
    }

    /****** Resize function call ******/
    function SetResizeContent() {
        setParallax();
        setPageTitleSpace();
        verticalCounterHeight();
    }

    /***** Revolution slider navigation effect *****/
    function RevolutionArrowEffect() {
        if( $( '.rev-nav-ares-effect' ).length > 0 ) {
            setTimeout( function () {
                $( '.rev-nav-ares-effect .ares' ).css({ 'opacity': '1' });
            }, 2000 );
        }
    }

    /***** Submit form using AJAX *****/
    function submitAJAXForm( _this ) {

        var formObj     = _this.parents( 'form' ),
            actionURL   = formObj.attr( 'action' ),
            resultsObj  = formObj.find( '.form-results' ),
            redirectVal = formObj.find( '[name="redirect"]' ).val();

        if( actionURL != '' && actionURL != undefined ) {
            _this.addClass( 'loading' );
            $.ajax({
                type: 'POST',
                url: actionURL,
                data: formObj.serialize(),
                success: function ( result ) {
                    console.log( result );
                    _this.removeClass( 'loading' );
                    if( redirectVal != '' && redirectVal != undefined ) {
                        window.location.href = redirectVal;
                    } else {
                        if ( typeof ( result ) !== 'undefined' && result !== null ) {
                            result = $.parseJSON( result );
                        }
                        formObj.find( 'input[type=text],input[type=email],input[type=tel],input[type=password],textarea' ).each( function () {
                            $( this ).val('');
                            $( this ).removeClass( 'error' );
                        });
                        formObj.find( '.g-recaptcha' ).removeClass( 'error' );
                        formObj.find( 'input[type=checkbox],input[type=radio]' ).prop( 'checked', false );
                        if( formObj.find( '.g-recaptcha' ).length > 0 ) {
                            grecaptcha.reset();
                        }
                        formObj.find( 'input[name=action],input[name=g-recaptcha-response]' ).remove();
                        resultsObj.removeClass( 'alert-success' ).removeClass( 'alert-danger' ).hide();
                        resultsObj.addClass( result.alert ).html( result.message );
                        resultsObj.removeClass( 'd-none' ).fadeIn( 'slow' ).delay( 4000 ).fadeOut( 'slow' );
                    }
                }
            });
        }
    }
    
})( jQuery );