<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/24/2018
 * Time: 9:26 PM
 */

require_once __DIR__."/../ReservationBO.php";
require_once __DIR__."/../../dto/ReservationDTO.php";
require_once __DIR__."/../../dbconnection/DBConnection.php";
require_once __DIR__."/../../repository/impl/ReservationRepoimpl.php";
require_once __DIR__."/../../repository/impl/QueryRepoimpll.php";
require_once __DIR__."/../../dto/Room_Reserve.php";
class ReservationBOimpl implements ReservationBO{

    private $reservationRepo;

    /**
     * ReservationBOimpl constructor.
     */
    public function __construct(){
        $this->reservationRepo=new ReservationRepoimpl();
    }

    function addReserve(ReservationDTO $reservationDTO):bool{
        $connection = (new DBConnection())->getConnection(); //initializing connection
        $queryRepo = new QueryRepoimpll();
        $this->reservationRepo->setConnection($connection); //setting db connection for reservation
        $queryRepo->setConnection($connection); //setting db connection for query
        try {
            mysqli_autocommit($connection, FALSE);
            $isAdded = $this->reservationRepo->addReservation($reservationDTO); //adding data into reservation table

            if ($isAdded <= 0) {  //if reservation is not added ,
                $connection->rollback(); // connection will rollback with added data.
                return 0; // and method execution terminates.
            }
            // If reservation added successfully, then below lines will run.
            $lst=$this->reservationRepo->getLastId(); // Getting last added reservation id.

            // Below is getting room id s which are not booked for given dates and type.
            $freeRoomArray = $queryRepo->getFreeRooms($reservationDTO->getRtid(), $reservationDTO->getDateIn(), $reservationDTO->getDateOut());

            $values=array_values($freeRoomArray); //converting associated array to numeric array

            // in below loop, the data added into room_reserve table. loop runs till the given no of dates.
            for ($i = 0; $i < $reservationDTO->getNoOfRooms(); $i++) {
                // adding data to room_reserve with free rooms.
                $isAdded = $this->reservationRepo->addRoomReserve(new Room_Reserve(0, $values[$i][0], $lst[0][0]));
                if ($isAdded <= 0) { //if any data is not added,
                    $connection->rollback(); // connection will rollback with added data.
                    return 0;  // and method execution terminates.
                }
            }

            // If method executes here, it means the transaction is successful,
            $connection->commit();//The data will be added to db.
            return 1; // returns true;
        }catch (Exception $e){
            //If an exception occurs
            $connection->rollback(); // connection will rollback with added data.
            return 0; // returns false
        }finally{
            // No matter what happened, the autocommit mode will be true at the end. ;-)
            $connection->autocommit(true);
        }
    }

}