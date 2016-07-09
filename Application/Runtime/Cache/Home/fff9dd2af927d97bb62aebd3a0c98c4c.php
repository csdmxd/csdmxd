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







	<link href="/littleterm/css/style2.css" type="text/css" rel="stylesheet" media="all">
	<!--web-font-->
	<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!--//web-font-->
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Showy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="http://ajax.useso.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="/littleterm/js/jquery.min.js"></script>
	<script src="/littleterm/js/modernizr.custom.53451.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="/littleterm/js/move-top.js"></script>
	<script type="text/javascript" src="/littleterm/js/easing.js"></script>
	<script type="text/javascript" src="/littleterm/js/modernizr.custom.53451.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>






</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->

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
    </section>
	<!-- /Section: intro -->







	<div class="banner">
		<div class="container">
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="fav-app">
					<h3><?php echo ($vo["blog_name"]); ?></h3>
					<h6><?php echo ($vo["blog_create_time"]); ?></h6>
					<div class="sngl-img">
						<a href="http://localhost/littleterm/index.php/Home/index/newsblog/id/<?php echo ($vo["blog_id"]); ?>"> <img src="/littleterm/images/blog_<?php echo ($vo["blog_id"]); ?>.jpg" class="img-responsive zoom-img" alt=""/> </a>
					</div>
					<p><?php echo ($vo["blog_abstract"]); ?>  </p>
					<div class="read-more">
						<a href="http://localhost/littleterm/index.php/Home/index/newsblog/id/<?php echo ($vo["blog_id"]); ?>"><span>Read More </span></a>
					</div>
				</div><?php endforeach; endif; ?>





	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
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