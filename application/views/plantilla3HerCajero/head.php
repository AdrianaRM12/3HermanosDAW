<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Cajero 3H</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    

    <!-- Le styles -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/font-style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/flexslider.css" rel="stylesheet">
    
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

		<script type="text/javascript">
		$(document).ready(function () {

			$("#btn-blog-next").click(function () {
			  $('#blogCarousel').carousel('next')
			});
			 $("#btn-blog-prev").click(function () {
			  $('#blogCarousel').carousel('prev')
			});

			 $("#btn-client-next").click(function () {
			  $('#clientCarousel').carousel('next')
			});
			 $("#btn-client-prev").click(function () {
			  $('#clientCarousel').carousel('prev')
			});
			
		});

		 $(window).load(function(){

			$('.flexslider').flexslider({
				animation: "slide",
				slideshow: true,
				start: function(slider){
				  $('body').removeClass('loading');
				}
			});  
		});

		</script>


    
	</head>