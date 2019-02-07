<?php $this->load->view("menus/top-menu.php");?>
<div class="container mt-4 indigo2" >
  <div id="demo12" class="color-1"></div>
  <h1 class="display-4 text-center">
  <i class="fas fa-book-open text-primary"></i> My<span class="text-primary">Tea</span>List</h1>
  <div class="wrapper">
    <article class="wrap">
      <form id="book-form">
        <div>
          <label class="moss fs-3" for="title">Tea</label>
          <input type="text" id="title" class="input-large">
        </div>
        <div>
          <label class="moss fs-3" for="author">Type</label>
          <input type="text" id="author" class="input-large">
        </div>
        <div>
          <label class="moss fs-3" for="isbn">Cost</label>
          <input type="text" id="isbn" class="input-large">
        </div>
        <input type="submit" value="Add Book">
      </form>
    </article>

    <article class="wrap cart-total">
      <label id="total" class="mt-3 moss fs-3 cart-total-title">Total <span class="cart-total-price"></span> </label>
    </div>
  </article>

<table class="table table-striped mt-5">
  <thead>
    <tr class="cart-row">
      <th class="moss fs-3">Tea</th>
      <th class="moss fs-3">Type</th>
      <th class="moss fs-3 item-price">Cost</th>
      <th></th>
    </tr>
  </thead>
<tbody id="book-list"></tbody>
</table>
</div>
</div>
<!-- expense.js -->