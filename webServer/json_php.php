<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-05-16
 * Time: 오후 7:38
 */

header('Content-Type: application/json');

require_once('UserDB.php');

$json_data = json_decode('{"a":1,"b":2,"c":3,"d":4,"e": true}');
var_dump($json_data);
?>


