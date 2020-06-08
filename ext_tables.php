<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ldvcdhtl.RestaurantLdvcdhtl',
            'Pi1',
            'Menus'
        );

        $pluginSignature = str_replace('_', '', 'restaurant_ldvcdhtl') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:restaurant_ldvcdhtl/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ldvcdhtl.RestaurantLdvcdhtl',
            'Pi2',
            'Les plats'
        );

        $pluginSignature = str_replace('_', '', 'restaurant_ldvcdhtl') . '_pi2';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:restaurant_ldvcdhtl/Configuration/FlexForms/flexform_pi2.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ldvcdhtl.RestaurantLdvcdhtl',
            'Pi3',
            'Les boissons'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ldvcdhtl.RestaurantLdvcdhtl',
            'Pi4',
            'Les suggestions'
        );

        $pluginSignature = str_replace('_', '', 'restaurant_ldvcdhtl') . '_pi4';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:restaurant_ldvcdhtl/Configuration/FlexForms/flexform_pi4.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('restaurant_ldvcdhtl', 'Configuration/TypoScript', 'Restaurant LDVCDHTL');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantldvcdhtl_domain_model_menu', 'EXT:restaurant_ldvcdhtl/Resources/Private/Language/locallang_csh_tx_restaurantldvcdhtl_domain_model_menu.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantldvcdhtl_domain_model_menu');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantldvcdhtl_domain_model_dish', 'EXT:restaurant_ldvcdhtl/Resources/Private/Language/locallang_csh_tx_restaurantldvcdhtl_domain_model_dish.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantldvcdhtl_domain_model_dish');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantldvcdhtl_domain_model_drink', 'EXT:restaurant_ldvcdhtl/Resources/Private/Language/locallang_csh_tx_restaurantldvcdhtl_domain_model_drink.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantldvcdhtl_domain_model_drink');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantldvcdhtl_domain_model_category', 'EXT:restaurant_ldvcdhtl/Resources/Private/Language/locallang_csh_tx_restaurantldvcdhtl_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantldvcdhtl_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_restaurantldvcdhtl_domain_model_suggestion', 'EXT:restaurant_ldvcdhtl/Resources/Private/Language/locallang_csh_tx_restaurantldvcdhtl_domain_model_suggestion.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_restaurantldvcdhtl_domain_model_suggestion');

    }
);
