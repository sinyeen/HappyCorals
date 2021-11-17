<?php
require'connection.php';


$name = $_POST["Name"];
$quantity = $_POST["NewQuantity"];
$BottleCap_metal = $_POST["NewBottleCap_metal"];
$BottleCap_plastic = $_POST["NewBottleCap_plastic"];
$Cans = $_POST["NewCans"];
$CigButt = $_POST["NewCigButt"];
$Cig_pack = $_POST["NewCig_pack"];
$Clothes = $_POST["NewClothes"];
$Construction = $_POST["NewConstruction"];
$FishGear = $_POST["NewFishGear"];
$FoodCon_foam = $_POST["NewFoodCon_foam"];
$FoodCon_plastic = $_POST["NewFoodCon_plastic"];
$FoodWrap = $_POST["NewFoodWrap"];
$GlassBottle = $_POST["NewGlassBottle"];
$Lighter = $_POST["NewLighter"];
$Masks = $_POST["NewMasks"];
$OtherPack = $_POST["NewOtherPack"];
$OtherTrash = $_POST["NewOtherTrash"];
$Paper = $_POST["NewPaper"];
$Pen = $_POST["NewPen"];
$PlasticBottle = $_POST["NewPlasticBottle"];
$PlasticBag = $_POST["NewPlasticBag"];
$PlateCup = $_POST["NewPlateCup"];
$Shoes = $_POST["NewShoes"];
$Straws = $_POST["NewStraws"];
$Toy = $_POST["NewToy"];
$Utensils = $_POST["NewUtensils"];


$sql = "update data set quantity='".$quantity."' where name='".$name."'";
$sql = "update data set BottleCap_metal='".$BottleCap_metal."' where name='".$name."'";
$sql = "update data set BottleCap_plastic='".$BottleCap_plastic."' where name='".$name."'";
$sql = "update data set Cans='".$Cans."' where name='".$name."'";
$sql = "update data set CigButt='".$CigButt."' where name='".$name."'";
$sql = "update data set Cig_pack='".$Cig_pack."' where name='".$name."'";
$sql = "update data set Clothes='".$Clothes."' where name='".$name."'";
$sql = "update data set Construction='".$Construction."' where name='".$name."'";
$sql = "update data set FishGear='".$FishGear."' where name='".$name."'";
$sql = "update data set FoodCon_foam='".$FoodCon_foam."' where name='".$name."'";
$sql = "update data set FoodCon_plastic='".$FoodCon_plastic."' where name='".$name."'";
$sql = "update data set FoodWrap='".$FoodWrap."' where name='".$name."'";
$sql = "update data set GlassBottle='".$GlassBottle."' where name='".$name."'";
$sql = "update data set Lighter='".$Lighter."' where name='".$name."'";
$sql = "update data set Masks='".$Masks."' where name='".$name."'";
$sql = "update data set OtherPack='".$OtherPack."' where name='".$name."'";
$sql = "update data set OtherTrash='".$OtherTrash."' where name='".$name."'";
$sql = "update data set BottleCap='".$BottleCap."' where name='".$name."'";
$sql = "update data set Paper='".$Paper."' where name='".$name."'";
$sql = "update data set Pen='".$Pen."' where name='".$name."'";
$sql = "update data set PlasticBottle='".$PlasticBottle."' where name='".$name."'";
$sql = "update data set PlasticBag='".$PlasticBag."' where name='".$name."'";
$sql = "update data set PlateCup='".$PlateCup."' where name='".$name."'";
$sql = "update data set Shoes='".$Shoes."' where name='".$name."'";
$sql = "update data set Straws='".$Straws."' where name='".$name."'";
$sql = "update data set Toy='".$Toy."' where name='".$name."'";
$sql = "update data set Utensils='".$Utensils."' where name='".$name."'";


$result = mysqli_query($connect,$sql);
?>