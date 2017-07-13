<?php
//grab POST data
$start_fname = ($_POST['start_fname'] ? $_POST['start_fname'] : NULL);
$start_lname = ($_POST['start_lname'] ? $_POST['start_lname'] : NULL);
$guests_attending = ($_POST['guests_attending'] ? $_POST['guests_attending'] : NULL);
$guests_attending = (int)$guests_attending;
var_dump($guests_attending);
die();
$fnames = ($_POST['fname'] ? $_POST['fname'] : array());
$lnames = ($_POST['lname'] ? $_POST['lname'] : array());
$foodoptions = ($_POST['foodoption'] ? $_POST['foodoption'] : array());
$dietaries = ($_POST['dietary'] ? $_POST['dietary'] : array());
$note = ($_POST['note'] ? $_POST['note'] : '');

//set up alert variables
$alert = FALSE;
$alertType = 'success';
$alertMessage = '';

//database create tracking
$built_guests = array();
$saved_guests = array();
$guest_error = FALSE;

//check to make sure form data is ready for entry
if($start_fname && $start_lname && count($fnames) == $guests_attending && count($lnames) == $guests_attending && count($foodoptions) == $guests_attending && count($dietaries) == $guests_attending){
    $alert = TRUE; //an entry attempt will be made, so an alert must be displayed
    $response = new Response();
    $response->fname = $start_fname;
    $response->lname = $start_lname;
    $response->accepts = ($guest_attending > 0 ? TRUE : FALSE);
    $response->note = $note;

    //set up success alert message depending on accepts or regrets
    $alertMessage = ($guest_attending > 0 ? 'Thank you. Your RSVP has been recieved. See you September 30th!' : 'Your RSVP has been recieved. Sorry to hear you cannot make it!');

    if($guests_attending > 0){
        for($x = $guests_attending - 1; $x--; $x >= 0){
            $temp_guest = new Guest();
            $temp_guest->fname = $fnames[$x];
            $temp_guest->lname = $lnames[$x];
            $temp_guest->foodoption_id = $foodoptions[$x];
            $temp_guest->dietary = $dietaries[$x];
            array_push($built_guests, $temp_guest);
        }
    }
}

if($response->save()){
    foreach($built_guests as $guest){
        $guest->response_id = $response->id;
        if(!$guest->save()){
            $guest_error = TRUE;
            $alertType = 'danger';
            $alertMessage = 'There has been an error. RSVP not recieved. Please try again later.';
            break;
        }else{
            array_push($saved_guests, $guest);
        }
    }
}else{
    $alertType = 'danger';
    $alertMessage = 'There has been an error. RSVP not recieved. Please try again later.';
}

if($guest_error){
    foreach($saved_guests as $guest){
        $guest->delete();
    }
}
?>
