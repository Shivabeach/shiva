<body>

<main class="l-containers-main">
	<button id="backtotop">Back To top</button>
	<div class="l-headers-main">
		<div class="l-headers-main--title">
			<h1><?=$heading;?></h1>
		</div>
	</div><!-- end of header -->

	<?php $this->load->view("menus/top-menu.php");?>

	<div class="m-boxes-row">
		<div class="m-boxes-box">
			<h2 class="m-boxes-box--title">Priority Links</h2>
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
							<div><?php
							$ts = now("America/Detroit");
							echo unix_to_human($ts); ?></div>
						</article>
						<article>
							<div><?php echo unix_to_human(1507245111);?></div>
						</article>
						<p>fix border shadow</p>
				</div>
			</div>
			<div class="m-boxes-box">
				<h2 class="m-boxes-box--title">Editors</h2>
				<div class="m-boxes-box--shell">
					<?php
		        foreach ($links as $list):?>
		        <li class="m-lists-musical">
		            <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-code-fork', 'rel' =>'external')), nbs(3);?><span class="count"><?php echo $list->counter;?></span>
		        </li>
		        <?php endforeach;?>
				</div>
			</div>
		</div>

	<div class="m-boxes-row">
		<div class="m-boxes-box">
			<h2 class="m-boxes-box--title">Music</h2>
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
		<h2 class="m-boxes-box--title">Tutorials</h2>
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
		<h2 class="m-boxes-box--title">Design</h2>
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
		<h2 class="m-boxes-box--title">Mustang</h2>
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
			<h2 class="m-boxes-box--title">Interests</h2>
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
		<h2 class="m-boxes-box--title">News</h2>
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
		<h2 class="m-boxes-box--title">Utilities</h2>
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
			<h2 class="m-boxes-box--title">Herbs</h2>
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
		<h2 class="m-boxes-box--title">CSS</h2>
			<div class="m-boxes-box--shell">
				<?php
          foreach ($color as $list):?>
            <li class="m-lists-musical">
          	  <?php echo anchor($list->url, $list->name .' - '. $list->genre, array('id' => $list->id, 'class' => 'update icon fa-css3', 'rel' => "external")),nbs(3);?><span class="count"><?php echo $list->counter;?></span>
          	</li>
          <?php endforeach;?>
			</div>

		</div>
	</div>
	<!-- end of boxes row -->





