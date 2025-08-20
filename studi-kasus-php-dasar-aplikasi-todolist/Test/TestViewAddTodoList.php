<?php

require_once "View/ViewAddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";


addTodoList("Belajar PHP Dasar");
addTodoList("Belajar OOP PHP");
addTodoList("Belajar Design Pattern");

viewAddTodoList();

showTodoList();
