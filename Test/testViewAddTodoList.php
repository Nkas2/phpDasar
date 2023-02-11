<?php

require_once("../View/ViewAddTodoList.php");
require_once("../BusinesLogic/ShowTodoList.php");
require_once("../BusinesLogic/AddTodoList.php");

addTodoList("makan");
addTodoList("minum");
addTodoList("makan");
viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();