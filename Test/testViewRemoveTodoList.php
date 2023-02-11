<?php

require_once("../View/ViewRemoveTodoList.php");
require_once("../Model/TodoList.php");
require_once("../BusinesLogic/AddTodoList.php");
require_once("../BusinesLogic/ShowTodoList.php");

addTodoList('makan');
addTodoList('minum');
addTodoList('berak');

showTodoList();
viewRemoveTodoList();
showTodoList();