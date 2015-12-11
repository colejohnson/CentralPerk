<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Contact Us | Central Perk Cafe</title>
    <?php include("include/head.php"); ?>
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
          function initialize() {


            var mapProp = {
                center: new google.maps.LatLng(40.748775, -73.989785),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
          }


        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
</head>
<body>
    
    <?php include("include/header.php"); ?>
    
    <div class="maincontainer">

        <h1 style="font-size:2em;">Drop Us a Line!<h1>
        <hr>


        <div id="mapwrap">
                    <div id="googleMap" style="width:300px;height:300px;"></div>

                             <br>
                                     <p>Central Perk Cafe</p>
                                     <p>116 W 32nd St, New York, NY 10001</p>
                                     <p>(212) 695-9550</p>


                </div>


        <form method="post" action="include/send-contact.php">
            <div class="form-group">
                Name: <input name="name" class="form-control" type="text" placeholder="Enter your Name">
            </div>
            <br>
            <div class="form-group">
                Email:<input name="email" class="form-control" type="email" placeholder="Enter your Email">
            </div>
            <br>
            <div class="form-group">
                Message:<textarea name="message" class="form-control" rows="10" placeholder="Enter your Message"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-success btn-block" type="submit">
            </div>
        </form>








    </div>
    
    <?php include("include/footer.php"); ?>
    
</body>
</html>