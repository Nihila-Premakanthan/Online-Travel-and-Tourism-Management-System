<?php
include "connection.php";
?>

<?php
 include "connection.php";   
 $id = $_GET['updateid'];
 
    $readTable="SELECT * FROM `contactus` WHERE id = '$id'";

        $readData = mysqli_query($conn,$readTable);
        $row = mysqli_fetch_assoc($readData);
        
                                
            $fname = $row["full_name"];
            $cno = $row["contact_no"];
            $email = $row["email"];
            $message = $row["message"];

            
        
?>
    <?php
    if (isset($_POST['submit'])) { // Data retreival


        //initialization of variables
        $message = $_POST["message"];
    
    
    $sql = "UPDATE `contactus` SET message = '$message' WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        echo '<script>
                alert("Updated Successfully");
                window.location="adminContact.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Updated was not successfull");
                window.location="adminContact.php";
            </script>';
    }
    }
    ?> 
     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text/css" href="../css/homestyles.css">
	<link rel="stylesheet" type = "text/css" href="../css/loginstyles.css">  
    <title>Document</title>
</head>
<body>
    <div class = "textbox" align = "center">
        <form method = "post" action = "">
            <h5>Full Name: </h5>
            <input type = "text" class="input" id = "fullName" name = "Full_Name" value = "<?php echo $fname;?>"><br><br>
            <h5>Contact Number:</h5>
            <input type = "text" class="input" id = "contact" name = "Contact_Number" value = "<?php echo $cno;?>"><br><br>
            <h5>Email Address: </h5>
            <input type = "email" class="input" id = "email" name = "Email_Address" value = "<?php echo $email;?>"><br><br>
            <h5>Your Message: </h5>
            <input type = "text" class = "input" id = "message" name = "message"  style = "width: 200px; height: 50px" value = "<?php echo $message;?>"><br><br>
            <button name = "submit" class = "button">UPDATE</button>
        </form>
    </div>
</body>
</html>