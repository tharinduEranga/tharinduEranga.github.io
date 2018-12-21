
$('#loginButton').click(function () {
    let form=$('#customerLoginForm').serialize();
    // console.log($('#loginE').val());
    // console.log($('#loginP').val());
    $.ajax({
        url:"api/service/CustomerService.php",
        method:"POST",
        data:form+"&operation=login",
        dataType:"json",
        async:true
    }).done(function (resp) {
        if(resp[0]>0) {
            location.href = "../../hoteltemplate1/hoteltemplate1/donePage.php";
        }else {
            alert("No Member Found");
        }
    }).fail(function (resp,xxr) {
        alert("Error :"+xxr);
    });
});
