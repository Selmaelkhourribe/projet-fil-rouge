<?php
include_once '../connect/connect.php';
?>

<body style="background-color:black; color:white;">
    <div class="container" id="allsignup">
        
        <form class="container" action="insertclient.php" method="post"  >
            <h2> Registration </h2>
            <!-- <label for="">Name</label> -->
            <input type="text" class="inpu"  name="fname" placeholder="Name" ></input> 
            <br><br>
            <!-- <label for="">lname</label> -->
            <input type="text" class="inpu" name="lname"  placeholder="lname"></input>
            <br><br>
            <!-- <label for="">username</label> -->
            <input type="text" class="inpu" name="username" required value=""  placeholder="username"></input>
            <br><br>
            <!-- <label for="">Number</label> -->
            <input type="num" name="Number" placeholder="Number" ></input>
            <br><br>
            <!-- <label for="">email</label>            -->
            <input type="email" name="email" required value=""  placeholder="email"></input>
            <br><br>
            <!-- <label for="">Country</label>            -->
            <input type="text" name="country"  placeholder="Country"></input>
            <br><br>
            <!-- <label for="">age</label> -->
            <input type="number" name="age"  placeholder="Age"></input>           
            <br><br>
            <!-- <label for="">Cpassword</label> -->
            <input type="password" name="password" required value=""  placeholder="password"></input>
            <br>
            <input type="submit" value="signup" id="signupbutt" name="submit">

        </form>
        <h3>you already have an account </h3>
        <a href="login.php">login</a>
    </div>