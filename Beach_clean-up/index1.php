<?php
$server = "localhost";
$username = "root";
$password = "";
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
    $json[] = $row['sum_BCM']
}
echo json_encode($json);

?>




<!DOCTYPE html>
<html>
<head>
    <title>Chart js</title>
</head>
<body>
<canvas id="myChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['bottlecap'],
        datasets: [{
            label: '# of Votes',
            data: <?php echo json_encode($json); ?>,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


</script>
</body>
</html>
