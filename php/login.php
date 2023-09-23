<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'ttm';


$connect = mysqli_connect('localhost','root','','ttm');

//checking the connection
if(mysqli_connect_errno())
{
	die('Database is not connected'.mysqli_connect_error());
}

?> 


<?php

//check for form submission
if(isset($_POST['LOGIN']))
{

       $errors = array();
       //check if username and password entered

   if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 )

     {
          $errors[] = 'username is missing or invalid';

     }

   if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 )

     {
          $errors[] = 'Password is missing or invalid';

     }

      // check if there are any errors in the froms

     if (empty($errors))
     {

         //save usernames and password into varibales
         $username = mysqli_real_escape_string($connect,$_POST['email']);
         $password = mysqli_real_escape_string($connect,$_POST['password']);

         //prepare database query
         $query = "SELECT * FROM log Where email = '{$username}' AND password = '{$password}' LIMIT 1";
         //$query2 = "SELECT * FROM admin Where username = '{$username}' AND Password = '{$password}' LIMIT 1";
         

         $result_set = mysqli_query($connect,$query);
         //$result_set_2 = mysqli_query($connect,$query2);

          //User check
          if ($result_set)
          {
            //Query succesful

                 if(mysqli_num_rows($result_set) == 1)//is found a user ?
                {
                     //valid user found

                  //redirect to userhome page
                  header('Location: localbooking.php');

                }

                
                else

                {

                $errors[] = 'invalid user / password';

                }

        }
        //Admin check
        

         

  }

}


?>

<!DOCTYPE html>
 <html>

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page</title>
	<link rel="stylesheet" type = "text/css" href="../css/homestyles.css">
	<link rel="stylesheet" type = "text/css" href="../css/loginstyles.css">    	
</head>
<body>
	<header class = "header">
	<div class = "inner_header">
	<form action="login.php" method="post">
		<?php if(isset($errors) && !empty($errors))
{
echo '<p id="erro">Invalid username / Password</p>';
}
?>
        <h1 style = "color: #D4550C;">Paradise Found Here</h1>
    </div>
	</header>
	<div class = "wrapper" align = "center">
		<h1>LOGIN</h1>
			<div class = "textbox">
			<input class="input" name="email" type="text" placeholder="Username"><br><br>
			<input class="input" name="password" type="password" placeholder="Password"></div><br><br>
			<input type="submit" name="LOGIN" value="LOGIN" class = "button">
			
			
		</form>	
	<div class="bottom-text">
	        <input type="checkbox" name="remember" checked="checked"> Remember me<br><br>
			<a href="forgotpw.php">Forgot password ?</a>
	</div>
</div>	
</body>
</html>