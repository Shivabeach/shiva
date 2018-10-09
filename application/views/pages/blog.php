<body class="example">
	
<button id="backtotop">Back To Top</button>
	<main class="l-containers-blog">

		<div class="l-headers-blog">
			<div class="l-headers-blog--title">
				<h1 class="ptext"><?=$title;?></h1>
			</div>
		</div>
		<!-- Menu -->
		<?php $this->load->view("menus/top-menu.php");?>
		<div class="l-containers-blog--middle">
			<div class="l-containers-blog--middle--shell">
				<div class="m-boxes-row">
					<div class="m-blog-boxes">
						<div class="m-blog-boxes--shell">
							<h2 class="m-blog-boxes--title">Blog title</h2>
							<div class="m-blog-boxes--shell">
								<p>Make a definitions page for van-horn.us</p>
								<div><button id="counted" onclick="countMe()">Click</button></div>
								<p id="showCount"></p>
								
								
							</div>

						</div>
						<div class="m-blog-boxes--post-number"></div>
					</div>
					<div class="m-blog-boxes">
						<h2 class="m-blog-boxes--title">Blog title</h2>
							<div class="m-blog-boxes--shell">
								<p><code>h2::before</code>
									<code>counter-increment: section </code>
									<code>content: "No. " counter(section) ": "</code>
								</p>
								<p><code>Body</code><br>
									<code>counter-reset: section</code>
								</p>
							</div>
							<div class="m-blog-boxes--post-number"></div>
					</div>
					<div class="m-blog-boxes">
						<h2 class="m-blog-boxes--title">Javascript Items</h2>
							<div class="m-blog-boxes--shell">
								<ol>
									<li class="numBoxes"></li>
									<li id="numOfLi"></li>
									<li id="demo"></li>
									<li id="boxer" class="removes" ></li>
									<li>for peace</li>
								</ol>
								<!-- change text is a function in trial.js -->
								<h1 onclick="changeText(this)">Click on this text!</h1>
							</div>
							<div class="m-blog-boxes--post-number"></div>
					</div>
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
								</ol>

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
					<div class="m-blog-boxes">
						<h2 class="m-blog-boxes--title">Javascript</h2>
							<div class="m-blog-boxes--shell">
								<div class="box">
									<h4>Javascript Events</h4>
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
					<div class="m-blog-boxes">
						<h2 class="m-blog-boxes--title">Conversions</h2>
							<div class="m-blog-boxes--shell">
								<div class="box">
									<p>
									  <label>Celsius</label>
									  <input id="inputCelsius" type="number" placeholder="Celsius" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
									</p>
									<p>Fahrenheit: <span id="outputFahrenheit"></span></p>
								</div>
							</div>
							<div class="m-blog-boxes--post-number"></div>
					</div>
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
					<div class="m-blog-boxes">
						<h2 class="m-blog-boxes--title">Conversions</h2>
							<div class="m-blog-boxes--shell">
								<div class="box">Reserved</div>
							</div>
							<div class="m-blog-boxes--post-number"></div>
					</div>

				</div>
			</div>
		</div>
		
		<!-- footer starts here -->

