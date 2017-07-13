<?php
include "../../controller/config.php";
$guests = $_POST['guests'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$foodoptions = Foodoption::all();
$dropdown = "<select class='form-control' name='foodoption[]'>";
foreach($foodoptions as $fo){
    $dropdown .= "<option value='" . $fo->id . "'>" . $fo->name . "</option>'";
}
$dropdown .= "</select>";

$line_template = "
    <div class='row pad-top-10'>
        <div class='col-xs-12 text-right pad-bottom-10'>
            <div class='btn-group'>
                <button class='btn btn-sm btn-default' type='button' id='add_guest'>Add Guest</button>
                <button class='btn btn-sm btn-default' type='button' id='remove_guest'>Remove Guest</button>
            </div>
        </div>
    </div>
";
for ($count = 1; $count <= $guests; $count++) {
    $line_template .= "
        <div class='guest-container'>
            <div class='row'>
                <div class='col-xs-12 col-sm-6 col-md-6 col-lg-3'>
                    <label>Guest #" . $count . " First Name *</label>
                    <input class='form-control required' type='text' placeholder='First Name' name='fname[]' value='" . ($count == 1 ? $fname : '') . "' />
                </div>
                <div class='col-xs-12 col-sm-6 col-md-6 col-lg-3'>
                    <label>Guest #" . $count . " Last Name *</label>
                    <input class='form-control required' type='text' placeholder='Last Name' name='lname[]' value='" . ($count == 1 ? $lname : '') . "' />
                </div>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-3'>
                    <label>Guest #" . $count . " Dinner Option</label>";
    $line_template .= $dropdown;
    $line_template .= "
                </div>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-3'>
                    <label>Guest #" . $count . " Dietary Restrictions</label>
                    <input type='text' class='form-control' name='dietary[]'>
                </div>
            </div>
    ";
    if($count != $guests){
        $line_template .= "<hr/>";
    }
    $line_template .= "</div>";
}

echo $line_template;
