<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 10:24 AM
 */
require_once __DIR__ . "/../dto/CustomerDTO.php";

interface CustomerRepo{

    function addCustomer(CustomerDTO $customerDTO):bool ;
    function deleteCustomer($cid):bool ;
    function updateCustomer(CustomerDTO $customerDTO):bool ;
    function searchCustomer($cid):bool ;
    function getAllCustomers():array ;
    public function loginSearch($loginEmail, $loginPass) :array;
}