<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
    ExtensionManagementUtility::addStaticFile('owl_dav', 'Configuration/TypoScript', 'Owl Dav Configuration');
});
