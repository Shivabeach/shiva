var btnTop = $("#backtotop");

$(window).scroll(function() {
	if ($(window).scrollTop() > 250) {
		btnTop.fadeIn(500);
	} else {
		btnTop.fadeOut(500);
	}
});

$(function () {
	btnTop.on("click", function() {
		$("html,body").animate({ scrollTop: 0 })
	});
});

$(function() {
	$("a.update").on("click", function() {
		var id = $(this).attr('id');
		$.ajax({
			url: "http://localhost/shiva/forms/increment",
			type: "POST",
			data: {
				"id": id
			},
			success: function(msg) {
				location.reload();
			}
		});
		return false;
	});
});

$(function() {
	$('A[rel="external"]').click(function() {
		window.open($(this).attr('href'));
		return false;
	});
});
