
<?php

function wp_load_utils ( ) {
   require( ABSPATH . WPINC . '/class-wp-walker.php' );
   require( ABSPATH . WPINC . '/l10n.php' );
   require( ABSPATH . 'wp-admin/includes/admin.php' );
   require( ABSPATH . WPINC . '/formatting.php' );
   require( ABSPATH . WPINC . '/pluggable.php' );
   require( ABSPATH . WPINC . '/script-loader.php' );
   require( ABSPATH . WPINC . '/general-template.php' );
   require( ABSPATH . WPINC . '/link-template.php' );
   //require( ABSPATH . WPINC . '/shortcodes.php' );
   wp_functionality_constants();
}

function wp_load_session ( ) {
   require( ABSPATH . WPINC . '/capabilities.php' );
   require( ABSPATH . WPINC . '/user.php' );
   require( ABSPATH . WPINC . '/meta.php' );
   require( ABSPATH . WPINC . '/post.php');
   require( ABSPATH . WPINC . '/class-wp-user.php' );
   require( ABSPATH . WPINC . '/class-wp-roles.php' );
   require( ABSPATH . WPINC . '/class-wp-role.php' );
   require( ABSPATH . WPINC . '/session.php' );
   wp_cookie_constants();
}
$server = "localhost";
$username = "bn_wordpress";
$password = "eb9782868d1b2edef21f48e36722a7da24dc61385e1e3a790da3167e8d69ca15";
$db = "bitnami_wordpress";

try{
    $dbcon = new PDO("mysql:host={$server};dbname={$db}", $username, $password);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $ex){
    die($ex->getMessage());
}
$stmt=$dbcon->prepare("SELECT sum(BottleCap_metal) AS sum_BCM FROM data");
$stmt->execute();
$json= [];

while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json[] = $row['sum_BCM'];
}


$stmt1=$dbcon->prepare("SELECT sum(Cans) AS sum_cans FROM data");
$stmt1->execute();
$json1= [];

while ($row=$stmt1->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json1[] = $row['sum_cans'];
}

$stmt2=$dbcon->prepare("SELECT sum(BottleCap_plastic) AS sum_BottleCap_plastic FROM data");
$stmt2->execute();
$json2= [];

while ($row=$stmt2->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json2[] = $row['sum_BottleCap_plastic'];
}

$stmt3=$dbcon->prepare("SELECT sum(CigButt) AS sum_CigButt FROM data");
$stmt3->execute();
$json3= [];

while ($row=$stmt3->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json3[] = $row['sum_CigButt'];
}

$stmt4=$dbcon->prepare("SELECT sum(Cig_pack) AS sum_Cig_pack FROM data");
$stmt4->execute();
$json4= [];

while ($row=$stmt4->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json4[] = $row['sum_Cig_pack'];
}

$stmt5=$dbcon->prepare("SELECT sum(Clothes) AS sum_Clothes FROM data");
$stmt5->execute();
$json5= [];

while ($row=$stmt5->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json5[] = $row['sum_Clothes'];
}

$stmt6=$dbcon->prepare("SELECT sum(Construction) AS sum_Construction FROM data");
$stmt6->execute();
$json6= [];

while ($row=$stmt6->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json6[] = $row['sum_Construction'];
}

$stmt7=$dbcon->prepare("SELECT sum(FishGear) AS sum_FishGear FROM data");
$stmt7->execute();
$json7= [];

while ($row=$stmt7->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json7[] = $row['sum_FishGear'];
}

$stmt8=$dbcon->prepare("SELECT sum(FoodCon_foam) AS sum_FoodCon_foam FROM data");
$stmt8->execute();
$json8= [];

while ($row=$stmt8->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json8[] = $row['sum_FoodCon_foam'];
}

$stmt9=$dbcon->prepare("SELECT sum(FoodCon_plastic) AS sum_FoodCon_plastic FROM data");
$stmt9->execute();
$json9= [];

while ($row=$stmt9->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json9[] = $row['sum_FoodCon_plastic'];
}

$stmt10=$dbcon->prepare("SELECT sum(FoodWrap) AS sum_FoodWrap FROM data");
$stmt10->execute();
$json10= [];

while ($row=$stmt10->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json10[] = $row['sum_FoodWrap'];
}

$stmt11=$dbcon->prepare("SELECT sum(GlassBottle) AS sum_GlassBottle FROM data");
$stmt11->execute();
$json11= [];

while ($row=$stmt11->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json11[] = $row['sum_GlassBottle'];
}

$stmt12=$dbcon->prepare("SELECT sum(Lighter) AS sum_Lighter FROM data");
$stmt12->execute();
$json12= [];

while ($row=$stmt12->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json12[] = $row['sum_Lighter'];
}

$stmt13=$dbcon->prepare("SELECT sum(Masks) AS sum_Masks FROM data");
$stmt13->execute();
$json13= [];

while ($row=$stmt13->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json13[] = $row['sum_Masks'];
}

$stmt14=$dbcon->prepare("SELECT sum(OtherPack) AS sum_OtherPack FROM data");
$stmt14->execute();
$json14= [];

while ($row=$stmt14->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json14[] = $row['sum_OtherPack'];
}

$stmt15=$dbcon->prepare("SELECT sum(OtherTrash) AS sum_OtherTrash FROM data");
$stmt15->execute();
$json15= [];

while ($row=$stmt15->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json15[] = $row['sum_OtherTrash'];
}

$stmt16=$dbcon->prepare("SELECT sum(Paper) AS sum_Paper FROM data");
$stmt16->execute();
$json16= [];

while ($row=$stmt16->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json16[] = $row['sum_Paper'];
}

$stmt17=$dbcon->prepare("SELECT sum(Pen) AS sum_Pen FROM data");
$stmt17->execute();
$json17= [];

while ($row=$stmt17->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json17[] = $row['sum_Pen'];
}

$stmt18=$dbcon->prepare("SELECT sum(PlasticBottle) AS sum_PlasticBottle FROM data");
$stmt18->execute();
$json18= [];

while ($row=$stmt18->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json18[] = $row['sum_PlasticBottle'];
}

$stmt19=$dbcon->prepare("SELECT sum(PlasticBag) AS sum_PlasticBag FROM data");
$stmt19->execute();
$json19= [];

while ($row=$stmt19->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json19[] = $row['sum_PlasticBag'];
}

$stmt20=$dbcon->prepare("SELECT sum(PlateCup) AS sum_PlateCup FROM data");
$stmt20->execute();
$json20= [];

while ($row=$stmt20->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json20[] = $row['sum_PlateCup'];
}

$stmt21=$dbcon->prepare("SELECT sum(Shoes) AS sum_Shoes FROM data");
$stmt21->execute();
$json21= [];

while ($row=$stmt21->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json21[] = $row['sum_Shoes'];
}

$stmt22=$dbcon->prepare("SELECT sum(Straws) AS sum_Straws FROM data");
$stmt22->execute();
$json22= [];

while ($row=$stmt22->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json22[] = $row['sum_Straws'];
}

$stmt23=$dbcon->prepare("SELECT sum(Toy) AS sum_Toy FROM data");
$stmt23->execute();
$json23= [];

while ($row=$stmt23->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json23[] = $row['sum_Toy'];
}

$stmt24=$dbcon->prepare("SELECT sum(Utensils) AS sum_Utensils FROM data");
$stmt24->execute();
$json24= [];

while ($row=$stmt24->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $json24[] = $row['sum_Utensils'];
}




$stmta=$dbcon->prepare("SELECT (sum(Cans)+sum(BottleCap_metal)+sum(Construction)+sum(Utensils)+sum(FishGear)) AS Metal FROM data");
$stmta->execute();
$jsona= [];

while ($row=$stmta->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsona[] = $row['Metal'];
}

$stmtb=$dbcon->prepare("SELECT (sum(BottleCap_plastic)+sum(CigButt)+sum(FoodCon_plastic)+sum(Utensils)+sum(FoodWrap)+sum(Lighter)+sum(Pen)+sum(PlasticBottle)+sum(PlasticBag)+sum(PlateCup)+sum(Straws)) AS Plastic FROM data");
$stmtb->execute();
$jsonb= [];

while ($row=$stmtb->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsonb[] = $row['Plastic'];
}

$stmtc=$dbcon->prepare("SELECT (sum(Cig_pack)+sum(Construction)+sum(FoodWrap)+sum(Paper)+sum(PlateCup)) AS PaperOrWood FROM data");
$stmtc->execute();
$jsonc= [];

while ($row=$stmtc->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsonc[] = $row['PaperOrWood'];
}

$stmtd=$dbcon->prepare("SELECT (sum(Clothes)+sum(Masks)+sum(Shoes)) AS Fabric FROM data");
$stmtd->execute();
$jsond= [];

while ($row=$stmtd->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsond[] = $row['Fabric'];
}

$stmte=$dbcon->prepare("SELECT (sum(FishGear)) AS SyntheticFiber FROM data");
$stmte->execute();
$jsone= [];

while ($row=$stmte->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsone[] = $row['SyntheticFiber'];
}

$stmtf=$dbcon->prepare("SELECT (sum(FoodCon_foam)+sum(PlateCup)) AS Polystyrene FROM data");
$stmtf->execute();
$jsonf= [];

while ($row=$stmtf->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsonf[] = $row['Polystyrene'];
}

$stmtg=$dbcon->prepare("SELECT (sum(GlassBottle)) AS Glass FROM data");
$stmtg->execute();
$jsong= [];

while ($row=$stmtg->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsong[] = $row['Glass'];
}

$stmth=$dbcon->prepare("SELECT (sum(OtherPack)+sum(OtherTrash)+sum(Shoes)+sum(Toy)) AS Other FROM data");
$stmth->execute();
$jsonh= [];

while ($row=$stmth->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $jsonh[] = $row['Other'];
}



?>






<!doctype html>
<html lang="en">
  <head>
    <title>Type of Debris Collected</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 960px;
        height: 540px;
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
      }
    </style>
  </head>
  <body>
    <div class="chartCard">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
        <button onclick="resetChart()">Go Back to Type of Debris</button>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // setup 
    const data = {
      labels: ['Metal', 'Plastic', 'PaperOrWood', 'Fabric', 'SyntheticFibre', 'Polystyrene', 'Glass', 'Other'],
      datasets: [{
        label: 'Type of Debris Collected from the Clean-up (Quantity)',
        data: [<?php echo json_encode($jsona); ?>, <?php echo json_encode($jsonb); ?>, <?php echo json_encode($jsonc); ?>, <?php echo json_encode($jsond); ?>, <?php echo json_encode($jsone); ?>, <?php echo json_encode($jsonf); ?>, <?php echo json_encode($jsong); ?>, <?php echo json_encode($jsonh); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)', 
          'rgba(156, 100, 255, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)', 
          'rgba(156, 100, 255, 0.2)'
        ],
        borderWidth: 1
      }]
    };
    const Metal = {
      labels: ['Cans', 'Bottl Cap (metal)', 'Construction', 'Fishing Gear', 'Utensils'],
      datasets: [{
        label: 'Debris Made of Metal',
        data: [<?php echo json_encode($json1); ?>, <?php echo json_encode($json); ?>, <?php echo json_encode($json6); ?>, <?php echo json_encode($json7); ?>, <?php echo json_encode($json24); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)'],
        borderWidth: 1
      }]
    };
    const Plastic = {
      labels: ['Bottle Cap (plastic)','Cigarette Butt','Food Container (plastic)','Utensils','Food Wrap','Lighter','Pen','Plastic Bottle','Plastic Bag','Plate and Cup','Straws'],
      datasets: [{
        label: 'Debris Made of Plastic',
        data: [<?php echo json_encode($json2); ?>, <?php echo json_encode($json3); ?>, <?php echo json_encode($json9); ?>, <?php echo json_encode($json24); ?>, <?php echo json_encode($json10); ?>,<?php echo json_encode($json12); ?>,<?php echo json_encode($json17); ?>,<?php echo json_encode($json18); ?>,<?php echo json_encode($json19); ?>,<?php echo json_encode($json20); ?>,<?php echo json_encode($json22); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)', 
          'rgba(156, 100, 255, 0.2)',
          'rgba(200, 159, 64, 0.2)',
          'rgba(3, 0, 0, 0.2)', 
          'rgba(177, 100, 255, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)', 
          'rgba(156, 100, 255, 0.2)',
          'rgba(200, 159, 64, 0.2)',
          'rgba(3, 0, 0, 0.2)', 
          'rgba(177, 100, 255, 0.2)'],
        borderWidth: 1
      }]
    };

    const PaperOrWood = {
      labels: ['Cigarette Pack', 'Construction', 'Paper', 'Food Wrap', 'Plate and Cup'],
      datasets: [{
        label: 'Debris Made of Paper or Wood',
        data: [<?php echo json_encode($json4); ?>, <?php echo json_encode($json6); ?>, <?php echo json_encode($json16); ?>, <?php echo json_encode($json10); ?>, <?php echo json_encode($json20); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)'],
        borderWidth: 1
      }]
    };

    const Fabric = {
      labels: ['Clothes', 'Masks', 'Shoes'],
      datasets: [{
        label: 'Debris Made of Fabric',
        data: [<?php echo json_encode($json5); ?>, <?php echo json_encode($json13); ?>, <?php echo json_encode($json21); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'],
        borderWidth: 1
      }]
    };
    
    const Polystyrene = {
      labels: ['Food Container (foam)', 'Plate and Cup'],
      datasets: [{
        label: 'Debris Made of Polystyrene',
        data: [<?php echo json_encode($json8); ?>, <?php echo json_encode($json20); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)'],
        borderWidth: 1
      }]
    };

    const SyntheticFibre = {
      labels: ['Fishing Gear'],
      datasets: [{
        label: 'Debris Made of SyntheticFibre',
        data: [<?php echo json_encode($json7); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)'],
        borderWidth: 1
      }]
    };

    const Glass = {
      labels: ['Glass Bottle'],
      datasets: [{
        label: 'Debris Made of Glass',
        data: [<?php echo json_encode($json11); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)'],
        borderWidth: 1
      }]
    };

    const Other = {
      labels: ['Other Packaging', 'Other Trash', 'Shoes', 'Toy'],
      datasets: [{
        label: 'Debris Made of Other Material',
        data: [<?php echo json_encode($json14); ?>, <?php echo json_encode($json15); ?>,<?php echo json_encode($json23); ?>],
        backgroundColor:  [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(153, 102, 255, 0.2)'],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(153, 102, 255, 0.2)'],
        borderWidth: 1
      }]
    };



    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(
        ctx,
        config
    );

    function clickHandler(click) {
        const points = myChart.getElementsAtEventForMode(click, 'nearest', { intersect: true }, true);
        if (points.length) {
            
            const firstPoint = points[0];
           // console.log(firstPoint)
           

            if (firstPoint.index === 0) {
                if(myChart.config.data.datasets[0].label === Plastic.datasets[0].label || myChart.config.data.datasets[0].label === PaperOrWood.datasets[0].label || myChart.config.data.datasets[0].label === Fabric.datasets[0].label || myChart.config.data.datasets[0].label === SyntheticFibre.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label || myChart.config.data.datasets[0].label === Glass.datasets[0].label || myChart.config.data.datasets[0].label === Other.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = Metal;
                }
            }
            if (firstPoint.index === 1) {
                if(myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === PaperOrWood.datasets[0].label || myChart.config.data.datasets[0].label === Fabric.datasets[0].label || myChart.config.data.datasets[0].label === SyntheticFibre.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label || myChart.config.data.datasets[0].label === Glass.datasets[0].label || myChart.config.data.datasets[0].label === Other.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = Plastic;
                }
            }
            if (firstPoint.index === 2) {
                if(myChart.config.data.datasets[0].label === Plastic.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Fabric.datasets[0].label || myChart.config.data.datasets[0].label === SyntheticFibre.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label || myChart.config.data.datasets[0].label === Glass.datasets[0].label || myChart.config.data.datasets[0].label === Other.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = PaperOrWood;
                }
            }
            if (firstPoint.index === 3) {
                if(myChart.config.data.datasets[0].label === Plastic.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === SyntheticFibre.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label || myChart.config.data.datasets[0].label === Glass.datasets[0].label || myChart.config.data.datasets[0].label === Other.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = Fabric;
                }
            }
            if (firstPoint.index === 4) {
            if(myChart.config.data.datasets[0].label === Plastic.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Fabric.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label || myChart.config.data.datasets[0].label === Glass.datasets[0].label || myChart.config.data.datasets[0].label === Other.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = SyntheticFibre;
                }
            }
            if (firstPoint.index === 5) {
                if(myChart.config.data.datasets[0].label === Plastic.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Fabric.datasets[0].label || myChart.config.data.datasets[0].label === SyntheticFibre.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Glass.datasets[0].label || myChart.config.data.datasets[0].label === Other.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = Polystyrene;
                }
            }
            if (firstPoint.index === 6) {
                if(myChart.config.data.datasets[0].label === Plastic.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Fabric.datasets[0].label || myChart.config.data.datasets[0].label === SyntheticFibre.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Other.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = Glass;
                }
            }
            if (firstPoint.index === 7) {
                if(myChart.config.data.datasets[0].label === Plastic.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Fabric.datasets[0].label || myChart.config.data.datasets[0].label === SyntheticFibre.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label || myChart.config.data.datasets[0].label === Metal.datasets[0].label || myChart.config.data.datasets[0].label === Polystyrene.datasets[0].label) {
                    console.log('do nothing')
                } else {
                    myChart.config.data = Other;
                }
            }
                
            

            myChart.update();

        }
    }
    ctx.onclick = clickHandler;

    function resetChart(){
        myChart.config.data = data;
        myChart.update();
    }



    </script>

  </body>
</html>