<?php 
function phpAutoloader($className){
	require $className.".php";
}
spl_autoload_register('phpAutoloader');
$root = dirname(realpath(__FILE__));
define ('APP_PATH',$root);
define ('DS',DIRECTORY_SEPARATOR);
define ('PS' , PATH_SEPARATOR);
define ('controllers_PATH',APP_PATH . DS . 'controllers');
define ('models_PATH' , APP_PATH . DS . 'Models');
$paths = get_include_path() . PS . controllers_PATH . PS . models_PATH;
set_include_path($paths);
$apple = new testing4();