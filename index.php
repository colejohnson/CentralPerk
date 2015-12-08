<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Central Perk</title>
	<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">


	<script type="text/javascript">
		$(document).on("scroll",function(){
			if($(document).scrollTop()>100){ 
				$("header").removeClass("large").addClass("small");
				}
			else{
				$("header").removeClass("small").addClass("large");
				}
			});
	</script>

</head>

<body>


<header class="large">
		<nav>
			<img class="logo" src="media/logo2.png"/>
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">Menu</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Events</a></li>
            </ul>
            <hr>
        </nav>
</header>


	<section class="stretch">
		<p>Let's get that menu small!</p>
		<p class="bottom">End of the line.</p>
	</section>

	<footer class="footer">
        <div id="footer-left">
            <br>
            <p>Central Perk Cafe</p>
            <p>116 W 32nd St, New York, NY 10001</p>
            <p>(212) 695-9550</p>
         </div>
        <div id="footer-left-left">
            <br>
            <p>Hours:</p>
            <p>Mon-Fri 6-6</p>
            <p>Sat-Sun 8-11</p>
        </div>
        <div id="footer-right">
            <br>
                <ul id="footer-right-list1">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
                <ul id="footer-right-list2">
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
        </div>
    
	</footer>


</body>

</html>
