<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/26/2018
 * Time: 12:33 PM
 */

require_once __DIR__."/../ReservationRepo.php";
require_once __DIR__."/../../dto/ReservationDTO.php";
require_once __DIR__."/../../dbconnection/DBConnection.php";
class ReservationRepoimpl implements ReservationRepo{

    private $connection;

//    public function __construct(){
//        $this->connection=(new DBConnection())->getConnection();
//    }

    /**
     * @param mysqli $connection
     */
    public function setConnection(mysqli $connection): void{
        $this->connection = $connection;
    }


    function addReservation(ReservationDTO $r): bool{
        //echo $r->getRid()."  ".$r->getNoOfRooms()."  ".$r->getDateIn()."  ".$r->getDateOut()."  ".$r->getTotal()."  ".$r->getCid()."  ";
        $result=$this->connection->query("INSERT INTO reservations VALUES('{$r->getRid()}','{$r->getNoOfRooms()}','{$r->getDateIn()}','{$r->getDateOut()}','{$r->getTotal()}','{$r->getCid()}','{$r->getRtid()}')");
        if ($result) {
            return $result;
        } else {
            echo mysqli_error($this->connection);
            return 0;
        }

    }

    function addRoomReserve(Room_Reserve $r): bool{

        $result=$this->connection->query("INSERT INTO room_reserve VALUES('{$r->getRrid()}','{$r->getRid()}','{$r->getRsid()}')");
        if($result>0){
            return $result;
        }else{
            echo mysqli_error($this->connection);
            return 0;
        }

    }

    function getLastId(): array {
        $result=$this->connection->query("select rsid from reservations order by rsid desc limit 1");
        return $result->fetch_all();
    }
}