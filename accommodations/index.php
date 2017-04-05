<?php
$root = "../";
$title = "John and Lena's Wedding Website";
include "../layout/header.php";
?>
<div class='row'>
    <div class='col-xs-12 other-bg'>
        <h1>accommodations</h1>
    </div>
</div>
<div class='row border-bottom pad-top-10 pad-bottom-10'>
    <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 vcenter'>
        <img class='img img-center img-responsive accomm-img' src='../img/JL_Wyndham_color_1440x1440_002.png' />
    </div><!--
 --><div class='col-xs-12 col-sm-6 vcenter accomm-info'>
        <h1>3.7 Miles from Reception</h1><br/><br/>
        <p>$134.95 per Night when booking request group rate for <strong>Rohleder/Carroll Wedding Group</strong></p>
        <p>(610) 358-1700 ext. 3 - Ask for Paige</p>
        <p><a href='https://www.wyndhamhotels.com/wyndham-garden/glen-mills-pennsylvania/wyndham-garden-glen-mills-wilmington/overview' target="_blank">Website</a></p>
        <p>1110 Baltimore Pike, Glen Mills, PA 19342</p>
        <p class="hidden-xs hidden-sm">Directions between Reception and Hotel - <a href="#" id="show-hotel1" onclick="return false;">Google Maps</a></p>
        <p class="hidden-md hidden-lg">Directions between Reception and Hotel - <a target="_blank" href="https://goo.gl/maps/mSn9g85ZAYz">Google Maps</a></p>
    </div>
</div>

<div class='row pad-top-10 pad-bottom-10'>
    <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 vcenter'>
        <img class='img img-center img-responsive accomm-img' src='../img/JL_Hampton_color_1440x1440_001.png' />
    </div><!--
 --><div class='col-xs-12 col-sm-6 vcenter accomm-info'>
        <h1>2.9 Miles from Reception</h1><br/><br/>
        <p>$145 per Night when booking request group rate for <strong>Rohleder/Carroll Wedding Room Block</strong></p>
        <p>(888) 370 0981</p>
        <p><a href='http://hamptoninn3.hilton.com/en/hotels/pennsylvania/hampton-inn-and-suites-chadds-ford-CFORDHX/index.html' target="_blank">Wesbite</a></p>
        <p>40 State Farm Drive, Glen Mills, PA 19342</p>
        <p class="hidden-xs hidden-sm">Directions between Reception and Hotel - <a href="#" id="show-hotel2" onclick="return false;">Google Maps</a></p>
        <p class="hidden-md hidden-lg">Directions between Reception and Hotel - <a target="_blank" href=https://goo.gl/maps/SpRhJMfotJz">Google Maps</a></p>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="hotel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Wyndham Garden Hotel to Penn Oaks County Club</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="hotel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hampton Inn & Suites Chadds Ford to Penn Oaks County Club</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type='text/javascript' src='accommodations.js'></script>
<?php

include "../layout/footer.php";
