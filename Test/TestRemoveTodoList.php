<?php

require_once('../Model/TodoList.php');
require_once('../BusinesLogic/RemoveTodoList.php');
require_once('../BusinesLogic/AddTodoList.php');
require_once('../BusinesLogic/ShowTodoList.php');

addTodoList('Makan');
addTodoList('Minum');
addTodoList('Main');
addTodoList('Gym');

showTodoList();

removeTodoList(7);

showTodoList();