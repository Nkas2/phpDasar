<?php

namespace Service{

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService{
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        public function showTodolist(): void 
        {
            echo "Todo list" . PHP_EOL;

            foreach($this->todolistRepository->findall() as $number => $value){
                echo $value->getId() . ". ". $value->getTodo() .PHP_EOL; // error
            }
        }

        public function addTodolist(string $todo): void {
            $todolist = new Todolist($todo);
            // var_dump($todolist);
            $this->todolistRepository->save($todolist);
            echo "Berhasil Menambah data ke todolist" . PHP_EOL;
        }

        public function removeTodolist(int $number): void {
            if ($this->todolistRepository->remove($number)) {
                echo "Berhasil menghapus todo" . PHP_EOL;
            }else {
                echo "Gagal menghapus todo" . PHP_EOL;
            }
        }
    }
}