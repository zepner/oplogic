<?php
include_once('functions.php');
$page_uri = ltrim($_SERVER['REQUEST_URI'], '/');
print page($page_uri);
