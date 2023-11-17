<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";
function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $opsi = input("Nomor (x untuk batalkan)");


    if($opsi == "x"){
        echo "Batal Menghapus Todo" . PHP_EOL;
        viewShowTodoList();
    }else {

        $success = removeTodoList($opsi);

        if($success)
        {
            echo "Berhasil Menghapus Todo nomor $opsi" . PHP_EOL;
        }else {
            echo "Batal Menghapus Todo $opsi" . PHP_EOL;
        }
    }
}