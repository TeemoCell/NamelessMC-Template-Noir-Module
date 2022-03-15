<?php
/*
 *  Made by TeemoCell
 *  NamelessMC version 2.0.0-pr12
 *
 *  License: MIT
 *
 *  NoirSettings By TeemoCell
 */
$noir_language = new Language(ROOT_PATH . '/modules/NoirSettings/language', LANGUAGE);

require_once ROOT_PATH . '/modules/NoirSettings/module.php';
$module = new NoirSettings_Module($noir_language,$pages);