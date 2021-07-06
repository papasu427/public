$(function() {
	$('[id^=flickable_narrow]').each(function(){
		if (!!$.prototype.flickable){
			$(this).flickable('disable');
		}
	});
});

$(function() {
	$('[id^=flickable_wide]').each(function(){
		if (!!$.prototype.flickable){
			$(this).flickable('disable');
		}
	});
});
