let grid = document.getElementById("grid");
// example of creating an element with content
(function() {
	let head = document.getElementById("head")
	head.style.color = "#1864ab"
})();
//create element
var para = document.createElement("P"); // Create a <p> element
var t = document.createTextNode("This is a paragraph."); // Create a text node
para.appendChild(t); // Append the text to <p>
document.getElementById("dare").appendChild(para);