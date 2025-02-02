<body id="prime">
  <main class="l-containers-main">
    <a class="l-menu-totop">Back To top</a>
    <!-- <div class="l-headers-main">
      <div class="l-headers-main--title">
        <h1 class="ptext">
          <?= $heading; ?>
        </h1>

      </div>
    </div> -->
    <?php $this->load->view("menus/top-menu.php"); ?>
    <div class="m-boxes-row">
      <div class="col-3 br-2 out">
        <div class="skeleton fs-3 bold-9">
          <p class="weather">Conditions - </p>
          <p class="temp">Temperature - </p>
          <p class="humid">Humidity - </p>
        </div>
      </div>
      <div class="col-3 br-2 out">
        <div class="skeleton">
          <img class="icon1">
        </div>
      </div>
      <div class="col-3 br-2 out">
        <div class="skeleton fs-3 bold-9">
          <p class="windspeed">Wind Speed - </p>
          <p class="deg">Wind direction - </p>
        </div>
      </div>
      <div class="col-3 br-2 out">
        <div class="skeleton fs-3 bold-10">
          <p id="demo12"></p>
          <p id="lastLink"></p>
        </div>
      </div>
    </div>
    <div class="m-boxes-row coloring1">
      <div class="m-boxes-box">
        <h2 class="m-boxes-box--title tooltip swing" data-title="Most used">Priority Links</h2>
        <div class="m-boxes-box--shell">
          <ul>
            <?php foreach ($prior as $list) : ?>
            <li class="even">
              <?= anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-exclamation', 'rel' => "external")), nbs(3); ?><span
                class="count">
                <?= $list->counter; ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="m-boxes-box">
        <h2 class="m-boxes-box--title">Priority Links</h2>
        <div class="m-boxes-box--shell">
          <article>
            <ul>

              <li class="inliner">
                <?=anchor("http://localhost/car/", "Car", array("rel" => "external", "class" => "tri"));?></li>
              <li class="inliner">
                <?=anchor("http://localhost/designs/", "Designs", array("rel" => "external", "class" => "tri"));?>
              </li>
              <li class="inliner">
                <?=anchor("blogs/expense", "Expense", array("rel" => "external", "class" => "tri"));?></li>
              <li class="inliner"> <?=anchor("http://elements/", "Elements", array("rel" => "external", "class" => "tri"));?>
              </li>
              <li class="inliner">
                <?=anchor("http://localhost/forward/", "Forward", array("rel" => "external", "class" => "tri"));?></li>
              <li class="inliner">
                <?=anchor("http://localhost/family/", "Family", array("rel" => "external", "class" => "tri"));?></li>
              <li class="inliner">
                <?=anchor("http://localhost/noteapp/", "Notes App", array("rel" => "external", "class" => "tri"));?>
              </li>
              <li class="inliner">
                <?=anchor("http://localhost/grid/", "Gridly", array("rel" => "external", "class" => "tri"));?></li>
              <li class="inliner">
                <?=anchor("http://localhost/weight/", "Weight", array("rel" => "external", "class" => "tri"));?></li>
              <li class="inliner">
                <?=anchor("https://beta.protonmail.com/", "ProtonMail", array("rel" => "external", "class" => "tri"));?>
              </li>
              <li class="inliner">
                <?=anchor("https://calendar.protonmail.com/u/0//", "ProtonCalendar", array("rel" => "external", "class" => "tri"));?>
              </li>
              <li class="inliner">
                <?=anchor("https://simplelogin.io/", "Simple Login", array("rel" => "external", "class" => "tri"));?>
              </li>
              <li class="inliner">
                <?=anchor("http://localhost/oblivion/", "Oblivion", array("rel" => "external", "class" => "tri"));?>
              </li>
              <li class="inliner">
                <?=anchor("https://www.fitbit.com/global/us/home", "Fitbit", array("rel" => "external", "class" => "tri"));?>
              </li>

            </ul>
          </article>
          <article>
            <p id="elect" class="bold-14 center"></p>
            <?php $today = date('l, F d Y'); ?>
            <p class="center orange">Today is <?= $today; ?></p>
          </article>
          <article>

            <p>
              <?php echo validation_errors(); ?>
            </p>
            <?php
            $args = [
              'id' => 'ajax'
            ];
            echo form_open("forms/add_link", $args);
            $arg = [
              'id'          => 'url',
              "placeholder" => "Add Link",
              "name"        => "url",
              "style"       => "width: 70%",
              "class"       => "bold-2",
              "type" => "url",
              "min-length" => 1
            ];
            echo form_input($arg);
            $args1 = [
              "id"          => "name",
              "placeholder" => "Name",
              "name"        => "name",
              "style"       => "width: 70%",
              "class"       => "bold-2"
            ];
            echo form_input($args1);
            $args2 = [
              "name"        => "genre",
              "placeholder" => "Genre",
              "style"       => "width: 70%",
              "class"       => "bold-2"
            ];
            echo form_input($args2);
            $args4 = [
              "name"        => "counter",
              "placeholder" => "Counter",
              "style"       => "width: 70%",
              "class"       => "bold-2",
              "type" => "number"
            ];
            echo form_input($args4);
            $args3 = [
              ""        => "Pick One",
              "music"   => "Music",
              "car"     => "Car",
              "code"    => "Code",
              "flex"    => "Flex",
              "local"   => "Local",
              "inter"   => "Interests",
              "links"   => "Links",
              "news"    => "News",
              "utility" => "Utility",
              "herbs"   => "Herbs",
              "css"     => "CSS",
              "help"    => "Help",
              "health"  => "Health",
              "food"    => "Food"
            ];
            ksort($args3);
            echo form_dropdown("type", $args3);
            echo form_submit("Submit", "Submit", array("class" => "none"));
            echo form_reset("reset", "Reset", array("class" => "none"));
            echo form_close();
            //TODO: Add family
            ?>
            <article>
              <ul class="flexible">
                <?php
                $menu = [
                  "Car"       => "#car",
                  "Interests" => "#interests",
                  "News"      => "#news",
                  "Utilities" => "#utility",
                  "Herbs"     => "#herbs",
                  "CSS"       => "#css",
                  "Code"      => "#code",
                  "Health"    => "#health",
                  "Food"      => "#food"
                ];
                ksort($menu);
                foreach ($menu as $key => $value) {
                  echo "<li class='line'><a href='$value'>$key</a></li>";
                }
                ?>
              </ul>
              <?php
              $arg = [
                "id" => "ajax"
              ];
              echo form_open('forms/delete', $arg);
              echo "<button type='submit' id='dele' value='Delete' class='deleteIt'>" . "Delete Them" . "</button>";
              echo form_close();

              ?>
            </article>
            <div id="display"></div>
            <p id="show"></p>
            <p id="demo"></p>
            <p class="classes"></p>
            <p class="boxy"></p>
          </article>
          <article>
            <?php
            echo form_open("forms/search");
            $arg = [
              "name"        => "search",
              "style"       => "width: 50%",
              "placeholder" => "Search",
              "class"       => "inliner"
            ];
            echo form_input($arg);
            echo form_submit('Submit', 'Send', array("class" => "inliner none"));
            echo form_close();
            ?>
          </article>

        </div>
      </div>
      <div class="m-boxes-box">
        <h2 class="m-boxes-box--title color-1 tooltip swing" data-title="Useful editors" contenteditable="true">
          Editors(Links)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($links as $list) : ?>
          <li class="even">
            <?= anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' => 'external')), nbs(3); ?>
            <span class="count"><?= $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="m-boxes-row coloring2">
      <div class="m-boxes-box">
        <h2 class="m-boxes-box--title tooltip fade" data-title="Music stations">Music(Music)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($music as $list) : ?>
          <li class="even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-volume-up ', 'rel' => "external")), nbs(3); ?><span
              class="count"><?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-boxes-box">
        <h2 class="m-boxes-box--title tooltip fade" data-title="Tutorials">Tutorials(Flex)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($flex as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code ', 'rel' => 'external')), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-boxes-box">
        <h2 class="m-boxes-box--title">Design(code)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($code as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-info-circle ', 'rel' => "external")), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="m-boxes-row coloring1">
      <div class="m-boxes-box">
        <h2 id="car" class="m-boxes-box--title">Mustang(Car)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($car as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-car', 'rel' => "external")), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-boxes-box">
        <h2 id="interests" class="m-boxes-box--title">Interests(inter)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($inter as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-heart', 'rel' => "external")), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-boxes-box">
        <h2 id="news" class="m-boxes-box--title">News(news)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($news as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-newspaper-o ', 'rel' => "external")), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="m-boxes-row coloring2">
      <div class="m-boxes-box">
        <h2 id="utility" class="m-boxes-box--title">Utilities(utility)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($utility as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-info', 'rel' => "external")), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-boxes-box">
        <h2 id="herbs" class="m-boxes-box--title">Herbs(herbs)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($herbs as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-leaf', 'rel' => "external")), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span>
            <span class='rightie'><input type='checkbox' id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-boxes-box">
        <h2 id="css" class="m-boxes-box--title">CSS(css)</h2>
        <div class="m-boxes-box--shell">
          <?php
          foreach ($color as $list) : ?>
          <li class="m-lists-musical even">
            <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-css3', 'rel' => "external")), nbs(3); ?><span
              class="count">
              <?php echo $list->counter; ?></span><span class='rightie'><input type='checkbox'
                id="<?php echo $list->id;?>" name='item[]' class='del'></span>
          </li>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-boxes-row">
        <div class="m-boxes-box">
          <h2 id="code" class="m-boxes-box--title color-1 tooltip swing" data-title="Useful editors">Code help</h2>
          <div class="m-boxes-box--shell">
            <?php
            foreach ($help as $list) : ?>
            <li class="m-lists-musical even">
              <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' => 'external')), nbs(3); ?><span
                class="count">
                <?php echo $list->counter; ?></span><span class='rightie'><input type='checkbox'
                  id="<?php echo $list->id;?>" name='item[]' class='del'></span>
            </li>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="m-boxes-box">
          <h2 id="food" class="m-boxes-box--title color-1">Food</h2>
          <div class="m-boxes-box--shell">
            <?php
            foreach ($food as $list) : ?>
            <li class="m-lists-musical even">
              <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' => 'external')), nbs(3); ?><span
                class="count">
                <?php echo $list->counter; ?></span><span class='rightie'><input type='checkbox'
                  id="<?php echo $list->id;?>" name='item[]' class='del'></span>
            </li>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="m-boxes-box">
          <h2 id="health" class="m-boxes-box--title color-1">Health</h2>
          <div class="m-boxes-box--shell">
            <?php
            foreach ($health as $list) : ?>
            <li class="m-lists-musical even">
              <?php echo anchor($list->url, $list->name . ' - ' . $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' => 'external')), nbs(3); ?><span
                class="count">
                <?php echo $list->counter; ?></span><span class='rightie'><input type='checkbox' name='item[]'
                  id="<?php echo $list->id;?>" class='del'></span>
            </li>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <p id="submit2"></p>
    </div>
    <!-- end of boxes row -->
