		<div class="l-footers-blog">
			<div class="l-footers-blog--shell">
				<div class="m-boxes-row">
					<div class="m-blog-boxes">
						<div class="m-blog-boxes--shell cul">
							<div class="wrapper"></div>
							<h1 id="title" class="red">Password</h1>
								<div class="m-blog-boxes--shell">
									<h3 id="passwordDisplay" class="password-display"></h3>
									<form id="passwordGeneratorForm" class="form">
										<label for="characterAmountNumber"> Number of Characters</label>
										<input type="range" min="1" max="50" value="10" id="characterAmountRange">
										<input type="number" min="1" max="50" value="10" id="characterAmountNumber">
										<p>
										<label for="includeUppercase" class="inl">Include Uppercase</label>
										<input type="checkbox" id="includeUppercase" checked>
									</p>
									<p>
										<label for="includeNumbers" class="inl">Include Numbers</label>
										<input type="checkbox" id="includeNumbers" checked>
									</p>
									<p>
										<label for="includeSymbols" class="inl">Include Symbols</label>
										<input type="checkbox" id="includeSymbols" checked>
									</p>
									<button class="gen" type="submit">Generate</button>
									</form>




								</div>
							</div>
						</div>

					<div class="m-blog-boxes">
						<h2 class="round">Dancer</h2>
						<div class="m-blog-boxes--shell">
							<div class="box box2">
						// Fetching HTML Elements in Variables by ID.<br>
							<p>var x = document.getElementById("form_sample");<br>
							var createform = document.createElement('form'); // Create New Element Form<br>
							createform.setAttribute("action", ""); // Setting Action Attribute on Form<br>
							createform.setAttribute("method", "post"); // Setting Method Attribute on Form<br>
							x.appendChild(createform);</p>

							<p>var heading = document.createElement('h2'); // Heading of Form<br>
							heading.innerHTML = "Contact Form ";<br>
							createform.appendChild(heading);</p>

							<p>var inputelement = document.createElement('input'); // Create Input Field for Name<br>
							inputelement.setAttribute("type", "text");<br>
							inputelement.setAttribute("name", "dname");<br>
							createform.appendChild(inputelement);</p>
							</div>
						</div>
						<input type="checkbox" class="subscribe">
						<div id="mess"></div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?php echo base_url('assets/js/detail.min.js');?>" defer></script>
	<script src="<?php echo base_url('assets/js/trial.min.js');?>" defer></script>
	<script src="<?php echo base_url('assets/js/password.min.js');?>" defer></script>


</body>
</html>
