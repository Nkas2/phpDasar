<?php
require_once(__DIR__ . "/../Helper/Input.php");
require_once(__DIR__ . "/../Model/TodoList.php");
require_once(__DIR__ . "/../BusinesLogic/AddTodoList.php");
function viewAddTodoList ()
{
    echo "Menambah Todo" . PHP_EOL;
    $todo = input("Todo (x untuk batal)");
    if ($todo == "x"){
        //batal
        echo "Batal Menambah Todo" . PHP_EOL;
    }else {
        addTodoList($todo);
    }
}