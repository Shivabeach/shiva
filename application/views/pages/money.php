<body class="example" id="blog">
  <button id="backtotop">Back To Top</button>
  <main class="l-containers-blog">
    <div class="l-headers-blog">
      <div class="l-headers-blog--title">
        <h1 class="ptext">
          <?= $title; ?>
        </h1>
      </div>
    </div>
    <!-- Menu -->
    <?php $this->load->view("menus/top-menu.php"); ?>
    <div class="l-containers-blog--middle">
      <div class="l-containers-blog--middle--shell">
        <div class="m-boxes-row">
          <div class="m-blog-boxes">
            <div class="m-blog-boxes--shell">
              <h2 class="m-blog-boxes--title">Expense Input</h2>
              <?php echo anchor("pages/expense", "Expense page", array("rel" => "external")); ?>
              <h4 id="demo12"></h4>
              <div class="m-blog-boxes--shell">

                <fieldset>
                  <legend>Enter Budget</legend>
                  <?php
                  $args = [
                    "id" => "budgetForm"
                  ];
                  echo form_open("", $args);
                  $bud = [
                    "id" => "budget",
                    "placeholder" => "Enter Budget",
                    "class" => "input-full"
                  ];
                  echo form_input($bud);

                  $budsub = [
                    "value" => "Enter Budget",
                    "id" => "submit"
                  ];

                  echo form_submit($budsub);
                  echo form_close();
                  ?>
                </fieldset>

                <fieldset>
                  <legend>Expense Input</legend>

                  <?php
                  $forms = [
                    "id" => "expenseForm"
                  ];
                  echo form_open("", $forms);

                  $expense = [
                    "id" => "expense",
                    "placeholder" => "Enter Expense value",
                    "class" => "input-full",
                    "type" => "number"
                  ];
                  echo form_input($expense);

                  $reason = [
                    "id" => "reason",
                    "placeholder" => "Expense reason",
                    "class" => "input-full"
                  ];
                  echo form_input($reason);

                  $data = [
                    "id" => "day",
                    "class" => "input-full",
                    "placeholder" => "date",
                    "type" => "date"
                  ];
                  echo form_input($data);

                  $sub = [
                    "value" => "Enter Values",
                    "id" => "sub"
                  ];
                  echo form_submit($sub);
                  echo form_close();
                  ?>
                </fieldset>



                Box 1
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Budget Total title</h2>
            <div class="m-blog-boxes--shell">
              <h3>Budget</h3>
              <h3 id="budgetDisplay"></h3>
              <!-- not done -->
              <h3>Expenses</h3>
              <h3 class="totalExpenses"></h3>
              <!-- not done -->
              <h3>Amount Left</h3>
              <h3 class="finalExpenses"></h3>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Expense Items</h2>
            <div class="m-blog-boxes--shell">

              <table>
                <thead>
                  <tr>
                    <th>Expense</th>
                    <th>Reason</th>
                    <th>Date</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody class="disp">

                </tbody>
              </table>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <script type="module" src="<?php echo base_url('assets/js/plan.js'); ?>"></script>

        </div>