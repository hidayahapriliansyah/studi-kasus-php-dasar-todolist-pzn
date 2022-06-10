<?php

require_once __DIR__ . '/../bussinesLogic/removeToDoList.php';
require_once __DIR__ . '/../bussinesLogic/addToDoList.php';
require_once __DIR__ . '/../bussinesLogic/showToDoList.php';
require_once __DIR__ . '/../helper/input.php';
require_once __DIR__ . '/../view/viewShowToDoList.php';

function viewRemoveToDoList()
{
    pclose(popen('cls', 'w'));

    echo "Hapus To Do List" . PHP_EOL;
    while (true) {
        $todolist = showToDoList();
        if ($todolist == false) {
            echo "Masukkan x untuk batal/kembali" . PHP_EOL;
            $input = input("Tambah To Do List");
            if ($input == "x") break;
            addToDoList($input);
            break;
        } else {
            echo "Masukkan x untuk batal/kembali" . PHP_EOL;
            echo "Masukkan nomor to do list yang akan dihapus" . PHP_EOL;
            $pilihan = input("To Do yang akan dihapus");
            if ($pilihan == "x") break;
            $removeToDoList = removeToDoList($pilihan);
            pclose(popen('cls', 'w'));
            echo "Hapus To Do List" . PHP_EOL;
            if ($removeToDoList == false) echo "Pilihan yang Anda maksud gagal dihapus" . PHP_EOL;
        }
    }
}
