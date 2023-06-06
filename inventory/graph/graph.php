<!DOCTYPE html>
<html>
<head>
    <title>Petwins Chart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<canvas id="myChart"></canvas>
</body>
</html>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Product A', 'Product B', 'Product C'],
        datasets: [{
            label: 'Inventory',
            data: [100, 50, 20],
            backgroundColor: [
                'rgba(128, 00, 00, 1)',
                'rgba(50, 205, 50, 1)',
                'rgba(135, 206, 235, 1)'
            ],
            borderColor: [
                'rgba(128, 00, 00, 1)',
                'rgba(50, 205, 50, 1)',
                'rgba(135, 206, 235, 1)'
            ],
            borderWidth: 1
        }, {
            label: 'Inventory Recieved',
            data: [20, 10, 5],
            backgroundColor: [
                'rgba(255, 159, 64, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderColor: [
                'rgba(255, 159, 64, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }, {
            label: 'Inventory Shipped',
            data: [10, 5, 2],
            backgroundColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }, {
            label: 'Inventory on Hand',
            data: [90, 45, 18],
            backgroundColor: [
            ],
            }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>