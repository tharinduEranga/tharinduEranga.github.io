<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/27/2018
 * Time: 8:45 PM
 */
session_start();
require "header.php";
if(!isset($_SESSION['log'])){
    header("Location:adminLogin.php");
}
?>

    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <br>
                <p>We assure you that you will feel the uniqueness of our place  </p><br>

                <h2 class="title_color">Status </h2>
                <br>
                <div class="row justify-content-center">
                    <div class="col-12">

                        <table class="table table-hover table-bordered" id="adminTable">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <td>RID</td>
                                    <td>No Of Rooms</td>
                                    <td>Date In</td>
                                    <td>Date Out</td>
                                    <td>Total</td>
                                    <td>Customer</td>
                                    <td>Telephone</td>
                                    <td>Room ID</td>
                                    <td>Room Type</td>
                                </tr>
                            </thead>
                            <tbody id="adminTbody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require "footer.php";

