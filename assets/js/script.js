"use strict";
$(function() {
  $("a.update").on("click", function() {
    var id = $(this).attr("id");
    $.ajax({
      url: "http://localhost/shiva/forms/increment",
      type: "POST",
      data: {
        id: id
      },
      success: function(msg) {
        //location.reload();
      }
    });
    return false;
  });
});
//api for weather 8fcc4d70707f287fc3826dc758fef64d http://api.openweathermap.org/data/2.5/forecast?id=4614214&APPID={APIKEY}
//https://api.openweathermap.org/data/2.5/forecast?id=4614214&units=imperial&APPID=8fcc4d70707f287fc3826dc758fef64d
//openweathermap.org/img/w/
$.getJSON(
  "https://api.openweathermap.org/data/2.5/weather?id=4614214&units=imperial&APPID=8fcc4d70707f287fc3826dc758fef64d",
  function(data) {
    var icon =
      "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
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
  }
);

var btnTop = $(".l-menu-totop");

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
    });
  });
});

$(function() {
  $('A[rel="external"]').click(function() {
    window.open($(this).attr("href"));
    return false;
  });
});

$(function() {
  "use strict";
  $("form#ajax").on("submit", function(e) {
    e.preventDefault();
    var that = $(this),
      url = that.attr("action"),
      type = that.attr("method"),
      data = {};
    that.find("[name]").each(function(index, value) {
      var that = $(this),
        name = that.attr("name"),
        value = that.val();
      data[name] = value;
    });
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $("#display")
          .html(response)
          .fadeOut(7000);
        location.reload();
      }
    });
    return false;
  });
});

//countdown timer to election day
// Set the date we're counting down to
var countDownDate = new Date("Nov 3, 2020 05:00:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("elect").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);