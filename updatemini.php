<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM fav");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Delete employee data</title>
</head>
<body>
    <center>
<table  width = "20%" border="15%" cellpadding ="7" cellspacing="7";>
   
<tr>
<td>song number</td>
<td>song Name</td>
<td>Artist</td>
<td>Language</td>
<td>Genere</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["song_number"]; ?></td>
<td><?php echo $row["song_name"]; ?></td>
<td><?php echo $row["artist"]; ?></td>
<td><?php echo $row["lang"]; ?></td>
<td><?php echo $row["genere"]; ?></td>
<td><a href="update.php?song_number=<?php echo $row["song_number"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>