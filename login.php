<?php 



	include("connection.php");
	include("functions.php");

	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] == $password)
					{
                        session_start();
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: addPost.html");
						die;
					}
				}
			}
			
			$error = "wrong username or password!";
		}else
		{
			$error = "invalid username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body class="container">
<div class="Login">
    <h1>Login</h1>
	<?php
	if(isset($error))
	{
		echo '<span class ="error_msg">'.$error.'</span>';
	}

	?>
    <form method="post">
      
        <input type="text" name="user_name">
        <span></span>
        <label>Username</label><br>
      
      
        <input type="password" name="password">
        <span></span>
        <label>Password</label>
        <br>
        <input type="submit" id="button1">
      
    </form>
  </div>
</body>
</html>