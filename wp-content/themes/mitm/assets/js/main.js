(function($){
	$(document).ready(function(){
		$('.contact-us').on('click',function(){
			$('.contact-info').slideToggle();
		});

		$('.contact-info-form').submit(function(){
			var $this = $(this);
			$.post('/wp-admin/admin-ajax.php', { action: "send_contact_query",
					name : $this.find('input[name=name]').val(),
					email: $this.find('input[name=email]').val(),
					content: $this.find('input[name=content]').val()},
				function (response) {
					if(response.status){
						$this.hide();
						$this.parent().find('.success').show();
					} else {
						$this.parent().find('.error').html(response.message);
					}
				}, "json");
			return false;
		});

		$('.subscribe-form').submit(function(){
			var $this = $(this);
			$.post('/wp-admin/admin-ajax.php', { action: "subscribe_newsletter",
					email: $this.find('input[name=email]').val()},
				function (response) {
					if(response.status){
						$this.hide();
						$this.parent().find('.success').show();
					} else {
						alert(response.message);
					}
				}, "json");
			return false;
		});
	});
})(jQuery);
