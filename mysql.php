<?php
if($_SERVER['HTTP_HOST'] == "www.bobruisk.info")
    {
        $db = mysql_connect('localhost', 'user1164321', 'K9BrmT5U') or die("Сервер баз данных временно недоступен");
        mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
        mysql_select_db('user1164321_bobruisk', $db);
    }

if($_SERVER['HTTP_HOST'] == "algebra.by")
    {
        $link = mysql_connect('localhost', 'root', '') or die("Сервер баз данных временно недоступен");
        mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
        mysql_select_db('algebra', $link);
    }