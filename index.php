<?php

require_once('functions.php');

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