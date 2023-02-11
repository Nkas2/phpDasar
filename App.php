<?php

require_once(__DIR__ . '/model/TodoList.php');
require_once(__DIR__ . '/BusinesLogic/addTodoList.php');
require_once(__DIR__ . '/BusinesLogic/ShowTodoList.php');
require_once(__DIR__ . '/BusinesLogic/RemoveTodoList.php');
require_once(__DIR__ . '/View/ViewAddTodoList.php');
require_once(__DIR__ . '/View/ViewShowTodoList.php');
require_once(__DIR__ . '/View/ViewRemoveTodoList.php');
require_once(__DIR__ . "/Helper/Input.php");

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();