<?php
require'connection.php';

$name = $_POST["Name"];
$quantity = $_POST["Quantity"];
$BottleCap_metal = $_POST["BottleCap_metal"];
$BottleCap_plastic = $_POST["BottleCap_plastic"];
$Cans = $_POST["Cans"];
$CigButt = $_POST["CigButt"];
$Cig_pack = $_POST["Cig_pack"];
$Clothes = $_POST["Clothes"];
$Construction = $_POST["Construction"];
$FishGear = $_POST["FishGear"];
$FoodCon_foam = $_POST["FoodCon_foam"];
$FoodCon_plastic = $_POST["FoodCon_plastic"];
$FoodWrap = $_POST["FoodWrap"];
$GlassBottle = $_POST["GlassBottle"];
$Lighter = $_POST["Lighter"];
$Masks = $_POST["Masks"];
$OtherPack = $_POST["OtherPack"];
$OtherTrash = $_POST["OtherTrash"];
$Paper = $_POST["Paper"];
$Pen = $_POST["Pen"];
$PlasticBottle = $_POST["PlasticBottle"];
$PlasticBag = $_POST["PlasticBag"];
$PlateCup = $_POST["PlateCup"];
$Shoes = $_POST["Shoes"];
$Straws = $_POST["Straws"];
$Toy = $_POST["Toy"];
$Utensils = $_POST["Utensils"];

$sql = "insert into data (name, quantity, BottleCap_metal, BottleCap_plastic, Cans, CigButt, Cig_pack, Clothes, Construction, FishGear, FoodCon_foam, FoodCon_plastic, FoodWrap, GlassBottle, Lighter, Masks, OtherPack, OtherTrash, Paper, Shoes, Pen, PlasticBottle, PlasticBag, PlateCup, Straws, Toy, Utensils) values ('".$name."', '".$quantity."', '".$BottleCap_metal."', '".$BottleCap_plastic."', '".$Cans."', '".$CigButt."', '".$Cig_pack."', '".$Clothes."', '".$Construction."', '".$FishGear."', '".$FoodCon_foam."', '".$FoodCon_plastic."', '".$FoodWrap."', '".$GlassBottle."', '".$Lighter."', '".$Masks."', '".$OtherPack."', '".$OtherTrash."', '".$Paper."', '".$Pen."', '".$PlasticBottle."','".$PlasticBag."', '".$PlateCup."', '".$Shoes."', '".$Straws."', '".$Toy."', '".$Utensils."')";
$result = mysqli_query($connect,$sql);
?>