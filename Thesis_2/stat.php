<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/admin_css.css">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
              ['College', 'Number of Students'],
              <?php
              echo "['CCS',$CCS],";
              echo "['CHMBPA',$CHMBPA],";
              echo "['CASL',$CASL],";
              echo "['CTET',$CTET]";
               ?>
            ]);
            
            var options = {
                title: 'Number of Vouchers Released',
                height: 700,
                width: 1100,
                backgroundColor: {fill: 'gray'},
            };
            
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            
            chart.draw(data, options);
        }
      </script>
  </head>
  <body>
    <center><div id="piechart"></div></center>
  </body>
</html>