<?php


$EM_CONF[$_EXTKEY] = [
    'title' => 'the-coding-owl/owl-dav',
    'description' => 'An extension for TYPO3 that enables DAV functionality using sabre dav',
    'category' => 'be',
    'author' => 'Kevin Ditscheid',
    'author_email' => 'kevin@the-coding-owl.de',
    'author_company' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4-12.4.99'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'TheCodingOwl\\OwlDav\\' => 'Classes/',
        ]
    ],
];
