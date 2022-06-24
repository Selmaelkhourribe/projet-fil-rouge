<?php  if(isset($_POST['edit'])){

$id = $_POST['courseid'];
$categoryid = $_POST['categoryid'];
$title = $_POST['title'];
$description = $_POST['description'];
$teacher = $_POST['teacher'];
$link = $_POST['link'];
$price = $_POST['price'];
$pic = $_POST['picture'];

$requete = "UPDATE `courses` SET `categoryid`='$categoryid',`title`='$title',
`description`='$description',`teacher`='$teacher',`link`='$link',`price`='$price',`picture`='$pic', WHERE `courseid`='$id'";
$query = mysqli_query($con,$requete);

if ($query === TRUE) {
    header('Location: coursesform.php?message=register');
} else {
    // header('Location: coursesform.php?message=error');
    // exit();
}


}
?>