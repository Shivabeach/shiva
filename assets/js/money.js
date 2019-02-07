class Items {
  constructor() {
    this.reason;
    this.expense;
  }

}

class UI {
  constructor() {
      this.budgetForm = document.getElementById("budget-form");
      this.budget = document.getElementById("budget");
      this.expenseForm = document.getElementById("expense-form");
      this.expense = document.getElementById("expense");
      this.reason = document.getElementById("reason");
      this.budgetDisplay = document.getElementById("budgetDisplay");
      this.totalExpenses = document.getElementById("totalExpenses");
      this.finalExpenses = document.getElementById("finalExpenses");
      this.expenseList = document.getElementById("expense-list");
      this.itemList = [];
      this.itemId = 0;
    } //end of constructor  
    //submit budget method
  submitBudgetForm() {
    let bud = document.getElementById("budget").value;
    const budget = parseFloat(bud);
    localStorage.setItem("budget", budget);
    document.querySelector("#budgetDisplay").innerHTML = "$" + budget;
  }

  submitExpenseForm() {
    let expenses = document.getElementById("expense").value;
    let reason = document.getElementById("reason").value;
    const expense = parseFloat(expenses);

    const itemList = new Items(reason, expense);
    localStorage.setItem('itemList', JSON.stringify(itemList));


  }
} //end of class

function eventListeners() {
  const budgetForm = document.getElementById("budget-form");
  const expenseForm = document.getElementById("sub");
  const expenseList = document.getElementById("expense-list");



  budgetForm.addEventListener('submit', (e) => {
    e.preventDefault();
    ui.submitBudgetForm();

  })

  expenseForm.addEventListener('click', (e) => {
    e.preventDefault();
    ui.submitExpenseForm();
  })

  expenseList.addEventListener('click', function() {


  })
}

//loaders
document.addEventListener('DOMContentLoaded', function() {
  eventListeners();
})
document.addEventListener('DOMContentLoaded', function() {
  let budget;
  if (localStorage.getItem('budget') === "") {
    budget = [];
  } else {
    budget = JSON.parse(localStorage.getItem('budget'));
    document.getElementById("budgetDisplay").innerHTML = "$" + budget
  }
})





//end of class