<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 10:25 AM
 */
require_once __DIR__."/../CustomerRepo.php";
require_once __DIR__ . "/../../dto/CustomerDTO.php";
class CustomerRepoimpl implements CustomerRepo {

    private $connection;

//
//    public function __construct(){
//        $db=new DBConnection();
//        $this->connection=$db->getConnection();
//    }

    public function setConnection(mysqli $connection){
        $this->connection = $connection;
    }

    function addCustomer(CustomerDTO $c): bool{
      $result= $this->connection->query("INSERT INTO customer VALUES ('{$c->getId()}','{$c->getName()}','{$c->getAddress()}','{$c->getTel()}','{$c->getNic()}','{$c->getEmail()}','{$c->getCardNo()}','{$c->getPassword()}')");
        if ($result) {
            return $result;
        } else {
           return $result;
        }
    }

    function deleteCustomer($cid): bool{

    }

    function updateCustomer(CustomerDTO $customerDTO): bool{

    }

    function searchCustomer($cid): bool{

    }

    function getAllCustomers(): array{

    }

    public function loginSearch($loginEmail, $loginPass) :array {
        $r=$this->connection->query("SELECT * FROM customer WHERE email='{$loginEmail}' AND password='{$loginPass}'");
//        if(mysqli_num_rows($r)>0){
//            return new CustomerDTO($r[0],$r[1],$r[2],$r[3],$r[4],$r[5],$r[6],$r[7]);
//        }else{
//            return null;
//        }
        $c=mysqli_fetch_array($r);
        return $c;
    }

}