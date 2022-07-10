<?php
/*
 *  Made by TeemoCell
 *  NamelessMC version 2.0.0-pr12
 *
 *  License: MIT
 *
 *  NoirSettings By TeemoCell
 */
define('PAGE', 'panel');
define('PARENT_PAGE', 'noir_settings');
define('PANEL_PAGE', 'noir_settings');
$page_title = $noir_language->get('language', 'noirsettings');
require_once(ROOT_PATH . '/core/templates/backend_init.php');


$smarty->assign(array(
    'NOIRSETTINGS' => $noir_language->get('language', 'noirsettings')
));


// Load modules + template
Module::loadPage($user, $pages, $cache, $smarty, array($navigation, $cc_nav, $mod_nav), $widgets, $template);
$page_load = microtime(true) - $start;
define('PAGE_LOAD_TIME', str_replace('{x}', round($page_load, 3), $language->get('general', 'page_loaded_in')));
$template->onPageLoad();

require(ROOT_PATH . '/core/templates/panel_navbar.php');

$template->displayTemplate('noirsettings/index.tpl', $smarty);