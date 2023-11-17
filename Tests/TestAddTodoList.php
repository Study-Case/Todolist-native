<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Anggie");
addTodoList("Pratama");

var_dump($todoList);