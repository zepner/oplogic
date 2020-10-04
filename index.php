<?php
if ($_SERVER['HTTP_HOST'] != 'oplogic.local') {
	$lastModified = filemtime(__FILE__);
	$etagFile = md5_file(__FILE__);
	$ifModifiedSince = (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
	$etagHeader = (isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);
	header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModified) . ' GMT');
	header("Etag: $etagFile");
	header('Cache-Control: public');
	if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $lastModified || $etagHeader == $etagFile) {
	       header("HTTP/1.1 304 Not Modified");
	       exit;
	}
}
include_once('functions.php');
$page_uri = ltrim($_SERVER['REQUEST_URI'], '/');
$page = (strlen($page_uri) == 0) ? 'home' : filter_var($page_uri, FILTER_SANITIZE_STRING);
$menu = get_menu($page);
?>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width" />
	<title><?php print ucwords($page) ?> | Operational Logic</title>
	
	</head>
	<body>
		<header>
			<div class="header-inner">
				<div id="logo"><a href="/"><span>Op<span>_Logic</span></span></a></div>
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
					<br/>&nbsp;<br/>&nbsp;
					<p class="contact-dots"><img src="img/blur.jpg" data-src="img/gray-dots.png" class="lazy" style="float:right; margin-right:100px" width="244" height="200" /></p>
					<h2 rel="footer:contact:h2" class="red nomargin bold500">We're Ready.</h2>
					<h3 rel="footer:contact:h2" class="nomargin">Send a Message.</h3>
					<p rel="footer:contact:p"><a class="red bold" href="mailto:business@operationallogic.com">Business@OperationalLogic.com</a></p>
				</div>
			</div>
			<div class="brown section foot" id="footer_foot">
				<div class="section-inner">
					<div id="logo"><span>Op<span>_Logic</span></span></div>
					<div id="menu">
						<ul><?php print $menu; ?></ul>
					</div>
					<br class="clear" />
					<p class="clear small fff opacity5">&copy; <?php print date("Y"); ?> ZEPNER LLC. All rights reserved.</p>
				</div>
			</div>
		</footer>
		<style><?php print minimizeCSS(file_get_contents('style.css')); ?></style>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179326813-1"></script>
		<script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-179326813-1');</script>
		<script src="js/yall.min.js"></script>
		<script>document.addEventListener("DOMContentLoaded", yall);</script>

		<!-- <?php echo 'This page was last modified: ' . date("d.m.Y H:i:s", time()); ?> -->
	</body>
</html>