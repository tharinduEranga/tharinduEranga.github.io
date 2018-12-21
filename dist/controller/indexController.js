
var price;
$('#economyDoubleButton').click(function () {
    try {
        $('.hotel_booking_area').get(0).scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "center"
        }).animate();
    }catch (e) {

    }
    for (let i = 0; i < roomTypes.length; i++) {

        if(roomTypes[i][1]==="Economy Double"){

            $('#roomTypeText').val(roomTypes[i][1]);
            $('#roomTypeNo').val(roomTypes[i][0]);
            $('#totalPriceH2').val(roomTypes[i][2]);
            price=roomTypes[i][2];
        }
    }
});

$('#doubleDeluxButton').click(function () {
    try {
        $('.hotel_booking_area').get(0).scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "center"
        }).animate();
    }catch (e) {

    }
    for (let i = 0; i < roomTypes.length; i++) {

        if(roomTypes[i][1]==="Double Deluxe Room"){

            $('#roomTypeText').val(roomTypes[i][1]);
            $('#roomTypeNo').val(roomTypes[i][0]);
            $('#totalPriceH2').val(roomTypes[i][2]);
            price=roomTypes[i][2];
        }
    }

});

$('#honeyMoonButton').click(function () {
    try {
        $('.hotel_booking_area').get(0).scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "center"
        }).animate();
    }catch (e) {

    }
    for (let i = 0; i < roomTypes.length; i++) {

        if(roomTypes[i][1]==="Honeymoon Suit"){

            $('#roomTypeText').val(roomTypes[i][1]);
            $('#roomTypeNo').val(roomTypes[i][0]);
            $('#totalPriceH2').val(roomTypes[i][2]);
            price=roomTypes[i][2];
        }
    }

});

$('#singleDeluxButton').click(function () {
    try {
        $('.hotel_booking_area').get(0).scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "center"
        }).animate();
    }catch (e) {

    }
    for (let i = 0; i < roomTypes.length; i++) {

        if(roomTypes[i][1]==="Single Deluxe Room"){

            $('#roomTypeText').val(roomTypes[i][1]);
            $('#roomTypeNo').val(roomTypes[i][0]);
            $('#totalPriceH2').val(roomTypes[i][2]);
            price=roomTypes[i][2];
        }
    }

});

$('#noOfRoomsText').on('keyup',function (e) {
    if($('#noOfRoomsText').val().length>0 &&  $('#totalPriceH2').val().length>0 && parseFloat($('#noOfRoomsText').val())>0) {
        $('#totalPriceH2').val(parseFloat(price) * parseInt($('#noOfRoomsText').val()));
    }else {
        $('#totalPriceH2').val(parseFloat(price));
    }
});

var roomType;
$('#checkButton').click(function () {
    if($('#roomTypeText').val().length>0 &&$('#startDate').val().length>0&& $('#endDate').val().length>0) {
        let datas = $('#bookForm').serialize();
        $.ajax({
            url: "api/service/QueryService.php",
            method: "POST",
            async: true,
            dataType: "text",
            data: datas + "&operation=search"
        }).done(function (resp) {
            let sp = resp.split(" ");
            roomType = resp.split(" ");
            $('#statusH').text(sp[1] + " Rooms are available for given Dates ");
        }).fail(function (resp) {
            alert(resp.responseText);
        });
    }else {
        $('#statusH').text("Select Dates and Room Type !");
    }
});

$('#bookButton').click(function () {
    let booking=$('#bookForm').serialize();
    if($('#roomTypeText').val().length>0 &&$('#startDate').val().length>0&& $('#endDate').val().length>0 && $('#noOfRoomsText').val().length>0) {
        if(parseInt(roomType[1])>=parseInt($('#noOfRoomsText').val())) {
            $.ajax({
                url: "api/service/ReservationService.php",
                method: "POST",
                data: booking + "&operation=save",
                async: true
            }).done(function (resp) {
                //alert("Pass "+resp);
                let newResp = parseInt(resp.trim());
                if (newResp === -1) {
                    location.href = "../../hoteltemplate1/hoteltemplate1/login.php";
                } else {
                    if (newResp > 0) {
                        $('#statusH').text("Rooms Are Reserved !");
                        location.href="../../hoteltemplate1/hoteltemplate1/donePage.php";
                    } else {
                        alert("Failed to Reserve" + resp);
                    }
                }
            }).fail(function (resp, xxr) {
                alert("Fail  " + xxr);
            });
        }else {
            $('#statusH').text("Rooms Are Not Enough !");
        }
    }else {
        $('#statusH').text("Select Dates and Room Type !");
    }
});


var roomTypes=[];
$(document).ready(function () {
    $.ajax({
        url: "api/service/RoomTypeService.php",
        method: "GET",
        async: true,
        dataType:"json",
        data: "&operation=getAll",
        success:function (resp) {
            for (let i = 0; i < resp.length; i++) {
                let roomType = resp[i];
                $('#roomTypeCombo').append("<option>gbfdndtn</option>");
                roomTypes.push(resp[i]);
            }
            $('#DoubleDeluxPrice').text(roomTypes[0][2]+" /=");
            $('#SingleDeluxPrice').text(roomTypes[1][2]+" /=");
            $('#HoneyMoonPrice').text(roomTypes[2][2]+" /=");
            $('#EconomyPrice').text(roomTypes[3][2]+" /=");
        },
        error:function (xer,error) {
            alert(error);
        }
    })
});

// $('#loadButton').click(function () {
//     $.ajax({
//         url: "api/service/RoomTypeService.php",
//         method: "GET",
//         async: true,
//         dataType:"json",
//         data: "&operation=getAll",
//         success:function (resp) {
//             console.log(resp);
//             for (let i = 0; i < resp.length; i++) {
//                 let roomType = resp[i];
//                 console.log(roomType[1]);
//                 $('#roomTypeCombo').append('<option>' + roomType[1] + '</option>');
//             }
//
//         },
//         error:function (xer,error) {
//            alert(error);
//         }
//     })
// });

