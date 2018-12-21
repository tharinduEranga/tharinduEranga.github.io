<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 10:12 AM
 */
class DBConnection
{
    private $connection;
    private $host = "localhost";
    private $port = "3306";
    private $user = "root";
    private $password = "Tharindu@123";
    private $databasse = "online_reservation";

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->databasse);
        if ($this->connection->connect_errno) {
            echo $this->connection->connect_errno;
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}