!function(){var e=document.getElementById("materialAmount"),t=document.getElementById("dilutionAmount"),n=(document.getElementById("reset1"),document.getElementById("mess"),document.getElementById("showLit")),u=document.getElementById("liter"),d=document.querySelector(".showOz"),m=document.getElementById("ml");!function(){"use strict";var n=document.getElementById("detailer");null!=n&&(n.innerHTML="Calculate Ratio",document.getElementById("cripes").addEventListener("click",(function(n){var u=document.getElementById("ratio").value,d=document.getElementById("ounces").value;if(""===u||u<=0||""===d||d<=0)return n.preventDefault(),alert("Lets imput some numbers"),!1;n.preventDefault();var m=d/u,i=d-m;e.innerText=Math.round(m)+" Ounces",t.innerText=Math.round(i)+" Ounces"})))}(),function(){"use strict";document.getElementById("reset1").addEventListener("click",(function(e){document.getElementById("materialAmount").innerHTML="",document.getElementById("dilutionAmount").innerHTML="",document.getElementById("validity").innerHTML=""}))}(),m.addEventListener("keyup",(function(){d.innerHTML=(.03381*m.value).toFixed(2)+" Ounces"})),u.addEventListener("keyup",(function(e){n.innerHTML=(33.814*u.value).toFixed(2)+" Ounces"}))}();
//# sourceMappingURL=detail-dist.js.map