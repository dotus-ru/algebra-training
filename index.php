<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 03.02.2016
 * Time: 11:10
 */

function generateRandomNumber($how){
    $count = 1; // инициализация счётчика
    $exit = ''; // переменная для сгенерированного числа
    while($count <= $how){
        if($count == 1){ // если генерируем первое число в серии, оно будет от 1 до 9
            $exit .= mt_rand(1,9);
        }
        else{ // все последующие генерируются от 0 до 9
            $exit .= mt_rand(0,9); //
        }
        $count++;
    }

    return $exit;
}

print generateRandomNumber(5)." + ".generateRandomNumber(5); // пример вызова генерации числа с заданным кол символов