(function($) {
    $(document).ready(function() {
         
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

        // slider on home page
        //$('.bxslider').bxSlider();
        $('.bxslider').bxSlider({
            auto: true,
            autoControls: true,
            default: false,
            default: false
        });

        // show hide home page welcome screen
        $('.page-template-page-homepage-php #page').hide();
        $("#go_btn").on('click', function() {
        	//$('#page').attr('style', 'display: none !important');
            $('.page-template-page-homepage-php #page').show();
            $("#welcome-screen").slideUp("slow");
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
        
	});
})(jQuery);