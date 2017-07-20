# John and Lenas Wedding Website

I designed this site for my wedding. Feel free to fork the project and customize it for yours!

## About the Site

I hated the idea of having a really long wedding URL like weddingwebsite.com/west-chester/john-and-lena-get-married-sept-30 so I decided to build my own site and host it myself!
Everything is very simple and straight forward, with the exception of the RSVP page. In order to get this to work you must first build the database using the wedding.sql file.
Once this file is imported, the final step is to add a file to the controller folder name config.php. Below is an example of what should be in that file.

```php
<?php

require_once __DIR__ . '/../php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
 {
    $modelDir = substr(__FILE__, 0, -21) . "model";
     $cfg->set_model_directory($modelDir);
     $cfg->set_connections(array(
         'development' => 'mysql://[sqlUserName]:[sqlPassword]@[serverLocation]/[databaseName]'
        ));
 });
?>
```

+ sqlUserName - mysql username for accessing database server
+ sqlPassword - password for username
+ serverLocation - IP address of SQL server. If site and database are on the same server user loopback address 127.0.0.1
+ databaseName - If you use the SQL file in the repo the database name will be wedding.

Good Luck! Feel free to open issues if you need help. I will do my best to respond. 
