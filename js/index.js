$(document).ready(function () {


    $("#bLogin").click(function () {
        console.log("click")
        $("#dialogLogin").css("display", "block")
    });

    $("#bRegister").click(function () {
        console.log("click")
        $("#dialogRegiste").css("display", "block")
    });
    

    $("#dialogLogin").click(function (event) {
        if (event.target == this) {
            this.style.display = "none";
        }
    });
    $("#dialogRegiste").click(function (event) {
        if (event.target == this) {
            this.style.display = "none";
        }
    });

});