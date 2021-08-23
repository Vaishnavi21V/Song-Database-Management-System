<?php
 include('db.php');
?>

<?php
$name = $_POST['Name'];
$email = $_POST['email'];
$phno = $_POST['phonenumber'];

$sql = "insert into signup(name,email,phno) values ('$name','$email','$phno')";

if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Registered Succesfully')</script>";
        header("refresh:1;url=page1.html");
    }
    else{
        echo "<script>alert('Register Unsuccesfull')</script>";
        header("refresh:1;url=page1.html");
    }
?>