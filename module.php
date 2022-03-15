<?php
/*
 *  Made by TeemoCell
 *  NamelessMC version 2.0.0-pr12
 *
 *  License: MIT
 *
 *  NoirSettings By TeemoCell
 */

class NoirSettings_Module extends Module{
    private $_noir_language;

    public function __construct($noir_language, $pages)
    {
        $this->_noir_language = $noir_language;

        $name = 'NoirSettings';
        $author = 'TeemoCell';
        $module_version = '1.0.0';
        $nameless_version = '2.0.0-pr12';

        parent::__construct($this, $name, $author, $module_version, $nameless_version);

        $pages->add('NoirSettings', '/panel/noirsettings', 'pages/panel/index.php');
    }

    public function onInstall()
    {
    }

    public function onUninstall()
    {
    }

    public function onEnable()
    {
    }

    public function onDisable()
    {
    }

    public function onPageLoad($user, $pages, $cache, $smarty, $navs, $widgets, $template)
    {

        PermissionHandler::registerPermissions('Noir Module', array(
            'admincp.noir_settings' => 'Create wiki page'
        ));

		if (defined('FRONT_END')) {

		} else if (defined('BACK_END')) {

            $icon = '<i class="nav-icon fas fa-caret-square-down"></i>';


            if ($user->hasPermission('admincp.noir_settings')) {
				$cache->setCache('panel_sidebar');
				if(!$cache->isCached('noir_new_order')){
					$order = 14;
					$cache->store('noir_new_order', 14);
				} else {
					$order = $cache->retrieve('noir_new_order');
				}

				if(!$cache->isCached('noir_icon')){
					$icon = '<i class="nav-icon fas fa-cogs"></i>';
					$cache->store('noir_icon', $icon);
				} else {
					$icon = $cache->retrieve('noir_icon');
				}
                $navs[2]->add('noir_settings_divider', mb_strtoupper($this->_noir_language->get('language', 'noirsettings'), 'UTF-8'), 'divider', 'top', null, $order, '');
				$navs[2]->add('noir_settings', $this->_noir_language->get('language', 'noirsettings'), URL::build('/panel/noirsettings'), 'top', null, $order + 0.1, $icon);
            }
		}
    }
}
