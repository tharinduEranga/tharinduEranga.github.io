<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/26/2018
 * Time: 12:32 PM
 */
interface ReservationRepo{
    function addReservation(ReservationDTO $reservationDTO):bool ;
    function addRoomReserve(Room_Reserve $room_Reserve):bool ;
    function getLastId():array ;
}