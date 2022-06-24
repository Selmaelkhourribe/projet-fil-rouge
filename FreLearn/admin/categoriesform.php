<?php 
    include_once '../connect/connect.php';
    $requete = "SELECT * FROM `categories`" ;
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
    <a href="catgoriesform.php" class="cta"> <button>categories</button></a>
    <a href="coursesform.php" class="cta"> <button>courses</button></a>
    <a href="#" class="cta"> <button></button></a>

    </nav>
    <section>    
            <div class="">
                <div class="">
                  categories
                </div>
                <form action="insertcategories.php" method="POST" class="">
                    <div class="mb-3">
                        <label class="" >Title</label>
                        <input type="text" class="" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="" >Subtitle</label>
                        <input type="text" class="" name="subtitle">
                    </div>
                    <div class="d-grid">
                        <!-- <input type="hidden" name="oculto" value="1"> -->
                        <input type="submit" class="btn btn-primary" value="Add">
                    </div>
                </form>
            </div>
    </section> <br>
    <section>        
              <div class="">
                  table of coaches 
                  <table class="table">
                      <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">Title</th>
                            <th scope="col">subtitle</th>
                         
                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                                foreach($query as $data){ 
                     ?>
                          <tr>
                              <td scope="row"><?php echo $data['categoryid']; ?></td>
                              <td><?php echo $data['title']; ?></td>
                              <td><?php echo $data['subtitle']; ?></td>
                             
                              <td>
                              <a class="text-success" href="editcategory.php?id=<?php echo $data['categoryid']; ?>"><i class="bi bi-pencil-square"></i></a>
                              <a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="editcategory.php?id=<?php echo $data['categoryid']; ?>"> <i class="bi bi-trash"></i></a>
                            </td>
                 
                             
                           
                          <?php 
                                }
                            ?>
                      </tbody>
                  </table>
              </div>
    </section>
</body>
</html>