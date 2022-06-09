<?php

require_once __DIR__ . '/../bussinesLogic/removeToDoList.php';
require_once __DIR__ . '/../bussinesLogic/showToDoList.php';
require_once __DIR__ . '/../helper/input.php';
require_once __DIR__ . '/../view/viewShowToDoList.php';

function viewRemoveToDoList()
{
    pclose(popen('cls', 'w'));

    echo "Hapus To Do List" . PHP_EOL;
    showToDoList();
    echo "Masukkan x untuk batal/kembali" . PHP_EOL;
    echo "Masukkan nomor to do list yang akan dihapus" . PHP_EOL;
    while (true) {
        $pilihan = input("");
        if ($pilihan == "x") break;
        removeToDoList(trim($pilihan));
        pclose(popen('cls', 'w'));
        showToDoList();
        if (isset(array())) {
            if (sizeof(array()) == 2) {
                echo array()[1];
            } else {
                echo "To Do List no. $pilihan berhasil dihapus";
            }
        }
        echo "Ada yang ingin dihapus lagi?" . PHP_EOL;
        echo "Masukkan x untuk batal/kembali" . PHP_EOL;
        echo "Masukkan nomor to do list yang akan dihapus" . PHP_EOL;
    }
}
