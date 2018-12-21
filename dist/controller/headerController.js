
$('#contactButton').click(function () {
    $('footer').get(0).scrollIntoView({
        behavior: "smooth",
        block: "end",
        inline: "end"
    }).animate();
});