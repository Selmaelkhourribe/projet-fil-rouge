<?php
include_once '../connect/connect.php';

if(isset($_POST['email']) && isset($_POST['password'])){

  

    function validate($data){

      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    
    
      $sql="SELECT * FROM `clients` WHERE email='$email' AND password='$password'";
      $result=mysqli_query($con,$sql);
      
      if(mysqli_num_rows($result) === 1){

       $row=mysqli_fetch_assoc($result);

       if($row['email']===$email && $row['password']===$password){
        session_start();
      

       $_SESSION['email']=$row['email'];
       $_SESSION['fname']=$row['fname'];
       $_SESSION['lname']=$row['lname'];
       $_SESSION['password']=$row['password'];
       $_SESSION['username']=$row['username'];

       $_SESSION['Number']=$row['Number'];
       $_SESSION['Country']=$row['Country'];
       $_SESSION['age']=$row['age'];
   

       
       
       header("location:../index.php");
      }else{
        header("location:login.php?error=incorrect in password");
        
      }
      

    }
    else{
        header("location:login.php?error= your email or password is not valid");
      }
    }

    ?>



<?php include 'navauth.php' ?>
<body>
  
    <div id="all" class="container p-5 d-flex">
        <br>
            <div class=" flex-fill ">
                
                <h2> LOGIN To Your Account </h2><br>
                <form class="container" action="login.php" method="POST">
                    <label for="email">Email adress</label>
                    <input class="inpu" type="email" name="email" size="30"  required value="" placeholder="Email Adress">
                    <br><br>
                    <label for="Password">password</label>
                    <input type="password" class="inpu" size="30" name="password" required value="" placeholder="Password">
                    <br><br>
                    <input  class="radio" type="radio">Remember me 
                    
                    <input type="submit" id="buttsubmit" value="LOGIN" name="submit" >
                </form>
                <p>register here if you re not </p><button><a href="registration.php">register</a></button><br>
            </div>
            <div class="flex-fill">
                <img src="" alt="" style="width:80%;">
            </div>
        
    </div>
    </form>
</body>