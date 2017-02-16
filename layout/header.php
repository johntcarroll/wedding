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
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='<?php echo $root; ?>css/style.css'>
        <script type='text/javascript' src='<?php echo $root; ?>js/jquery.min.js'></script>
        <script type='text/javascript' src='<?php echo $root; ?>js/bootstrap.min.js'></script>
        <script type='text/javascript' src='<?php echo $root; ?>layout/header.js'></script>
        <script type='text/javascript' src='<?php echo $root; ?>js/doubleTapBugFix.js'></script>
    </head>
    <body>
        <div class='container-fluid' style="overflow: hidden;">
            <div id="fullscreen" class='row fullscreen'>
                <div class='col-xs-12 overlay-header'>
                    <a href='#' id='nav-close-overlay'><span class='glyphicon glyphicon-remove'></span></a>
                </div>
                <div class="col-xs-12 overlay-menu">
                    <h1 class="nav-header">Lena and John</h1>
                </div>

                <div class='col-xs-12 overlay-menu'>
                    <a class='overlay-link before after animated-link' href='<?php echo $root; ?>story/'>Our Story</a>
                </div>
                <div class='col-xs-12 overlay-menu'>
                    <a class='overlay-link before after animated-link' href='<?php echo $root; ?>party/'>Wedding Party</a>
                </div>
                <div class='col-xs-12 overlay-menu'>
                    <a class='overlay-link before after animated-link' href='<?php echo $root; ?>schedule/'>Schedule</a>
                </div>
                <div class='col-xs-12 overlay-menu'>
                    <a class='overlay-link before after animated-link' href='<?php echo $root; ?>accommodations/'>Accommodations</a>
                </div>
                <div class='col-xs-12 overlay-menu'>
                    <a class='overlay-link before after animated-link' href='<?php echo $root; ?>nearby/'>Nearby</a>
                </div>
                <div class='col-xs-12 overlay-menu'>
                    <a class='overlay-link before after animated-link' href='<?php echo $root; ?>registry/'>Registry</a>
                </div>
            </div>
            <div class='row top-nav'>
                <div class='col-md-12  hidden-md hidden-sm hidden-xs'>
                    <div class='row big-nav'>
                        <div class='col-md-3 big-nav-link vcenter'>
                            <a class='brand-link' href="<?php echo $root; ?>home/"><h1>John and Lena</h1></a>
                        </div><!--
                     --><div class='col-md-1 big-nav-link vcenter'>
                            <a class='header-link before after animated-link' href='<?php echo $root; ?>story/'>Our Story</a>
                        </div><!--
                     --><div class='col-md-1 big-nav-link vcenter'>
                            <a class='header-link before after animated-link' href='<?php echo $root; ?>party/'>Wedding Party</a>
                        </div><!--
                     --><div class='col-md-1 big-nav-link vcenter'>
                            <a class='header-link before after animated-link' href='<?php echo $root; ?>schedule/'>Schedule</a>
                        </div><!--
                     --><div class='col-md-1 big-nav-link vcenter'>
                            <a class='header-link before after animated-link' href='<?php echo $root; ?>accommodations/'>Accommodations</a>
                        </div><!--
                     --><div class='col-md-1 big-nav-link vcenter'>
                            <a class='header-link before after animated-link' href='<?php echo $root; ?>nearby/'>Nearby</a>
                         </div><!--
                     --><div class='col-md-1 big-nav-link vcenter'>
                            <a class='header-link before after animated-link' href='<?php echo $root; ?>registry/'>Registry</a>
                        </div><!--
                     --><div class='col-md-1 col-md-offet-1 vcenter'>
                         <h3 class="brand-link">#RohlinWithTheCarrolls</h3>
                        </div>
                    </div>
                </div>
                <div class='row hidden-lg top-nav big-nav'>
                    <div class='col-xs-10 big-nav-link vcenter'>
                        <a class='brand-link' href="<?php echo $root; ?>home/"><h1>John and Lena</h1></a>
                    </div><!--
                 --><div class="col-xs-2 small-nav-link vcenter">
                        <a href='#' id='nav-overlay'><span class='glyphicon glyphicon-menu-hamburger'></span></a>
                    </div>
                </div>
            </div>
            