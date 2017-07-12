<?php
$root = "../";
$title = "John and Lena's Wedding Website";
include "../controller/config.php";
include "../layout/header.php";
?>
<div class='row'>
    <div class='col-xs-12 other-bg'>
        <h1>rsvp</h1>
    </div>
</div>
<form method='post' action='../thankyou/index.php' id='rsvp_form'>
    <div class='row'>
        <div class='col-xs-12 text-center'>
            <h2>Please complete the fields below to RSVP</h2>
        </div>
    </div>
    <div class='row' class='pad-top-10' id='starting_line'>
        <div class='col-sm-4 col-xs-12'>
            <label>First Name</label>
            <input class='form-control' name='start_fname' id='start_fname' />
        </div>
        <div class='col-sm-4 col-xs-12'>
            <label>Last Name</label>
            <input class='form-control' name='start_lname' id='start_lname' />
        </div>
        <div class='col-sm-4 col-xs-12'>
            <label>Number of Guests Attending</label>
            <select class='form-control' name='guests_attending' id='guests_attending'>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
            </select>
        </div>
    </div>
    <div class='row pad-top-10'>
        <div class='col-xs-12'>
            <button type='submit' class='btn btn-success' name='continue_button' value='1' id='continue'>
                Continue!
            </button>
        </div>
    </div>
</form>
<script type='text/javascript' src='rsvp.js'></script>
<?php
include "../layout/footer.php";
