<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
         $connect = mysqli_connect('localhost', 'root', 'root', 'colors');

         if(!$connect){
        die("Coonection fail: " . mysqli_connect_error());
         }else{
            $query = 'SELECT * FROM colors';
            $colors = mysqli_query($connect, $query);
            //print_r ($colors); //print row data
            foreach($colors as $color){               
                echo '<div class="color" style="background-color:' .$color["Hex"] . '">' . $color["Name"] . '</div>';
            }
         }
    ?>
    
</body>
</html>