<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 4:55 PM
 */
require_once __DIR__."/../RoomTypeRepo.php";
class RoomTypeRepoimpl implements RoomTypeRepo {
   private $connection;

    /**
     * RoomTypeRepoimpl constructor.
     */
    public function __construct(){
        $this->connection=(new DBConnection())->getConnection();
    }
//
    function setConnection(mysqli $connection){
        $this->connection=$connection;
    }

    function addRoomTypes(RoomTypeDTO $roomTypeDTO): bool{

    }

    function deleteRoomTypes($typeId): bool{

    }

    function getAllRoomTypes(): array{
        $result=$this->connection->query("SELECT * FROM roomtype");
        return $result->fetch_all();
    }

    function searchRoomTypes(RoomTypeDTO $roomTypeDTO): RoomTypeDTO{
        $result=$this->connection->query("SELECT * FROM roomtype WHERE rtid='{$roomTypeDTO->getRtid()}'");
        return $result->fetch_row();
    }
}