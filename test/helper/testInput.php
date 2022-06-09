<?php

require_once __DIR__ . '/../../helper/input.php';

$name = input("Nama");
var_dump("$name");

if ($name == "x") echo "itu x";
