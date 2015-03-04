<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/foundation.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/normalize.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/font-awesome.min.css');?>">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/styles.css');?>">
</head>
<body>
    <!-- START HEADER -->
    <!--
    <div class="header row">
        <div class="large-8 large-offset-2 medium-10 medium-offset-1 columns">
            <h1><strong>Title</strong></h1>
        </div>
    </div>
    -->
    <div class="row top-bar">
        <div class="row">
            <div class="columns large-12">
            <div class="columns large-4 large-offset-2 medium-6 small-6">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo site_url('img/know-rh.svg'); ?>" id="title" style="height:40px; margin-top:20px"/>
                </a>
            </div>
            <div class="columns large-4 large-offset-2 small-6 medium-4" id="icons">
                <h1></h1>
                <a><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a><i class="fa fa-instagram fa-2x"></i></a>
            </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->