<?php
    include("db.php");
?>

<?php
    $id = $_POST['song_number'];

    $sql = "delete from fav where song_number='$song_number'";
    if(mysqli_query($conn,$sql))
    {
       echo "<script>alert('Deleted Successfully');</script>";
       header("refresh:1;url=fav.php");
    }
    else
    {
        echo "<script>alert('Delete is Unsuccessfull');</script>";
        header("refresh:1;url=fav.php");
    }
    
?>