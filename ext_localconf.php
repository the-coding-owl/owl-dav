<?php

use TheCodingOwl\OwlDav\FieldTypes\FieldTypeRegistry;
use TheCodingOwl\OwlDav\FieldTypes\PhoneFieldType;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(static function () {
    /** @var FieldTypeRegistry */
    $fieldTypeRegistry = GeneralUtility::makeInstance(FieldTypeRegistry::class);
    $fieldTypeRegistry->registerFieldType(new PhoneFieldType());
});
