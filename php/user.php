<!DOCTYPE html>    
<html>    
<head>    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" type = "text/css" href="../css/homestyles.css">
    <link rel="stylesheet" type = "text/css" href="../css/loginstyles.css">    
</head>    
<body> 
<header class = "header">
        <div class = "inner_header">
            <h1 style = "color: #D4550C;">Paradise Found Here</h1>
        </div>
</header>

<div class="wrapper" align = "center">
    <h1>USER DETAILS</h1>   
       <div class = "textbox">
       <form action="UserDetails.php" method="POST">    
        <input class="input" type="text" name="Name" id="Uname" placeholder="Full name">    
        <br><br>    
            
        <input class="input" type="text" name="Address" id="Address" placeholder="Address">
        <br><br>
                
        <input class="input" type="date" name = "DOB" id="DOB" name="birthday">
        <br><br>
        <input class="input" type="text" name="NIC" id="Pass"placeholder="NIC">    
        <br><br>  
        <input class="input" type="Number" name="Contact_Number" id="Contact_Number"placeholder="Contact Number " >    
        <br><br>
            
        <input class="input" type="Text" name="Email" id="Email"placeholder="Email " >  
        <br><br>
        </div>          
        <input type="submit" value="Register" class = "button"></input><br><br>         
    </form>     
</div> 
      
</body>    
</html>