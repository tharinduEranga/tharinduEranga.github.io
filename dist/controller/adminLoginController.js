
$('#adminLoginButton').click(function () {
    let admin=$('#adminLoginForm').serialize();
    $.ajax({
        url:"api/service/AdminService.php",
        method:"POST",
        dataType:"json",
        data:admin+"&operation=login",
        async:true
    }).done(function (resp) {
        if(resp===-1){
            location.href="../../hoteltemplate1/hoteltemplate1/adminLogin.php";
        }else {
            $('#navdrop').append("<li class='nav-item'><a class='nav-link' >Log Out !</a></li>");
            location.href="../../hoteltemplate1/hoteltemplate1/admin.php";
        }
    }).fail(function (res,xxr) {
        alert(res.responseText+xxr);
    })
});