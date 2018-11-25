//---------------------------------- lineas.blade--------------------------------------------

        var SmartHeader = {

            mobileHeaderThreshold : 770
            , rootContainer : jQuery('.header-container')

            , init : function()
            {
                enquire.register('(max-width: ' + (SmartHeader.mobileHeaderThreshold - 1) + 'px)', {
                    match: SmartHeader.moveElementsToMobilePosition,
                    unmatch: SmartHeader.moveElementsToRegularPosition
                });
            }

            , activateMobileHeader : function()
            {
                SmartHeader.rootContainer.addClass('header-mobile').removeClass('header-regular');
            }

            , activateRegularHeader : function()
            {
                SmartHeader.rootContainer.addClass('header-regular').removeClass('header-mobile');
            }

            , moveElementsToMobilePosition : function()
            {
                SmartHeader.activateMobileHeader();

                //Move cart
                jQuery('#mini-cart-wrapper-mobile').prepend(jQuery('#mini-cart'));

                //Reset active state
                jQuery('.skip-active').removeClass('skip-active');
                
                //Disable dropdowns
                jQuery('#mini-cart').removeClass('dropdown');
                jQuery('#mini-compare').removeClass('dropdown');

                //Clean up after dropdowns: reset the "display" property
                jQuery('#header-cart').css('display', '');
                jQuery('#header-compare').css('display', '');

            }

            , moveElementsToRegularPosition : function()
            {
                SmartHeader.activateRegularHeader();

                //Move cart
                jQuery('#mini-cart-wrapper-regular').prepend(jQuery('#mini-cart'));

            
            
            
                //Reset active state
                jQuery('.skip-active').removeClass('skip-active');

                //Enable dropdowns
                jQuery('#mini-cart').addClass('dropdown');
                jQuery('#mini-compare').addClass('dropdown');
            }

        }; //end: SmartHeader






        //Important: mobile header code must be executed before sticky header code
        SmartHeader.init();

        jQuery(function($) {

            //Skip Links
            var skipContents = $('.skip-content');
            var skipLinks = $('.skip-link');

            skipLinks.on('click', function (e) {
                e.preventDefault();

                var self = $(this);
                var target = self.attr('href');

                //Get target element
                var elem = $(target);

                //Check if stub is open
                var isSkipContentOpen = elem.hasClass('skip-active') ? 1 : 0;

                //Hide all stubs
                skipLinks.removeClass('skip-active');
                skipContents.removeClass('skip-active');

                //Toggle stubs
                if (isSkipContentOpen) {
                    self.removeClass('skip-active');
                } else {
                    self.addClass('skip-active');
                    elem.addClass('skip-active');
                }
            });

        }); //end: on document ready




    
        
        jQuery(function($) {

            var StickyHeader = {

                stickyThreshold : 960 
                , isSticky : false
                , isSuspended : false
                , headerContainer : $('.header-container')
                , stickyContainer : $('.sticky-container')  //.nav-container
                , stickyContainerOffsetTop : 55 //Position of the bottom edge of the sticky container relative to the viewport
                , requiredRecalculation : false //Flag: required recalculation of the position of the bottom edge of the sticky container

                , calculateStickyContainerOffsetTop : function()
                {
                    //Calculate the position of the bottom edge of the sticky container relative to the viewport
                    StickyHeader.stickyContainerOffsetTop = 
                        StickyHeader.stickyContainer.offset().top + StickyHeader.stickyContainer.outerHeight();

                    //Important: disable flag
                    StickyHeader.requiredRecalculation = false;
                }

                , init : function()
                {
                    StickyHeader.hookToActivatedDeactivated(); //Important: call before activateSticky is called
                    StickyHeader.calculateStickyContainerOffsetTop();
                    StickyHeader.applySticky();
                    StickyHeader.hookToScroll();
                    StickyHeader.hookToResize();

                    if (StickyHeader.stickyThreshold > 0)
                    {
                        enquire.register('(max-width: ' + (StickyHeader.stickyThreshold - 1) + 'px)', {
                            match: StickyHeader.suspendSticky,
                            unmatch: StickyHeader.unsuspendSticky
                        });
                    }
                }

                , applySticky : function()
                {
                    if (StickyHeader.isSuspended) return;

                    //If recalculation required
                    if (StickyHeader.requiredRecalculation)
                    {
                        //Important: recalculate only when header is not sticky
                        if (!StickyHeader.isSticky)
                        {
                            StickyHeader.calculateStickyContainerOffsetTop();
                        }
                    }

                    var viewportOffsetTop = $(window).scrollTop();
                    if (viewportOffsetTop > StickyHeader.stickyContainerOffsetTop)
                    {
                        if (!StickyHeader.isSticky)
                        {
                            StickyHeader.activateSticky();
                        }
                    }
                    else
                    {
                        if (StickyHeader.isSticky)
                        {
                            StickyHeader.deactivateSticky();
                        }
                    }
                }

                , activateSticky : function()
                {
                    var stickyContainerHeight = StickyHeader.stickyContainer.outerHeight();
                    var originalHeaderHeight = StickyHeader.headerContainer.css('height');

                    //Compensate the change of the header height after the sticky container was removed from its normal position
                    StickyHeader.headerContainer.css('height', originalHeaderHeight);

                    //Trigger even just before making the header sticky
                    $(document).trigger("sticky-header-before-activated");

                    //Make the header sticky
                    StickyHeader.headerContainer.addClass('sticky-header');
                    StickyHeader.isSticky = true;

                    //Effect
                    StickyHeader.stickyContainer.css('margin-top', '-' + stickyContainerHeight + 'px').animate({'margin-top': '0'}, 200, 'easeOutCubic');
                    //StickyHeader.stickyContainer.css('opacity', '0').animate({'opacity': '1'}, 300, 'easeOutCubic');
                }

                , deactivateSticky : function()
                {
                    //Remove the compensation of the header height change
                    StickyHeader.headerContainer.css('height', '');

                    StickyHeader.headerContainer.removeClass('sticky-header');
                    StickyHeader.isSticky = false;

                    $(document).trigger("sticky-header-deactivated");
                }

                , suspendSticky : function()
                {
                    StickyHeader.isSuspended = true;

                    //Deactivate sticky header.
                    //Important: call method only when sticky header is actually active.
                    if (StickyHeader.isSticky)
                    {
                        StickyHeader.deactivateSticky();
                    }
                }

                , unsuspendSticky : function()
                {
                    StickyHeader.isSuspended = false;

                    //Activate sticky header.
                    //Important: call applySticky instead of activateSticky to check if activation is needed.
                    StickyHeader.applySticky();
                }

                , hookToScroll : function()
                {
                    $(window).on("scroll", StickyHeader.applySticky);
                }

                , hookToScrollDeferred : function()
                {
                    var windowScrollTimeout;
                    $(window).on("scroll", function() {
                        clearTimeout(windowScrollTimeout);
                        windowScrollTimeout = setTimeout(function() {
                            StickyHeader.applySticky();
                        }, 50);
                    });
                }

                , hookToResize : function()
                {
                    $(window).on('themeResize', function(e) {

                        //Require recalculation
                        StickyHeader.requiredRecalculation = true;

                        //Remove the compensation of the header height change
                        StickyHeader.headerContainer.css('height', '');
                    });
                }

                , hookToActivatedDeactivated : function()
                {
                    //Move elements to sticky header
                    $(document).on('sticky-header-before-activated', function(e, data) {

                        //Move mini cart to sticky header but only if mini cart is NOT yet inside the holder
                        //(if parent of parent doesn't have class "nav-holder").
                        if (jQuery('#mini-cart').parent().parent().hasClass('nav-holder') === false)
                        {
                            jQuery('#nav-holder1').prepend(jQuery('#mini-cart'));
                        }

                        //Move mini compare to sticky header but only if mini compare is NOT yet inside the holder
                        //(if parent of parent doesn't have class "nav-holder").
                        if (jQuery('#mini-compare').parent().parent().hasClass('nav-holder') === false)
                        {
                            jQuery('#nav-holder2').prepend(jQuery('#mini-compare'));
                        }

                    }); //end: on event

                    //Move elements from sticky header to normal position
                    $(document).on('sticky-header-deactivated', function(e, data) {

                        //Move mini cart back to the regular container but only if mini cart is directly inside the holder
                        if (jQuery('#mini-cart').parent().hasClass('nav-holder'))
                        {
                            jQuery('#mini-cart-wrapper-regular').prepend(jQuery('#mini-cart'));
                        }

                        //Move mini compare back to the regular container but only if mini compare is directly inside the holder
                        if (jQuery('#mini-compare').parent().hasClass('nav-holder'))
                        {
                            jQuery('#mini-compare-wrapper-regular').prepend(jQuery('#mini-compare'));
                        }

                    }); //end: on event
                }

            }; //end: StickyHeader

            StickyHeader.init();

        }); //end: on document ready

//---------------------------------- end lineas.blade--------------------------------------------