<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 9:28 PM
 */
class QueryDTO{
    private $rtid;
    private $count;

    /**
     * QueryDTO constructor.
     * @param $rtid
     * @param $count
     */
    public function __construct($rtid, $count)
    {
        $this->rtid = $rtid;
        $this->count = $count;
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
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count): void
    {
        $this->count = $count;
    }


}