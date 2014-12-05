(function($) {
    $(document).ready(function() {


        $('.fancybox').fancybox();
         
        /*----- Contact Us ----------*/
        $('.contact-us').on('click', function() {
            $('.contact-us a').toggleClass("active");
            $('.contact-info').slideToggle();
        });
        $('.close-box').on('click', function() {
            $('.contact-info').slideUp();
            return false;
        });

        $('.contact-info-form').submit(function() {
            var $this = $(this);
            $.post('/wp-admin/admin-ajax.php', {
                    action: "send_contact_query",
                    name: $this.find('input[name=name]').val(),
                    email: $this.find('input[name=email]').val(),
                    content: $this.find('input[name=content]').val()
                },
                function(response) {
                    if (response.status) {
                        $this.hide();
                        $this.parent().find('.success').show();
                    } else {
                        $this.parent().find('.error').html(response.message);
                    }
                }, "json");
            return false;
        });
        /*----- End Contact Us ----------*/

        // subscribe newletter thrrough ajax
        $('.subscribe-form').submit(function() {
            var $this = $(this);
            $.post('/wp-admin/admin-ajax.php', {
                    action: "subscribe_newsletter",
                    email: $this.find('input[name=email]').val()
                },
                function(response) {
                    if (response.status) {
                        $this.hide();
                        $this.parent().find('.success').show();
                    } else {
                        alert(response.message);
                    }
                }, "json");
            return false;
        });
        /*----- Home page js----------*/
        // slider on home page
        //----bxslider-----------
            /*$('.bxslider').bxSlider();
                $('.bxslider').bxSlider({
                    auto: true,
                    autoControls: true,
                    default: false,
                    default: false
             });*/
        //----Owl-Carousel-----------//
            $("#owl-carousel").owlCarousel({
                  navigation : true, // Show next and prev buttons
                  slideSpeed : 300,
                  paginationSpeed : 400,
                  singleItem:true,
                  autoPlay:true
                  // "singleItem:true" is a shortcut for:
                  // items : 1,
                  // itemsDesktop : false,
                  // itemsDesktopSmall : false,
                  // itemsTablet: false,
                  // itemsMobile : false
              });
        /*----- End Owl Carousel ----------*/

        // show hide home page welcome screen
        /*$('.page-template-page-homepage-php #page').hide();
        $("#go_btn").on('click', function() {
        	//$('#page').attr('style', 'display: none !important');
            $('.page-template-page-homepage-php #page').show();
            $("#welcome-screen").slideUp("slow");
            return false;
        });*/
        /*-----End Home page ----------*/

        $('.navigation nav a').eq(3).click(function () {
            $('html, body').animate({
                scrollTop: $('.work-with-us').offset().top
            }, 1000);
            return false;
        });

        // Home screen height and down arrow make scrollable
        $("#welcome-screen").height( $( window ).height());

        $('#go_btn').click(function () {
            $('html, body').animate({
                scrollTop: $('#page').offset().top
            }, 1000);
            return false;
        });


        /*-----------Studio Page slide up/down-------*/
        $('.article').hide();
        $('.tool-index h4').on('click', function() {
            $(this).toggleClass("active"); 
            $(this).siblings('.article').slideToggle(500);
        });
        /*-----------Studio Page slide up/down-------*/
       /*-----------Mobile nav slide up/down-------*/
         $('.mobmenuicon').on('click', function() {
            $(this).toggleClass("active"); 
            $('.mob-nav').slideToggle(500);
            //$("p").removeClass("intro");
            $('.contact-us a').removeClass("active");
            $('.contact-info').slideUp(500);
            return false;
        });
        /*-----------Mobile nav slide up/down-------*/
        /*-----------Mobile toll-box up/down-------*/
        $('.toolboox-title').on('click', function() {
            $(this).slideUp("100");
            $(this).next('.toolboox-content').slideDown("500");
            return false;
        });
        $('.toolboox-caption').on('click', function() { 
            $('.toolboox-title').slideDown("500");
            $(this).parents(".toolboox-content").slideUp();
            return false;
        });

        /*-----------End Mobile toll-box up/down-------*/
        /*-----------MyToolBox-------------------------*/
          $(".tools-list a").on('click', function(){
                $(".tools-list a").removeClass('active');
                $(this).addClass('active');
        });
     /*-----------MyToolBox-------------------------*/

        
	});
})(jQuery);