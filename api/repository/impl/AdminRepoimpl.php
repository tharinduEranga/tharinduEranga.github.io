<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/29/2018
 * Time: 7:30 PM
 */
require_once __DIR__."/../AdminRepo.php";
require_once __DIR__."/../../dto/AdminDTO.php";
require_once __DIR__."/../../dbconnection/DBConnection.php";
class AdminRepoimpl implements AdminRepo {
    private $connection;

    /**
     * AdminRepoimpl constructor.
     */
//    public function __construct(){
//        $this->connection=(new DBConnection())->getConnection();
//    }


    function addAdmin(AdminDTO $adminDTO): bool{

    }

    function loginAdmin($name,$password): array{
        $result=$this->connection->query("SELECT * FROM admin WHERE name='{$name}' AND password='{$password}'");
        return $result->fetch_all();
    }

    public function setConnection($getConnection){
        $this->connection=$getConnection;
    }
}