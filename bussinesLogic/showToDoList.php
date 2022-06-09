<?php

require_once __DIR__ . '/../model/modelToDoList.php';

function showToDoList()
{
    echo "TO DO LIST" . PHP_EOL;
    global $lists;
    foreach ($lists as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
