<?php
require_once('Database.php');
use Config\Database;

$connection = Database::getConnection();
$connection = null;