
<?php
function page($page) {
	include_once('settings.php');

	$page_settings = dirname(__FILE__) . '/settings-' . $page . '.php';
	if (file_exists($page_settings)) {
		include $page_settings;
	} else {
		return '<h1>404: Page not found.</h1>';
	}

	$sects = [];
	foreach ($sections as $key => $value) {
		$tags = [];
		foreach ($value as $k => $v) {
			$attrs = [];
			foreach ($v['attrs'] as $attr => $attr_value) {
				$attrs[] = $attr . '="' . $attr_value . '"';
			}
			$tag = (strpos($k, '-')) ? explode('-', $k)[0] : $k;
			$tags[] = "\n" . '<' . $tag . ' ' . implode(' ', $attrs) . '>' . $v['value'] . '</' . $tag . '>';
		}
		$sects[] = "\n" . '<div class="section" id="' . $page . '_' . $key . '"><div class="section-inner">' . implode("\n", $tags) . '</div></div>';
	}

	return '<div id="sections">' . implode("\n", $sects) . '</div>';
}

function get_menu($page) {
	$menu = [
		'home' => 'What',
		'methodology' => 'How',
		'principals' => 'Who',
		'contact' => '15 Minutes'
	];
	$lis = '';
	foreach ($menu as $key => $value) {
		$active = ($key == $page);
		$lis .= '<li class="' . $key . '"><a class="' . ($active ? 'active' : '') .'" href="/' . $key . '">' . $value . '</a></li>';
	}
	return $lis;
}