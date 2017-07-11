<?php
$root = "../";
$title = "John and Lena's Wedding Website";
include "../layout/header.php";
include "saveResponses.php";

?>
<div class='row'>
    <div class='col-xs-12 other-bg'>
        <h1>thank you</h1>
    </div>
</div>
<div class='row pad-top-20'>
    <div class='col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center'>
        <div class='alert alert-<?=$alertType?> <?php echo (!$alert ? 'hidden' : '') ?>' id='page-alert'>
            <button type="button" class="close" onClick='$(this).closest(".alert").addClass("hidden");'>
                <span aria-hidden="true">&times;</span>
            </button>
            <div id='page-alert-message'>
                <?=$alertMessage;?>
            </div>
        </div>
    </div>
</div>
<div class='row pad-top-20'>
    <div class='col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center'>
        <h1>About Our Website</h1>
    </div>
</div>
<div class='row pad-top-20 pad-bottom-20'>
    <div class='col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center'>
        <p>First of all, a MASSIVE thank you is owed to Matthew Roeder. All the beautiful images and graphics you see on this site are his handywork. THANK YOU MATT WE LOVE YOU!!!</p>
        <p>Secondly thank you to our parents! Jay, Karen, John and Lisa have been overwhelmingly supportive and never overbearing. We are so thankful for this balance and feel blessed to have amazing parents in our lives.</p>
        <p>Finally, in the spirit of collaboration, this website is open-source. Feel free to download and use the code for your own purposes <a target="_blank" href='https://github.com/johntcarroll/wedding'>here</a>.</p>
    </div>
</div>
<script type='text/javascript' src='home.js'></script>
<?php

include "../layout/footer.php";
