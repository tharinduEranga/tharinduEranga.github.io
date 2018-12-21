<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/29/2018
 * Time: 7:32 PM
 */

require_once __DIR__."/../../dbconnection/DBConnection.php";
require_once __DIR__."/../../dto/AdminDTO.php";
require_once __DIR__."/../AdminBO.php";
require_once __DIR__."/../../repository/impl/AdminRepoimpl.php";

class AdminBOimpl implements AdminBO {
    private $adminRepo;

    /**
     * AdminBOimpl constructor.
     */
    public function __construct(){
        $this->adminRepo=new AdminRepoimpl();
    }

    function addAdmin(AdminDTO $adminDTO): bool{

    }

    function loginAdmin($name,$password): array{
        $this->adminRepo->setConnection((new DBConnection())->getConnection());
        $admin= $this->adminRepo->loginAdmin($name,$password);
        if(sizeof($admin)>0) {
            return $admin;
        }else{
            return array('-1');
        }
    }
}