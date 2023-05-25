<?php
return [
    'ctrl' => [
        'crdate' => 'creation_date',
        'editlock' => 'locked',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'label' => 'user.username',
        'enablecolumns' => [
            'disabled' => 'disabled'
        ],
        'hideTable' => true,
        'iconfile' => 'EXT:owl-dav/Resources/Public/Icons/addressbook.svg',
        'rootlevel' => 0,
        'title' => 'LLL:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook',
        'tstamp' => 'modification_date'
    ],
    'types' => [
        0 => [
            'showitem' => 'title,description,supportedAddressData,maxResourceSize,addresses'
        ]
    ],
    'palettes' => [],
    'columns' => [
        'title' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.title',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.title.description',
            'config' => [
                'type' => 'input',
                'required' => true,
                'eval' => 'alphanum'
            ]
        ],
        'description' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.description',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.description.description',
            'config' => [
                'type' => 'text',
                'cols' => 20,
                'rows' => 2,
            ]
        ],
        'supportedAddressData' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.supportedAddressData',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.supportedAddressData.description',
            'exclude' => true,
            'config' => [
                'type' => 'select',
                'renderType' => 'selectCheckbox',
                'items' => [
                    [
                        'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:itemGroup.images.jpg',
                        'value' => 'jpg,jpeg',
                        'group' => 'images'
                    ],
                    [
                        'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:itemGroup.images.gif',
                        'value' => 'gif',
                        'group' => 'images'
                    ],
                    [
                        'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:itemGroup.images.png',
                        'value' => 'png',
                        'group' => 'images'
                    ],
                    [
                        'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:itemGroup.images.bmp',
                        'value' => 'bmp',
                        'group' => 'images'
                    ],
                    [
                        'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:itemGroup.images.svg',
                        'value' => 'svg',
                        'group' => 'images'
                    ]
                ],
                'itemGroups' => [
                    'images' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:itemGroup.images'
                ]
            ]
        ],
        'maxResourceSize' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.maxResourceSize',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.maxResourceSize.description',
            'exclude' => true,
            'config' => [
                'type' => 'input',
                'eval' => 'num'
            ]
        ],
        'addresses' => [
            'label' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.addresses',
            'description' => 'LLL:EXT:owl-dav/Resources/Private/Languages/locallang_db.xlf:tx_thecodingowl_domain_model_addressbook.addresses.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_thecodingowl_domain_model_address',
                'foreign_field' => 'addressbook'
            ]
        ]
    ]
];
