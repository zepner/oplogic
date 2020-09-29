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
	</body>
</html>