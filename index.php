<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 03.02.2016
 * Time: 11:10
 */

function generateRandomNumber($how){
    $count;
    while($count < $how){
        $exit = mt_rand(0,9);
        $count++;
    }

    return $exit;
}

print generateRandomNumber(5);