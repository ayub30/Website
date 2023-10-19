<?php
include("connection.php");

$sql = "SELECT * FROM blog_entries";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    
    $blog_entries = array();
    while ($row = $result->fetch_assoc()) {
        $blog_entries[] = $row;
    }
    
    
    usort($blog_entries, function($x, $y) {
        return strtotime($y["reg_date"]) - strtotime($x["reg_date"]);
    });
    
   
    foreach ($blog_entries as $row) {
        echo "<div class='blog-post'>";
        echo "<h2>" . $row["Title"] . "</h2>";
        echo "<p>" . $row["Blog"] . "</p>";
        echo "<p class='blog-date'>" . $row["reg_date"] . "</p>";
        
        echo "<div class='comments-section'>";
        echo "<h3>Comments</h3>";
        
        $entry_id = $row["id"];
        $comments = "SELECT * FROM comments WHERE entry_id = $entry_id";
        $comments_result = mysqli_query($con, $comments);

        if ($comments_result->num_rows > 0) {
            while ($comment_row = $comments_result->fetch_assoc()) {
                echo "<div class='comment'>";
                echo "<p>" . $comment_row["commenter_name"] . "</p>";
                echo "<p>" . $comment_row["comment_text"] . "</p>";
                echo "<p class='comment-date'>" . $comment_row["comment_date"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No comments yet.</p>";
        }
        
        echo "</div>"; 
        
        
        echo "<form action='add_comment.php' method='post' class='comment-form'>";
        echo "<input type='hidden' name='entry_id' value='$entry_id'>";
        echo "<label>Name:</label><br>";
        echo "<input type='text' name='commenter_name' id='text'><br>";
        echo "<label>Comment:</label><br>";
        echo "<textarea name='comment_text'></textarea><br>";
        echo "<input type='submit' value='Submit' id='submit'>";
        echo "</form>";
        
        echo "</div>";
    }
} else {
    echo "0 results";
}

$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="viewBlog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Blog</title>
</head>

<body>

</body>

</html>