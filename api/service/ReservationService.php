<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/25/2018
 * Time: 10:47 AM
 */


require_once __DIR__."/../business/impl/ReservationBOimpl.php";
require_once __DIR__."/../business/impl/QueryBOimpl.php";
require_once __DIR__."/../dto/ReservationDTO.php";

$reservationBo=new ReservationBOimpl();
$queryBo=new QueryBOimpl();
$method=$_SERVER['REQUEST_METHOD'];

switch ($method){
    case "POST":
        $operation=$_POST['operation'];
        switch ($operation){
            case "save":
                $dateIn=$_POST['reserveDateText'];
                $dateOut=$_POST['endDateText'];
                $noOfRooms=$_POST['NoOfRooms'];
                $roomType=$_POST['typeNo'];
                $price=$_POST['totalPriceH2'];
                if(isset($_COOKIE["username"])&&($_COOKIE['password'])){
                    $cid=$_COOKIE['cid'];
                    $isAdded=$reservationBo->addReserve(new ReservationDTO(0,$noOfRooms,$dateIn,$dateOut,$price,$cid, $roomType));
                    echo $isAdded;
                }else{
                    echo -1;
                }
                break;
            case "getSummary":

                if(isset($_COOKIE["username"])&&($_COOKIE['password'])) {
                    $cid = $_COOKIE['cid'];
                    echo json_encode($queryBo->getSummary($cid));
                }else{
                    echo -1;
                }

                break;
        }
        break;

    case "GET":

        break;
}
