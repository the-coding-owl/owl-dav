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
        'iconfile' => 'EXT:owl-dav/Resources/Public/Icons/address.svg',
        'rootlevel' => 0,
        'title' => 'LLL:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_address',
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
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_address.name',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_address.name.description',
            'config' => [
                'type' => 'input',
                'required' => true
            ]
        ],
        'fields' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_address.fields',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_address.fields.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_thecodingowl_domain_model_field',
                'foreign_selector' => 'type',
                'foreign_field' => 'address'
            ]
        ],
        'addressbook' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_address.addressbook',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_address.addressbook.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_thecodingowl_domain_model_addressbook'
            ]
        ]
    ]
];
