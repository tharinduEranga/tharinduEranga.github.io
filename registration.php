<?php
    require "header.php";
?>

<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Registration</h2>
            <ol class="breadcrumb">
<!--                <li><a href="index.php">Home</a></li>-->
<!--                <li class="active">Contact Us</li>-->
            </ol>
        </div>
    </div>
</section>

<section class="contact_area section_gap">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
                <form id="addCustomerForm">
                    <input id="custNameText" type="text" name="Name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'name'" required class="single-input bg-white border-dark">
                    <input id="custAddressText" type="text" name="Address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'address'" required class="single-input bg-white border-dark">
                    <input id="nicText" type="text" name="NIC" placeholder="NIC" onfocus="this.placeholder = ''" onblur="this.placeholder = 'nic'" required class="single-input bg-white border-dark">
                    <input id="telText" type="text" name="Telephone" placeholder="Telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'tel'" required class="single-input bg-white border-dark">
                    <input id="emailText" type="text" name="E-Mail" placeholder="E-Mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required class="single-input bg-white border-dark">
                    <input id="cardNoText" type="text" name="Card_No" placeholder="Card_No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'cardNo'" required class="single-input bg-white border-dark">
                    <input id="passwordText" type="text" name="Password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input bg-white border-dark">
                    <div class="col-md-12 text-right">
                        <button type="button" value="button" class="btn theme_btn button_hover" id="saveButton">Register</button>
                    </div>
                    <div class="col-md-12 text-right">
                        <br>
                        <li  class="list-inline " >Already have an account? <a href="login.php" id="loginA">Log in</a></li>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<?php
    require "footer.php";
?>
