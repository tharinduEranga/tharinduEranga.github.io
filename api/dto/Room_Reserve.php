<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 4:03 PM
 */
class Room_Reserve{
    private $rrid;
    private $rid;
    private $rsid;

    /**
     * Room_Reserve constructor.
     * @param $rrid
     * @param $rid
     * @param $rsid
     */
    public function __construct($rrid, $rid, $rsid)
    {
        $this->rrid = $rrid;
        $this->rid = $rid;
        $this->rsid = $rsid;
    }

    /**
     * @return mixed
     */
    public function getRrid()
    {
        return $this->rrid;
    }

    /**
     * @param mixed $rrid
     */
    public function setRrid($rrid): void
    {
        $this->rrid = $rrid;
    }

    /**
     * @return mixed
     */
    public function getRid()
    {
        return $this->rid;
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
    public function getRsid()
    {
        return $this->rsid;
    }

    /**
     * @param mixed $rsid
     */
    public function setRsid($rsid): void
    {
        $this->rsid = $rsid;
    }


}