<?php

if($_SERVER['SERVER_NAME']=='localhost') {
    // database configuration  
    define('DBHOST','localhost');
    define('DBNAME','my_db');
    define('DBUSER','root');
    define('DBPASS','');
    define('ROOT','http://localhost/Projects/signup-with-MVC/public');
} else {
    define('DBHOST','localhost');
    define('DBNAME','my_db');
    define('DBUSER','root');
    define('DBPASS','');
    define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', 'My Website');
define('APP_DESC', 'Best website on the planet');

//true means show errors 
define('DEBUG', true);