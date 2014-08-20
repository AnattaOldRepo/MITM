(function($) {
    $(document).ready(function() {
        /*----- Contact Us ----------*/
        $('.contact-us').on('click', function() {
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
        $('#page').hide();
        $("#go_btn").on('click', function() {
        	//$('#page').attr('style', 'display: none !important');
            $('#page').show();
            $("#welcome-screen").slideUp("slow");
            return false;
        });

        var winW = jQuery(window).width();
	    if (winW > 780)
	        jQuery("#page").addClass("dummy_class");
	    
	    else if (winW > 769)
	        jQuery("#page").removeClass("dummy_class");
	    else {}
	});
})(jQuery);