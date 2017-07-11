<?php
class Guest extends ActiveRecord\Model {

    //data relationship definitions
    static $belongs_to = array(
        array('response')
    );

    static $has_one = array(
        array('foodoption')
    );
}
