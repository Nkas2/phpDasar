<?php

namespace Repository {

    use Entity\Todolist;
    use PDO;

    interface TodolistRepository {
        function save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findall(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository {

        private array $todolist = array();
        private PDO $connection;

        public function __construct(PDO $connection){
            $this->connection = $connection;
        }
        
	    public function save(Todolist $todolist): void {
            // $number = sizeof($this->todolist) + 1;
            // $this->todolist[$number] = $todolist;
            $sql = "INSERT INTO todolist(todo) VALUES(?)";
            $statement =  $this->connection->prepare($sql);
            $statement->execute([$todolist->getTodo()]);
	    }
	
	    public function remove(int $number): bool {
            // if($number > sizeof($this->todolist)){
            //     return false;
            // }
            // for($i = $number; $i < sizeof($this->todolist); $i++){
            //     $this->todolist[$i] = $this->todolist[$i + 1];
            // }
            // unset($this->todolist[sizeof($this->todolist)]);
            // return true;

            $sql = "SELECT id FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            if($statement->fetch()){
                $sql = "DELETE FROM todolist WHERE id = ?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$number]);
                return true;
            }else {
                return false;
            }

	    }
	
        public function findall(): array {
            // return $this->todolist;
            $sql = "SELECT id,todo FROM todolist";
            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $array = [];

            foreach ($statement as $row) {
                $todo = new Todolist();
                $todo->setId($row['id']);
                $todo->setTodo($row['todo']);
                $array[] = $todo;
            }
            return $array;

        }
    }
}