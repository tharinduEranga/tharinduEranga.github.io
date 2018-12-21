<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/27/2018
 * Time: 8:45 PM
 */

require "header.php";
?>


    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <br>
                <p>We assure you that you will feel the uniqueness of our place  </p><br>

                <h2 class="title_color">Status </h2>
                <br>
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h1 id="statusLabel" class="text-xl font-weight-bold"> Congratulations Your Rooms are Reserved ! </h1>
                    </div>
                </div>
                <br><br><br>
<!--                <p>Click to see upcoming reservations of yours !</p><br><br><br>-->
<!--                <a id="viewSummaryButton" class="genric-btn primary radius">View</a><br><br><br>-->
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <table class="table table-hover table-bordered " id="doneTable">
                            <thead class="bg-dark text-light">
                                <tr >
                                    <td>Reserve ID</td>
                                    <td>No Of Rooms</td>
                                    <td>Date In</td>
                                    <td>Date Out</td>
                                    <td>Total</td>
                                    <td>Customer ID</td>
                                    <td>Room Type</td>
                                    <td>Description</td>
                                </tr>
                            </thead>
                            <tbody id="doneTbody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require "footer.php";

