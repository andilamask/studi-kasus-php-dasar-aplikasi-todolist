<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../view/ViewAddTodoList.php";
require_once __DIR__ . "/../view/ViewRemoveTodoList.php";
require_once __DIR__ . "/../helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Todo List:" . PHP_EOL;
        echo "1. Show Todo List" . PHP_EOL;
        echo "2. Remove Todo List" . PHP_EOL;
        echo "x. Selesai" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak valid." . PHP_EOL;
        }
    }

    echo "Terima kasih telah menggunakan aplikasi Todo List." . PHP_EOL;
}
