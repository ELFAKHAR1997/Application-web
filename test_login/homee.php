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
             
             $sql = "SELECT brand, count(*) as contribution from android group by brand";
             $fire = mysqli_query($con,$sql);
              while ($result = mysqli_fetch_assoc($fire)) {
                echo"['".$result['brand']."',".$result['contribution']."],";
              }
    
             ?> 

            ]);
    
            var options = {
                  title: 'Le nombre de device testé',pieSliceText: 'value-and-percentage'
            };
    
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
            chart.draw(data, options);

            var data1 = google.visualization.arrayToDataTable([

['students', 'contribution'],

<?php

$sql1 = "SELECT Etat, count(*) as contribution from android group by Etat";
$fire1 = mysqli_query($con,$sql1);
while ($result = mysqli_fetch_assoc($fire1)) {
  echo"['".$result['Etat']."',".$result['contribution']."],";
}

?> 

]);

var options1 = {
title: 'Etat de test',pieSliceText: 'value-and-percentage'
};

var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));

chart1.draw(data1, options1);

          }
        </script>
      </head>
      <body>

      <div class='parent'>

        <div class='child'  id="piechart" style="width: 900px; height: 500px;"></div>
        <div class='child'  id="piechart1" style="width: 900px; height: 500px;"></div>
    
      </div>
     

      
      </body>
    </html>


    <!-- endphp -->



      <!-- Main 
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Android</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">249</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Iphones</p>
              <span class="material-icons-outlined text-orange">add_shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">83</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">SALES ORDERS</p>
              <span class="material-icons-outlined text-green">shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">79</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">INVENTORY ALERTS</p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold">56</span>
          </div>

        </div>

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Top 5 Products</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Purchase and Sales Orders</p>
            <div id="area-chart"></div>
          </div>

        </div>
      </main>
-->
    
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="scripts.js"></script>
  </body>
</html>