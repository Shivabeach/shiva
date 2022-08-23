<body class="example" id="blog">
  <a class="l-menu-totop">Back To top</a>
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
              <h2 class="m-blog-boxes--title">Blog title</h2>
              <?php echo anchor("pages/expense", "Expense page", array("rel" => "external")); ?>
              <h4 id="demo12"></h4>
              <div class="m-blog-boxes--shell">
                <p>Make a definitions page for van-horn.us</p>
                <div><button id="counted" onclick="countMe()">Click</button></div>
                <p id="showCount"></p>
                <div class="box">
                  <ul>
                    <li>To center something in a circle</li>
                    <li>display: grid</li>
                    <li>place-items: center</li>
                    <li></li>
                  </ul>
                </div>
                <div class="round1">
                  Lorem ipsum
                </div>
                <p>ages is an array of numbers</p>
                <p>const = canDrink = ages.filter(age => age >= 21);</p>
                <p>companies is an array of objects
                </p>
                <p>companies.forEach(function(company) { console.log(company.name)});
                </p>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Blog title</h2>
            <div class="m-blog-boxes--shell">
              <p id="demo"></p>
              <p><code>h2::before</code>
                <code>counter-increment: section </code>
                <code>content: "No. " counter(section) ": "</code>
              </p>
              <p><code>Body</code><br>
                <code>counter-reset: section</code>
              </p>
              <div id="mousey"></div>
              <p>
              <form action="myform">
                <input type="text" id="tags">
              </form>
              </p>
              <div class="grid">
                <p>This is a sidebar and one main column</p>
                <code>.ex3 .parent {
                  display: grid;
                  grid-template-columns: minmax(150px, 25%) 1fr;
                }
                </code>
                <p>Header footer and 3 main contents</p>
                <code>
                  .ex5 .parent {
                    display: grid;
                    grid-template: auto 1fr auto / auto 1fr auto;
                  }
                </code>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Javascript Items</h2>
            <div class="m-blog-boxes--shell">
              <ol>
                <li class="numBoxes"></li>
                <li id="numOfLi"></li>
                <li> //@prepros-append app.js</li>
              </ol>
              <!-- change text is a function in trial.js -->
              Events
              <ul>
                <li>mousedown </li>
                <li>MouseEvent</li>
                <li>mouseenter</li>
                <li>MouseEvent</li>
                <li>mouseleave</li>
                <li>mousemove </li>
                <li>MouseEvent</li>
                <li>mouseover </li>
                <li>MouseEvent</li>
                <li>mouseout </li>
                <li>MouseEvent</li>
                <li>mouseup </li>
                <li>Click</li>
                <li>keyup</li>
                <li>keypress</li>
                <li>keydown</li>
                <li>invalid</li>
                <li>focus</li>
                <li>change</li>
                <li>focusout</li>
              </ul>
              <h3>HSL</h3>
              <ol>
                <li><span class="bold-15">Hue</span> 0 = red, 60 = yellow, 120 = green, 180 = cyan, 300 = purple, 240 =
                  Blue</li>
                <li><span class="bold-15">Saturation</span> 0% - 100% Lower % = more pale</li>
                <li><span class="bold-15">Value</span> 0 - 100% lightness or darkness of a color</li>
                <li></li>
              </ol>
            </div>

            <div class="m-blog-boxes--post-number"></div>
          </div>
        </div>
        <div class="m-boxes-row">
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Blog title</h2>
            <div class="m-blog-boxes--shell">
              <ol>
                <li>List solid
                <li>
                  <?php
                  $option = [
                    "cost" => 10
                  ];
                  echo 'BCrypt hash: ' . password_hash('DSkE5n1rLHbey9uJMadBNst8UkNMFj', PASSWORD_BCRYPT, $option);
                  ?>
                </li>
                <li>[1,2,3,4,5,6].reduce(function(accumulator, currentValue, currentIndex, array) { return accumulator +
                  currentValue; },0);</li>
              </ol>
              <code>
                $output = $list->date;<br>
                $final = date('m-d-Y', strtotime($output));<br>
                 $final<br>
                 And<br>
                 $now = time();<br>
                $date = date("m-Y", $now);
              </code>
            </div>
            <div id="triangle-up">r</div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Tincture Ratio</h2>
            <div class="m-blog-boxes--shell">
              <h4 id="ratioType" class="bold-16"></h4>
              <form>
                <input type="number" class="input-med" id="herb1" placeholder="Ounces of Herb">
                <input type="number" class="input-med" id="ratio1" placeholder="Desired Ratio 1 to ?">
                <input type="submit" class="none" id="submit2">
                <input type="reset" class="none" id="reset">
              </form>
              <div id="tinctures"> </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
        </div>
        <div class="m-boxes-row">
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Javascript DOM</h2>
            <div class="m-blog-boxes--shell">
              <div class="box">
                <ol>
                  <li>document.getElementbyId("title");</li>
                  <li>document.getElementsbyClassName('second')</li>
                  <li>document.getElementsByTagName('h1, p, aside');</li>
                  <li>document.images.length Number of images on page</li>
                  <li>document.querySelectorAll("p.intro");</li>
                  <li>document.querySelector("p.intro");selects the first instance</li>
                  <li>var className = document.getElementById("title").className = "blue" <br>
                    How to add a classname by selecting the ID
                  </li>
                  <li>function myFunction() {<br>
                    var x = document.getElementById("myDIV").classList.length;<br>
                    document.getElementById("demo").innerHTML = x;<br>
                    } Number of classes in div</li>
                  <li>document.getElementById("myDIV").classList.add("mystyle", "anotherClass", "thirdClass"); </li>
                  <li>document.getElementById("myDIV").classList.remove("mystyle"); </li>
                </ol>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <!-- box 1 -->
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Javascript</h2>
            <div class="m-blog-boxes--shell">
              <div class="box">
                <ol>
                  <li>document.getElementbyId("title").innerHTML= "get item by ID";</li>
                  <li>document.getElementsbyClassName('second').innerHTML("change text");</li>
                  <li>var selector = document.getElementsByTagName('h1, p, aside');<br>
                    selector[1].innerHTML("Tag selected");
                  </li>
                </ol>
                <dl>
                  <dt>Convert string to number
                  <dd>var one = parseFloat(variable.value)</dd>
                  <dd>Where variable is the value coming from a form. All input data are strings</dd>
                  </dt>
                  <dt>Var
                  <dd>can be reached outside and inside functions</dd>
                  </dt>
                  <dt>Let
                  <dd>Basically the same as var. Block scope</dd>
                  </dt>
                  <dt>const
                  <dd>Cannot be reassigned</dd>
                  </dt>
                </dl>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>

          <!-- box 2 -->
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Javascript</h2>
            <div class="m-blog-boxes--shell">
              <div class="box">
                <p>remember!</p>
                <ol>
                  <li>The get function only gets ("") when it is used as a variable</li>
                  <li>var selector = document.getElementsByTagName('h1')</li>
                  <li>When selecting something it gets the = sign </li>
                  <li>document.getElementbyId("title").innerHTML = "get item by ID";</li>
                  <li>This example finds the element with id="main", and then finds all <p> elements inside "main":
                    <ol>
                      <li>var x = document.getElementById("main");<br>
                        var y = x.getElementsByTagName("p");</li>
                    </ol>
                  </li>
                </ol>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <!-- box3 -->
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Javascript</h2>
            <div class="m-blog-boxes--shell">
              <div class="box">
                <h4>Javascript Events</h4>
                <h5>These are used on functions as well as inline click functions</h5>
                <ol>
                  <li>Click</li>
                  <li>mouseenter</li>
                  <li>mouseleave</li>
                  <li>mousedown</li>
                  <li>mouseup</li>
                  <li>mousemove</li>
                  <li>keydown</li>
                  <li>keyup</li>
                  <li>blur</li>
                  <li>focus</li>
                </ol>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <!-- box 4 -->
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Conversions</h2>
            <div class="m-blog-boxes--shell">
              <div class="box">
                <p>
                  <label>Celsius</label>
                  <input id="inputCelsius" type="number" placeholder="Celsius"
                    oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
                </p>
                <p>Fahrenheit: <span class="form-Output" id="outputFahrenheit"></span></p>
              </div>
              <div class="box">
                <p>
                  <label>Meters 2 Feet</label>
                  <input class="input-med trans" id="inputMeters" type="number" placeholder="Meters"
                    oninput="meterConverter(this.value)" onchange="meterConverter(this.value)">
                </p>
                <p>Response: <span class="form-Output" id="formOutput"></span></p>
                <p>Miles <span class="miles1" id="miles2"></span></p>
              </div>
              <div class="box">
                <p>
                  <label>Grams 2 Ounces</label>
                  <input class="input-med trans" id="inputgrams" type="number" placeholder="Grams"
                    oninput="gramsConverter(this.value)" onchange="gramsConverter(this.value)">
                </p>
                <p>Response: <span class="form-Output" id="ounceOutput"></span></p>
                <p>Response: <span class="form-Output" id="lbOutput"></span></p>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <!-- bocx 5 -->
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Conversions</h2>
            <div class="m-blog-boxes--shell">
              <div class="box">
                <h3>arrays</h3>
                <ol>
                  <li>From an array named words - let longwords = words.<b>filter</b>(word => word.length >6);</li>
                  <li>.map var numbers = [1,4,9] <br>
                    var roots = numbers.map(math.sqrt);<br>
                    roots becomes [1,2,3], numbers is still [1,4,9]
                  </li>
                  <li>items.forEach(function(item) {<br>
                    copy.push(item)}); const items = [] const copy = [] </li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
          <!-- box 6 -->
          <div class="m-blog-boxes">
            <h2 class="m-blog-boxes--title">Mililiters to Ounces</h2>
            <div class="m-blog-boxes--shell">
              <div class="box">
                <div class="input-row">
                  <label for="ml">Mililiters To Convert to Ounces</label>
                  Mililiters: <input type="number" id="ml" oninput="mlToOz(this.value)" onchange="mlToOz(this.value)" />
                  <p class="showOz"> </p>
                </div>
              </div>

              <div class="box">
                <div class="input-row">
                  <label for="ml">Liters To Ounces</label>
                  Liters: <input type="number" id="liter" oninput="lToOz(this.value)" onchange="lToOz(this.value)" />
                  <p id="showLit"> </p>
                </div>
              </div>
              </div>

            <div class="m-blog-boxes--post-number"></div>
          </div>
          <div class="m-blog-boxes">
            <!-- <h2 class="m-blog-boxes--title">Conversions</h2> -->
            <div class="m-blog-boxes--shell">
              <div class="box">
                <h3 id="detailer"></h3>
                <p>1000ml = 34 oz</p>
                <p>800ml = 28oz</p>
                <p>1 gal = 128 oz</p>
                <form>
                  <div class="input-row">
                    <label for="ounces">Number of Ounces To Fill</label>
                    <input type="number" id="ounces" />
                  </div>
                  <div class="input-row">
                    <label for="ratio">Ratio Required 1:</label>
                    <input type="number" id="ratio">
                  </div>
                  <input type="submit" class="none" id="cripes" value="Submit" onclick="myFunction()">
                  <input type="reset" class="none" value="Do Over" id="reset1" onclick="destroy()">
                </form>
                <div class="input-row">
                  <div id="validity"></div>
                  <p>Dilutable Material Amount <span class="bold-14 underline" id="materialAmount"> </span> </p>

                </div>
                <div class="input-row">
                  <p>Dilution Matrix Material(water etc) <span class="bold-14 underline" id="dilutionAmount"> </span>
                  </p>

                </div>

              </div>
            </div>
            <div class="m-blog-boxes--post-number"></div>
          </div>
        </div>
      </div>
      <!-- footer starts here -->
