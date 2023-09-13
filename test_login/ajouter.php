<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($brand) && isset($date_validation) && isset($Marque) && isset($Modele) && isset($Version_software) && isset($Etat) && isset($Commentaires) && isset($Confirmé_FOTA) && isset($Date_lancement) ){
               
            echo "connexion à la base de donnée";

                include_once "connexion.php";

                echo "requête d'ajout";

                $req = mysqli_query($con , "INSERT INTO Android VALUES(NULL,'$brand' ,'$date_validation' ,'$Marque' ,'$Modele' ,'$Version_software' ,'$Etat' ,'$Commentaires','$Confirmé_FOTA' ,'$Date_lancement')");
                if($req){

                    echo"si la requête a été effectuée avec succès , on fait une redirection";

                    header("location: androidd.php");
                }else {

                    echo "si non";
                    
                    $message = "Employé non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="androidd.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            
            <label>brand</label>
            <input type="text" name="brand">
           
            <!-- Sidebar 
            <label>Date de validation</label>
            <input type="text" name="date_validation">

            -->

            <label for="date_validation">Date de validation</label>
            <input type="date" id="date_validation" name="date_validation">

            <label>Marque</label>
            <input type="text" name="Marque">

    
            <label>Modele</label>
            <input type="text" name="Modele">

            <label>Version de Software</label>
            <input type="text" name="Version_software">

            <label>Etat</label>
            <input type="text" name="Etat">

            <label>Commentaires</label>
            <input type="text" name="Commentaires">

            <label>Confirmé FOTA</label>
            <input type="text" name="Confirmé_FOTA">

            <!-- Sidebar 
            <label>Date de Lancement</label>
            <input type="text" name="Date_lancement">

            -->

            <label for="Date_lancement">Date de Lancement</label>
            <input type="date" id="Date_lancement" name="Date_lancement">



            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>