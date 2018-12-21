<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 10:22 AM
 */
require_once __DIR__."/../CustomerBO.php";
require_once __DIR__ . "/../../dto/CustomerDTO.php";
require_once __DIR__."/../../repository/impl/CustomerRepoimpl.php";
require_once __DIR__."/../../dbconnection/DBConnection.php";
class CustomerBOimpl implements CustomerBO {
    private $repo;

    /**
     * CustomerBOimpl constructor.
     */
    public function __construct(){
        $this->repo=new CustomerRepoimpl();
    }

    function addCustomer(CustomerDTO $customerDTO): bool{
        $connection=(new DBConnection())->getConnection();
        $this->repo->setConnection($connection);
        return $this->repo->addCustomer($customerDTO);
    }

    function deleteCustomer($cid): bool{

    }

    function updateCustomer(CustomerDTO $customerDTO): bool{

    }

    function searchCustomer($cid): bool{

    }

    function getAllCustomers(): array{

    }

    public function loginSearch($loginEmail, $loginPass):array {
        $this->repo->setConnection((new DBConnection())->getConnection());
        $customer=$this->repo->loginSearch($loginEmail, $loginPass);
        return $customer;
    }
}