<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/29/2018
 * Time: 7:27 PM
 */
class AdminDTO{
    private $aid;
    private $name;
    private $password;
    private $telephone;

    /**
     * AdminDTO constructor.
     * @param $aid
     * @param $name
     * @param $password
     * @param $telephone
     */
    public function __construct($aid, $name, $password, $telephone)
    {
        $this->aid = $aid;
        $this->name = $name;
        $this->password = $password;
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aid
     */
    public function setAid($aid): void
    {
        $this->aid = $aid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

}