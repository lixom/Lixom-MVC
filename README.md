Lixom MVC
=========

Lixom MVC is a PHP-framwork inspiered by CMF. It was created during the course "Databas driven web applications with PHP and MVC" at Blekinge Institute of Technology. The framework is based on Lydia wich is created by Mickael Roos and can be found at <https://github.com/mosbth/lydia.>



Requirements
------------

-   PHP

-   SQLite

-   Writable directories(chmod 777)



Installation
------------

1.  Make sure 'site/data' and 'theme/grid' and the files inside is writable (chmod 777).

2.  Change the `RewriteBase` in your `.htcaccess` to a url that matches your directory structure. 

3.  Point your browser to the installation and `index.php. `Click the link modules/install to install the basic modules. 

Usage
-----

The installation comes with two default users where root:root is admin and doe:doe is an ordinary user.



Customize theme
---------------

To change the theme, logo, slogan or footer edit the array `$lix->config[’theme’]` found at lines 134-155 in 'site/cofig.php’. Note that the logo image needs to be in the same folder as the selected theme.



To change the navbar find the array `$lix->config['menus']` found at lines 100-108. Remember if you add entries to the navbar you might need to enable the controllers in the controllers-array.



Create a new page
-----------------

To create a page you need to be signed in, then go to *content/create*. Make sure to set the type-field to *'page'. *The key-field specifies the url used to find that page.  



Create a blog
-------------

To create a new blogpost just follow the steps of creating a new page. Just remember to set the type-field to '*post*’.








