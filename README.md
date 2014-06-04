Lixom MVC
=========

Lixom MVC is a PHP-framwork inspiered by CMF. It was created during the course
"Database driven web applications with PHP and MVC" at Blekinge Institute of
Technology. The framework is based on Lydia wich is created by Mickael Roos and
can be found at <https://github.com/mosbth/lydia.>



Requirements
------------

-   PHP

-   SQLite

-   Writable directories(chmod 777)



Installation
------------

1.  Make sure 'site/data' and 'theme/grid' and the files inside is writable
    (chmod 777).

2.  Change the `RewriteBase` in your `.htcaccess` to a url that matches your
    directory structure.

3.  Point your browser to the installation and `index.php. `Click the link
    modules/install to install the basic modules.

Usage
-----

The installation comes with two default users where root:root is admin and
doe:doe is an ordinary user. To login click the login in the right top corner.



#### Customize theme

To change the theme, logo, slogan or footer edit the array
`$lix->config[’theme’]` found at lines 134-155 in '*site/cofig.php*’.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$lix->config['theme'] = array(   
    'path'            => '/themes/mytheme',
    'parent'          => 'themes/grid',
    'stylesheet'      => 'style.css',
    'template_file'   => 'index.tpl.php',
    
    'regions' => array('navbar', 'flash','featured-first','featured-middle','featured-last', 'primary','sidebar','triptych-first','triptych-middle','triptych-last', 'footer-column-one','footer-column-two','footer-column-three','footer-column-four', 'footer',   ),
   'menu_to_region' => array('navbar'=>'navbar'),
    'data' => array( 
        'header'       => 'Lixom',
        'slogan'       => 'A PHP-based MVC-inspired CMF',
         'favicon'     => 'logo.png',
         'logo'        => 'logo.png',
         'logo_width'  => 80,
         'logo_height' => 80,
         'footer'      => 'p© Lixom by Sebastian E (seem13) based on Lydia/p', 
    ), 
);
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



To change the navbar find and edit the array `$lix->config['menus']` found at
lines 100-108.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$lix->config['menus'] = array(   
    'navbar' => array( 'home'  => array('url'=>'home', 'label' => 'home'), 
        'modules'   => array('url'=>'module',    'label' => 'modules'),
        'content'   => array('url'=>'content',   'label' => 'content'),
        'guestbook' => array('url'=>'guestbook', 'label' => 'guestbook'),
        'blog'      => array('url'=>'blog',      'label' => 'blog'),   
    ),
);
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Remember if you add entries to the navbar you might need to enable the
controllers in the controllers-array.



##### Create a new page

To create a page you need to be signed, then go to *content/create*. Make sure
to set the type-field to *'page'. *The key-field specifies the url used to find
that page.



###### Create a blog

To create a new blogpost just follow the steps above of creating a new page.
Just remember to set the type-field to '*post*’.








