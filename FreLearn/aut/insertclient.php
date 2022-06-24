<?php
    include_once '../connect/connect.php';

    if(isset($_POST['submit'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $username = $_POST['username'];
      $number = $_POST['Number'];
      $email = $_POST['email'];
      $country = $_POST['country'];
      $age = $_POST['age'];
      $password = $_POST['password'];

    
      $Dup_Email = mysqli_query($con, "SELECT * FROM `clients` WHERE email = '$email'");
      $Dup_username = mysqli_query($con, "SELECT * FROM `clients` WHERE username = '$username' ");

      if(mysqli_num_rows($Dup_Email)){
        echo"
        <script>
        alert('This email is already taken');
        window.location.href= 'registration.php';
        </script>
        ";
      }elseif(mysqli_num_rows($Dup_username)){
        echo"
        <script>
        alert('This username is already taken');
        window.location.href= 'registration.php';
        </script>
        ";
      }
      else{
       $requet = ("INSERT INTO `clients`( `fname`, `lname`, `username`, `email`, `num`, `age`, `country`, `password`)
        VALUES  ('$fname','$lname','$username','$email','$number','$age','$country','$password')");
        
        $query = mysqli_query($con,$requet);
         if ($query === TRUE) {
             header('Location: login.php?mensaje=registrado');
            echo"sucessful";
         } else {
             header('Location: registration.php?mensaje=error');
            echo'error';
             exit();
         }
         
       
        // echo"
        // <script>
        // alert('registration succesfully');
        // window.location.href= 'registration.php';
        // </script>
        // ";
        // exit();

      // }
    
   
     
      }
    }
  
    ?>