<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus Daftar Todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal) ");

    if ($pilihan == "x") {
        Echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if($success) {
            echo "Sukses mengahapus todo ke-" . $pilihan . PHP_EOL;
        } else {
            echo "Gagal menghapus todo ke-" . $pilihan . PHP_EOL;
        }
    }
}