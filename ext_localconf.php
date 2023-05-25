<?php

use TheCodingOwl\OwlDav\FieldTypes\PhoneFieldType\PhoneFieldType;
use TheCodingOwl\OwlDav\TCA\FieldTypeRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(static function () {
    /** @var FieldTypeRegistry */
    $fieldTypeRegistry = GeneralUtility::makeInstance(FieldTypeRegistry::class);
    $fieldTypeRegistry->registerFieldType(new PhoneFieldType());
});
