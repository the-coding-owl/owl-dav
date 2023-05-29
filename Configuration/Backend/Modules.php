<?php

use TheCodingOwl\OwlDav\Controller\AddressbookController;
use TheCodingOwl\OwlDav\Controller\AddressController;
use TheCodingOwl\OwlDav\Controller\ConfigurationController;

return [
    'web_owl_dav_configuration' => [
        'parent' => 'web',
        'position' => ['bottom'],
        'access' => 'user',
        'workspaces' => 'live',
        'labels' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_configuration.xlf',
        'extensionName' => 'OwlDav',
        'controllerActions' => [
            ConfigurationController::class => [
                'index'
            ]
        ]
    ],
    'web_owl_dav_addressbook' => [
        'parent' => 'web',
        'position' => ['bottom'],
        'access' => 'user',
        'workspaces' => 'live',
        'labels' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_addressbook.xlf',
        'extensionName' => 'OwlDav',
        'controllerActions' => [
            AddressbookController::class => [
                'list', 'show', 'edit', 'update', 'new', 'create', 'delete'
            ],
            AddressController::class => [
                'new', 'create', 'delete', 'edit', 'update'
            ]
        ]
    ]
];
