<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register Online</title>
  <link href="<?php echo base_url().'asset/oxygen/';?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'asset/oxygen/';?>css/animate.min.css" rel="stylesheet"> 
  <link href="<?php echo base_url().'asset/oxygen/';?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'asset/oxygen/';?>css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url().'asset/oxygen/';?>css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo base_url().'asset/oxygen/';?>css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url().'asset/oxygen/';?>css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='<?php echo base_url().'asset/oxygen/';?>css/fontgooglecss' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url().'asset/oxygen/';?>images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
      <?php if(!empty($slide)){}else{ ?>
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo base_url().'asset/oxygen/';?>images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Register online meetings</span></h1>
            <p class="animated fadeInRightBig">ลงทะเบียนประชุมวิชาการออนไลน์</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(<?php echo base_url().'asset/oxygen/';?>images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Quality of Maharaj Nakorn Chiang Mai Hospital.</span></h1>
            <p class="animated fadeInRightBig">งานพัฒนาคุณภาพโรงพยาบาลมหาราชนครเชียงใหม่</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(<?php echo base_url().'asset/oxygen/';?>images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Register online System</span></h1>
            <p class="animated fadeInRightBig">ระบบลงทะเบียนออนไลน์</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div>
      <?php } ?><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="<?php echo base_url().'asset/oxygen/';?>images/logo_1.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"> <?php echo anchor('regis_online','Home'); ?></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"> <?php echo anchor('regis_online/login','Login'); ?></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->