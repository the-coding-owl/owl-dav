<?php

use TheCodingOwl\OwlDav\Controller\AddressbookController;
use TheCodingOwl\OwlDav\Controller\ConfigurationController;

return [
    'web_owl-dav_configuration' => [
        'parent' => 'web',
        'position' => ['bottom'],
        'access' => 'user',
        'workspaces' => 'live',
        'labels' => 'LLL:EXT:owl-dav/Resources/Private/Language/locallang_mod.xlf',
        'extensionName' => 'OwlDav',
        'controllerActions' => [
            ConfigurationController::class => [
                'index'
            ]
        ]
    ],
    'web_owl-dav_addressbook' => [
        'parent' => 'web',
        'position' => ['bottom'],
        'access' => 'user',
        'workspaces' => 'live',
        'labels' => 'LLL:EXT:owl-dav/Resources/Private/Language/locallang_mod.xlf',
        'extensionName' => 'OwlDav',
        'controllerActions' => [
            AddressbookController::class => [
                'list', 'show', 'edit', 'save', 'new', 'create'
            ]
        ]
    ]
];
