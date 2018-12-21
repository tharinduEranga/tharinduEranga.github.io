<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/29/2018
 * Time: 7:22 PM
 */
session_start();
require_once __DIR__."/../business/impl/AdminBOimpl.php";

$method=$_SERVER['REQUEST_METHOD'];
$adminBo =new AdminBOimpl();

switch ($method){
    case "GET":
        $operation=$_GET['operation'];
        switch ($operation){
            case "add":

                break;
            case "login":

                break;
        }
        break;

    case "POST":
        $operation=$_POST['operation'];
        switch ($operation){
            case "add":

                break;
            case "login":
                $name=$_POST['adminName'];
                $password=$_POST['adminPassword'];

                 $admin= $adminBo->loginAdmin($name,$password);
                if($admin[0]!=-1){
                    $_SESSION['log']=true;
                    echo json_encode($admin);
                }else{
                    echo -1;
                }
                break;
        }
        break;
}