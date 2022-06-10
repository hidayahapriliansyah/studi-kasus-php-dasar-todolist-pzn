<?php

require_once __DIR__ . '/../../bussinesLogic/removeToDoList.php';
require_once __DIR__ . '/../../bussinesLogic/showToDoList.php';

showToDoList();
var_dump(removeToDoList(1));
showToDoList();
