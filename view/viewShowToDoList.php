<?php

require_once __DIR__ . '/../bussinesLogic/showToDoList.php';
require_once __DIR__ . '/../view/viewAddToDoList.php';
require_once __DIR__ . '/../view/viewRemoveToDoList.php';
require_once __DIR__ . '/../helper/input.php';

function viewShowToDoList()
{
    while (true) {
        pclose(popen('cls', 'w'));
        showToDoList();

        echo "MENU : " . PHP_EOL;
        echo "1. Tambah To Do List " . PHP_EOL . "2. Hapus To Do List" . PHP_EOL . "x. Keluar" . PHP_EOL;
        if (isset($pesan)) echo $pesan;
        $pilihan = input("Pilihan Anda");
        $pesan = "";
        if ($pilihan == "1") {
            viewAddToDoList();
        } elseif ($pilihan == "2") {
            viewRemoveToDoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            $pesan = "Pilihan yang Anda masukkan tidak dapat dimengerti." . PHP_EOL;
        }
    }

    $pesan = "Sampai jumpa ...";
    for ($i = 0; $i <= (strlen($pesan) - 1); $i++) {
        usleep(100000);
        echo "$pesan[$i]";
    }
}
