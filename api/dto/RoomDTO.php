<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 4:02 PM
 */
class RoomDTO{
    private $rid;
    private $rtid;

    /**
     * RoomDTO constructor.
     * @param $rid
     */
    public function __construct($rid)
    {
        $this->rid = $rid;
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

}