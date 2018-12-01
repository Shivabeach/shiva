"use strict";
//api for weather 8fcc4d70707f287fc3826dc758fef64d http://api.openweathermap.org/data/2.5/forecast?id=4614214&APPID={APIKEY}
//https://api.openweathermap.org/data/2.5/forecast?id=4614214&units=imperial&APPID=8fcc4d70707f287fc3826dc758fef64d
//openweathermap.org/img/w/
$.getJSON("https://api.openweathermap.org/data/2.5/weather?id=4614214&units=imperial&APPID=8fcc4d70707f287fc3826dc758fef64d", function(data) {
	var icon = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
	var temp = Math.floor(data.main.temp);
	var weather = data.weather[0].description;
	var humid = data.main.humidity;
	var windspeed = data.wind.speed + " mph";
	var deg = Math.floor(data.wind.deg);
	switch (true) {
		case deg >= 360 && deg <= 21:
			deg = "N";
			break;
		case deg >= 22 && deg <= 44:
			deg = "NNE";
			break;
		case deg >= 45 && deg <= 66:
			deg = "NE";
			break;
		case deg >= 67 && deg <= 89:
			deg = "ENE";
			break;
		case deg >= 90 && deg <= 111:
			deg = "E";
			break;
		case deg >= 112 && deg <= 134:
			deg = "ESE";
			break;
		case deg >= 135 && deg <= 156:
			deg = "SE";
			break;
		case deg >= 157 && deg <= 179:
			deg = "SSE";
			break;
		case deg >= 180 && deg <= 201:
			deg = "S";
			break;
		case deg >= 202 && deg <= 224:
			deg = "SSW";
			break;
		case deg >= 225 && deg <= 246:
			deg = "SW";
			break;
		case deg >= 247 && deg <= 269:
			deg = "WSW";
			break;
		case deg >= 270 && deg <= 291:
			deg = "W";
			break;
		case deg >= 292 && deg <= 314:
			deg = "WNW";
			break;
		case deg >= 315 && deg <= 336:
			deg = "NW";
			break;
		case deg >= 337 && deg <= 359:
			deg = "NNW";
			break;
		default:
			deg = "no data";
	}
	$(".icon1").attr("src", icon);
	$(".temp").append(temp);
	$(".humid").append(humid);
	$(".weather").append(weather);
	$(".windspeed").append(windspeed);
	$(".deg").append(deg);
});

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
				//location.reload();
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