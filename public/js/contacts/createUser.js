/**
 * Created by samyy on 04-Jan-17.
 */

$(document).ready(function () {

    /*   $("#firstname").click(function () {
     alert("Hello World!!");
     });*/


    $("#firstname").on("change", function () {
        setUsername();

    });
    $("#lastname").on("change", function () {
        setUsername();

    });



});

    function setUsername() {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var username = (firstname + "." + lastname).toLowerCase();
        $("#username").val(username);

    }