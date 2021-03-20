<body id="search">
  <main class="l-containers-main">
	<div class="m-boxes-row coloring1">
      <div class="m-boxes-box">
        <h2 class="m-boxes-box--title tooltip swing">Searched Links</h2>
        <div class="m-boxes-box--shell">
          <ul>
            <li><?php echo anchor("http://shiva/", "Home");?></li>
            <?php
            if(isset($searched)):?>
            <?php foreach($searched as $list):?>
            <li class="even">
              <?php echo anchor($list->url, $list->name .' - '. $list->type, array('rel' => "external"));?>
            </li>
            <?php endforeach;
            endif;?>

          </ul>
        </div>
      </div>
  </main>
