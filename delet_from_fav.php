<?php
    include("db.php");
?>

<?php
    $id = $_POST['id'];

    $sql = "delete from fav where song_number='$id'";
    if(mysqli_query($conn,$sql))
    {
       echo "<script>alert('Deleted Successfully');</script>";
       header("refresh:1;url=page3.html");
    }
    else
    {
        echo "<script>alert('Delete Unsuccessful');</script>";
        header("refresh:1;url=page3.html");
    }
    
?>