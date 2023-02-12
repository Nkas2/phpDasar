<?php

namespace View{

    use Helper\InputHelper;
    use Service\TodolistService;

    class TodolistView  
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService){
            $this->todolistService = $todolistService;
        }
        public function showTodolist():void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "Menu" . PHP_EOL;
                echo "1 . Tambah Todo" . PHP_EOL;
                echo "2 . Hapus Todo" . PHP_EOL;
                echo "x . Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } elseif ($pilihan == "2") {
                    $this->removeTodolist();
                } elseif ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan Tidak Dimengerti" . PHP_EOL;
                }
            }
            echo "Sayonara" . PHP_EOL;
        }
        public function addTodolist():void
        {
            
             echo "Menambah Todo" . PHP_EOL;
            $todo = InputHelper::input("Todo (x untuk batal)");
            if ($todo == "x"){
                //batal
                echo "Batal Menambah Todo" . PHP_EOL;
            }else {
                $this->todolistService->addTodolist($todo);
            }
           
        }
        public function removeTodolist():void
        {
            echo "Menghapus Todo" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batal)");

            if($pilihan == "x"){
                echo "Batal menghapus todo";
            }else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
    
}