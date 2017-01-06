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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='<?php echo $root; ?>css/style.css'>
        <script type='text/javascript' src='<?php echo $root; ?>js/jquery.min.js'></script>
        <script type='text/javascript' src='<?php echo $root; ?>js/bootstrap.min.js'></script>
        <script type='text/javascript' src='<?php echo $root; ?>layout/header.js'></script>
    </head>
    <body>
        <div class='container-fluid'>
            <div class='row top-nav'>
                <div class='col-md-12 hidden-sm-down'>
                    <div class='row big-nav'>
                        <div class='col-md-2 nav-brand'>
                            John and Lena
                        </div>
                        <div class='col-md-2 big-nav-link'>
                            <a href='<?php echo $root; ?>story/'>Our Story</a>
                        </div>
                        <div class='col-md-2 big-nav-link'>
                            <a href='<?php echo $root; ?>party/'>Wedding Party</a>
                        </div>
                        <div class='col-md-2 big-nav-link'>
                            <a href='<?php echo $root; ?>schedule/'>Schedule</a>
                        </div>
                        <div class='col-md-2 big-nav-link'>
                            <a href='<?php echo $root; ?>accomodations/'>Accomodations</a>
                        </div>
                        <div class='col-md-2 big-nav-link'>
                            <a href='<?php echo $root; ?>registry/'>Registry</a>
                        </div>
                    </div>
                </div>
                <div class='col-sm-12 hidden-md-up small-nav-link'>
                    John and Lena <a href='#' id='nav-overlay'><i class='fa fa-bars'></i></a>
                </div>
            </div>
            <div class='fullscreen-menu hidden-xl-down'>
                <div class='row'>
                    <div class='col-xs-12 overlay-header'>
                        John and Lena <a href='#' id='nav-close-overlay'><i class='fa fa-times'></i></a>
                    </div>
                </div>
                <div class='row overlay-menu'>
                    <div class='col-xs-12'>
                        <h2>Menu:</h2>
                    </div>
                    <div class='col-xs-12'>
                        <a href='<?php echo $root; ?>story/'>Our Story</a>
                    </div>
                    <div class='col-xs-12'>
                        <a href='<?php echo $root; ?>party/'>Wedding Party</a>
                    </div>
                    <div class='col-xs-12'>
                        <a href='<?php echo $root; ?>schedule/'>Schedule</a>
                    </div>
                    <div class='col-xs-12'>
                        <a href='<?php echo $root; ?>accomodations/'>Accomodations</a>
                    </div>
                    <div class='col-xs-12'>
                        <a href='<?php echo $root; ?>registry/'>Registry</a>
                    </div>
                </div>
            </div>