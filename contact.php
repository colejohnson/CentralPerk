<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Contact Us | Central Perk Cafe</title>
    <?php include("include/head.php"); ?>
</head>
<body>
    
    <?php include("include/menubar.php"); ?>
    
    <form method="post" action="include/send-contact.php">
        <div class="form-group">
            <input name="name" class="form-control" type="text" placeholder="Enter your Name">
        </div>
        <div class="form-group">
            <input name="email" class="form-control" type="email" placeholder="Enter your Email">
        </div>
        <div class="form-group">
            <textarea name="message" class="form-control" rows="10" placeholder="Enter your Message"></textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-success btn-block" type="submit">
        </div>
    </form>
    
</body>
</html>