<?php 
    if(!isset($_GET['id'])){
        header('Location: clients.php?mensaje=errormakansh');
        exit();
    }

    include '../connect/connect.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM clients where id='$id'";
    $query = mysqli_query($con,$sql);
    if ($query === TRUE) {
        header('Location: clients.php?mensaje=deleted');
    } else {
        header('Location: client.php?mensaje=error');
    }
 
    
?>