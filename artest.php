<?php
include "controller/config.php";
$guest = new Guest();
$guest->fname = 'John';
$guest->lname = 'Carroll';
$guest->response_id = 1;
$guest->save();

 ?>
