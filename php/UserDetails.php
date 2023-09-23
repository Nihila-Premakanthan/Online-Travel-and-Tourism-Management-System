<?php


$Name = $_POST['Name'];
$Address = $_POST['Address'];
$DOB = $_POST['DOB'];
$NIC = $_POST['NIC'];
$Contact_Number = $_POST['Contact_Number'];
$Email = $_POST['Email'];

if(!empty($Name) || !empty($Address) || !empty($DOB) || !empty($NIC) || !empty($Contact_Number) || !empty($Email))

{
    //$host = "localhost";
    //$dbusername = "root";
    //$dbpassword = "";
    //$dbname = "user";

    //creating a connection

    $conn = new mysqli("localhost","root","","ttm");

    if (mysqli_connect_error()) 
    {
        die('Connection Error('.mysqli_connect_errorno().')'. mysqli_connect_error()) ;
    }
    else
    {
        $SELECT = "SELECT Email FROM user WHERE Email = ? Limit 1" ;
        $INSERT = "INSERT INTO  user (Name, Address, NIC, Contact_Number, Email, DOB) values (?,?,?,?,?,?)" ;

        //Prepare Statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s" , $Email);
        $stmt->execute();
        $stmt->bind_result($Email);
        $stmt->store_result();
        $rnum = $stmt->num_rows ;

        if ($rnum == 0)
        {
            $stmt -> close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssiss", $Name, $Address, $NIC, $Contact_Number, $Email, $DOB);
            $stmt->execute();

            echo "User Details inserted successfully";
            header('Location: signup.php'); 
            
        }
        else
        {
            echo "This email is already used to register." ;
        }

        $stmt->close();
        $conn->close();

    }
}
else
{
    echo "All fields are required" ;
    die();
}


?>