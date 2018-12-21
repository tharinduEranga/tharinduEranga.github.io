<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/21/2018
 * Time: 8:49 PM
 */
class CustomerDTO{
    private $id;
    private $name;
    private $address;
    private $tel;
    private $nic;
    private $email;
    private $cardNo;
    private $password;

    /**
     * CustomerDTO constructor.
     * @param $id
     * @param $name
     * @param $address
     * @param $tel
     * @param $nic
     * @param $email
     * @param $cardNo
     * @param $password
     */

    public function __construct($id, $name, $address, $tel, $nic, $email, $cardNo, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->tel = $tel;
        $this->nic = $nic;
        $this->email = $email;
        $this->cardNo = $cardNo;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * @param mixed $nic
     */
    public function setNic($nic): void
    {
        $this->nic = $nic;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * @param mixed $cardNo
     */
    public function setCardNo($cardNo): void
    {
        $this->cardNo = $cardNo;
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



}