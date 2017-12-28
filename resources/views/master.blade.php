<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="source/images/title_logo.ico">
<title>M &amp; A Shop</title>
<link href="source/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="source/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="source/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="source/css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="source/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="source/js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="source/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	@include('header')
	<!-- header-section-ends -->

	<!-- content-section-starts-here -->
	@yield('content')
	<!-- content-section-ends-here -->

	<!-- footer-section-starts -->
	@include('footer')
	<!-- footer-section-ends -->
		
</body>
</html>