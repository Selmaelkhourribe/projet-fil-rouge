<?php 
    include_once '../connect/connect.php';
    $requete = "SELECT * FROM `courses`" ;
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
                  courses
                </div>
                <form action="insertcourses.php" method="POST" class="p-4">
                <div class="mb-3">
                        <label class="form-label" >categoryid</label>
                        <input type="text" class="" name="categoryid">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >title</label>
                        <input type="text" class="" name="title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" >Description</label>
                        <input type="text" class="" name="description">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >teacher</label>
                        <input type="text" class="" name="teacher">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >link</label>
                        <input type="text" class="" name="link">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >image</label>
                        <input type="text"  name="picture"  id="7a" class=""   >
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >price</label>
                        <input type="text"  name="price"  id="7a" class=""   >
                    </div>
                    <div class="d-grid">
                        <!-- <input type="hidden" name="oculto" value="1"> -->
                        <input type="submit" class="" value="Add">
                    </div>
                </form>
            </div>
    </section> 
    <section>        
              <div class="">
                 courses
                  <table class="table ">
                      <thead>
                          <tr>
                          <th scope="col">courseid</th>
                            <th scope="col">categoryid</th>
                            <th scope="col">title</th>
                            <th scope="col">desciption</th>
                            <th scope="col">teacher</th>
                            <th scope="col">link</th>
                            <th scope="col "colspane="2">price</th>
                            <th scope="col">image</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                                foreach($query as $data){ 
                     ?>
                          <tr>
                              <td scope="row"><?php echo $data['courseid']; ?></td>
                              <td><?php echo $data['categoryid']; ?></td>
                              <td><?php echo $data['title']; ?></td>
                              <td><?php echo $data['description']; ?></td>
                              <td><?php echo $data['teacher']; ?></td>
                              <td><?php echo $data['link']; ?></td>
                              <td><?php echo $data['price']; ?></td>
                              <td><?php echo $data['picture']; ?></td>
                              
                              <td>
                              <a class="text-success" href="editcourse.php?id=<?php echo $data['courseid']; ?>"><i class="bi bi-pencil-square"></i></a>
                              <a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="deletecourse.php?id=<?php echo $data['courseid']; ?>"> <i class="bi bi-trash"></i></a>
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
    
