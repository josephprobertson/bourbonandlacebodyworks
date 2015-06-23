<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css" type="text/css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css" type="text/css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/responsive.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Diplomata+SC' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico">
	<body background="img/burlap.jpg">
	<script type="text/javascript">
//<![CDATA[
		  (function() {
		    var shr = document.createElement('script');
		    shr.setAttribute('data-cfasync', 'false');
		    shr.src = '//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js';
		    shr.type = 'text/javascript'; shr.async = 'true';
		    shr.onload = shr.onreadystatechange = function() {
		      var rs = this.readyState;
		      if (rs && rs != 'complete' && rs != 'loaded') return;
		      var site_id = '8adeafb748369974e6544df276ede1d3';
		      try { Shareaholic.init(site_id); } catch (e) {}
		    };
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(shr, s);
		  })();
//]]>
</script>

</head>
<header>
	<h1 class="branding-title"><a href="<?php echo BASE_URL; ?>"><img class="hero" src="<?php echo BASE_URL; ?>img/Large Logo.gif" alt="Bourbon and Lace Body Works"></a></h1>
</header>
<body>
	<div class="header" id="header">
		<div class="wrapper" id="wrapper">
				<ul class="nav" id="nav">
				<li class="soaps <?php if ($section == "soaps") { echo "on"; }  ?>"><a href="<?php echo BASE_URL; ?>soaps.php">Products</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; }  ?>"><a href="<?php echo BASE_URL; ?>contact.php">Contact</a></li>
				<li class="cart"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=VE4HFDE7FYT3W&amp;display=1">Shopping Cart</a></li>
			</ul>
		</div>
	</div>
	<div id="content">