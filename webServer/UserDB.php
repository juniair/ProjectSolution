<?php

/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-05-16
 * Time: 오후 7:35
 */
define("HOST", "localhost");
define("USER_NAME", "root");
define("USER_PASSWORD", "1234");
define("USER_DB", ngn_db);
$query = "insert into 'member'(idex, id)". "value ('1', '12345')";

$dbc = mysql_connect(HOST, USER_NAME, USER_PASSWORD);
mysql_select_db($dbc, USER_DB);

$result = mysql_query($dbc, $query) or die(mysql_error($dbc));

mysql_close($dbc);
?>