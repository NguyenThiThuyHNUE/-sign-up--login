<?php
include "./Db_connect.php";
$db_connect=new Db_connect();
echo $db_connect->connect();