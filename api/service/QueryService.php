<?php

require_once __DIR__."/../dto/QueryDTO.php";
require_once __DIR__."/../business/impl/QueryBOimpl.php";

$queryBo=new QueryBOimpl();
$method=$_SERVER['REQUEST_METHOD'];

switch ($method){
    case "POST":
        $roomType=$_POST['typeNo'];
        $startDate=$_POST['reserveDateText'];
        $endDate=$_POST['endDateText'];
        $operation=$_POST['operation'];
        switch ($operation){
            case "search":
                $queryBo->searchReserve($roomType,$startDate,$endDate);
                break;
        }
        break;
    case "GET":
        $operation=$_GET['operation'];
        switch ($operation){
            case "getReservationsForAdmin":
                echo json_encode($queryBo->getReservationsForAdmin());
                break;
        }
        break;
}

