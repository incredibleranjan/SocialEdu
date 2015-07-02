<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>vendor/Bootstrap/dist/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>css/admin.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>css/index.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>css/validationEngine.jquery.css"/>
        <!--        <link type=text/css" rel="stylesheet" href="/public/css/default.css" />
                <link type=text/css" rel="stylesheet" href="/public/css/component.css" />
                <link type=text/css" rel="stylesheet" href="/public/css/style.css" />-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <title>Admin Dashboard</title>
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="admin.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo URL; ?>vendor/jQuery/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>vendor/Bootstrap/dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>js/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>js/jquery.validationEngine-en.js"></script>

    </head>


    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">The SocialEdu</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="admin">My Dashboard</a></li>
                        <li><a class="dropdown dropdown-toggle" data-toggle="dropdown" >My College<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/adminmycollege">Add News</a></li>
                                <li><a href="/adminmycollege/getFeeds">Delete News</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown dropdown-toggle" data-toggle="dropdown" >My Class<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/adminmyclass">Add Links</a></li>
                                <li><a href="/admindelclass">Remove Links</a></li>
                                <li><a href="/adminvids">Add Vids</a></li>
                                <li><a href="/admindelvid">Remove Vids</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown dropdown-toggle" data-toggle="dropdown" >Users<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/adminadd_users">Add Users</a></li>
                                <li><a href="/admindelusers">Remove Users</a></li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login">Signout</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>

                </div>
            </div>
        </div>

