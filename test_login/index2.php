


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Upload your files</title>
</head>
<body>
<div class="container"> 
  <form enctype="multipart/form-data" action="upload.php" method="POST">
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

$files = scandir("uploads");

for ($a = 2; $a < count($files); $a++)
{
    ?>

    <tr>
      <th scope="row"><?php echo $a -1; ?></th>
      <td><?php echo $files[$a]; ?></td>
      <td><a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
     </td>
      <td><a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
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