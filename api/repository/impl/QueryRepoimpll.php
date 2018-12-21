<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 9:30 PM
 */
require_once __DIR__."/../QueryRepo.php";
require_once __DIR__."/../../dbconnection/DBConnection.php";

class QueryRepoimpll implements QueryRepo {

    private $connection;

//    /**
//     * QueryRepoimpll constructor.
//     */
//    public function __construct(){
//        $this->connection=(new DBConnection())->getConnection();
//    }

    /**
     * @param mysqli $connection
     */
    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }


    function searchReserve($rtid, $dateIn, $dateOut):array {
       $result=$this->connection->query("SELECT rtid, COUNT(rid) FROM rooms WHERE rtid={$rtid} AND rid NOT IN(SELECT rid FROM room_reserve WHERE rsid NOT IN(SELECT rsid FROM reservations WHERE ((date_in<'{$dateIn}' AND date_out<'{$dateIn}')AND(date_in<'{$dateOut}' AND date_out<'{$dateOut}')) OR ((date_in>'{$dateIn}' AND date_out>'{$dateIn}')AND(date_in>'{$dateOut}' AND date_out>'{$dateOut}')))) GROUP BY rtid ;");
       $row=mysqli_fetch_array($result);
       return $row;
    }

    public function getFreeRooms($getRtid, $getDateIn, $getDateOut):array {
        $result=$this->connection->query("SELECT rooms.rid FROM rooms WHERE rooms.rtid={$getRtid} AND rid NOT IN(SELECT rid FROM room_reserve WHERE rsid NOT IN(SELECT rsid FROM reservations WHERE ((date_in<'{$getDateIn}' AND date_out<'{$getDateIn}')AND(date_in<'{$getDateOut}' AND date_out<'{$getDateOut}'))OR ((date_in>'{$getDateIn}' AND date_out>'{$getDateIn}')AND(date_in>'{$getDateOut}' AND date_out>'{$getDateOut}')))) GROUP BY rooms.rid ;");
        return $result->fetch_all();
    }

    public function getSummary($cid):array{
        $result=$this->connection->query("SELECT r.rsid, r.no_of_rooms, r.date_in, r.date_out, r.total , r.cid, r.rtid, rt.description FROM reservations r ,roomType rt WHERE r.rtid=rt.rtid AND r.cid='{$cid}' AND date_in >CURRENT_DATE;");
        return $result->fetch_all();
    }

    public function getReservationsForAdmin():array {
        $result=$this->connection->query("SELECT r.rsid, r.no_of_rooms, r.date_in, r.date_out, r.total, c.name, c.tel, rm.rid, rm.rtid, rt.description FROM reservations r, rooms rm, customer c, room_reserve rr, roomType rt WHERE rt.rtid=r.rtid AND r.cid=c.cid AND r.rsid=rr.rsid AND rr.rid=rm.rid AND r.date_in>CURRENT_DATE GROUP BY r.rsid;");
        return $result->fetch_all();
    }

}