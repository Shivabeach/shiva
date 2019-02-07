<body class="example" id="blog">
  <button id="backtotop">Back To Top</button>
  <main class="l-containers-blog">
    <div class="l-headers-blog">
      <div class="l-headers-blog--title">
        <h1 class="ptext">
        <?=$title;?>
        </h1>
      </div>
    </div>
    <!-- Menu -->
    <?php $this->load->view("menus/top-menu.php");?>
    <div class="l-containers-blog--middle">
      <div class="l-containers-blog--middle--shell">
        <div class="m-boxes-row">
          <div class="m-blog-boxes">
            <div class="m-blog-boxes--shell">
              <h2 class="m-blog-boxes--title">Expense Input</h2>
              <?php echo anchor("pages/expense", "Expense page", array("rel" => "external"));?>
              <h4 id="demo12"></h4>
              <div class="m-blog-boxes--shell">

                <fieldset>
                  <legend>Enter Budget</legend>
                    <?php
                    $args = [
                      "id" => "budget-form"
                    ];
                    echo form_open("",$args);
                    $bud = [
                      "id" => "budget",
                      "placeholder" => "Enter Budget",
                      "class" => "input-full"
                    ];
                    echo form_input($bud);

                    echo "<button type='submit' id='submit' value='Submit'>submit</button>";

                    ?>
                </fieldset>

                <fieldset>
                  <legend>Expense Input</legend>

                <form id="expense-form" method="post">
                  <input type="number" id="expense" placeholder="expense" />
                  <input type="text" id="reason" placeholder="reason" />
                  <button id="sub">Submit</button>
                </form>

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
            <div class="cart-row"> <!-- Cart item container -->
                <span class="cart-item cart-header cart-column">ITEM</span> <!-- cart-item -->
                <span class="cart-price cart-header cart-column">PRICE</span> <!--Cart Price-->
            </div>








            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
        </div>
