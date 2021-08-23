<?php
include_once 'db.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE fav set song_number='" . $_POST['song_number'] . "', song_name='" . $_POST['song_name'] . "', artist ='" . $_POST['artist'] . "', lang='" . $_POST['lang'] . "' ,genere='" . $_POST['genere'] . "' WHERE song_number ='" . $_POST['song_number'] . "'");
$message = "favourites Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM fav WHERE song_number ='" . $_GET['song_number'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update favourites Data</title>
</head>
<body style="fontsize=50px"  >
<center>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="updatemini.php">favorties</a>
</div>
song_number: <br>
<input type="hidden" name="song_number" class="txtField" value="<?php echo $row['song_number']; ?>">
<input type="number" name="song_number"  value="<?php echo $row['song_number']; ?>">
<br>
song_name: <br>
<input type="text" name="song_name" class="txtField" value="<?php echo $row['song_name']; ?>">
<br>
artist :<br>
<input type="text" name="artist" class="txtField" value="<?php echo $row['artist']; ?>">
<br>
language :<br>
<input type="text" name="lang" class="txtField" value="<?php echo $row['lang']; ?>">
<br>
genere :<br>
<input type="text" name="genere" class="txtField" value="<?php echo $row['genere']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</center>
</html>