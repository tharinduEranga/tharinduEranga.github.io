<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 4:01 PM
 */
class RoomTypeDTO{
    private $rtid;
    private $description;
    private $price;

    /**
     * RoomTypeDTO constructor.
     * @param $rtid
     * @param $description
     * @param $price
     */
    public function __construct($rtid, $description, $price)
    {
        $this->rtid = $rtid;
        $this->description = $description;
        $this->price = $price;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }


}