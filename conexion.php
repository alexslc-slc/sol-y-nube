<?php

    function conexion(){

    $host = "dpg-da7fltm417fc73fl23rg-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=odenfishx";
    $user = "user=odenfishx_user";
    $password = "password=mqKxRPcmskMBjA3ALZLJYm83kMJNjJOA";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>