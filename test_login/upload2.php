<?PHP

  if(!empty($_FILES['uploaded_file']))
  {
    
    $path = "CPE/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
       header("Location: CPE.php"); 

    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>