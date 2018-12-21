<?php
    require "header.php";
?>

<!--================Breadcrumb Area =================-->

<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Log In</h2>
            <ol class="breadcrumb">
<!--                <li><a href="index.php">Home</a></li>-->
<!--                <li class="active">Accomodation</li>-->
            </ol>
        </div>
    </div>
</section>

<!--================ Accommodation Area  =================-->

<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
<!--            <h2 class="title_color">Log In</h2>-->
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            <div class="row justify-content-center">
                <div class="col-6">
                    <form id="customerLoginForm" >
                        <input id="loginE" type="text" name="loginE-Mail" placeholder="E-Mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required class="single-input bg-white border-dark">
                        <input id="loginP" type="text" name="loginPassword" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input bg-white border-dark">
                        <div class="col-md-12 text-right">
                            <button type="button" value="button" class="btn theme_btn button_hover" id="loginButton">Log In</button>
                        </div>
                        <div class="col-12 text-right">
                            <br>
                            <li  class="list-inline">Don't have an account? <a  href="registration.php"  >Sign Up</a></li>
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
