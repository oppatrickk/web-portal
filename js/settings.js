$(document).ready(function(){
    $('.main').height($(window).height() );
    $(window).on("resize", function(){
        $('.main').height($(window).height());
    });
});


function preview() {
    frame.src = URL.createObjectURL(event.target.files[0]);
}
function clearImage() {
    document.getElementById('formFile').value = null;
    frame.src = "";
}