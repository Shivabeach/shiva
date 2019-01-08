let date = new Date();
var dayOfMonth = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();
const day = month + "/" + dayOfMonth + "/" + year;
let dateIn = day;

function Express(expense, reason, dateIn) {
	this.expense = expense;
	this.reason = reason;
	this.dateIn = dateIn;
}

// this gets the local storage expense number on refresh or page open
(function() {
	document.querySelector(".displayBudget").innerHTML = "$" + localStorage.getItem("exp");
})();

//add expense by form. Goes to storage and is displayed in box 2
document.getElementById("submit").addEventListener('click', (e) => {
	e.preventDefault();
	var bud = document.getElementById("budget").value;
	var budget = parseInt(bud);
	document.querySelector('.displayBudget').innerHTML = "$" + budget.toFixed(2);
	localStorage.removeItem("exp");
	localStorage.setItem("exp", budget);
})

document.getElementById("sub").addEventListener('click', function(e) {
		e.preventDefault();
		const expense = document.querySelector("#expense").value;
		const reason = document.querySelector("#reason").value;
		const dateIn = day;
		const express = new Express(expense, reason, dateIn);
		let expresss; //fix
		localStorage.getItem('expend');
		expresss.push(express); //fix
		localStorage.setItem("expend", JSON.stringify(express));
	})
	// make functions as in expense.js
function subtract(expense) {

}

//add new expense to total
//subtract total from budget
//store and display new total