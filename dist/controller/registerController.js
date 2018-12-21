$('#saveButton').click(function () {
    if($('#custNameText').val().length>0 &&$('#custAddressText').val().length>0 &&$('#telText').val().length>0 &&$('#emailText').val().length>0 &&$('#cardNoText').val().length>0 &&$('#passwordText').val().length>0 &&$('#nicText').val().length>0 ) {
        let formData = $('#addCustomerForm').serialize();
        $.ajax({
            url: "api/service/CustomerService.php",
            method: "POST",
            data: formData + "&operation=add",
            async: true
        }).done(function (resp) {
            if(parseInt(resp.trim())>0){
                location.href = "../../hoteltemplate1/hoteltemplate1/index.php";
            }else {
                alert(resp);
            }
        }).fail(function (resp) {
            alert(resp);
        });
    }else {
        alert("Missing Fields !");
    }
});