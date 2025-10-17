/** @format */

//1 ml to oz = 0.03381 oz
let materialAmount = document.getElementById('materialAmount');
let dilutionAmount = document.getElementById('dilutionAmount');
let reset = document.getElementById('reset1');
var mess = document.getElementById('mess');
const showLit = document.getElementById('showLit');
const liter = document.getElementById('liter');

const showOz = document.querySelector('.showOz');
const ml = document.getElementById('ml');
(function() {
  'use strict';
  var detailer = document.getElementById('detailer');
  if (detailer != null) {
    detailer.innerHTML = 'Calculate Ratio';
    document.getElementById('cripes').addEventListener('click', (event) => {
      const ratioEl = document.getElementById('ratio');
      const ouncesEl = document.getElementById('ounces');
      const ratioStr = ratioEl ? ratioEl.value.trim() : '';
      const ouncesStr = ouncesEl ? ouncesEl.value.trim() : '';
      const ratio = parseFloat(ratioStr);
      const ounces = parseFloat(ouncesStr);
      if (!ratioEl || !ouncesEl || ratioStr === '' || ouncesStr === '' || !Number.isFinite(ratio) || !Number.isFinite(ounces) || ratio <= 0 || ounces <= 0) {
        event.preventDefault();
        alert('Please enter positive numeric values for ratio and ounces.');
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
  document.getElementById('reset1').addEventListener('click', () => {
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

function mlToOz() {
  showOz.innerHTML = (ml.value * 0.03381).toFixed(2) + ' Fl Ounces';
}

function lToOz(lite) {
  showLit.innerHTML = (liter.value * 33.814).toFixed(2) + ' Ounces';
}

ml.addEventListener('keyup', mlToOz);
liter.addEventListener('keyup', lToOz);
