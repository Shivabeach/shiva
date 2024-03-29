<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        <?php echo $title ; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $meta = array(
        array(
                'name'    => 'robots',
                'content' => 'no-cache'
        ),
        array(
                'name'    => 'description',
                'content' => 'Links'
        ),
        array(
                'name'    => 'keywords',
                'content' => 'Links'
        ),
        array(
                'name'    => 'author',
                'content' => 'Brad VanHorn'
        ),
        array(
                'name'    => 'generator',
                'content' => 'Sublime-Text'
        ),
        array(
                'name' => "hreflang",
                'content' => "en-us"
        )
    );
    echo meta($meta);
    ?>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main-dist.css');?>" media="screen">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/redmond/jquery-ui.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <script src="https://use.fontawesome.com/04d9aa23c9.js"></script> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script>
    /*to prevent Firefox FOUC, this must be here*/
    let FF_FOUC_FIX;
  </script>
</head>
