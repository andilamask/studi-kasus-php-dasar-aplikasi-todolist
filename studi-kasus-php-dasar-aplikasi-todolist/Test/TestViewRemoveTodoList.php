<?php

require_once "Model/TodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar OOP PHP");
addTodoList("Belajar Design Pattern");
addTodoList("Belajar Design Pattern 2");
addTodoList("Belajar Design Pattern 3");

showTodoList();

viewRemoveTodoList();

showTodoList();