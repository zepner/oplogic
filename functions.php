
<?php
function page($page) {
	include_once('settings.php');

	$page_settings = dirname(__FILE__) . '/settings-' . $page . '.php';
	if (file_exists($page_settings)) {
		include $page_settings;
	} else {
		return '<div id="sections">
					<div class="brown section lead" id="home_lead">
						<div class="section-inner">
							<h1 class="nomargin bold">404</h1>
							<p>Page not found.. <br>Please use the menu above to navigate to an existing page.</p>
						</div>
					</div>
				</div>';
	}

	$sects = [];
	$page_settings = $sections['settings']; // todo: integrate
	unset($sections['settings']);
	foreach ($sections as $key => $value) {
		$section_settings = $value['settings'];
		unset($value['settings']);
		$arrSectionSettings = [];
		// Prep section settings.
		foreach ($section_settings as $attr => $attr_value) {
			if ($attr == 'class') {
				$attr_value .= ' section ' . $key;
			}
			$arrSectionSettings[] = $attr . '="' . $attr_value . '"';
		}
		$tags = [];
		foreach ($value as $k => $v) {
			$attrs = [];
			foreach ($v['attrs'] as $attr => $attr_value) {
				$attrs[] = $attr . '="' . $attr_value . '"';
			}
			$tag = (strpos($k, '-')) ? explode('-', $k)[0] : $k;
			$tags[] = "\n" . '<' . $tag . ' ' . implode(' ', $attrs) . '>' . $v['value'] . '</' . $tag . '>';
		}
		$sects[] = "\n" . '<div ' . implode(" ", $arrSectionSettings) . ' id="' . $page . '_' . $key . '"><div class="section-inner">' . implode("\n", $tags) . '</div></div>';
	}

	return '<div id="sections">' . implode("\n", $sects) . '</div>';
}

function get_menu($page) {
	$menu = [
		'home' => 'What',
		'methodology' => 'How',
		'principals' => 'Who',
		'contact' => '15 Mins'
	];
	$lis = '';
	foreach ($menu as $key => $value) {
		$active = ($key == $page);
		$lis .= '<li class="' . $key . '"><a class="' . ($active ? 'active' : '') .'" href="/' . $key . '">' . $value . '</a></li>';
	}
	return $lis;
}