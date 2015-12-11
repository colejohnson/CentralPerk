<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Gallery | Central Perk Cafe</title>
    <?php include("include/head.php"); ?>
</head>
<body>

    <?php include("include/header.php"); ?>
    
    <div class="maincontainer">
        
        <!-- Plugin for Justified Image Container -->
        <div>
            <?php 
                $dir = 'media/gallery'; 
                $file_display = array('jpg', 'jpeg', 'png', 'gif');

                $dir_contents = scandir($dir);

                foreach ($dir_contents as $file) {
                    $file_type = strtolower(end(explode('.', $file)));
                    
                    if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
                        echo '<img src="' . $dir . '/' . $file . '" alt="ME">';    
                    }
                }
            ?>
        </div>
        
    </div>    
    
    <?php include("include/footer.php"); ?>

</body>
</html>