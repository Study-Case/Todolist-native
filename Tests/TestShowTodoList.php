<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

$todoList = [
    1 => "Belajar PHP Dasar",
    2 => "Belajar PHP OOP",
    3 => "Belajar PHP Mysql"
];

showTodoList();