<script src="https://www.google.com/jsapi"></script>
<script>
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
  var data = google.visualization.arrayToDataTable([
   ['Год', 'Россия', 'США'],
   ['1860', 1.3, 70],
   ['1885', 2000, 3120],
   ['1901', 12170, 9920]
  ]);
  var options = {
   title: 'Добыча нефти',
   hAxis: {title: 'Год'},
   vAxis: {title: 'Тыс. тонн'}
  };
  var chart = new google.visualization.ColumnChart(document.getElementById('oil'));
  chart.draw(data, options);
 }
</script>
<div class="wrap">
    <h3><?php echo $title; ?></h3>
    <div id="oil" style="width: 500px; height: 400px;"></div>
</div>