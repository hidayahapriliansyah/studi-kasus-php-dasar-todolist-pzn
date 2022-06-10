<?php

require_once __DIR__ . '/../model/modelToDoList.php';

function removeToDoList($number)
{
    global $lists;
    if ($number){

    }
    } else {
        for ($i = $number; $i < sizeof($lists); $i++) {
            $lists[$number] = $lists[$number + 1];
            unset($lists[sizeof($lists)]);
        }
        return true;
    }
}
