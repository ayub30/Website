<?php
include("connection.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  
  $Title = $_POST['Title'];
  $Blog = $_POST['Blog'];

  $sql = "INSERT INTO blog_entries (Title, Blog) VALUES ('$Title', '$Blog')";

  if ($con->query($sql)===TRUE) {
    
    header("Location: viewBlog.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}

mysqli_close($con);

?>