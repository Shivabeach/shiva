/** @format */

let blog = document.getElementById('blog');
let prime = document.getElementById('prime');
let grid = document.getElementById('grid');
const inputCelsius = document.getElementById('inputCelsius');
const inputgrams = document.getElementById('inputgrams');
const inputMeters = document.getElementById('inputMeters');
const loadCount = document.getElementById("load_count");
// learn javascript timing section
let myVar = setInterval(myTimer, 1000);

function loaded() {
  let value = +1;

}

addEventListener("DOMContentLoaded", () => {
  loaded();
})

function myTimer() {
  'use strict';
  var d = new Date();
  document.getElementById('demo12').innerHTML = d.toLocaleTimeString();
}
//* get number of li
(function() {
  'use strict';
  var element1 = document.getElementById('show');
  var numberOfLinks = document.getElementsByTagName('li');
  if (element1 !== null) {
    element1.innerHTML = 'Number of Links ' + numberOfLinks.length;
  }
})();

(function() {
  'use strict';
  var element = document.querySelector('p.classes');
  var numberOfClasses = document.querySelectorAll('li.line');
  if (element != null) {
    element.innerHTML = 'Number of support Links ' + numberOfClasses.length;
  }
})();

var box = document.querySelector('p.boxy');
var numberOfBoxes = document.querySelectorAll('.m-boxes-box');
if (box != null) {
  box.innerHTML = 'Number of Boxes ' + numberOfBoxes.length;
}

function ital(x) {
  x.style.background = 'green';
}

//! for blog pages
(function() {
  'use strict';
  var box2 = document.querySelector('li.numBoxes'); //gets class added
  var numberOfBoxes = document.querySelectorAll('.m-blog-boxes');
  if (box2 != null) {
    box2.innerHTML = 'Number of Boxes ' + '<b>' + numberOfBoxes.length + '</b>';
    box2.classList.add('bo3');
  }
})();
//* blog page
(function() {
  'use strict';
  var element2 = document.getElementById('numOfLi');
  var numberOfLis = document.getElementsByTagName('li');
  if (element2 != null) {
    element2.innerHTML =
      'Number of list items ' + '<u>' + numberOfLis.length + '</u>';
  }
})();
//* blog page
var pos = document.getElementById('demo');
if (pos != null) {
  pos.innerHTML = 'Page location is ' + window.location.href;
}
//* blog page
var elements = document.getElementsByClassName('box');
for (var i = 0; i < elements.length; i++) {
  elements[i].className += ' box2';
}
// temperature
function temperatureConverter() {
  let convert = inputCelsius.value * 1.8 + 32;
  document.getElementById('outputFahrenheit').innerHTML = `${convert} Degrees`;
}

if (inputCelsius) {
  inputCelsius.addEventListener('keyup', temperatureConverter);
}
let cnt = 0;
let count1 = document.getElementById('counted');

function countMe() {
  'use strict';
  cnt = parseInt(cnt) + parseInt(1);
  let divData = document.getElementById('showCount');
  divData.innerHTML = `Clicks: ${cnt}`;
  if (cnt > 3) {
    count1.innerHTML = 'Fail';
    count1.disabled = true;
  }
}
//! comes from the call on the blog page. Should delete
function changeText(id) {
  'use strict';
  id.innerHTML = 'Ooops!';
}

//function showCoords(event) {
//    var mouse1 = document.getElementById("mousey");
//    var x = event.offsetX;
//    var y = event.offsetY;
//    mouse1.innerHTML = "X = " + x + " x " + "Y = " + y;
//}

function clearCoor() {
  'use strict';
  document.getElementById('mousey').innerHTML = '';
}
// this is an attempt to check the last link clicked. Works
// var checkList = document.getElementById("checkList");
var items = document.querySelectorAll('a.update');
if (items != null) {
  var lastLink = document.getElementById('lastLink');
  for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', activate);
  }
}
//! writes the last link into lastlink ID and sets localstorage
function activate() {
  'use strict';
  let list = this.innerHTML;
  lastLink.innerHTML = list;
  localStorage.removeItem('storage');
  localStorage.setItem('storage', list);
}
// this gets local storage if the lastlink ID is empty
(function() {
  'use strict';
  var lastLink = document.getElementById('lastLink');
  if (lastLink != null) {
    if (lastLink.value == null) {
      //var remind = localStorage.getItem("storage");
      document.getElementById('lastLink').innerHTML = localStorage.getItem(
        'storage'
      );
    }
  }
})();

function loadDoc() {
  'use strict';
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', 'ajax_info.txt', true);
  xhttp.onload = function() {
    if (this.status == 200) {
      document.getElementById('demo').innerHTML = this.responseText;
    }
  };
  xhttp.send();
}
//* showing hints with ajax
//! php file is lookup.php in the assets/ajax directory
// function showHint(str) {
//  "use strict";
//  if (str.length == 0) {
//    document.getElementById("txtHint").innerHTML = "";
//    return;
//  } else {
//    var xmlhttp = new XMLHttpRequest();
//    xmlhttp.open("GET", "http://shiva/assets/ajax/lookup.php?q=" + str, true);
//    xmlhttp.onload = function() {
//      if (this.status == 200) {
//        document.getElementById("txtHint").innerHTML = this.responseText;
//      }
//    };
//    xmlhttp.send();
//  }
// }

(function() {
  'use strict';
  var type = document.getElementById('ratioType');
  if (type != null) {
    type.innerText = 'Calculate Ratio';
    document.getElementById('submit2').addEventListener('click', (event) => {
      var ratios = document.getElementById('ratio1').value;
      var herbs = document.getElementById('herb1').value;
      if (ratios == '' || ratios <= 0 || herbs == '' || herbs <= 0) {
        event.preventDefault();
        alert('Herb amount or ratio must be greater than nothing');
        return false;
      } else {
        event.preventDefault();
        var quickResult = herbs * ratios;
        type.classList.add('addOutput');
        document.getElementById('ratioType').innerText =
          'Liquid mix for a 1:' +
          ratios +
          ' ratio is ' +
          quickResult +
          ' ounces of liquid';
      }
    });
  }
  const renam = document.getElementById('reset');
  if (renam != null) {
    renam.addEventListener('click', (event) => {
      type.classList.remove('addOutput');
      document.getElementById('ratioType').innerText = 'Calculate Ratio';
    });
  }
})();
//! conversion for meters to feet on blog page
function meterConverter() {
  let feets = Math.floor(inputMeters.value * 3.2808) + ' Feet';
  let miles = (inputMeters.value * 0.0006213712).toFixed(2) + ' Miles';
  document.getElementById('formOutput').innerHTML = feets;
  document.getElementById('miles2').innerText = miles;
}

//! conversion for Grams to ounces on blog page
function gramsConverter() {
  const gram = inputgrams.value * 0.035274;
  document.getElementById('ounceOutput').innerHTML = gram + ' Ounces';
  document.getElementById('lbOutput').innerHTML = gram / 16 + ' pounds';
}
if (inputgrams) {
  inputgrams.addEventListener('keyup', gramsConverter);
}
if (inputMeters) {
  inputMeters.addEventListener('keyup', meterConverter);
}
