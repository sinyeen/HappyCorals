<?php
require'connection.php';

$whereField = $_POST["Field"];
$name = $_POST["Name"];

$sql = "select name from data where ".$whereField."='".$name."'";
$result = mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    echo $row['name'];
  }
}
?>