<?php

require_once __DIR__ . '/../../bussinesLogic/addToDoList.php';
require_once __DIR__ . '/../../bussinesLogic/showToDoList.php';

addToDoList("Belajar Masak");
addToDoList("Belajar Makan");
showToDoList();
