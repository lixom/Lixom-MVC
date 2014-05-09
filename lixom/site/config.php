<?php
/**
* Site configuration, this file is changed by user per site.
*
*/

/*
 * Set level of error reporting
 */
error_reporting(-1);
ini_set('display_errors', 1);

/**
 * Set what to show as debug or developer information in the get_debug() theme helper.
 */
$lix->config['debug']['lixom'] = false;
$lix->config['debug']['db-num-queries'] = true;
$lix->config['debug']['db-queries'] = true;
$lix->config['debug']['session'] = false;
$lix->config['debug']['timer'] = true;

/**
 * Set database(s).
 */
$lix->config['database'][0]['dsn'] = 'sqlite:' . LIXOM_SITE_PATH . '/data/.ht.sqlite';

/**
 * How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
 */
$lix->config['hashing_algorithm'] = 'sha1salt';

/*
 * Define session name
 */
$lix->config['session_name'] = preg_replace('/[:\.\/-_]/', '', $_SERVER["SERVER_NAME"]);

/**
 * Define session key
 */
$lix->config['session_key']  = 'lixom';

/**
 * What type of urls should be used?
 * 
 * default      = 0      => index.php/controller/method/arg1/arg2/arg3
 * clean        = 1      => controller/method/arg1/arg2/arg3
 * querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
 */
$lix->config['url_type'] = 1;


/**
 * Set a base_url to use another than the default calculated
 */
$lix->config['base_url'] = null;

/*
 * Define server timezone
 */
$lix->config['timezone'] = 'Europe/Stockholm';

/*
 * Define internal character encoding
 */
$lix->config['character_encoding'] = 'UTF-8';

/*
 * Define language
 */
$lix->config['language'] = 'en';

/**
 * Define the controllers, their classname and enable/disable them.
 *
 * The array-key is matched against the url, for example: 
 * the url 'developer/dump' would instantiate the controller with the key "developer", that is 
 * CCDeveloper and call the method "dump" in that class. This process is managed in:
 * $lixom->FrontControllerRoute();
 * which is called in the frontcontroller phase from index.php.
 */
$lix->config['controllers'] = array(
  'index'     => array('enabled' => true, 'class' => 'CCIndex'),
  'developer' => array('enabled' => true, 'class' => 'CCDeveloper'),
  'guestbook' => array('enabled' => true, 'class' => 'CCGuestbook'),
  'user'      => array('enabled' => true, 'class' => 'CCUser'),
  'acp'       => array('enabled' => true, 'class' => 'CCAdminControlPanel'),
  'content'   => array('enabled' => true, 'class' => 'CCContent'),
  'page'   		=> array('enabled' => true, 'class' => 'CCPage'),
  'blog'   		=> array('enabled' => true, 'class' => 'CCBlog'),
  'theme'			=> array('enabled' => true, 'class' => 'CCTheme'),
  'module'		=> array('enabled' => true, 'class' => 'CCModules'),
  
);

/**
 * Define menus.
 *
 * Create hardcoded menus and map them to a theme region through $ly->config['theme'].
 */
$lix->config['menus'] = array(
  'navbar' => array(
    'home'      => array('url'=>'home', 					'label' => 'home'),
    'modules'   => array('url'=>'module', 		'label' => 'modules'),
    'content'   => array('url'=>'content',		'label' => 'content'),
    'guestbook' => array('url'=>'guestbook', 	'label' => 'guestbook'),
    'blog'      => array('url'=>'blog',				'label' => 'blog'),
  ),
);


/**
 * Settings for the theme. The theme may have a parent theme.
 *
 * When a parent theme is used the parent's functions.php will be included before the current
 * theme's functions.php. The parent stylesheet can be included in the current stylesheet
 * by an @import clause. See site/themes/mytheme for an example of a child/parent theme.
 * Template files can reside in the parent or current theme, the CLixom::ThemeEngineRender()
 * looks for the template-file in the current theme first, then it looks in the parent theme.
 *
 * There are two useful theme helpers defined in themes/functions.php.
 *  theme_url($url): Prepends the current theme url to $url to make an absolute url. 
 *  theme_parent_url($url): Prepends the parent theme url to $url to make an absolute url. 
 *
 * path: Path to current theme, relativly LIXOM_INSTALL_PATH, for example themes/grid or site/themes/mytheme.
 * parent: Path to parent theme, same structure as 'path'. Can be left out or set to null.
 * stylesheet: The stylesheet to include, always part of the current theme, use @import to include the parent stylesheet.
 * template_file: Set the default template file, defaults to default.tpl.php.
 * regions: Array with all regions that the theme supports.
 * data: Array with data that is made available to the template file as variables. 
 * 
 * The name of the stylesheet is also appended to the data-array, as 'stylesheet' and made 
 * available to the template files.
*/
$lix->config['theme'] = array(
  'path'            => '/themes/mytheme', 
  'parent'          => 'themes/grid',
  'stylesheet'      => 'style.css',
  'template_file'   => 'index.tpl.php',				// Default template file, else use default.tpl.php
  // A list of valid theme regions
  'regions' => array('navbar', 'flash','featured-first','featured-middle','featured-last',
    'primary','sidebar','triptych-first','triptych-middle','triptych-last',
    'footer-column-one','footer-column-two','footer-column-three','footer-column-four',
    'footer',
  ),
  'menu_to_region' => array('navbar'=>'navbar'),
  'data' => array(
    'header' => 'Lixom',
    'slogan' => 'A PHP-based MVC-inspired CMF',
    'favicon' => 'logo.png',
    'logo' => 'logo.png',
    'logo_width'  => 80,
    'logo_height' => 80,
    'footer' => '<p>© Lixom by Sebastian E (seem13) based on Lydia</p>',
  ),
);



/**
 * Define a routing table for urls.
 *
 * Route custom urls to a defined controller/method/arguments
 */
$lix->config['routing'] = array(
  'home' => array('enabled' => true, 'url' => 'index/index'),
);

/**
 * Allow or disallow creation of new user accounts.
 */
$lix->config['create_new_users'] = true;