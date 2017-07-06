<?php
class Foodselection extends ActiveRecord\Model {

    //data relationship definitions
    static $belongs_to = array(
        array('guest'),
        array('foodoption')
    );
}
