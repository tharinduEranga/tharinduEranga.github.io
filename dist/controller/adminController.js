
$(document).ready(function () {
    $.ajax({
        url:"api/service/QueryService.php",
        method:"GET",
        dataType:"json",
        data:"&operation=getReservationsForAdmin",
        async:true
    }).done(function (resp) {
        // alert(resp[0][1]);
        if(resp!=null){
            $('#adminTbody').append("<tr><td>"+resp[0][0]+"</td><td>"+resp[0][1]+"</td><td>"+resp[0][2]+"</td><td>"+resp[0][3]+"</td><td>"+resp[0][4]+"</td><td>"+resp[0][5]+"</td><td>"+resp[0][6]+"</td><td>"+resp[0][7]+"</td><td>"+resp[0][9]+"</td></tr>");
        }
    }).fail(function (xxr,resp) {
        console.log("fail "+resp+xxr);
    });
});