/** @format */

const budgetForm = document.getElementById('budget-form');
const budget = document.getElementById('budget');
const expenseForm = document.getElementById('expense-form');
const expense = document.getElementById('expense');
const reason = document.getElementById('reason');
const budgetDisplay = document.getElementById('budgetDisplay');
const totalExpenses = document.getElementById('totalExpenses');
const finalExpenses = document.getElementById('finalExpenses');
const expenseList = document.getElementById('expense-list');
const submit = document.getElementById('submit');
const sub = document.getElementById('sub');
let itemList = [];
let itemId = 0;

function submitBudgetForm() {
  let budget1;
  let bud = document.getElementById('budget').value;
  const budget = parseFloat(bud);
  localStorage.setItem('budget1', budget);
  document.querySelector('#budgetDisplay').innerHTML = '$' + budget;
}

function submitExpenseForm() {
  let itemlist = [];
  let expenses = document.getElementById('expense').value;
  let reason = document.getElementById('reason').value;
  const expense = parseFloat(expenses);
  const itemLists = new Items(reason, expense);
  localStorage.setItem('itemList', JSON.stringify(itemLists));
}

submit.addEventListener('submit', (e) => {
  e.preventDefault();
  submitBudgetForm();
});
sub.addEventListener('submit', (e) => {
  e.preventDefault();
  submitExpenseForm();
});

document.addEventListener('DOMContentLoaded', function () {
  let budget = [];
  if (localStorage.getItem('budget1') === '') {
    budget = [];
  } else {
    budget = JSON.parse(localStorage.getItem('budget1'));
    document.getElementById('budgetDisplay').innerHTML = '$' + budget;
  }
});
