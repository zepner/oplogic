<?php
include_once('functions.php');
$page_uri = ltrim($_SERVER['REQUEST_URI'], '/');
$page = (strlen($page_uri) == 0) ? 'home' : $page_uri;

print head($page);
print page($page);
print foot($page);
