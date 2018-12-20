// example of creating an element with content
/* eslint-env browser */
(function() {
	"use strict";
	var head = document.getElementById("head");
	head.style.color = "#1864ab";
	head.style.textShadow = "3px 1px 1px #1864ba ";
}());
//create element
let para, t;
para = document.createElement("P"); // Create a <p> element
t = document.createTextNode("This is a paragraph."); // Create a text node
para.appendChild(t); // Append the text to <p>
document.getElementById("dare").appendChild(para);

// Create an element(li) and put text in it
(function() {
	"use strict";
	let li, chat, u;
	li = document.createElement("li"); //check
	chat = document.createTextNode("1st LI in list"); //check
	li.appendChild(chat);

	u = document.getElementById("ul1");
	u.appendChild(li);
}());