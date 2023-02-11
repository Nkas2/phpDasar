<?php

require_once('../Model/TodoList.php');
require_once('../BusinesLogic/AddTodoList.php');

addTodoList('Main Dota');
addTodoList('Main Genshin');
addTodoList('Main Valorant');

var_dump($todoList);