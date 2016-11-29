$(function() {
	$("#news-and-events #tabs .tab a").click(function(e) {
		e.preventDefault();
		var myrel = $(this).attr('rel');
		
		$("#news-and-events .tab-content").hide();
		$(".tab").removeClass('active');
		
		$("#"+myrel).show();
		$(this).parent().addClass('active');
		
		return false;
	});
	
});