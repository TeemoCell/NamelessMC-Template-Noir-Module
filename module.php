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
            'admincp.noir_settings' => 'View Noir Settings'
        ));

		if (defined('FRONT_END')) {

		} else if (defined('BACK_END')) {

		}
    }
}
