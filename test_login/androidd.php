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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Brande</th>
                <th>Date de validation</th>
                <th>Marque</th>

                <th>Modele</th>
                <th>Version de Software</th>
                <th>Etat</th>

                <th>Commentaires</th>
                <th>Confirmé FOTA</th>
                <th>Date de Lancement</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM Android");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore d'employé ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['brand']?></td>
                            <td><?=$row['date_validation']?></td>
                            <td><?=$row['Marque']?></td>    
                            <td><?=$row['Modele']?></td>
                            <td><?=$row['Version_software']?></td>
                            <td><?=$row['Etat']?></td>

                            <td><?=$row['Commentaires']?></td>
                            <td><?=$row['Confirmé_FOTA']?></td>
                            <td><?=$row['Date_lancement']?></td>

                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="images/pen.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>
</html>
      




    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="scripts.js"></script>
  </body>
</html>