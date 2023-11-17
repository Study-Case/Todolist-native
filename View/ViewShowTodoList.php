<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

function viewShowTodoList()
{
    while(true) {
        showTodoList();

        echo "MENU" . PHP_EOL;

        echo "1. Tambah Data" . PHP_EOL;
        echo "2. Hapus Data" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $opsi = input("Masukkan Pilihan");

        if ($opsi == "1") {
            viewAddTodoList();
        } elseif ($opsi == "2") {
            viewRemoveTodoList();
        } elseif ($opsi == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}