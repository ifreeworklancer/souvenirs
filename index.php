<?php

function phone_link($phone)
{
	return str_replace([' ', '(', ')', '-'], '', $phone);
}

function generateRandomString($length = 10)
{
	return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		ceil($length / strlen($x)))), 1, $length);
}

require_once('store.php');

require_once('views/base/header.php');

?>

<?php

$sections = [
	'intro',
	'catalog',
	'new-articles',
];

foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');