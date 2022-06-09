<?php

require_once __DIR__ . '/../model/modelToDoList.php';

function addToDoList(string $data)
{
    global $lists;
    $lists[sizeof($lists) + 1] = $data;
}
