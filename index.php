<?php
include_once('functions.php');
$page_uri = ltrim($_SERVER['REQUEST_URI'], '/');
$page = (strlen($page_uri) == 0) ? 'home' : $page_uri;
$menu = get_menu($page);
?>
<html>
	<head>
	<link href="style.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width" />
	<title><?php print ucwords($page) ?> | Operational Logic</title>
	<script src="js/yall.min.js"></script>
	<script>
	  document.addEventListener("DOMContentLoaded", yall);
	</script>
	</head>

	<body>
		<header>
			<div class="header-inner">
				<div id="logo"><span>Op<span>_Logic</span></span></div>
				<div id="menu">
					<ul><?php print $menu; ?></ul>
					<br class="clear" />
				</div>
			</div>
		</header>
		<?php print page($page); ?>
		<footer>
			<div class="white-gray-split nopad section split-img" id="footer_split-img">
				<div class="section-inner">
					<div rel="footer:split-img:div" class="nopad nomargin splitter">
						<span class="splitter"></span>
						<img src="img/blur.jpg" data-src="img/footer-styled-laptop.png" class="lazy" width="924" height="287" />
					</div>
				</div>
			</div>
			<div class="gray section contact" id="footer_contact">
				<div class="section-inner">
					<br/>&nbsp;
					<p><img src="img/blur.jpg" data-src="img/gray-dots.png" class="lazy" style="float:right; margin-right:100px" width="244" height="200" /></p>
					<h2 rel="footer:contact:h2" class="red nomargin bold500">We're Ready.</h2>
					<h3 rel="footer:contact:h2" class="nomargin">Send a Message.</h3>
					<p rel="footer:contact:p"><a class="red bold" href="mailto:business@operationallogic.com">Business@OperationalLogic.com</a></p>
				</div>
			</div>
		</footer>
	</body>
</html>