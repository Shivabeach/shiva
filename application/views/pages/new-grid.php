<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>
				<?php echo $title ;?>
			</title>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/new-grid.css');?>" media="screen">
      <meta name="viewport" content="width=device-width, initial-scale=1" >
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta property="og:title" content="" />
      <meta property="og:description" content="" />

    <?php
			$meta = array(
        array(
        'name'    => 'robots',
        'content' => 'no-cache'
        ),
        array(
        'name'    => 'description',
        'content' => ''
        ),
        array(
        'name'    => 'keywords',
        'content' => ''
        ),
        array(
        'name'    => 'author',
        'content' => 'Brad VanHorn'
        ),
        array(
        'name'    => 'generator',
        'content' => 'Sublime-Text'
        )
			);
			echo meta();?>
    </head>
  <body>
    <div class="grid">
      <div class="header">fine as frogs</div>
      <div class="content">Content</div>
      <div class="sidebar">sidebar
        <div>
          <ul class="main-menu">
            <li><?php echo anchor('pages', 'Home');?></li>
            <li><?php echo anchor('blogs', 'Blog');?></li>
            <li><?php echo anchor('grid', 'Grid');?></li>
            <li><?php echo anchor('grid/newgrid', 'New Grid');?></li>
          </ul>
        </div>
      </div>
      <div class="footer">footer</div>
    </div>
  </body>

</html>