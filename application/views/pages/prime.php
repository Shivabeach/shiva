<body>

<main class="l-containers-main">
	<button id="backtotop">Back To top</button>
	<div class="l-headers-main">
		<div class="l-headers-main--title">
			<h1 class="ptext"><?=$heading;?></h1>
		</div>
	</div><!-- end of header -->

	<?php $this->load->view("menus/top-menu.php");?>

	<div class="m-boxes-row">
		<div class="m-boxes-box">
			<h2 class="m-boxes-box--title tooltip swing" data-title="Most used">Priority Links</h2>
			<div class="m-boxes-box--shell">

				<ul>
				<?php foreach($prior as $list):?>

					<li>
						<?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-exclamation', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
					</li>
        <?php endforeach;?>
				</ul>
			</div>

		</div>


			<div class="m-boxes-box">
				<h2 class="m-boxes-box--title">Priority Links</h2>
				<div class="m-boxes-box--shell">
					<article>
						<div class="display-time bold-16"><?php
							$ts = now("America/Detroit");
							echo unix_to_human($ts); ?> PHP
						</div>
					</article>
					<article>
						<p><?php echo validation_errors(); ?></p>

						<?php
							$args = [
								'id' => 'ajax'
							];
							echo form_open("forms/add_link", $args);
							$arg = [
								'id'					=> 'url',
								"placeholder" => "Add Link",
								"name"        => "url",
								"style"       => "width: 70%",
								"class" => "bold-2"
							];
							echo form_input($arg);
							$args1 = [
								"name"        => "name",
								"placeholder" => "name",
								"style"       => "width: 70%",
								"class" => "bold-2"
								];
							echo form_input($args1);
							$args2 = [
								"name"        => "genre",
								"placeholder" => "Genre",
								"style"       => "width: 70%",
								"class" => "bold-2"
							];
							echo form_input($args2);
							$args4 = [
								"name"        => "counter",
								"placeholder" => "Counter",
								"style"       => "width: 70%",
								"class" => "bold-2"
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
								"help" 		=> "Help",
								"health"  => "Health"
							];
							ksort($args3);
							echo form_dropdown("type", $args3);

							echo form_submit("Submit", "Submits");
							echo form_reset("reset", "Reset");
							echo form_close();
							//TODO: Add family
						?>
							
						<div>
							<ul>
								<li class="line"><a href="#car">Car</a></li>
								<li class="line"><a href="#interests">Interests</a></li>
								<li class="line"><a href="#news">News</a></li>
								<li class="line"><a href="#utility">Utilitys</a></li>
								<li class="line"><a href="#herbs">Herbs</a></li>
								<li class="line"><a href="#css">CSS</a></li>
								<li class="line"><a href="#code">Code Help</a></li>
								<li class="line"><a href="#health">Health</a></li>
							</ul>
						</div>
						<div id="display"></div>
						<p id="show"></p>
						<p class="classes"></p>
						<p class="boxy"></p>
					</article>
				</div>
			</div>
			<div class="m-boxes-box">
				<h2 class="m-boxes-box--title color-1 tooltip swing" data-title="Useful editors">Editors(Links)</h2>
				<div class="m-boxes-box--shell">
					<?php
		        foreach ($links as $list):?>
		        <li>
		            <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' =>'external')), nbs(3);?><span class="count"><?php echo $list->counter;?></span>
		        </li>
		        <?php endforeach;?>
				</div>
			</div>
		</div>

	<div class="m-boxes-row">
		<div class="m-boxes-box">
			<h2 class="m-boxes-box--title tooltip fade" data-title="Music stations">Music(Music)</h2>
			<div class="m-boxes-box--shell">
        <?php
          foreach ($music as $list):?>
            <li>
            <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-volume-up ', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
          	</li>
        <?php endforeach;?>
			</div>
		</div>
		<div class="m-boxes-box">
		<h2 class="m-boxes-box--title tooltip fade" data-title="Tutorials">Tutorials(Flex)</h2>
			<div class="m-boxes-box--shell">
			<?php
        foreach ($flex as $list):?>
        <li class="m-lists-musical">
            <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code ', 'rel' =>'external')), nbs(3);?><span class="count"><?php echo $list->counter;?></span>
        </li>
        <?php endforeach;?>
			</div>

		</div>

		<div class="m-boxes-box">
		<h2 class="m-boxes-box--title">Design(code)</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($code as $list):?>
            <li class="m-lists-musical">
             <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-info-circle ', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span> </li>
          <?php endforeach;?>
			</div>
		</div>
	</div>
	<div class="m-boxes-row">
		<div class="m-boxes-box">
		<h2 id="car" class="m-boxes-box--title">Mustang(Car)</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($car as $list):?>
            <li class="m-lists-musical">
              <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-car', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
            </li>
          <?php endforeach;?>
			</div>
		</div>

		<div class="m-boxes-box">
			<h2 id="interests" class="m-boxes-box--title">Interests(inter)</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($inter as $list):?>
            <li class="m-lists-musical">
              <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-heart', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
            </li>
          <?php endforeach;?>
			</div>
		</div>
		<div class="m-boxes-box">
		<h2 id="news" class="m-boxes-box--title">News(news)</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($news as $list):?>
            <li class="m-lists-musical">
              <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-newspaper-o ', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
            </li>
          <?php endforeach;?>
			</div>

		</div>
	</div>

	<div class="m-boxes-row">
		<div class="m-boxes-box">
		<h2 id="utility" class="m-boxes-box--title">Utilities(utility)</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($utility as $list):?>
            <li class="m-lists-musical">
              <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-info', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
            </li>
          <?php endforeach;?>
			</div>
		</div>

		<div class="m-boxes-box">
			<h2 id="herbs" class="m-boxes-box--title">Herbs(herbs)</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($herbs as $list):?>
            <li class="m-lists-musical">
              <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-leaf', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
            </li>
          <?php endforeach;?>
			</div>
		</div>
		<div class="m-boxes-box">
		<h2 id="css" class="m-boxes-box--title">CSS(css)</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($color as $list):?>
            <li class="m-lists-musical">
          	  <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-css3', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
          	</li>
          <?php endforeach;?>
			</div>

		</div>
		<div class="m-boxes-row">
		<div class="m-boxes-box">
				<h2 id="code" class="m-boxes-box--title color-1 tooltip swing" data-title="Useful editors">Code help</h2>
				<div class="m-boxes-box--shell">
					<?php
		        foreach ($help as $list):?>
		        <li class="m-lists-musical">
		            <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' =>'external')), nbs(3);?><span class="count"><?php echo $list->counter;?></span>
		        </li>
		        <?php endforeach;?>
				</div>
			</div>
			<div class="m-boxes-box">
				<h2 id="health" class="m-boxes-box--title color-1">Health</h2>
				<div class="m-boxes-box--shell">
					<?php
		        foreach ($health as $list):?>
		        <li class="m-lists-musical">
		            <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' =>'external')), nbs(3);?><span class="count"><?php echo $list->counter;?></span>
		        </li>
		        <?php endforeach;?>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- end of boxes row -->
