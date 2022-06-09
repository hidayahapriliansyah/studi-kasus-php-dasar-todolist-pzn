<?php

require_once __DIR__ . '/../model/modelToDoList.php';

function removeToDoList($number)
{
    global $lists;
    for ($i = $number; $i < sizeof($lists); $i++) {
        $lists[$number] = $lists[$number + 1];
        unset($lists[sizeof($lists)]);
    }
}
