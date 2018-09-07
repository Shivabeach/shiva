"use strict";

var btnTop = $("#backtotop");

$(window).scroll(function() {
	if ($(window).scrollTop() > 250) {
		btnTop.fadeIn(500);
	} else {
		btnTop.fadeOut(500);
	}
});

$(function() {
	btnTop.on("click", function() {
		$("html,body").animate({
			scrollTop: 0
		})
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

$(function() {
	"use strict";
	$('form#ajax').on('submit', function(e) {
		e.preventDefault();
		var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
		that.find('[name]').each(function(index, value) {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
			data[name] = value;
		});
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response) {
				location.reload();
				$('#display').html(response).delay(6000).fadeOut(1000);
			}
		});
		return false;
	});
});