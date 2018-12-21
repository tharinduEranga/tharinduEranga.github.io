<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 4:51 PM
 */
interface  RoomTypeBO{
    function addRoomTypes(RoomTypeDTO $roomTypeDTO):bool ;
    function deleteRoomTypes($typeId):bool ;
    function getAllRoomTypes():array;
    function searchRoomTypes(RoomTypeDTO $roomTypeDTO):RoomTypeDTO;
}