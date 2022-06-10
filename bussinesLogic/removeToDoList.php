<?php

require_once __DIR__ . '/../model/modelToDoList.php';

function removeToDoList(string $number)
{
    global $lists;
    if ((int)$number == true && ((int)$number >= 1 && (int)$number <= sizeof($lists))) {
        for ($i = $number; $i < sizeof($lists); $i++) {
            $lists[$i] = $lists[$i + 1];
        }
        unset($lists[sizeof($lists)]);
    } else if ($number == "x") {
        return true;
    } else {
        return false;
    }
}
