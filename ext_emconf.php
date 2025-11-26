<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'CC Image',
    'description' => 'Provide image viewhelpers and support for WebP',
    'category' => 'plugin',
    'author' => 'Coeln Concept GmbH',
    'author_email' => 'info@coelnconcept.de',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.4.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
