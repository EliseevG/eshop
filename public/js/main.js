$('.js-order_button').click(function() {
	$('main').css('filter', 'blur(5px)');
	$('.js-overlay').fadeIn();
	$('.js-overlay').addClass('disabled');
	$('.js-popup').fadeIn();
});

$('.js-close_popup').click(function() {
	


	$('.js-overlay').fadeOut();
	$('.popup_material').css('display', 'none');
	$('.ty').css('display', 'none');
	$('.popup_rzmer').fadeIn(1000);
	$('main').css('filter', 'none');

});

$('.choose_razmer').click(function() {
	$('.popup_rzmer').fadeOut();
	$('.popup_material').delay(500).fadeIn();
})

$('.choose_material').click(function() {
	$('.popup_material').fadeOut();
	$('.popup_gem').delay(500).fadeIn();
})


$('.chooze_gem').click(function() {
	$('.popup_gem').fadeOut();
	$('.ty').delay(500).fadeIn();
})




