<?php
use Repository\TodolistRepositoryImpl2;
require_once(__DIR__ . "/../Service/TodolistService.php");
require_once(__DIR__ . "/../Repository/TodoListRepository.php");
require_once(__DIR__ . "/../Entity/Todolist.php");

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl());

    $todolistService->showTodolist();
}

// testShowTodolist();
function testAddTodolist()
{
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl());

    $todolistService->addTodolist("makan");
    $todolistService->addTodolist("minum");

    $todolistService->showTodolist();
}
testAddTodolist();