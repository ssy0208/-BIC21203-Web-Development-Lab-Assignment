<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Expenditure Graphs</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h2>Domestic Visitors Expenditure (Bar & Line Graph)</h2>
<canvas id="barChart" width="600" height="300"></canvas>
<canvas id="lineChart" width="600" height="300"></canvas>

<?php
$labels = [];
$data2010 = [];
$data2011 = [];

$sql = "SELECT * FROM expenditure";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $labels[] = $row['component'];
    $data2010[] = $row['year_2010'];
    $data2011[] = $row['year_2011'];
}
?>

<script>
const labels = <?php echo json_encode($labels); ?>;
const data2010 = <?php echo json_encode($data2010); ?>;
const data2011 = <?php echo json_encode($data2011); ?>;

const barChart = new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [
            {
                label: '2010',
                data: data2010
            },
            {
                label: '2011',
                data: data2011
            }
        ]
    }
});

const lineChart = new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: labels,
        datasets: [
            {
                label: '2010',
                data: data2010
            },
            {
                label: '2011',
                data: data2011
            }
        ]
    }
});
</script>

</body>
</html>
