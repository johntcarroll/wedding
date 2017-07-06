<?php
class Response extends ActiveRecord\Model {

    //data relationship definitions
    static $has_many = array(
        array('guests')
    );
}
