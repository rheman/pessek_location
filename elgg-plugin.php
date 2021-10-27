<?php

use Pessek\PessekLocation\Bootstrap;

$externaljs = dirname(__FILE__);

return [
        'plugin' => [
                'version' => '4.0',
		'name' => 'Google Maps Location for ELGG',
        ],
	'bootstrap' => \Pessek\PessekLocation\Bootstrap::class,
	'views' => [
		'default' => [
			'markerclusterer/' => $externaljs . '/vendor/google/markerclusterer/src/',
		],
	],
];
