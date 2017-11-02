<?php
require ('RegresiLinier.php');

$x = [
    2000,
    2001,
    2002,
    2003,
    2004,
    2005,
    2006,
    2007,
    2008,
    2009
];

$y = [
    45,
    48,
    51,
    51,
    52,
    54,
    61,
    67,
    69,
    70
];


$regresi = new RegresiLinier($x, $y);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Regresi Linier</title>
    <script src="Chart.min.js"></script>    
</head>
<body>

<?php
//contoh menampilkan data regresi linear
echo "<textarea style='width:100%; height:300px; '>";
echo "X Variable : \n";
print_r($x);
echo "</textarea>";

echo "<textarea style='width:100%; height:300px; '>";
echo "Y Variable : \n";
print_r($y);
echo "</textarea>";

echo "<textarea style='width:100%; height:300px; '>";
echo "Hasil Analisis Regresi Linear Sederhana : \n";
print_r($regresi->all);
echo "</textarea>";
?>
<br>
<h3>Penerapan RegresiLinearPHP dengan ChartJS</h3>

<canvas id="graph" width=500 height="150"></canvas>
<script>
    ctx = document.getElementById('graph');
    var chart = new Chart(ctx, {
        type : 'line',
        data: {
            labels: [<?=implode(",",$x)?>],
            datasets: [
                {
                label: 'Realisasi Kehadiran',
                data: [<?=implode(",", $y)?>],
                backgroundColor: 'rgba(12, 199, 132, 0.2)',
                borderWidth: 1
                },
                {
                label: 'Regresi Linier',
                data: [<?=implode(",", $regresi->all)?>],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 1
                },
            ]
        }
    });
</script>


</body>
</html>


