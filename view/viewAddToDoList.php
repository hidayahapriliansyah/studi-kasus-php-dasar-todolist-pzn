<?php

require_once __DIR__ . '/../bussinesLogic/addToDoList.php';
require_once __DIR__ . '/../bussinesLogic/showToDoList.php';
require_once __DIR__ . '/../helper/input.php';
require_once __DIR__ . '/../view/viewShowToDoList.php';

function viewAddToDoList()
{
    pclose(popen('cls', 'w'));

    echo "Tambah To Do List" . PHP_EOL;
    echo "Masukkan x untuk batal/kembali" . PHP_EOL;
    while (true) {
        $pilihan = input("");
        if ($pilihan == "x") break;
        addToDoList(trim($pilihan));
        pclose(popen('cls', 'w'));
        showToDoList();
        echo "Ada yang ingin ditambahkan lagi?" . PHP_EOL;
        echo "Masukkan x untuk batal/kembali" . PHP_EOL;
    }
}
