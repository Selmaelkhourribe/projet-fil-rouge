<?php

include_once '../connect/connect.php';

$id = $_POST['courseid'];
$categoryid = $_POST['categoryid'];
$title = $_POST['title'];
$description = $_POST['description'];
$teacher = $_POST['teacher'];
$link = $_POST['link'];
$price = $_POST['price'];
$pic = $_POST['picture'];


$requete = ("INSERT INTO `courses`(`categoryid`, `title`, `description`, `teacher`, `link`,`price`,`picture`) VALUES
('$categoryid','$title','$description','$teacher','$link','$price','$pic')");
$query = mysqli_query($con,$requete);


if ($query === TRUE) {
    header('Location: coursesform.php?mensaje=registrado');
} else {
    header('Location: coursesesform.php?mensaje=error');
    exit();
}
