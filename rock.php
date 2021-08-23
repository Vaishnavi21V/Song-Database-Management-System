<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rock</title>

    <style>
        	body{
		
        background-image: url('colorful-music-background-260nw-364346705.webp');
        background-repeat: no-repeat;
        background-size: cover;
   }
   </style>

</head>

<body>
    <center>
    <h1>Rock</h1>

    <?php

        include("db.php");

    ?>

    <table width = "20%" border = "10" cellpadding = "7" cellspacing = "7">

        <thead>

            <th><h2>Song Number</h2></th>
            <th><h2>Song Name</h2></th>
            <th><h2>Artist</h2></th>
            <th><h2>Language</h2></th>
            <th><h2>Duration</h2></th>

        </thead>

        <tr>
                <?php 

                    $sql = "select * from rock"; 

                    $result = mysqli_query($conn,$sql); 

                    while($row = mysqli_fetch_array($result)) 

                    {
                        ?>
                        <tr>
                        <td><h4><i><?php echo $row['songno'];?></i></h4></td>
                        <td><h4><i><?php echo $row['title'];?></i></h4></td>
                        <td><h4><i><?php echo $row['artist'];?></i></h4></td>
                        <td><h4><i><?php echo $row['lang'];?></i></h4></td>
                        <td><h4><i><?php echo $row['duration'];?></i></h4></td>
                        </tr>

                        <?php
                    }
                    

               ?>
        </tr>     

    </table>
    </center>  

</body>

</html>