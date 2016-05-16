<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-05-16
 * Time: 오후 7:38
 */

header('Content-Type: application/json');

require_once('UserDB.php');

$json_data = json_decode('{"idx": "1"}');
var_dump($json_data);

class Address {
    public $street = "";
    public $city = "";
    public $state = "";

    function __construct($street, $city, $state)
    {
        $this->state = $street;
        $this->city = $city;
        $this->state = $state;
    }
}


?>