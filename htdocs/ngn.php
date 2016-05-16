<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-05-10
 * Time: 오후 10:05
 */
    define("HOST", "loacalhost");
    define("USER", "root");
    define("PASSWORD", "1234");
    define("DB_NAME", "ngn_db");
    
    $connect = mysql_connect(HOST, USER, PASSWORD) or
        die("Fail to connect to SQL Server");
    
    mysql_query("SET NAME UTF8");
    
    /**
     * Wear에서 온 요청 처리
     */
    $sql = "";
    $result = mysql_query($sql);


?>