<?php
require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Anggie");
addTodoList("Pratama");
addTodoList("Andri");
addTodoList("Eko");
addTodoList("Purnomo");

showTodoList();

viewRemoveTodoList();

showTodoList();