<body>

<main class="l-containers-main">
	<button id="backtotop">Back To top</button>
	<div class="l-headers-main">
		<div class="l-headers-main--title">
			<h1><?=$heading;?></h1>
		</div>
	</div><!-- end of header -->
	<?php $this->load->view("menus/top-menu.php");?>
	<div class="l-containers-main--left">
		<div class="l-containers-main--left--shell">
			<article class="left-box-prime">
				<h3>Priority Links</h3>
				<?php foreach($prior as $list):?>
					<ul>
						<li>
						<?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
						</li>
                            <?php endforeach;?>
					</ul>			
			</article>

		</div>
	</div>	<!-- end of left side container -->
	<div class="l-containers-main--middle">
		<div class="l-containers-main--middle--shell">
			<article>
				<p>Every container has a shell. Everything inside the container is inside the shell.</p>

				<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			</article>
			<article>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, in.</p>
			</article>
			<article>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil reprehenderit mollitia sint facere eaque quis ratione iure corrupti consectetur veniam?</p>
			</article>

			<article>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi rerum earum itaque recusandae impedit nostrum veniam excepturi perferendis quidem quam magni quasi quae, quibusdam nam voluptatum eveniet dignissimos dolorum, architecto neque accusamus aspernatur esse cum eum! Assumenda saepe placeat veniam numquam expedita obcaecati reiciendis ipsam pariatur, doloremque possimus sunt omnis!</p>
			</article>
		</div>
	</div>	<!-- end of middle container -->
	<div class="m-boxes-row">
		<div class="m-boxes-box">
			<h2 class="m-boxes-box--title">Bosticks</h2>
			<div class="m-boxes-box--shell">
				<ul>
					<li><?php echo anchor('welcome', 'Home');?></li>
					<li><?php echo anchor('blogs', 'Blog');?></li>
				</ul>
			</div>
		</div>
		<div class="m-boxes-box">
		<h2 class="m-boxes-box--title">Reeds</h2>
			<div class="m-boxes-box--shell">
			<div class="m-boxes-box--title">Title</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati assumenda, corrupti quod consequuntur,  </p>
			</div>

		</div>

		<div class="m-boxes-box">
		<h2 class="m-boxes-box--title">VanHorn</h2>
			<div class="m-boxes-box--shell">
				<p>This is within the shell</p>
				<p>this is the test</p>
			</div>
		</div>
	</div>
	<div class="m-boxes-row">
		<div class="m-boxes-box">
		<h2 class="m-boxes-box--title">Hunts</h2>
			<div class="m-boxes-box--shell">
				<p>This is within the shell</p>
				<p>this is the test</p>
				<p><a href="user_guide/">User Guide</a>.</p>
			</div>
		</div>

		<div class="m-boxes-box">
			<h2 class="m-boxes-box--title">Bosticks</h2>
			<div class="m-boxes-box--shell">
				<p>This is within the shell</p>
				<p>this is the test</p>
			</div>
		</div>
		<div class="m-boxes-box">
		<h2 class="m-boxes-box--title">Reeds</h2>
			<div class="m-boxes-box--shell">
				<p>This is within the shell</p>
				<p>this is the test</p>
			</div>

		</div>
	</div>
	<!-- end of boxes row -->




