<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 3:26 PM
 */
class ReservationDTO{
    private $rid;
    private $no_of_rooms;
    private $date_in;
    private $date_out;
    private $total;
    private $cid;
    private $rtid;

    /**
     * ReservationDTO constructor.
     * @param $rid
     * @param $no_of_rooms
     * @param $date_in
     * @param $date_out
     * @param $total
     * @param $cid
     * @param $rtid
     */
    public function __construct($rid, $no_of_rooms, $date_in, $date_out, $total, $cid, $rtid)
    {
        $this->rid = $rid;
        $this->no_of_rooms = $no_of_rooms;
        $this->date_in = $date_in;
        $this->date_out = $date_out;
        $this->total = $total;
        $this->cid = $cid;
        $this->rtid=$rtid;
    }

    /**
     * @return mixed
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * @return mixed
     */
    public function getRtid()
    {
        return $this->rtid;
    }

    /**
     * @param mixed $rtid
     */
    public function setRtid($rtid): void
    {
        $this->rtid = $rtid;
    }

    /**
     * @param mixed $rid
     */
    public function setRid($rid): void
    {
        $this->rid = $rid;
    }

    /**
     * @return mixed
     */
    public function getNoOfRooms()
    {
        return $this->no_of_rooms;
    }

    /**
     * @param mixed $no_of_rooms
     */
    public function setNoOfRooms($no_of_rooms): void
    {
        $this->no_of_rooms = $no_of_rooms;
    }

    /**
     * @return mixed
     */
    public function getDateIn()
    {
        return $this->date_in;
    }

    /**
     * @param mixed $date_in
     */
    public function setDateIn($date_in): void
    {
        $this->date_in = $date_in;
    }

    /**
     * @return mixed
     */
    public function getDateOut()
    {
        return $this->date_out;
    }

    /**
     * @param mixed $date_out
     */
    public function setDateOut($date_out): void
    {
        $this->date_out = $date_out;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid): void
    {
        $this->cid = $cid;
    }


}