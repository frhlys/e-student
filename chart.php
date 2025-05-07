<html>
<body>

<?php
    include('connection.php');
   
?>

<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Carta Jumlah Mesyuarat Mengikut Bulan
                    </div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="myChart" height="200" width="600"></canvas>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->            
       
    </div>    <!--/.main-->
    <?php
        $sqlcount=" SELECT COUNT(*) AS MONTH FROM `event` WHERE date BETWEEN '2022-01-01' AND '2022-01-31' UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-02-01' AND '2022-02-29'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-03-01' AND '2022-03-31'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-04-01' AND '2022-04-30'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-05-01' AND '2022-05-31'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-06-01' AND '2022-06-30'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-07-01' AND '2022-07-31'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-08-01' AND '2022-08-31'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-09-01' AND '2022-09-30'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-10-01' AND '2022-10-31'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-11-01' AND '2022-11-30'
                    UNION ALL
                    SELECT COUNT(*) FROM `event` WHERE date BETWEEN '2022-12-01' AND '2022-12-31'";
   
        $monthcount = $conn->query($sqlcount);
        $c=0;
        $storeM = array();
        while($countm = $monthcount->fetch_assoc()) {
            $storeM[$c]=$countm["MONTH"];
            $c++;
        }
       
   
    ?>
        <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script src='js/sweetalert.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>;
   
    <script>
Chart.defaults.global.animation.duration = 1000;
Chart.defaults.global.animation.easing = 'easeOutQuart';
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
   
    data: {
        labels: ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun','Julai','Ogos','September','Oktober','November','Disember'],
        datasets: [{
            label: 'Jumlah Mesyuarat',
            data: [<?php echo $storeM[0]; ?>, <?php echo $storeM[1]; ?>, <?php echo $storeM[2]; ?>, <?php echo $storeM[3]; ?>, <?php echo $storeM[4]; ?>, <?php echo $storeM[5]; ?>,<?php echo $storeM[6]; ?>,<?php echo $storeM[7]; ?>,<?php echo $storeM[8]; ?>,<?php echo $storeM[9]; ?>,<?php echo $storeM[10]; ?>,<?php echo $storeM[11]; ?>],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 1, 25, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1,
           
        }]
    },
    options: {
       
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    points: 0,
                    userCallback: function(label, index, labels) {
                     // when the floored value is the same as the value we have a whole number
                     if (Math.floor(label) === label) {
                         return label;
                     }

                 }
                }
            }]
        }
         
           
           
   
    }
   
   
});
</script>

   

    </script>    
    </body>
</html>