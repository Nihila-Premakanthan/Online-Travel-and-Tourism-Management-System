<?php
//database conection
include 'connection.php';

//set file
if (isset($_POST['submit'])) { // Data retreival


      //initialization of variables
      $fname = $_POST["Full_Name"];
      $cno = $_POST["Contact_Number"];
      $email = $_POST["Email_Address"];
      $message = $_POST["message"];

      

                   
        $sql="INSERT INTO contactus(full_name,contact_no,email,message) VALUES ('$fname','$cno','$email', '$message')";
        if (mysqli_query($conn,$sql)){
                  
          echo '<script>
          alert("Thank you for your feedback. We will get back to you soon.");
          window.location="contactus.php";
          </script>';
         }
        else{
              echo'<script>
              alert("please enter again");
              window.location="contactus.php";
              </script>';
        }

      }



      

      




?>