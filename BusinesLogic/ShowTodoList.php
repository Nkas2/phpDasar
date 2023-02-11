<?php


/**
 * menampilkan todo di list
 */
function showTodoList()
{
    global $todoList;
    echo "Todo list" . PHP_EOL;

    foreach($todoList as $number => $value){
        echo "$number. $value".PHP_EOL;
    }
}