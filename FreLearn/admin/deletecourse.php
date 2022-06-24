<?php 
    if(!isset($_GET['id'])){
        header('Location: coursesform.php?mensaje=errormakansh');
        exit();
    }

    include '../connect/connect.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM courses where courseid='$id'";
    $query = mysqli_query($con,$sql);
    if ($query === TRUE) {
        header('Location: coursesform.php?mensaje=deleted');
    } else {
        header('Location: coursesform.php?mensaje=error');
    }
 
    
?>