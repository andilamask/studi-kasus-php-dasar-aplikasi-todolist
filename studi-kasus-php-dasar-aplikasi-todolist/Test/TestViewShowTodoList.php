<?php

require_once "View/ViewShowTodoList.php";
require_once "businessLogic/AddTodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar OOP PHP");

viewShowTodoList();