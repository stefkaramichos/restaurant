<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

    
        <div  class="contact-container" style=" background-image: url('images/restaurant22.jpg'); background-repeat: no-repeat; background-size: cover; height:1020px; padding-top:470px;">
            <div style="background-color:white; width:30%; margin:auto;" >
             <?php
                    echo "Όνομα: " .$_POST["name"];
                    echo "<br>Email: " .$_POST["email"];
                    echo "<br>Τηλέφωνο: " .$_POST["phone"];
                    echo "<br>Θέμα: " .$_POST["subject"];
                    echo "<br>Μύνημα: " .$_POST["message"];

                ?>
             </div>   
        </div>
    
 
</body>
</html>
    
    


