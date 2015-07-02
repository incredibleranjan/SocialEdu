<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
       <!-- <meta http-equiv="refresh" content="25">-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>The SocialEdu</title>

        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>vendor/Bootstrap/dist/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>css/index.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>css/admin.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>css/validationEngine.jquery.css"/>
<!--        <link type=text/css" rel="stylesheet" href="/public/css/default.css" />
        <link type=text/css" rel="stylesheet" href="/public/css/component.css" />
        <link type=text/css" rel="stylesheet" href="/public/css/style.css" />-->
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="<?php echo URL; ?>vendor/jQuery/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>vendor/Bootstrap/dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>js/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>js/jquery.validationEngine-en.js"></script>
        
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand dropdown dropdown-toggle" data-toggle="dropdown" >SocialEdu<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile">Profile</a></li>
                    </ul>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="classroom">My Class</a></li>
                        <li><a href="college">My College</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        