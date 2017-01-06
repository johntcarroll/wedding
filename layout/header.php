<html>
    <head>
        <title><?php echo $title;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:site_name" content="John and Lena's Wedding Website">
        <meta property="og:url" content="johnandlena.com">
        <meta property="og:description" content="Our wedding website!">
        <meta property="og:image" content="">
        <meta name="description" content='Our wedding website!'>
        <link rel='stylesheet' type='text/css' href='<?php echo $root; ?>css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='<?php echo $root; ?>css/style.css'>
        <script type='text/javascript' src='<?php echo $root; ?>js/bootstrap.min.js'></script>
        <script type='text/javascript' src='<?php echo $root; ?>js/jquery.min.js'></script>
    </head>
    <body>
        <div class='row top-nav'>
            <div class='col-md-12 hidden-sm-down'>
                <div class='row'>
                    <div class='col-md-1 col-md-offset-1'>
                        Brand
                    </div>
                    <div class='col-md-2 big-nav-link'>
                        <a href='<?php echo $root; ?>story/'>Our Story</a>
                    </div>
                    <div class='col-md-2 big-nav-link'>
                        <a href='<?php echo $root; ?>party/'>Wedding Party</a>
                    </div>
                    <div class='col-md-2 big-nav-link'>
                        <a href='<?php echo $root; ?>schedule/'>Wedding Day Schedule</a>
                    </div>
                    <div class='col-md-2 big-nav-link'>
                        <a href='<?php echo $root; ?>accomodations/'>Accomodations</a>
                    </div>
                    <div class='col-md-2 big-nav-link'>
                        <a href='<?php echo $root; ?>registry/'>Registry</a>
                    </div>
                </div>
            </div>
            <div class='col-sm-3 col-sm-offset-9'>
                
            </div>
        </div>