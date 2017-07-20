# John and Lenas Wedding Website

I designed this site for my wedding. Feel free to fork the project and customize it for yours!

## About the Site

I hated the idea of having a really long wedding URL like weddingwebsite.com/west-chester/john-and-lena-get-married-sept-30 so I decided to build my own site and host it myself!
Everything is very simple and straight forward, with the exception of the RSVP page.

## RSVP Page Configuration

In order to get this to work you must first build the database using the wedding.sql file.
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

## Google Analytics

In the file /layout/header.php you will see a line:

```php
include "googleTracking.php";
```

If you would like to use Google Analytics to track vistors on your site, create a file in the layout folder called googleTracking.php. The contents should look like:

```html
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '[Google Analytics Tracking Number]', 'auto');
    ga('send', 'pageview');
</script>
```

+ Google Analytics Tracking Number - This you will get when you set up your analytics account.

## Thats it!

Good Luck! Feel free to open issues if you need help. I will do my best to respond.
