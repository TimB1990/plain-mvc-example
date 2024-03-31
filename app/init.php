<?php

// Composer autoloader
/*
add to composer.json:     
"autoload": {
        "classmap": [
            "app/models"
        ]
    }
so we can use these classes in there where-ever we want
then we run in terminal: composer dump-autoload
*/
require_once '../vendor/autoload.php';

require_once '../app/database.php';

require_once 'core/App.php';

require_once 'core/Controller.php';
