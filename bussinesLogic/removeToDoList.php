<?php

require_once __DIR__ . '/../model/modelToDoList.php';

function removeToDoList($number)
{
    global $lists;
    if ($number != (1 <= sizeof($lists))) {
        if (is_int($number)) {
            $pesan =  "To Do List no. $number tidak ada";
        } else {
            $pesan = "Pilihan yang Anda masukkan tidak dapat dimengerti";
        }
        return [false, $pesan];
    } else {
        for ($i = $number; $i < sizeof($lists); $i++) {
            $lists[$number] = $lists[$number + 1];
            unset($lists[sizeof($lists)]);
        }
        return [true];
    }
}
