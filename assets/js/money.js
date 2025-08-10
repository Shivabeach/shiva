/** @format */

class Items {
  constructor() {
    this.reason;
    this.expense;
  }
}

class UI {
  constructor() {
    this.budgetForm = document.getElementById('budget-form');
    this.budget = document.getElementById('budget');
    this.expenseForm = document.getElementById('expense-form');
    this.expense = document.getElementById('expense');
    this.reason = document.getElementById('reason');
    this.budgetDisplay = document.getElementById('budgetDisplay');
    this.totalExpenses = document.getElementById('totalExpenses');
    this.finalExpenses = document.getElementById('finalExpenses');
    this.expenseList = document.getElementById('expense-list');
    this.itemList = [];
    this.itemId = 0;
  } //end of constructor
  //submit budget method
  static submitBudgetForm() {
    let budget1;
    let bud = document.getElementById('budget').value;
    const budget = parseFloat(bud);
    localStorage.setItem('budget1', budget);
    document.querySelector('#budgetDisplay').innerHTML = '$' + budget;
  }

  static submitExpenseForm() {
    let itemlist = [];
    let expenses = document.getElementById('expense').value;
    let reason = document.getElementById('reason').value;
    const expense = parseFloat(expenses);
    const itemLists = new Items(reason, expense);
    localStorage.setItem('itemList', JSON.stringify(itemLists));
  }
} //end of class

function eventListeners() {
  const budgetForm = document.getElementById('budget-form');
  const expenseForm = document.getElementById('sub');
  const expenseList = document.getElementById('expense-list');
  const submit = document.getElementById('submit');

  budgetForm.addEventListener('submit', (e) => {
    e.preventDefault();
    UI.submitBudgetForm();
  });

  expenseForm.addEventListener('click', (e) => {
    e.preventDefault();
    UI.submitExpenseForm();
  });

  //expenseList.addEventListener('click', function() {

  // })
}

//loaders
document.addEventListener('DOMContentLoaded', function () {
  eventListeners();
});
document.addEventListener('DOMContentLoaded', function () {
  let budget1;
  if (localStorage.getItem('budget1') === '') {
    budget = [];
  } else {
    budget = JSON.parse(localStorage.getItem('budget1'));
    document.getElementById('budgetDisplay').innerHTML = '$' + budget;
  }
});

//end of class
