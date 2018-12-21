
// $('#viewSummaryButton').click(getSummary());

$(document).ready(getSummary());
function getSummary() {
    $.ajax({
        url:"api/service/ReservationService.php",
        method:"POST",
        data:"&operation=getSummary",
        dataType:"json",
        async:true
    }).done(function (resp) {
        $('#doneTbody').empty();
        if(resp!=null) {
            if(parseInt(resp)==-1){
                $('#statusLabel').text("You are not logged in !");
                $('#doneTable').hide();
            }else {
                $('#statusLabel').text(" Congratulations, here the summary of your bookings !  ");
                for (let i = 0; i < resp.length; i++) {
                    $('#doneTbody').append("<tr><td>"+resp[i][0]+"</td><td>"+resp[i][1]+"</td><td>"+resp[i][2]+"</td><td>"+resp[i][3]+"</td><td>"+resp[i][4]+"</td><td>"+resp[i][5]+"</td><td>"+resp[i][6]+"</td><td>"+resp[i][7]+"</td></tr>");
                }
                $('#doneTable').show();
            }
        }else {
            console.log(resp);
        }

    }).fail(function (xxr,resp) {
        alert("Failed"+xxr);
    });
}

