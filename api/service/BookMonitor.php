<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/25/2018
 * Time: 12:36 PM
 */


session_start();

if(isset($_SESSION['logged'])){

    $email=$_POST['E-Mail'];
    $password=$_POST['Password'];
    if($email=="ijse"&&$password=="ijse"){
        $dateIn=$_POST['reserveDateText'];
        $dateOut=$_POST['endDateText'];
        $noOfRooms=$_POST['NoOfRooms'];
        $roomType=$_POST['typeNo'];
        echo $noOfRooms;
    }else{
        echo "No Account";
    }
    ?>


<?php  }