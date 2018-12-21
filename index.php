<?php
require "header.php";
?>

<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Away from monotonous life</h6>
                <h2>Relax Your Mind</h2>
                <p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
                <a href="gallery.php" class="button_hover genric-btn primary-border e-large bg-transparent font-weight-bold ">View Gallery</a>
            </div>
        </div>
    </div>

</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Hotel Accomodation</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="dist/image/room1.jpg" alt="">
                        <a  class=" btn theme_btn button_hover" id="doubleDeluxButton">Book Now</a>
                    </div>
                    <a ><h4 class="sec_h4">Double Deluxe Room</h4></a>
                    <h5 id="DoubleDeluxPrice">$250<small>/night</small></h5>
                    <p> TV, DVD, Couch, Double Bed, 2 Bathrooms </p>
                </div>

            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="dist/image/room2.jpg" alt="">
                        <a  class=" btn theme_btn button_hover" id="singleDeluxButton">Book Now</a>
                    </div>
                    <a ><h4 class="sec_h4">Single Deluxe Room</h4></a>
                    <h5 id="SingleDeluxPrice">$200<small>/night</small></h5>
                    <p> TV, Audio, Couch, Single Bed, 1 Bathroom </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="dist/image/room3.jpg" alt="">
                        <a  class=" btn theme_btn button_hover" id="honeyMoonButton">Book Now</a>
                    </div>
                    <a ><h4 class="sec_h4">Honeymoon Suit</h4></a>
                    <h5 ID="HoneyMoonPrice">$750<small>/night</small></h5>
                    <p> A/C, TV, DVD, Couch, Double Spring Bed, 1 Bathroom </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="dist/image/room4.jpg" alt="">
                        <a  class=" btn theme_btn button_hover" id="economyDoubleButton">Book Now</a>
                    </div>
                    <a ><h4 class="sec_h4">Economy Double</h4></a>
                    <h5 id="EconomyPrice" >$200<small>/night</small></h5>
                    <p> Couch, Single Bed, 1 Bathroom </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->
<section class="hotel_booking_area">
    <div class="hotel_booking_area position">
        <div class="container">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>Book Your<br> Room</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <form id="bookForm" >
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <!--                                        <button type="button" class="btn-dark text-light" id="loadButton">Load</button>-->
                                        <input style="width: 1vw" id="roomTypeNo" type="text" name="typeNo" placeholder="Type No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type No'" required class="single-input bg-dark text-light">
                                        <input id="roomTypeText" type="text" name="roomType" placeholder="Room Type" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Room Type'" required class="single-input bg-dark text-light">
                                        <!--                                        <select class="wide" id="roomTypeCombo" >Room Type-->
                                        <!--                                            <option data-display="Room Type"></option>-->
                                        <!--                                            <option value="1">Double Deluxe</option>-->
                                        <!--                                            <option value="2">Single Deluxe</option>-->
                                        <!--                                            <option value="3">HoneyMoon Suit</option>-->
                                        <!--                                            <option value="3">Economy Double</option>-->
                                        <!--                                        </select>-->

                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input id="startDate" name="reserveDateText" type='text' class="form-control" placeholder="Arrival Date"/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <input id="noOfRoomsText" type="text" name="NoOfRooms" placeholder="No Of Rooms" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Of Rooms'" required class="single-input bg-dark text-light">
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input id="endDate" name="endDateText" type='text' class="form-control" placeholder="Departure Date"/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <a href="#jef" class="book_now_btn button_hover" id="checkButton">Checkout</a><br>
                                    </div>
                                    <div class="input-group">
                                        <a ID="bookButton" href="#" class="book_now_btn button_hover" data-toggle="modal" data-target=".demo-popup">Book Now</a>
<!--                                        <div class="modal fade demo-popup" id="demo-popup2" tabindex="-1" role="dialog" aria-labelledby="myLargeModelLabel-1" aria-hidden="true">-->
<!--                                            <div class="modal-dialog">-->
<!--                                                <div class="modal-content">-->
<!--                                                    <div class="modal-header">-->
<!--                                                        <button type="button" class="close btn-warning" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="modal-title">Confirm Details</h3>-->
<!--                                                    </div>-->
<!--                                                    <div class="modal-body" >-->
<!--                                                        <form id="customerLoginForm" >-->
<!--                                                            <input id="loginE" type="text" name="E-Mail" placeholder="E-Mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required class="single-input bg-white border-dark">-->
<!--                                                            <input id="loginP" type="text" name="Password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input bg-white border-dark">-->
<!--                                                            <div class="col-md-12 text-right">-->
<!--                                                                <button type="button" value="button" class="btn theme_btn button_hover" id="loginButton">Log In</button>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-md-12 text-right">-->
<!--                                                                <br>-->
<!--                                                                <li  class="list-inline">Don't have an account? <a data-dismiss="modal" href="#demo-popup" data-toggle="modal" >Sign Up</a></li>-->
<!--                                                            </div>-->
<!--                                                        </form>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="modal fade demo-popup" id="demo-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModelLabel-1" aria-hidden="true">-->
<!--                                            <div class="modal-dialog">-->
<!--                                                <div class="modal-content">-->
<!--                                                    <div class="modal-header">-->
<!--                                                        <p>Log In</p>-->
<!--                                                    </div>-->
<!--                                                    <div class="modal-body">-->
<!--                                                        <form id="addCustomerForm">-->
<!--                                                            <input type="text" name="Name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'name'" required class="single-input bg-white border-dark">-->
<!--                                                            <input type="text" name="Address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'address'" required class="single-input bg-white border-dark">-->
<!--                                                            <input type="text" name="NIC" placeholder="NIC" onfocus="this.placeholder = ''" onblur="this.placeholder = 'nic'" required class="single-input bg-white border-dark">-->
<!--                                                            <input type="text" name="Telephone" placeholder="Telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'tel'" required class="single-input bg-white border-dark">-->
<!--                                                            <input type="text" name="E-Mail" placeholder="E-Mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required class="single-input bg-white border-dark">-->
<!--                                                            <input type="text" name="Card_No" placeholder="Card_No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'cardNo'" required class="single-input bg-white border-dark">-->
<!--                                                            <input type="text" name="Password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input bg-white border-dark">-->
<!--                                                            <div class="col-md-12 text-right">-->
<!--                                                                <button type="button" value="button" class="btn theme_btn button_hover" id="saveButton">Confirm And Pay</button>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-md-12 text-right">-->
<!--                                                                <br>-->
<!--                                                                <li  class="list-inline " >Already have an account? <a href="" data-toggle="modal" data-target="#demo-popup2" data-dismiss="modal" id="loginA">Log in</a></li>-->
<!--                                                            </div>-->
<!--                                                        </form>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="row justify-content-end">
                                    <div class="col-4">
                                        <div class="book_tabel_item justify-content-end">
                                            <div class="input-group justify-content-end">
                                                <input id="totalPriceH2" type="text" name="totalPriceH2" placeholder="Total Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Total Price'" required class="single-input bg-dark text-light">
<!--                                                <h3 class=""> /= </h3>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <br>
                    <div>
                        <h3 id="statusH">
                            Select Dates !
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Royal Facilities</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">About Us <br>Mission & Vision</h2>
                    <p class="text-justify">
                        At the Vendol Resort you'll bask in the warmth of pure, unadulterated luxury,
                        with the beach at your window and palm trees in view. Located near the town of
                        Wadduwa, you're perfectly placed between the Bandaranaike International Airport
                        near Colombo and the southern capital of Galle, which is one and half hours
                        drive away.<br>
                        Our mission is to provide the most luxurious accommodations and other facilities
                        for our valuable clients at low cost. the biggest asset of our resort is our
                        customers. we appreciate ourselves when they appreciate our services.
                    </p>
                    <a class="button_hover theme_btn_two">View More</a>
                </div>
            </div>
            <div class="col-md-6"><br>
                <img class="img-fluid" src="dist/image/Vendol.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->

<!--================ Testimonial Area  =================-->
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Comments from our Clients</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>
        <div class="testimonial_slider owl-carousel">
            <div class="media testimonial_item">
                <img class="rounded-circle" src="dist/image/faces/Tharindu.jpg" alt="">
                <div class="media-body">
                    <p>
                        I appreciate the helpful service of Vendol resort's employees very much.
                    </p>
                    <a href="#"><h4 class="sec_h4">Tharindu Eranga</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="dist/image/faces/Hashan.jpg" alt="">
                <div class="media-body">
                    <p>
                        I appreciate the helpful service of Vendol resort's employees very much.
                    </p>
                    <a href="#"><h4 class="sec_h4">Hashan Maduranga</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="dist/image/faces/Ridma.jpg" alt="">
                <div class="media-body">
                    <p>
                        I appreciate the helpful service of Vendol resort's employees very much.
                    </p>
                    <a href="#"><h4 class="sec_h4">Ridma Randika</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="dist/image/faces/Ashan.jpg" alt="">
                <div class="media-body">
                    <p>
                        I appreciate the helpful service of Vendol resort's employees very much.
                    </p>
                    <a href="#"><h4 class="sec_h4">Ashan Chamika</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require "footer.php";
?>
