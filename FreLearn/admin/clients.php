<?php
        include_once '../connect/connect.php';
        $requete = "SELECT * FROM `clients`" ;
        $query = mysqli_query($con,$requete);
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>frelearn</title>
</head>
<nav>
<a href="../index.php" class="cta"> <button>home</button></a>
    <a href="clients.php" class="cta"> <button>clients</button></a>
    <a href="categoriesform.php" class="cta"> <button>categories</button></a>
    <a href="coursesform.php" class="cta"> <button>courses</button></a>
    <a href="#" class="cta"> <button></button></a>

    </nav>
     <div class="">
              <div class="">
                  table of coaches 
                  <table class="">
                      <thead>
                          <tr>
                            <th scope="col">client id</th>
                            <th scope="col">fName</th>
                            <th scope="col">lname</th>
                            <th scope="col">email</th>
                            <th scope="col "colspane="2">num</th>
                            <th>age</th>
                            <th>Country</th>
                             <th scope="col">password</th>
                            

                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                                foreach($query as $data){ 
                    ?>
                          <tr>
                              <td scope="row"><?php echo $data['id']; ?></td>
                              <td><?php echo $data['fname']; ?></td>
                              <td><?php echo $data['lname']; ?></td>
                              <td><?php echo $data['username']; ?></td>
                              <td><?php echo $data['email']; ?></td>
                              <td><?php echo $data['num']; ?></td>
                              <td><?php echo $data['age']; ?></td>
                              <td><?php echo $data['country']; ?></td>
                              <td><?php echo $data['password']; ?></td>
                                 <td>
                                <a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="deleteclient.php?id=<?php echo $data['id']; ?>"><i class="bi bi-trash"></i></a>
                            </td>
                           </tr>          
                 
                             
                           
                          <?php 
                                }
                            ?>
                      </tbody>
                  </table>

              </div>

          </div>