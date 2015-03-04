$(document).foundation();

$(document).ready(function(){
    var lat = 0;
    var lon = 0;

    if (nokia.maps.positioning.Manager) {
        var positioning = new nokia.maps.positioning.Manager()
        // Get the current position. If available, the first callback is run,
        // otherwise the second.
        nokia.Settings.set("app_id", "lMQVKwC4p8hrWWsFN9nw");
        nokia.Settings.set("app_code", "J1wRcO0_obz9kWQInpwCGw");

        positioning.getCurrentPosition(
            function (position) {
                var coords = position.coords;
                lat = coords.latitude;
                lon = coords.longitude;
            },
            // Handle errors (display message):
            function (error) {
                var errorMsg = "Location could not be determined: ";

                // Determine what caused the error and show error message:
                if (error.code == 1)
                    errorMsg += "PERMISSION_DENIED";
                else if (error.code == 2)
                    errorMsg += "POSITION_UNAVAILABLE";
                else if (error.code == 3)
                    errorMsg += "TIMEOUT";
                else errorMsg += "UNKNOWN_ERROR";

                alert(errorMsg);
            }
        );
    }

    $('#nameBox').keyup(function(){
        $('#doneButton').attr('href', $(this).attr('href').concat($(this).val()).concat('/').concat(lat).concat('/').concat(lon));
    });

    $('#donateButton').on('click', function(){
        $(this).text("Thank You!");
        setTimeout(function(){
            window.location.href = $('#donateButton').attr('src');
        }, 1000);
    });

});
