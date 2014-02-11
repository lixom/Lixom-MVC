<?php
//
// PHASE: BOOTSTRAP
//
define('LIXOM_INSTALL_PATH', dirname(__FILE__));
define('LIXOM_SITE_PATH', LIXOM_INSTALL_PATH . '/site');

require(LIXOM_INSTALL_PATH.'/src/CLixom/bootstrap.php');

$lix = CLixom::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$lix->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$lix->ThemeEngineRender();


?>