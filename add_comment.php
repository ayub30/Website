<?php include("connection.php");


if ($_SERVER['REQUEST_METHOD']=='POST') {

    $entry_id=$_POST["entry_id"];
    $commenter_name=$_POST['commenter_name'];
    $comment_text=$_POST['comment_text'];

    $sql="INSERT INTO comments (entry_id,commenter_name,comment_text) VALUES ($entry_id,'$commenter_name', '$comment_text')";

    if ($con->query($sql)===TRUE) {
        header("Location: viewBlog.php");
        exit();
    }

    else {
        echo "Error: ". $sql . "<br>". mysqli_error($con);
    }
}

mysqli_close($con);

?>