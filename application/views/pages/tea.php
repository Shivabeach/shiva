<body class="example" id="tea">
  <button id="backtotop">Back To Top</button>
  <main class="l-containers-blog">

    <!-- Menu -->
    <?php $this->load->view("menus/top-menu.php");?>
    <div class="l-containers-blog--middle">
      <div class="l-containers-blog--middle--shell">
        <div class="m-boxes-row">
          <div class="m-blog-boxes">
            <div class="m-blog-boxes--shell">
              <h2 class="m-blog-boxes--title">Tea Input</h2>

              <h4 id="demo12"></h4>


                <fieldset>
                  <legend>Enter Tea Info</legend>
                  <?php
                  $arg = [
                    "id" => "ajax"
                  ];
                  echo form_open("forms/teathug", $arg);
                  // tea name
                  $arg1 = [
                    "name"        => "teaName",
                    "id"          => "teaname",
                    "class"       => "input-large",
                    "placeholder" => "Tea Name"
                  ];
                  echo form_input($arg1);
                  // tea type

                  $arg2 = [
                    ""       => "Type",
                    "Green"  => "Green",
                    "White"  => "White",
                    "Yellow" => "Yellow",
                    "Oolong" => "Oolong",
                    "Black"  => "Black",
                    "Dark"   => "Dark"
                  ];

                  echo form_dropdown('teaType', $arg2);

                  $arg3 = [
                    ""    => "Repurchase?",
                    "Yes" => "Yes",
                    "No"  => "No"
                  ];
                  echo form_dropdown('buyAgain', $arg3);

                  $arg4 = [
                    "name"        => "lastPurchase",
                    "id"          => "lastpurchase",
                    "placeholder" => "last Purchase",
                    "class"       => "input-large",
                    "type"        => "date"
                  ];
                  echo form_input($arg4);
                  $arg5 = [
                    "name"        => "cost",
                    "id"          => "cost",
                    "class"       => "input-large",
                    "type"        => "number",
                    "placeholder" => "Cost"
                  ];
                  echo form_input($arg5);

                  $arg6 = [
                    "name"        => "amount",
                    "id"          => "amount",
                    "class"       => "input-large",
                    "type"        => "number",
                    "placeholder" => "Bags"
                  ];
                  echo form_input($arg6);
                  $arg7 = [
                    "name"        => "orderedQty",
                    "id"          => "orderedqty",
                    "class"       => "input-large",
                    "type"        => "number",
                    "placeholder" => "Grams"
                  ];
                  echo form_input($arg7);
                  $arg8 = [
                    "name"        => "comment",
                    "id"          => "comment",
                    "placeholder" => "Comments"
                  ];
                  echo form_textarea($arg8);

                  echo "<button type='submit' id='submit' value='Submit'>submit</button>";
                  echo "<button type='reset' value='reset'>Reset</button>";
                    ?>
                <div id="display"></div>
                </fieldset>

            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>


          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Monetary</h2>
            <div class="m-blog-boxes--shell">
              <h4>Money Spent</h4>
              <h4 class="underline">
              <?php
              $query = $this->db->query("SELECT SUM(total) AS Total FROM `tea`");
              foreach($query->result() as $row) {
                echo "$" . $row->Total ;
              }?>
              </h4>

              <h4>Amount Purchased</h4>
              <h4 class="underline">
              <?php
              $query = $this->db->query("SELECT `teaName` AS Name, SUM(orderedQty) AS Grams FROM `tea` WHERE cost >5");
                foreach($query->result() as $row) {
                  echo $row->Grams . " Grams";
                }?>
                </h4>
              <!-- not done -->


            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>



          <div class="m-blog-boxes bigger">
            <h2 class="m-blog-boxes--title">Tea Record</h2>
            <div class="m-blog-boxes--shell">
            <div id="spent"></div>
                <table>
                  <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Grams</th>
                    <th>Spent</th>
                  </tr>

                <!-- Cart item container -->
                <?php

                foreach($bought as $row):?>
                  <tr>
                    <td class="teabags" id="name"><?php echo $row->Name;?></td>
                    <td class="teabags" id="type"><?php echo $row->Type;?></td>
                    <td class="teabags" id="total"><?php echo $row->Grams;?></td>

                    <td class="teabags" id="last"><?php echo $row->Spent;?></td>
                  </tr>

                <?php endforeach;?>
                <!--Cart Price-->

                  </table>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          </div>
          <div class="m-boxes-row">
            <div class="m-blog-box">
              <div class="m-blog-box--shell bord-right">
                <h2 class="m-blog-box--title">Not Buying </h2>
             <table>
                  <tr>
                    <th class="center">Name</th>
                    <th class="center">Type</th>

                  </tr>
                  <?php
                    foreach($sayno as $row):?>
                    <tr>
                      <td class="noTea"><?php echo $row->teaName;?></td>
                      <td class="center"><?php echo $row->teaType;?></td>
                    </tr>
              <?php endforeach;?>
                </table>


              </div>
              <div class="m-blog-box--shell">
                <h2 class="m-blog-box--title">WishList </h2>


                <table>
                  <tr>
                    <th class="center">Name</th>
                    <th class="center">Type</th>

                  </tr>
                  <?php
                    foreach($wish as $row):?>
                    <tr>
                      <td><?php echo $row->teaName;?></td>
                      <td class="center"><?php echo $row->teaType;?></td>
                    </tr>
              <?php endforeach;?>
                </table>



              </div>
            </div>
            <div class="m-blog-box">
              <div class="m-blog-box--shell">
                <h2 class="m-blog-box--title">Tea Records</h2>
                <dl>
                  <?php foreach($comment as $row):?>
                    <dt id="teaName"><?php echo $row->teaName;?></dt>
                    <dd id="teaType"><?php echo $row->teaType;?></dd>
                    <dd><?php echo $row->comment;?></dd>
                  <?php endforeach;?>
                </dl>
              </div>
            </div>
          </div>

