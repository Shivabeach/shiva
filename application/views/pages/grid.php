<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title><?php echo $title ;?>
            </title>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.min.css');?>" media="screen">
      <link rel="stylesheet"ref="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">
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

        echo meta();
        ?>
    </head>
<body id="grid">
    <div class="container">
        <header>
            Header
        </header>
        <main>
        <?php $describe = "One Of many";?>
            <div class="title"><?php echo ${describe};?></div>
                <div class="post">
                    <p>.grid <br>
                                display:grid <br>
                                grid-template-columns: 1fr 1fr <br>
                                grid-template-rows: 1fr 1fr 1fr 1fr<br>
                                grid-template-areas: <br>
                                "title title" fullrow of title <br>
                                "header header" <br>
                                "content content" NOTE content body 1st then sidebar. This makes up one row <br>
                                "sidebar sidebar" <br>
                                "footer footer" <br>
                                The above can be moved around any way you want<br>



                    </p>
                </div>
            <div class="title">Title Two</div>
            <div class="post">

                    <p> 1fr is one column <br>
                            display: grid <br>
                            grid-template-columns: 1fr 1fr is 2 columns <br>
                            grid-template-columns: auto 1fr makes the first column size to the content <br>
                            grid-template-columns:
                    </p>
                    <p>
                            .title
                                grid-column 1 / 3 is full width. 2 columns = 3 lines. hence 1 / 3 <br>
                                grid-column span 1 wwould just span one column <br>
                                <br>
                                grid-column-end: span 1 would be one column <br>
                                grid-row-end: span 2 that spans 2 rows. <br>
                                <br>
                                grid-area: title This is the naming method <br>

                            .title <br>
                                grid-area: title <br>

                            .header <br>
                                grid-area: header <br>

                            .sidebar <br>
                                grid-area: sidebar <br>

                            .content <br>
                                grid-area: content <br>

                            .footer <br>
                                grid-area: footer <br>

                            See above

                    </p>
        </div>

        <div class="title">Whitespace</div>
        <div class="post">
            <p>
            grid-template-areas: with wrapper<br>
                ". title title . " full row of title <br>
                ". header header . " <br>
                ". content sidebar . " NOTE content body 1st then sidebar. This makes up one row <br>
                ". footer footer . " <br>
            </p>
            <p>
                justify-self is horizontal <br>
                align-self is vertical <br>
                justify-self: start | end | center | stretch;<br>
                align-self: start | end | center | stretch; <br>
                justify-items can be used to determine all items in a grid container <br>
                To align all the items in a grid, this behavior can also be set on the grid container via the align-items property.
                <br>
            </p>
            <p>
                justify-content: start | end | center | stretch | space-around | space-between | space-evenly;	This property aligns the grid along the row axis <br>
                align-content: start | end | center | stretch | space-around | space-between | space-evenly; This property aligns the grid along the column axis
            </p>
        </div>
        <div class="title">Nested</div>

        <div class="post">
            <p>	.content <br>
                        grid-area: content <br>
                        display:	grid <br>

            </p>
            </div>
            <div class="title">Whitespace</div>
            <div class="post">
                <p>
                    @media screen and (min-width: 700px) desktop media call use last<br>
                    .grid <br>
                                display:grid <br>
                                grid-template-columns: 1fr 500px 500px 1fr <br>
                                grid-template-rows: 1fr 1fr 1fr 1fr<br>
                                grid-template-areas: <br>
                                "title title" fullrow of title <br>
                                "header header" <br>
                                "content sidebar" NOTE content body 1st then sidebar. This makes up one row <br>
                                "footer footer" <br>
                                The above can be moved around any way you want<br>

                </p>

            </div>


        </main>
        <aside>
            <div class="sidebar">Sidebar</div>
            <div class="menu">
                <ul>
                    <li><?php echo anchor('pages', 'Home');?></li>
                    <li><?php echo anchor('blogs', 'Blog'); ?></li>
                    <li><?php echo anchor('grid', 'Grid'); ?></li>
                    <li><?php echo anchor('grid/newgrid', 'New Grid');?></li>
                    <li><a href="http://bare/" rel="external">Bare Grid</a></li>
                </ul>
            </div>
            <div class="nukem">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia quibusdam sint laudantium odit eius, sed necessitatibus blanditiis nulla saepe earum.</p>
            </div>
        </aside>
        <footer>
            Footer
        </footer>
    </div>
</body>
</html>
