/** @format */

//1 ml to oz = 0.03381 oz
let materialAmount = document.getElementById('materialAmount');
let dilutionAmount = document.getElementById('dilutionAmount');
let reset = document.getElementById('reset1');
var mess = document.getElementById('mess');
const showLit = document.getElementById('showLit');
const liter = document.getElementById('liter').value;

const showOz = document.querySelector('.showOz');
const ml = document.getElementById('ml').value;

(function () {
  'use strict';
  var detailer = document.getElementById('detailer');
  if (detailer != null) {
    detailer.innerHTML = 'Calculate Ratio';
    document.getElementById('cripes').addEventListener('click', (event) => {
      var ratio = document.getElementById('ratio').value;
      var ounces = document.getElementById('ounces').value;
      if (ratio === '' || ratio <= 0 || ounces === '' || ounces <= 0) {
        event.preventDefault();
        alert('Lets imput some numbers');
        return false;
      } else {
        event.preventDefault();
        var dilute = ounces / ratio;
        var amount = ounces - dilute;
        materialAmount.innerText = Math.round(dilute) + ' Ounces';
        dilutionAmount.innerText = Math.round(amount) + ' Ounces';
      }
    });
  }
})();
//this empties the responses to the above function's innertext
(function destroy() {
  'use strict';
  document.getElementById('reset1').addEventListener('click', (event) => {
    document.getElementById('materialAmount').innerHTML = '';
    document.getElementById('dilutionAmount').innerHTML = '';
    document.getElementById('validity').innerHTML = '';
  });
})();

function myFunction() {
  var x, text;

  // Get the value of the input field with id="ratio"
  x = document.getElementById('ratio').value;

  // If x is Not a Number or less than one or greater than 10
  if (isNaN(x) || x < 1 || x > 10) {
    text = 'Ratio Input not valid';
  } else {
    text = 'Ratio Input OK';
  }
  document.getElementById('validity').innerHTML = text;
}

function mlToOz(mills) {
  mills = parseFloat(mills) || 0;
  showOz.innerHTML = mills * 0.03381 + ' Ounces';
}

function lToOz(lite) {
  lite = parseFloat(lite) || 0;
  lite = Math.round(lite);
  showLit.innerHTML = Math.round(lite * 33.81402) + ' Ounces';
}

// function temperatureConverter(valNum) {
//   "use strict";
//   valNum = parseFloat(valNum) || 0;
//   document.getElementById("outputFahrenheit").innerHTML =
//     valNum * 1.8 + 32 + " Degrees";
// }
