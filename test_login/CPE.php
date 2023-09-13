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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="grid-container">


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


     
   


<div class="container"> 
  <form enctype="multipart/form-data" action="upload2.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>

  
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">File Name</th>
      <th scope="col">Download</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
 

<?php

$files = scandir("CPE/");

for ($a = 2; $a < count($files); $a++)
{
    ?>

    <tr>
      <th scope="row"><?php echo $a -1; ?></th>
      <td><?php echo $files[$a]; ?></td>
      <td><a href="CPE/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
     </td>
      <td><a href="delete2.php?name=CPE/<?php echo $files[$a]; ?>" style="color: red;">
            Delete
        </a></td>
    </tr>

    <p>
        
   
    </p>
    <?php
} ?>
</tbody>
</table>
</div>




    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="scripts.js"></script>
  </body>
</html>