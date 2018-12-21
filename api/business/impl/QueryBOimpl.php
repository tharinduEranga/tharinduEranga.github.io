<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 3:25 PM
 */
require_once __DIR__."/../../repository/impl/QueryRepoimpll.php";
require_once __DIR__."/../../dto/QueryDTO.php";
require_once __DIR__."/../../dbconnection/DBConnection.php";
require_once __DIR__."/../QueryBO.php";
class QueryBOimpl implements QueryBO{

    private $queryRepo;

    /**
     * QueryBOimpl constructor.
     */
    public function __construct(){
        $this->queryRepo=new QueryRepoimpll();
    }


    function searchReserve($rtid, $dateIn, $dateOut):array {
        $this->queryRepo->setConnection((new DBConnection())->getConnection());
        $row=$this->queryRepo->searchReserve($rtid, $dateIn, $dateOut);
        echo $row[0]." ".$row[1];
        return $row;
    }

    public function getSummary($cid):array {
        $this->queryRepo->setConnection((new DBConnection())->getConnection());
        $summary=$this->queryRepo->getSummary($cid);
        return $summary;
    }

    public function getReservationsForAdmin():array{
        $this->queryRepo->setConnection((new DBConnection())->getConnection());
        $res= $this->queryRepo->getReservationsForAdmin();
        return $res;
    }

}