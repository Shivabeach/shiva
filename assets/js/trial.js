	(function() {
		"use strict";

		//get number of li 
		(function() {
			var element1 = document.getElementById("show");
			var numberOfLinks = document.getElementsByTagName("li");
			if (element1 != null) {
				element1.innerHTML = 'Number of Links ' + numberOfLinks.length;
			}
		})();

		(function() {
			var element = document.querySelector('p.classes');
			var numberOfClasses = document.querySelectorAll("li.line");
			if (element != null) {
				element.innerHTML = 'Number of support Links ' + numberOfClasses.length;
			};
		})();


		var box = document.querySelector("p.boxy");
		var numberOfBoxes = document.querySelectorAll(".m-boxes-box");
		if (box != null) {
			box.innerHTML = 'Number of Boxes ' + numberOfBoxes.length;
		};


		// for blog pages
		(function() {
			var box2 = document.querySelector("li.numBoxes"); //gets class added
			var numberOfBoxes = document.querySelectorAll(".m-blog-boxes");
			if (box2 != null) {
				box2.innerHTML = 'Number of Boxes ' + "<b>" + numberOfBoxes.length + "</b>";
				box2.classList.add("bo3");
			};
		})();

		(function() {
			var element2 = document.getElementById("numOfLi");
			var numberOfLis = document.getElementsByTagName("li");
			if (element2 != null) {
				element2.innerHTML = 'Number of list items ' + "<u>" + numberOfLis.length + "</u>";
			}
		})();

		var pos = document.getElementById("demo");
		if (pos != null) {
			pos.innerHTML = "Page location is " + window.location.href;
		}

		// var y = document.getElementsByClassName("box");
		// var i;
		// for (i = 0; i < y.length; i++) {
		// 	y[i].className = +"box2";
		// }

		var elements = document.getElementsByClassName("box");
		for (var i = 0; i < elements.length; i++) {
			elements[i].className += " box2";
		}

	})();