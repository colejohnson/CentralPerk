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

    <?php include("include/header.php"); ?>

    <div class = "maincontainer">

        <h2> About Us</h2>


        <p>

            Central Perk is a cafe located on West 32nd St. in Manhattan. The cafe is themed and named after the famous fictional
            cafe from the TV Show 'Friends'. We are the exact replica of the fictional cafe 'Central Perk'. We serve a varity selection
            of brewed cofffees and beyond.
        </p>

        <p>

            The amazing stuff we serve is the heart of our business, and we've worked very hard to make sure that the ingredients we                        use in our drinks and food are the best you can get.
        </p>
        <p>
            We roast our coffee in a turn-of-the-century style direct flame roaster. We support  local farmers and small businesses  by                        buying single-estate beans and carrying many Fair-Trade certified varieties. We support environmentally-sound growing                        practices by carrying over a dozen varieties of organic beans.
        </p>
        <p>

            We also offer many varieties in Teaby the cup. Black, Green, White, Oolong, Pu-Erh and Herbal are some of the many Teas we                      serve.
        </p>

        <p>

            At our Bakeshop, we make everything from scratch, right down to the graham cracker crust. And from cookies to scones, nothing                   we make contains artificial ingredients.


        </p>

        <p>And we offer free wi-fi too...</p>


        <h2> About the Show</h2>

        <p>
            There are very few people who have never heard of show called 'Friends' and the famous cafe from the show 'Central Perk'.


        </p>

        <p>
            Our cafe is competly themed after 'Central Perk' from 'Friends'. Central Perk is a place where the main charecter from the show
            hangs out the majority of time. In this 1994 sitcom, Rachel Green, Ross Geller, Monica Geller, Joey Tribbiani, Chandler Bing and Phoebe Buffay are all friends, living off of one another in the heart of NY. Over the course of 10 years, these average group of buddys go through massive mayhem, family trouble, past and future romances, fights, laughs, tears and surprises as they learn what it really means to be a friend.
        </p>

        <p>
            A good amount of time throughout the show is shot in this cafe called 'Central Perk' and the Cafe manager 'Gunther' is also a famous charecter from the show. So we decided why not make 'Central Perk' a relaity. We have a diverse and a very huge group of customers.
            We are not only famous for a cafe from Friends but it is also a great spot to hang out with friends, catch up on some old memories, enjoy the great coffee with some snacks.

        </p>

    </div>
    
    <?php include("include/footer.php"); ?>
    
    
</body>

</html>
