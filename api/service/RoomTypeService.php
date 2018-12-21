<?php

require_once __DIR__."/../dto/RoomTypeDTO.php";
require_once __DIR__."/../business/impl/RoomTypeBOimpl.php";

$roomTypeBo=new RoomTypeBOimpl();
$method=$_SERVER['REQUEST_METHOD'];

switch ($method){
    case "GET":
        $operation=$_GET["operation"];
        switch ($operation){
            case "getAll":
                ob_start();
                ob_end_clean();
                echo json_encode($roomTypeBo->getAllRoomTypes());
                break;

            case "search":

                break;
        }
        break;
    case "POST":

        break;

}