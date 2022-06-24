<?php

 include_once '../connect/connect.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $requete = "SELECT * FROM `courses` where courseid =$id";
    $query = mysqli_query($con,$requete);
 
       
    }else{
         header('Location: coursesform.php?mensaje=eroor');
        exit();
    }
?>
<div class="card-header">
                  edit course

                </div> 
                <?php 
                foreach ($query as $paque){
                    
                    ?>
                <form action="editcourse2.php?id=<?php echo $paque['courseid']; ?>" method="POST" class="p-4">
                <input type="hidden" name="id" value="<?php  echo $paque['courseid'];?>">
                <div class="mb-3">
                        <label class="form-label" >categoryid</label>
                        <input type="text" class="" name="categoryid" value="<?php echo $paque['categoryid']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >title</label>
                        <input type="text" class="" name="title" value="<?php echo $paque['title']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" >Description</label>
                        <input type="text" class="" name="description" value="<?php echo $paque['description']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >teacher</label>
                        <input type="text" class="" name="teacher" value="<?php echo $paque['teacher']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >link</label>
                        <input type="text" class="" name="link" value="<?php echo $paque['link']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >image</label>
                        <input type="text"  name="picture"  id="7a" class=""  value="<?php echo $paque['image']; ?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >price</label>
                        <input type="text"  name="price"  id="7a" class="" value="<?php echo $paque['price']; ?>"  >
                    </div>
                   
                    
                    
                    </div>
                    <div class="d-grid">
                        
                        <input onclick="return confirm('are you sure you wanna edit this row?');" type="submit" class="btn btn-primary" name="edit" value="edit">
                    </div>
                    
                </form>
            </div>
            <?php }; ?>
        </div>