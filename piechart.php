<div class="chart center" id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Platform', 'Millions of Units sold'],
  ['Nintendo Switch', 52.48],
  ['PlayStation 4', 108.9],
  ['Xbox One', 46.9],
    ['Super NES Classic Edition', 5.28],
  ['NES Classic Edition', 2.3]
]);


  var options = {'title':'Percentages of Consoles Sold', 'max-width':550, 'max-height':400};

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>