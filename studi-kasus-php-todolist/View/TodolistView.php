<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->ShowTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Show Todo List" . PHP_EOL;
                echo "2. Remove Todo List" . PHP_EOL;
                echo "x. Selesai" . PHP_EOL;

                $pilihan = InputHelper::input("pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } elseif ($pilihan == "2") {
                    $this->removeTodolist();
                } elseif ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak valid." . PHP_EOL;
                }
            }

        echo "Terima kasih telah menggunakan aplikasi Todo List." . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "Menambahkan Daftar Todo" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal) ");

            if($todo == "x"){
                echo "Batal menambah Todo" . PHP_EOL;
            } else {
                // addTodoList($todo);
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "Menghapus Daftar Todo" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batal) ");

            if ($pilihan == "x") {
                Echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}