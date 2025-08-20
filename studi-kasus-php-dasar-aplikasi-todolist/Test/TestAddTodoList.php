<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Andila");
addTodoList("Belajar PHP Lanjut");

var_dump ($todoList);
