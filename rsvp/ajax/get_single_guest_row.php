<?php
include "../../controller/config.php";
$count = $_POST['guests'];
$count++;

$foodoptions = Foodoption::all();
$dropdown = "<select class='form-control' name='foodoption[]'>";
foreach($foodoptions as $fo){
    $dropdown .= "<option value='" . $fo->id . "'>" . $fo->name . "</option>'";
}
$dropdown .= "</select>";

$line_template .= "
    <div class='guest-container'>
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6 col-lg-3'>
                <label>Guest #" . $count . " First Name *</label>
                <input class='form-control required' type='text' placeholder='First Name' name='fname[]'/>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6 col-lg-3'>
                <label>Guest #" . $count . " Last Name *</label>
                <input class='form-control required' type='text' placeholder='Last Name' name='lname[]'/>
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
    </div>
";

echo $line_template;
