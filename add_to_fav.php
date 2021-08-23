<?php

    include("db.php");

?>

<?php
 $number=$_POST['number'];
 $name = $_POST['Name'];
 $artist = $_POST['artist'];
 $language = $_POST['language'];
 $geners = $_POST['geners'];
 
 $sql = "insert into fav(song_number,song_name,artist,lang,genere) values('$number','$name','$artist','$language','$geners')";

 if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Inserted Succesfully')</script>";
        header("refresh:1;url=page3.html");
    }
    else{
        echo "<script>alert('Insert Unsuccesfull')</script>";
        header("refresh:1;url=page3.html");
    }
?>