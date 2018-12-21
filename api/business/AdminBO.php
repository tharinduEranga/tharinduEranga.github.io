<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/29/2018
 * Time: 7:26 PM
 */
require_once __DIR__."/../dto/AdminDTO.php";

interface AdminBO{
    function addAdmin(AdminDTO $adminDTO):bool ;
    function loginAdmin($name,$password): array ;
}