<?php
class Foodoption extends ActiveRecord\Model {

    //data relationship definitions
    static $has_many = array(
        array('foodselections')
    );
}
