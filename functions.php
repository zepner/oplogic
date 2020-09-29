
<?php
function page($page) {
	include_once('settings.php');
	$sections = [];
	$page_settings = (isset($settings['pages'][$page])) ? $settings['pages'][$page] : null;
	if (!$page_settings) {
		return '404';
	}

	foreach ($page_settings['sections'] as $key => $value) {
		$tags = [];
		foreach ($value as $k => $v) {
			$attrs = [];
			foreach ($v['attrs'] as $attr => $attr_value) {
				$attrs[] = $attr . '="' . $attr_value . '"';
			}
			$tag = (strpos($k, '-')) ? explode('-', $k)[0] : $k;
			$tags[] = "\n" . '<' . $tag . ' ' . implode(' ', $attrs) . '>' . $v['value'] . '</' . $tag . '>';
		}
		$sections[] = "\n" . '<div class="section" id="' . $page . '_' . $key . '"><div class="section-inner">' . implode("\n", $tags) . '</div></div>';
	}

	return '<div id="sections">' . implode("\n", $sections) . '</div>';
}

function head($page) {
	include_once('head.php');
}

function foot($page) {
	include_once('foot.php');
}