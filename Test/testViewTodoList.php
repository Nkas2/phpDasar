<?php

require_once("../View/ViewShowTodoList.php");
require_once("../BusinesLogic/AddTodoList.php");

addTodoList("Makan");
addTodoList("Minum");
addTodoList("Mandi");

viewShowTodoList();