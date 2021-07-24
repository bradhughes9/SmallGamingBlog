  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Platform", "Millions of units Sold", { role: "style" } ],
        ["Nintendo Switch", 52.48, "Red"],
        ["PlayStation 4", 108.9, "Black"],
        ["Xbox One", 46.9, "Greeb"],
		["NES Classic Edition", 5.28, "gray"],
        ["Super NES Classic Edition", 2.3, "color: Silver"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Countries and their Revenues From Video Games",
        width: 375,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" class="chart"></div>