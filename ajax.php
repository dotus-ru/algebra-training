<?php
require_once $_SERVER['DOCUMENT_ROOT']."/mysql.php"; // подключимся к базе данных

$seconds = $_GET['s'];

$today = date("Y-m-d"); // 2016-02-05
$epoch =  strtotime(date("Y-m-d")); // 1454616000
Print $today."-".$epoch;
//echo date('Y-m-d', $epoch); // перевод из epoch 1454616000 в 2016-02-05

// Проверим, есть ли в базе данных строка с сегодняшней датой
$query="SELECT * FROM `results` WHERE `time` = $epoch";
$result=mysql_query($query);

$page = mysql_fetch_array($result);
print $page['res'];

if(mysql_num_rows($result)>0) {
    $addSeconds = mysql_query("UPDATE `results` SET `res` = CONCAT( '$seconds,', `res` ) WHERE `time` = $epoch;");
    //$res = $page['res'];
}
else {
    $query = mysql_query("INSERT INTO
    `results`
    SET
   `time` = $epoch,
   `prettime` = '$today',
   `res` = $seconds
    ") or trigger_error(mysql_error().$query);

    print "add";
}