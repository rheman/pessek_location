<?php

use Pessek\PessekLocation\Bootstrap;

$externaljs = dirname(__FILE__);

return [
	'bootstrap' => \Pessek\PessekLocation\Bootstrap::class,
	'views' => [
		'default' => [
			'markerclusterer/' => $externaljs . '/vendor/google/markerclusterer/src/',
		],
	],
];
