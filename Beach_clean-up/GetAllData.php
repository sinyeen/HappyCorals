<?php
require'connection.php';

$sql = "select name, quantity, BottleCap from data order by quantity desc limit 3";  
$result = mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    echo "Name: ".$row['name']."|Quantity: ".$row['quantity']."|BottleCap_metal: ".$row['BottleCap_metal']."|BottleCap_plastic: ".$row['BottleCap_plastic']."|Cans: ".$row['Cans']."|CigButt: ".$row['CigButt']."|Cig_pack: ".$row['Cig_pack']."|Clothes: ".$row['Clothes']."|Construction: ".$row['Construction']."|FishGear: ".$row['FishGear']."|FoodCon_foam: ".$row['FoodCon_foam']."|FoodCon_plastic: ".$row['FoodCon_plastic']."|FoodWrap: ".$row['FoodWrap']."|GlassBottle: ".$row['GlassBottle']."|Lighter: ".$row['Lighter']."|Masks: ".$row['Masks']."|OtherPack: ".$row['OtherPack']."|OtherTrash: ".$row['OtherTrash']."|Paper: ".$row['Paper']."|Pen: ".$row['Pen']."|PlasticBottle: ".$row['PlasticBottle']."|PlasticBag: ".$row['PlasticBag']."|PlateCup: ".$row['PlateCup']."|Shoes: ".$row['Shoes']."|Straws: ".$row['Straws']."|Toy: ".$row['Toy']."|Utensils: ".$row['Utensils'].";";
  }
}
?>