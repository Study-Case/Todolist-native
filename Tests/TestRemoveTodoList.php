<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";


addTodoList("Anggie");
addTodoList("Pratama");
addTodoList("Andri");
addTodoList("Eko");
addTodoList("Purnomo");

showTodoList();

$removeTodoList = removeTodoList(9);
var_dump($removeTodoList);
showTodoList();

