<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>dashbord</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header 
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>

      -->
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> Orange
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">

          <li class="sidebar-list-item">
            <a href="homee.php">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="files.php">
              <span class="material-icons-outlined">dashboard</span> VOLTE
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="ipv6.php">
              <span class="material-icons-outlined">dashboard</span> IPV6
            </a>
          </li>
        
          
          <li class="sidebar-list-item">
            <a href="androidd.php" target="_blank">
              <span class="material-icons-outlined">dashboard</span> Android
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="CPE.php">
              <span class="material-icons-outlined">dashboard</span> CPE
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="sim.php">
              <span class="material-icons-outlined">dashboard</span> SIM
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="autre.php">
              <span class="material-icons-outlined">dashboard</span> Autre
            </a>
          </li>


        </ul>
      </aside>
      <!-- End Sidebar -->

    <!-- endphp -->

       
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

        

        

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Top 5 Products</p>
<div><!-- php -->

<?php
$con = mysqli_connect("localhost","root","","charts");

//if($con){
//  echo "connected";
//}


?>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['students', 'contribution'],
       <?php
       $sql = "SELECT * FROM contribution";
       $fire = mysqli_query($con,$sql);
        while ($result = mysqli_fetch_assoc($fire)) {
          echo"['".$result['Devices']."',".$result['contribution']."],";
        }

       ?>
      ]);

      var options = {
        title: 'Android Sample Global Summary'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html> 
          
          
          </div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Purchase and Sales Orders</p>
            <div>


            <!-- php -->

      <?php
      $con = mysqli_connect("localhost","root","","Samples");
      
      //if($con){
      //  echo "connected";
      //}
    
    
    ?>
    <html>
      <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
    
            var data = google.visualization.arrayToDataTable([
              ['students', 'contribution'],
             <?php
             $sql = "SELECT * FROM contribution ";
             $fire = mysqli_query($con,$sql);
              while ($result = mysqli_fetch_assoc($fire)) {
                
                echo"['".$result['Devices']."',".$result['contribution']."],";
              }
    
             ?>
            ]);
    
            var options = {
              title: 'Android Sample Global Summary'
            };
    
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
            chart.draw(data, options);
          }
        </script>
      </head>
      <body>
        <div id="piechart" style="width: 400px; height: 200px;"></div>
      </body>
    </html>
            </div>
          </div>

        </div>
      </main>
    
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="scripts.js"></script>
  </body>
</html>
