<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $title ; ?>
        </title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>" media="screen">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <script src="https://use.fontawesome.com/04d9aa23c9.js"></script>

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
    echo meta();
    ?>
    </head>
<body id="grid">

<header>
  Header
</header>
<main>

   <div class="title">Title One of many</div>
        <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, iste? Obcaecati corrupti voluptatem minima illum ullam nisi maiores et consectetur fugiat suscipit soluta asperiores sunt, necessitatibus eius. Ullam architecto esse eveniet id, aliquid odio distinctio exercitationem deserunt quis totam veritatis, incidunt praesentium doloremque provident corrupti, repellat nemo nihil quas consectetur laboriosam necessitatibus. Optio asperiores itaque molestiae dolor blanditiis error, voluptatum corporis, praesentium velit dolorum nostrum amet dolore sequi veniam consequatur sint! Quis, quo. Eveniet, et nam? Quam modi vitae eveniet aliquam tenetur ad ullam unde ipsam, similique vel, in sint dolorem eum necessitatibus? Deserunt aperiam neque iusto! Officiis, dolorum! Assumenda!</p>
        </div>
  <div class="title">Title Two</div>
  <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, iste? Obcaecati corrupti voluptatem minima illum ullam nisi maiores et consectetur fugiat suscipit soluta asperiores sunt, necessitatibus eius. Ullam architecto esse eveniet id, aliquid odio distinctio exercitationem deserunt quis totam veritatis, incidunt praesentium doloremque provident corrupti, repellat nemo nihil quas consectetur laboriosam necessitatibus. Optio asperiores itaque molestiae dolor blanditiis error, voluptatum corporis, praesentium velit dolorum nostrum amet dolore sequi veniam consequatur sint! Quis, quo. Eveniet, et nam? Quam modi vitae eveniet aliquam tenetur ad ullam unde ipsam, similique vel, in sint dolorem eum necessitatibus? Deserunt aperiam neque iusto! Officiis, dolorum! Assumenda!</p>
  </div>

</main>
<aside>
  Sidebar
        <ul class="menu-flex">
                <li class="hova home"><?php echo anchor('pages', 'Home', array('class' => 'icon fa-home'));?></li>
                <li class="hova"><?php echo anchor('blogs', 'Blog');?></li>
                <li class="hova"><?php echo anchor('grid', 'Grid');?></li>
        </ul>
</aside>
<footer>
  Footer
</footer>

</body>
</html>