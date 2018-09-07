<body class="example">
<button id="backtotop">Back To Top</button>
	<main class="l-containers-blog">

		<div class="l-headers-blog">
			<div class="l-headers-blog--title">
				<h1 class="ptext"><?=$title;?></h1>
			</div>
		</div>

		<!-- <div class="l-containers-blog--left">
			<div class="l-containers-blog--left--shell">
				<p>Make a definitions page for van-horn.us</p>

			</div>

		</div> -->
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
								<p class="boxy"></p>
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
						<h2 class="m-blog-boxes--title">Javascript</h2>
							<div class="m-blog-boxes--shell">
								<ol>
									<li>console.log()</li>
									<li>typeof()</li>
									<li>for peace</li>
									<li>for peace</li>
									<li>for peace</li>
								</ol>
							</div>
							<div class="m-blog-boxes--post-number"></div>
					</div>
					<div class="m-blog-boxes">
						<h2 class="m-blog-boxes--title">Blog title</h2>
							<div class="m-blog-boxes--shell">
								<ol>
									<li>List solid
										<ol>
											<li>lists</li>
											<li>lists</li>
										</ol>
									</li>
									<li>More solid
										<ol>
											<li>lists</li>
											<li>lists</li>
										</ol>
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
										<li></li>
									</ol>
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
								<div class="box">Reserved</div>
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
					<div class="m-blog-boxes">
						<h2 class="m-blog-boxes--title">Conversions</h2>
							<div class="m-blog-boxes--shell">
								<div class="box">Reserved</div>
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

