<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="anshi.online">
    <meta name="author" content="anshi">

    <title>blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="/littleterm/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/littleterm/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/littleterm/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="/littleterm/css/style.css" rel="stylesheet">
    <link href="/littleterm/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
</div>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo U('index/index');?>">
                <h1>anshi.online</h1>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Top</a></li>
                <li><a href="<?php echo U('index/blog');?>">Blog</a></li>
                <li><a href="index.html">Home</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Section: intro -->
<section id="intro" class="intro">
    <div class="slogan">
        <h2><span class="text_color">BLOG</span> </h2>
        <h4>A website of individuality</h4>
    </div>
    <div class="page-scroll">
        <a href="#about" class="btn btn-circle">
            <i class="fa fa-angle-double-down animated"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->
<section id="about" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2><?php echo ($data["blog_name"]); ?></h2>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.6s">
                        <h5><?php echo ($data["blog_create_time"]); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo ($data["blog_text"]); ?>
    </div>

</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="wow shake" data-wow-delay="0.4s">
                    <div class="page-scroll marginbot-30">
                        <a href="#intro" id="totop" class="btn btn-circle">
                            <i class="fa fa-angle-double-up animated"></i>
                        </a>
                    </div>
                </div>
                <p>&copy; Copyright 2016 -
                    <a style="color:#FFF" href="http://anshi.online/">anshi.online</a>
                    All rights reserved. </p>
            </div>
        </div>
    </div>
</footer>

<!-- Core JavaScript Files -->
<script src="/littleterm/js/jquery.min.js"></script>
<script src="/littleterm/js/bootstrap.min.js"></script>
<script src="/littleterm/js/jquery.easing.min.js"></script>
<script src="/littleterm/js/jquery.scrollTo.js"></script>
<script src="/littleterm/js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/littleterm/js/custom.js"></script>

<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fac45a0f68a119fbe4d1c4c3ac3044dbd' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>

</html>