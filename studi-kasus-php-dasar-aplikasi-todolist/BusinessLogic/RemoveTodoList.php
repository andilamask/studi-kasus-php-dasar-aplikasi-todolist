<?php

/**
 * Menghapus todo list
 */

function removeTodoList(int $number): bool
{
    global $todoList;

    if($number > sizeof($todoList)) {
        return false;
    }

    for ($i = 1; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;

}