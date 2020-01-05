let blog = document.getElementById("blog");
let prime = document.getElementById("prime");
let grid = document.getElementById("grid");
// learn javascript timing section
var myVar = setInterval(myTimer, 1000);

function myTimer() {
	"use strict";
	var d = new Date();
	document.getElementById("demo12").innerHTML = d.toLocaleTimeString();
}
//=======================================================================================
function addTotal() {
  let teabags = document.getElementsByClassName("teabags");
  let teaTotal = teabags.getElementById('total');
  var total = 0;
  for(var i = 0; i < teabags.length; i++) {
    var teaRows = teabags[i];
    teaCost = teaRows.getElementById('total')[0];
    total = total + teaCost;
    document.getElementById('spent').innerHTML = total;
  }
}

$(function () {
  "use strict";
  $('dt#teaName').on('click', function () { //click on the li
    var content = $(this).text();//content is the text that you clicked on
 //PLACE THE TEXT INSIDE THE INPUT FIELD, YOU CAN CHANGE YOUR SELECTOR TO TARGET THE RIGHT INPUT
    $('input[id="teaname"]').val(content);
  });
});

