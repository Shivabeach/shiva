<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $title ; ?>
        </title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>" media="screen">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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
