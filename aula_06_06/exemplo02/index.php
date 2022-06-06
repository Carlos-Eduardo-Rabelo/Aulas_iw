<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Salas', 'Porcentagem'],
          ["1°B", 1000000],
          ["1°A", 370000],
          ["1°C", 350000],
          ["2°C", 310000],
          ["2°A", 250000],
          ["2°B",182000]
        ]);

        var options = {
          title: 'Pontuação SPF',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Pontuação SPF',
                   subtitle: 'Quais salas mais marcaram pontos' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Porcentagem'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>

</body>
</html>