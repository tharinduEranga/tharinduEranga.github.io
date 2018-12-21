<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tharindu
 * Date: 11/29/2018
 * Time: 7:16 PM
 */
require "header.php";
?>

    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Log In</h2>
                <ol class="breadcrumb">
                    <!--                <li><a href="index.php">Home</a></li>-->
                    <!--                <li class="active">Contact Us</li>-->
                </ol>
            </div>
        </div>
    </section>


    <section class="contact_area section_gap">
        <div class="container">
            <div class="section_title text-center">
<!--                <h2 class="title_color">Log In</h2>-->
                <div class="row justify-content-center">
                    <div class="col-6">
                        <form id="adminLoginForm" >
                            <input id="adminNameText" type="text" name="adminName" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required class="single-input bg-white border-dark">
                            <input id="adminPasswordText" type="text" name="adminPassword" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input bg-white border-dark">
                            <div class="col-md-12 text-right">
                                <button type="button" value="button" class="btn theme_btn button_hover" id="adminLoginButton">Log In</button>
                            </div>
                            <div class="col-12 text-right">
                                <br>
                               <a  href="registration.php" >Forgot password ? </a>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
require "footer.php";
?>