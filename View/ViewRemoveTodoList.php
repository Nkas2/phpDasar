<?php
require_once(__DIR__ . "/../Helper/Input.php");
require_once(__DIR__ . "/../BusinesLogic/RemoveTodoList.php");
function viewRemoveTodoList()
{
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if($pilihan == "x"){
        echo "Batal menghapus todo";
    }else {
        $success = removeTodoList($pilihan);

        if($success){
            echo "Sukses Menghapus Todo";
        }else{
            echo "Gagal Menghapus Todo";
        }
    }
}