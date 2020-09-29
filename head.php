<html>
<head>
<link href="style.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width" />
</head>
<body>
	<header>
		<div class="header-inner">
			<div id="logo"><span>Op<span>_Logic</span></span></div>
			<div id="menu">
				<ul>
					<?php
						$menu = [
							'home' => 'What',
							'methodology' => 'How',
							'principals' => 'Who',
							'contact' => '15 Minutes'
						];
						foreach ($menu as $key => $value) {
							$active = ($key == $page);
							print '<li class="' . $key . '"><a class="' . ($active ? 'active' : '') .'" href="/' . $key . '">' . $value . '</a></li>';
						}
					?>
				</ul>
				<br class="clear" />
			</div>
		</div>
	</header>
	