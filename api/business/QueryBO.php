<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 3:24 PM
 */
interface QueryBO{
    function searchReserve($rtid, $dateIn, $dateOut):array ;
    public function getSummary($cid):array;

    public function getReservationsForAdmin():array;
}