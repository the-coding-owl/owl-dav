<?php

return [
    'ctrl' => [
        'crdate' => 'creation_date',
        'editlock' => 'locked',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'label' => 'name',
        'enablecolumns' => [
            'disabled' => 'disabled'
        ],
        'hideTable' => true,
        'iconfile' => 'EXT:owl_dav/Resources/Public/Icons/address.svg',
        'rootlevel' => 0,
        'title' => 'LLL:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address',
        'tstamp' => 'modification_date'
    ],
    'types' => [
        0 => [
            'showitem' => 'name,fields,addressbook'
        ]
    ],
    'palettes' => [],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.name',
            'description' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.name.description',
            'config' => [
                'type' => 'input',
                'required' => true
            ]
        ],
        'fields' => [
            'label' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.fields',
            'description' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.fields.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_owldav_domain_model_field',
                'foreign_selector' => 'type',
                'foreign_field' => 'address'
            ]
        ],
        'image' => [
            'label' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.image',
            'description' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.image.description',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ]
        ],
        'addressbook' => [
            'label' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.addressbook',
            'description' => 'LLL:EXT:owl_dav/Resources/Private/Languages/locallang_db.xlf:tx_owldav_domain_model_address.addressbook.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_owldav_domain_model_addressbook'
            ]
        ]
    ]
];
