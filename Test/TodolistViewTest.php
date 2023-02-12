<?php
require_once(__DIR__ . '/../Entity/Todolist.php');
require_once(__DIR__ . '/../Helper/InputHelper.php');
require_once(__DIR__ . '/../Repository/TodoListRepository.php');
require_once(__DIR__ . '/../Service/TodolistService.php');
require_once(__DIR__ . '/../View/TodolistView.php');
use View\TodolistView;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testView()
{
    $todolistView = new TodolistView(new TodolistServiceImpl(new TodolistRepositoryImpl()));
    $todolistView->showTodolist();
}
testView();