<?php
if($_SERVER['HTTP_HOST'] == "a.bobr.in")
    {
        $db = mysql_connect('localhost', '-', '-') or die("Сервер баз данных временно недоступен");
        mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
        mysql_select_db('-', $db);
    }

if($_SERVER['HTTP_HOST'] == "algebra.by")
    {
        $link = mysql_connect('localhost', 'root', '') or die("Сервер баз данных временно недоступен");
        mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
        mysql_select_db('algebra', $link);
    }