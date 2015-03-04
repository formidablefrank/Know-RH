<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=7;
    IE=EmulateIE9; IE=10" />
    <script src="http://js.api.here.com/se/2.5.4/jsl.js"
    type="text/javascript" charset="utf-8">
</script>
<style type="text/css">
    html {
        overflow:hidden;
    }

    body {
        margin: 0;
        padding: 0;
        position: absolute;
        overflow:hidden;
        width: 100%;
        height: 100%;
    }

    #mapContainer {
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
    }
</style>
</head>
<body>
    <div id="mapContainer"></div>
    <script type="text/javascript">
        nokia.Settings.set("app_id", "lMQVKwC4p8hrWWsFN9nw");
        nokia.Settings.set("app_code", "J1wRcO0_obz9kWQInpwCGw");
        var map = new nokia.maps.map.Display(
            document.getElementById("mapContainer"), {
                components: [
                    // Behavior collection
                    new nokia.maps.map.component.Behavior(),
                    new nokia.maps.map.component.ZoomBar(),
                    new nokia.maps.map.component.Overview(),
                    new nokia.maps.map.component.TypeSelector(),
                    new nokia.maps.map.component.ScaleBar() ],
                zoomLevel: 10
            }
        );

        <?php
        foreach ($table as $row) {
            echo "marker = new nokia.maps.map.StandardMarker([". $row->user_lat . ', ' . $row->user_lon . "], {text: ". $row->total_correct .", draggable: false});";
            echo "map.objects.add(marker);";
            echo "\n";
        }
        ?>


        if (nokia.maps.positioning.Manager) {
            var positioning = new nokia.maps.positioning.Manager()
            // Get the current position. If available, the first callback is run,
            // otherwise the second.
            positioning.getCurrentPosition(
                function (position) {
                    var coords = position.coords;
                    var marker =
                    new nokia.maps.map.StandardMarker(coords, {text: '**', brush: {color: "#F00"}});
                    var accuracyCircle =
                    new nokia.maps.map.Circle(coords, 50);
                    map.objects.addAll([accuracyCircle, marker]);
                    map.zoomTo(accuracyCircle.getBoundingBox(), false, "default");
                    map.set('zoomLevel', 12);
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
    </script>
</body>
</html>
