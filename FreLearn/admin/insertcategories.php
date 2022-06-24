
<?php

include_once '../connect/connect.php';

$id = $_POST['categoryid'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];


$requete = ("INSERT INTO `categories`(`title`, `subtitle`) VALUES ('$title','$subtitle')");

$query = mysqli_query($con,$requete);
if ($query === TRUE) {
    header('Location: categoriesform.php?mensaje=registrado');
} else {
    header('Location: categoriesform.php?mensaje=error');
    exit();
}

?>
