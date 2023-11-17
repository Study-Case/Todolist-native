<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");
    if($todo == "x")
    {
        //batal kembali ke show
        echo "Batal Menambah Todo". PHP_EOL;
        viewShowTodoList();
    }else{
        addTodoList($todo);
    }
}