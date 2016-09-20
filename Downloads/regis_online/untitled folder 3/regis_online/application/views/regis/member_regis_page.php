<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Register Online</title>
        <link href="<?php echo base_url() . 'asset/oxygen/'; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'asset/oxygen/'; ?>css/animate.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url() . 'asset/oxygen/'; ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'asset/oxygen/'; ?>css/lightbox.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'asset/oxygen/'; ?>css/main.css" rel="stylesheet">
        <link id="css-preset" href="<?php echo base_url() . 'asset/oxygen/'; ?>css/presets/preset1.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'asset/oxygen/'; ?>css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <link href='<?php echo base_url() . 'asset/oxygen/'; ?>css/fontgooglecss' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?php echo base_url() . 'asset/oxygen/'; ?>images/favicon.ico">
    </head><!--/head-->

    <body>

        <!--.preloader-->
        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
        <!--/.preloader-->

        <header id="home">

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
                            <h1><img class="img-responsive" src="<?php echo base_url() . 'asset/oxygen/'; ?>images/logo_1.png" alt="logo"></h1>
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll active"><?php echo anchor('regis_online', 'Home') ?></li>
                            <li class="scroll"><?php echo anchor('regis_online', 'Service') ?></a></li> 
                            <li class="scroll"><a href="#contact">Contact</a></li>       
                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header><!--/#home-->
        <section id="contact">
            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>กรอกข้อมูลสำหรับเข้าร่วมประชุม  <?php echo $topic->topic; ?></h2>
                            <p><?php echo $topic->detail; ?></p>
                          
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php echo form_open('regis_online/insertRegistration', 'id="main-contact-form"  method="post" name="contact-form" '); ?>
                                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                              <input type="hidden" name="topic_id" value="<?php echo $topic->id; ?>" >
                                            <input type="text" name="prename" class="form-control" placeholder="คำนำหน้า" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="ชื่อตัว" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control" placeholder="ชื่อสกุล" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="work" class="form-control" placeholder="งาน/ภาควิชา" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="department" class="form-control" placeholder="ฝ่าย/หน่วยงาน" required>
                                </div>
                                <div class="form-group">
                                    <select id="profession" name="profession" class="form-control" required>
                                        <option value="">Choose.. วิชาชีพ</option>  
                                        <?php foreach ($p as $value) { ?>
                                            <option value="<?php echo $value->id; ?>"><?php echo $value->profession; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="idx" class="form-control" placeholder="เลขประชาชน" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="licenses" class="form-control" placeholder="เลขที่ใบอนุญาตประกอบวิชาชีพ" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="hotname" class="form-control" placeholder="ชื่อโรงพยาบาล" required>
                                </div>

                                <div class="form-group">
                                    <select id="attendance" name="attendance" class="form-control" required>
                                        <option value="">Choose.. สถานะการเข้าร่วมประชุม</option>
                                        <?php foreach ($a as $value) { ?>
                                            <option value="<?php echo $value->id; ?>"><?php echo $value->attendance; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">

                                    <select id="payment" name="payment" class="form-control" required>
                                        <option value="">Choose.. payment</option>   
                                        <option value="yes">ชำระเงินแล้ว</option>
                                        <option value="no">ค้างชำระเงิน</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="fa fa-check btn-sm btn-success">Send Now</button>
                                </div>
                                </form>   
                            </div>

                        </div>
                    </div>
                </div>
            </div>        
        </section><!--/#contact-->
        <footer id="footer">
            <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="container text-center">
                    <div class="footer-logo">
                        <a href="#"><img class="img-responsive" src="<?php echo base_url() . 'asset/oxygen/'; ?>images/logo_1.png" alt=""></a>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; 2016.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="pull-right">งานพัฒนาคุณภาพโรงพยาบาลมหาราชนครเชียงใหม่ <a href="http://www.med.cmu.ac.th/hospital/ha/HA/index.html">Quality of Maharaj Nakorn Chiang Mai Hospital.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/mousescroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/smoothscroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/jquery.countTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'asset/oxygen/'; ?>js/main.js"></script>

    </body>
</html>