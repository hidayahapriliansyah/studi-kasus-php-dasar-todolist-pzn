<?php

require_once __DIR__ . '/../model/modelToDoList.php';

function showToDoList(): bool
{
    echo "TO DO LIST" . PHP_EOL;
    global $lists;
    if (sizeof($lists) == 0) {
        echo "To Do List Kosong. Silakan tambah to do list." . PHP_EOL;
        return false;
    } else {
        foreach ($lists as $number => $value) {
            echo "$number. $value" . PHP_EOL;
        }
        return true;
    }
}
