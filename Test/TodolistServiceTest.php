<?php

require_once(__DIR__ . "/../Service/TodolistService.php");
require_once(__DIR__ . "/../Repository/TodoListRepository.php");
require_once(__DIR__ . "/../Entity/Todolist.php");
require_once(__DIR__ . '/../Config/Database.php');

use Config\Database;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{
    $connection = Database::getConnection();
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl($connection));
    $todolistService->addTodolist("makan");
    $todolistService->addTodolist("minum");
    $todolistService->showTodolist();
}

testShowTodolist();
function testAddTodolist()
{
    $connection = Database::getConnection();
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl($connection));

    $todolistService->addTodolist("makan");
    $todolistService->addTodolist("minum");

    // $todolistService->showTodolist();
}
// testAddTodolist();
function testRemoveTodolist()
{
    $connection = Database::getConnection();
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl($connection));

    $todolistService->removeTodolist(5);
    $todolistService->removeTodolist(4);
    $todolistService->removeTodolist(3);
    $todolistService->removeTodolist(2);
    $todolistService->removeTodolist(1);

    
}
// testRemoveTodolist();