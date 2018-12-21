<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/21/2018
 * Time: 8:46 PM
 */
require_once __DIR__."/../business/impl/CustomerBOimpl.php";
require_once __DIR__ . "/../dto/CustomerDTO.php";

//These _POST s are associate arrays which calls the Value by key. as HashMap in java.
//$name = $_POST["Name"]; //"Name" key calls its assigned Value.
//$address = $_POST["Address"];
//$nic = $_POST["NIC"];
//$tel =$_POST["Telephone"];
//$email =$_POST["E-Mail"];
//$card = $_POST["Card_No"];
//$password =$_POST["Password"];

$customerBo=new CustomerBOimpl();
$method=$_SERVER['REQUEST_METHOD'];

switch ($method){
    case "POST" :
        $operation=$_POST["operation"];
        switch ($operation){
            case "add":
                ob_start();
                ob_end_clean();
                $name = $_POST["Name"];
                $address = $_POST["Address"];
                $nic = $_POST["NIC"];
                $tel =$_POST["Telephone"];
                $email =$_POST["E-Mail"];
                $card = $_POST["Card_No"];
                $password =$_POST["Password"];
                echo $isAdded=$customerBo->addCustomer(new CustomerDTO(0,$name,$address,$tel,$nic,$email,$card,$password));
                break;
            case "login":
                $loginEmail = $_POST["loginE-Mail"];
                $loginPass = $_POST["loginPassword"];
                $customer=$customerBo->loginSearch($loginEmail,$loginPass);
                if($customer!=null) {
                    setcookie("username", $customer['email'], time() + 96 * 60 * 60);
                    setcookie("password", $customer['password'], time() + 96 * 60 * 60);
                    setcookie("cid", $customer['cid'], time() + 96 * 60 * 60);
                    echo json_encode($customer);
                }

                break;
            case "getAll":

                break;
        }
        break;
    case "GET" :

        break;
}


//if(!preg_match('/[0-9]/',$name)){
//    if(is_numeric($tel)) {
//        if(preg_match('/[@]/',$email)) {
//            if(is_numeric($card)) {
//                $connection = mysqli_connect("localhost", "root", "Tharindu@123", "online_reservation", "3306");
//                //connection not true
//                if (!$connection) {
//                    echo mysqli_connect_error();
//                } else {
//                    $result = mysqli_query($connection, "INSERT INTO Customer VALUES(0,'$name','$address','$tel','$nic','$email','$card','$password')");
//                    if ($result) {
//                        echo "Customer has been successfully saved";
//                    } else {
//                        echo "Failed to save the customer";
//                        echo mysqli_error($connection);
//                    }
//                    mysqli_close($connection);
//                }
//            }else{
//                echo "Insert a correct Card No";
//            }
//        }else{
//            echo "Insert a correct E-mail";
//        }
//    }else{
//        echo "Insert a correct Tel No";
//    }
//}else {
//    echo "Insert a correct name";
//}





