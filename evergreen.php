<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Evergreen</title>

    <style>
        	body{
		
        background-image: url('113971014-beautiful-composition-with-music-sheets-on-wooden-background-baby-songs-concept.jpg');
        background-repeat: no-repeat;
        background-size: cover;
   }
   </style>

</head>

<body>
    <center>
    <h1>evergreen</h1>

    <?php

        include("db.php");

    ?>

    <table width = "20%" border = "10" cellpadding = "7" cellspacing = "7">

        <thead>

            <th><h2>Song Number</h2></th>
            <th><h2>Song Name</h2></th>
            <th><h2>Artist</h2></th>
            <th><h2>Language</h2></th>
            <th><h2>Genere</h2></th>

        </thead>

        <tr>
                <?php 

                    $sql = "select * from evergreen"; 

                    $result = mysqli_query($conn,$sql); 

                    while($row = mysqli_fetch_array($result)) 

                    {
                        ?>
                        <tr>
                        <td><h4><i><?php echo $row['songno'];?></i></h4></td>
                        <td><h4><i><?php echo $row['title'];?></i></h4></td>
                        <td><h4><i><?php echo $row['artist'];?></i></h4></td>
                        <td><h4><i><?php echo $row['lang'];?></i></h4></td>
                        <td><h4><i><?php echo $row['genere'];?></i></h4></td>
                        </tr>

                        <?php
                    }
                    

               ?>
        </tr>     

    </table>
    </center>  

</body>

</html>