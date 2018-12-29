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
                    $bud = [
                      "id" => "budget",
                      "placeholder" => "Enter Budget",
                      "class" => "input-full"
                    ];
                    echo form_input($bud);

                    $budsub = [
                    "value" => "Enter Budget",
                    "id" => "budsub"
                    ];
                    
                    echo form_submit($budsub);
                    echo form_close();
                    ?>
                </fieldset>
  
                <fieldset>
                  <legend>Expense Input</legend>
                
                <?php  
                  $form1 = [
                    "id" => "expenseForm"
                  ];
                  echo form_open($form1);

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
            <h2 class="m-blog-boxes--title">Blog title</h2>
            <div class="m-blog-boxes--shell">









              Context
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Javascript Items</h2>
            <div class="m-blog-boxes--shell">









              COntest
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
        </div>
