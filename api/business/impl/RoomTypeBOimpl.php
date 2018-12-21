<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 4:53 PM
 */
require_once __DIR__."/../RoomTypeBO.php";
require_once __DIR__."/../../repository/impl/RoomTypeRepoimpl.php";
require_once __DIR__."/../../dbconnection/DBConnection.php";
class RoomTypeBOimpl implements RoomTypeBO{

    private $roomTypeRepo;

    /**
     * RoomTypeBOimpl constructor.
     */
    public function __construct(){
        $this->roomTypeRepo=new RoomTypeRepoimpl();
    }

    function addRoomTypes(RoomTypeDTO $roomTypeDTO): bool{

    }

    function deleteRoomTypes($typeId): bool{

    }

    function getAllRoomTypes(): array{
        $connection=(new DBConnection())->getConnection();
        $this->roomTypeRepo->setConnection($connection);
        return $this->roomTypeRepo->getAllRoomTypes();
    }

    function searchRoomTypes(RoomTypeDTO $roomTypeDTO): RoomTypeDTO{

    }
}