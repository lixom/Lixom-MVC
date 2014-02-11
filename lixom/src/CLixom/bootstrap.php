<?php
/**
* Bootstrapping, setting up and loading the core.
*
* @package LixomCore
*/



/**
* Enable auto-load of class declarations.
*/
function autoload($aClassName) {
  $classFile = "/src/{$aClassName}/{$aClassName}.php";
   $file1 = LIXOM_SITE_PATH . $classFile;
   $file2 = LIXOM_INSTALL_PATH . $classFile;
   if(is_file($file1)) {
      require_once($file1);
   } elseif(is_file($file2)) {
      require_once($file2);
   }
}
spl_autoload_register('autoload');