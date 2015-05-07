var addError = function(data) {
	var error = $('.js-error');

	error.fadeOut(500, function(){
		error.text(data).fadeIn()
	});

}
$('.js-error').hide();
$('form').on('submit', function(e){
	e.preventDefault();

	var self = $(this);
	self.find('input[type="submit"]').addClass('disabled').val('Loading...');

	if(!$('input[type="email"]').val()) {
		addError('Please enter an e-mail address');
		self.find('input[type="submit"]').removeClass('disabled').val('Subscribe');
		return false;
	}

	if(!$('input[type="text"]').val()) {
		addError('Please enter your name');
		self.find('input[type="submit"]').removeClass('disabled').val('Subscribe');
		return false;
	}

	$.ajax({
		type: 'POST',
		url: this.action,
		data: self.serialize(),
		success: function(e) {
			if(e.error) {
				self.find('input[type="submit"]').removeClass('disabled').val('Subscribe');
				addError(e.error);
			}
			if(e.success) {
				var parent = self.parent();
				parent.height(parent.height());
				self.fadeOut(500, function(){
					self.remove();
					parent.html('<div class="success msg">Thanks for signing up to the mailing list!</div>');
					$('.success').fadeIn();
				})
			}
		}
	});
});

$('input').blur(function() {
     if($.trim(this.value).length) { // zero-length string AFTER a trim
            $(this).parents('.field').addClass('input--filled');
     } else {
            $(this).parents('.field').removeClass('input--filled');
     }
});