<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 9:29 PM
 */
interface  QueryRepo{
   function searchReserve($rtid, $dateIn, $dateOut):array ;
    public function getFreeRooms($getRtid, $getDateIn, $getDateOut): array ;
    public function getSummary($cid):array;

    public function getReservationsForAdmin():array ;
}