<?php

use TheCodingOwl\OwlDav\TCA\FieldTypeRegistry;

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
        'iconfile' => 'EXT:owl-dav/Resources/Public/Icons/field.svg',
        'rootlevel' => 0,
        'title' => 'LLL:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field',
        'tstamp' => 'modification_date'
    ],
    'types' => [
        0 => [
            'showitem' => 'name,type,value,address'
        ]
    ],
    'palettes' => [],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.name',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.name.description',
            'config' => [
                'type' => 'input',
                'required' => true
            ]
        ],
        'type' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.type',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.type.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => FieldTypeRegistry::class . '->renderTCAItems'
            ]
        ],
        'value' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.value',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.value.description',
            'config' => [
                'type' => 'input',
                'required' => true
            ]
        ],
        'address' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.address',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_field.address.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_thecodingowl_domain_model_address'
            ]
        ]
    ]
];
